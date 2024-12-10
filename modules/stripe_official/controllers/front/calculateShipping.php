<?php
/**
 * Copyright (c) since 2010 Stripe, Inc. (https://stripe.com)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    Stripe <https://support.stripe.com/contact/email>
 * @copyright Since 2010 Stripe, Inc.
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

use PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException;
use StripeOfficial\Classes\StripeProcessLogger;

if (!defined('_PS_VERSION_')) {
    exit;
}

class stripe_officialCalculateShippingModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws OrderException
     */
    public function postProcess()
    {
        $values = @Tools::file_get_contents('php://input');
        $content = json_decode($values, true);

        $shippingAddress = $content['shippingAddress'];

        if (Context::getContext()->cart->id) {
            $cart = new Cart(Context::getContext()->cart->id);
        }

        $idProductAttribute = null;
        if ($content['expressCheckoutType'] === 'product') {
            if ($content['idProductAttribute']) {
                $idProductAttribute = $content['idProductAttribute'];
            }

            $cart = $this->createPrestashopCart(Context::getContext()->customer);
            $this->createPrestashopCartProduct($content, $cart, $idProductAttribute);
        }

        StripeProcessLogger::logInfo('CalculateShipping - content => ' . json_encode($content), 'calculateShipping', Context::getContext()->cart->id);

        $countryId = (int) Country::getByIso($shippingAddress['country'], true);

        if (!$countryId) {
            echo json_encode(['error' => true, 'message' => 'Shipping country unavailable']);
            exit;
        }

        $idZone = Country::getIdZone($countryId);

        $discountDetails = $this->checkDiscountCoupon($cart);

        $carriers = Carrier::getCarriersForOrder($idZone, null, $cart);

        if ($discountDetails['free_shipping']) {
            foreach ($carriers as &$carrier) {
                $carrier['is_free'] = true;
                $carrier['shipping_cost'] = 0;
            }
        }

        StripeProcessLogger::logInfo('Discount details => ' . json_encode($discountDetails), 'calculateShipping', $cart->id);

        echo json_encode(['carriers' => $carriers, 'cartId' => $cart->id, 'productAttributeId' => $idProductAttribute, 'discountDetails' => $discountDetails]);
        exit;
    }

    public static function createPrestashopCart($psCustomer)
    {
        $psCart = new Cart();
        $psCart->id_customer = $psCustomer->id;
        $psCart->secure_key = $psCustomer->secure_key;
        $psCart->id_guest = Context::getContext()->cookie->id_guest;
        $psCart->id_currency = Context::getContext()->cookie->id_currency;
        $psCart->id_shop_group = Context::getContext()->shop->id_shop_group;
        $psCart->id_lang = Context::getContext()->cookie->id_lang;
        $psCart->recyclable = 0;
        $psCart->gift = 0;
        $psCart->add();

        return $psCart;
    }

    public function createPrestashopCartProduct($expressParams, $cart, $idProductAttribute)
    {
        $customizationId = Customization::getOrderedCustomizations((int) $cart->id);

        $sql = new DbQuery();
        $sql->select('count(*)');
        $sql->from('cart_product', 'cp');
        $sql->where('id_cart = ' . (int) $cart->id);
        $result = Db::getInstance()->getValue($sql);

        if ($result == 0) {
            $result = $cart->updateQty(
                (int) $expressParams['productQuantity'] ?? '',
                (int) $expressParams['productId'],
                (int) $idProductAttribute,
                $customizationId,
                'up',
                $cart->id_address_delivery,
                new Shop($cart->id_shop),
                true,
                true
            );
            if (!$result) {
                throw new OrderException(sprintf('Product with id "%s" is out of stock.', $expressParams['productId']));
            }

            StripeProcessLogger::logInfo('Create Prestashop Cart Product => ' . json_encode($result), 'calculateShipping', $cart->id);
        }
    }

    public function checkDiscountCoupon($cart)
    {
        $cartRules = $cart->getCartRules();
        $discountDetails = [
            'free_shipping' => false,
            'percentage_discount' => 0,
            'fixed_discount' => 0,
            'total_discount' => 0,
        ];

        foreach ($cartRules as $cartRule) {
            // free shipping
            if ($cartRule['free_shipping']) {
                $discountDetails['free_shipping'] = true;
            }
            // percentage discount
            if ($cartRule['reduction_percent']) {
                $discountDetails['percentage_discount'] += $cartRule['reduction_percent'];
            }
            // fixed discount
            if ($cartRule['reduction_amount']) {
                $discountDetails['fixed_discount'] += $cartRule['reduction_amount'];
            }
        }

        // total discount
        $discountDetails['total_discount'] = $discountDetails['percentage_discount'] + $discountDetails['fixed_discount'];

        return $discountDetails;
    }
}
