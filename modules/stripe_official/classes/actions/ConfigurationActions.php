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

use Stripe_officialClasslib\Actions\DefaultActions;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ConfigurationActions extends DefaultActions
{
    const TEST_KEY_NEEDLE = '_test_';
    const LIVE_KEY_NEEDLE = '_live_';
    const MODULE_CLASS = 'Modules.Stripeofficial.ConfigurationActions';

    protected $context;
    protected $module;

    /*
        Input : 'source', 'response', 'context', 'module'
        Output : 'token', 'id_payment_intent', 'status', 'chargeId', 'amount'
     */
    public function registerKeys()
    {
        $this->module = $this->conveyor->module;
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();

        $this->registerApiKeys($shopGroupId, $shopId);

        return true;
    }

    protected function registerApiKeys($shopGroupId, $shopId)
    {
        $mode = (int) Tools::getValue(Stripe_official::MODE);
        Configuration::updateValue(Stripe_official::MODE, $mode, false, $shopGroupId, $shopId);

        $apiSecretKeyConstant = Stripe_official::getApiKeyConstantByModeAndType($mode, Stripe_official::TYPE_SECRET);
        $apiPublishableKeyConstant = Stripe_official::getApiKeyConstantByModeAndType($mode, Stripe_official::TYPE_PUBLISHABLE);

        $secretKey = trim(Tools::getValue($apiSecretKeyConstant));
        $publishableKey = trim(Tools::getValue($apiPublishableKeyConstant));

        if (!$this->correctKeysProvided($mode, $secretKey, $publishableKey)) {
            return;
        }

        $stripeAccount = $this->module->checkApiConnection($secretKey);

        if ($stripeAccount) {
            Configuration::updateValue($apiSecretKeyConstant, $secretKey, false, $shopGroupId, $shopId);
            Configuration::updateValue($apiPublishableKeyConstant, $publishableKey, false, $shopGroupId, $shopId);
            Configuration::updateValue(Stripe_official::ACCOUNT_ID, $stripeAccount->id, false, $shopGroupId, $shopId);
            $this->updateAccountIdInDB($stripeAccount->id);
        }
    }

    /*
       Input : 'source', 'response', 'context', 'module'
       Output : 'token', 'id_payment_intent', 'status', 'chargeId', 'amount'
    */
    public function registerCatchAndAuthorize()
    {
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();

        $separateAuthAndCapture = Tools::getValue('catchandauthorize') === 'on' ? 1 : 0;
        $catchStatus = Tools::getValue('order_status_select') ?: null;
        $expiredStatus = (int) Tools::getValue('capture_expired') ?: 0;

        Configuration::updateValue(Stripe_official::CATCHANDAUTHORIZE, $separateAuthAndCapture, false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::CAPTURE_STATUS, $catchStatus, false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::CAPTURE_EXPIRE, $expiredStatus, false, $shopGroupId, $shopId);
        if ($separateAuthAndCapture && (!$catchStatus || !$expiredStatus)) {
            $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Enable separate authorization and capture.', [], self::MODULE_CLASS) : $this->module->l('Enable separate authorization and capture.');
        }

        return true;
    }

    /*
        Input : 'status', 'id_payment_intent', 'token', 'paymentIntent'
        Output : 'source', 'secure_key', 'result'
    */
    public function registerOtherConfigurations()
    {
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();
        $neverCollectPostcode = 0;
        if (gettype(Tools::getValue('stripe_locations')) === 'boolean') {
            $locations = Tools::getValue('stripe_locations');
        } else {
            $locations = implode(', ', Tools::getValue('stripe_locations') === 0 ? null : Tools::getValue('stripe_locations'));
        }
        Configuration::updateValue(Stripe_official::POSTCODE, $neverCollectPostcode, false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::ENABLE_PAYMENT_ELEMENTS, (int) Tools::getValue('payment_element'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::THEME, Tools::getValue('stripe_theme'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::POSITION, Tools::getValue('stripe_position'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::LAYOUT, Tools::getValue('stripe_layout'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::ENABLE_EXPRESS_CHECKOUT, (int) Tools::getValue('express_checkout'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::EXPRESS_CHECKOUT_LOCATIONS, $locations, false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::APPLE_PAY_BUTTON_THEME, Tools::getValue('apple_pay_button_theme'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::APPLE_PAY_BUTTON_TYPE, Tools::getValue('apple_pay_button_type'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::GOOGLE_PAY_BUTTON_THEME, Tools::getValue('google_pay_button_theme'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::GOOGLE_PAY_BUTTON_TYPE, Tools::getValue('google_pay_button_type'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::PAY_PAL_BUTTON_THEME, Tools::getValue('pay_pal_button_theme'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::PAY_PAL_BUTTON_TYPE, Tools::getValue('pay_pal_button_type'), false, $shopGroupId, $shopId);
        Configuration::updateValue(Stripe_official::ORDER_FLOW, (int) Tools::getValue('stripe_order_flow'), false, $shopGroupId, $shopId);

        if (!count($this->module->errors)) {
            $this->module->success = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Settings updated successfully.', [], self::MODULE_CLASS) : $this->module->l('Settings updated successfully.');
        }

        return true;
    }

    public function registerApplePayDomain()
    {
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();
        $mode = (int) Configuration::get(Stripe_official::MODE, null, $shopGroupId, $shopId);
        $secretKey = Stripe_official::getSecretKey($shopGroupId, $shopId);
        if ($mode === Stripe_official::MODE_LIVE && $secretKey) {
            $this->module->addAppleDomainAssociation($secretKey);
        }

        return true;
    }

    public function registerWebhookSignature()
    {
        if (Stripe_official::isWellConfigured()) {
            $stripeWebhook = new StripeWebhook();
            $stripeWebhook->registerWebhook();
        }

        return true;
    }

    private function correctKeysProvided($mode, $secretKey, $publishableKey)
    {
        if (!$secretKey || !$publishableKey) {
            $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Client ID and Secret Key fields are mandatory', [], self::MODULE_CLASS) : $this->module->l('Client ID and Secret Key fields are mandatory');

            return false;
        }
        $needle = $this->getKeyNeedleByMode($mode);
        if (false === strpos($secretKey, $needle) || false === strpos($publishableKey, $needle)) {
            switch ($mode) {
                case Stripe_official::MODE_LIVE:
                    $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Test API keys provided instead of live API keys.', [], self::MODULE_CLASS) : $this->module->l('Test API keys provided instead of live API keys.');
                    break;
                case Stripe_official::MODE_TEST:
                    $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Live API keys provided instead of test API keys.', [], self::MODULE_CLASS) : $this->module->l('Live API keys provided instead of test API keys.');
                    break;
            }

            return false;
        }

        $needlesk = 'sk_';
        $needlepk = 'pk_';
        $needlerk = 'rk_';

        if (false === strpos($publishableKey, $needlepk)) {
            $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Secret key provided instead of Publishable key.', [], self::MODULE_CLASS) : $this->module->l('Secret key provided instead of Publishable key.');
        }

        if (false === strpos($secretKey, $needlesk) && false === strpos($secretKey, $needlerk)) {
            $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('Publishable key provided instead of secret key.', [], self::MODULE_CLASS) : $this->module->l('Publishable key provided instead of secret key.');

            return false;
        }

        if (!$this->module->checkApiConnection($secretKey)) {
            $this->module->errors[] = self::useNewTranslationSystem() ? $this->module->getTranslator()->trans('The Secret key provided is incorrect.', [], self::MODULE_CLASS) : $this->module->l('The Secret key provided is incorrect.');

            return false;
        }

        return true;
    }

    private function getKeyNeedleByMode($mode)
    {
        $needle = '';
        switch ($mode) {
            case Stripe_official::MODE_LIVE:
                $needle = self::LIVE_KEY_NEEDLE;
                break;
            case Stripe_official::MODE_TEST:
                $needle = self::TEST_KEY_NEEDLE;
                break;
        }

        return $needle;
    }

    private function updateAccountIdInDB($accountId)
    {
        if ($accountId) {
            $stripeAccountDetails = new StripeAccountDetails();
            $stripeAccountDetails->getByIdStripeAccount($accountId);
            if (!$stripeAccountDetails->id_stripe_account) {
                $stripeAccountDetails->setIdStripeAccount($accountId);
                $stripeAccountDetails->save();
            }
        }
    }

    public static function useNewTranslationSystem()
    {
        if (version_compare(_PS_VERSION_, '1.7.6', '>=')) {
            return true;
        }

        return false;
    }
}
