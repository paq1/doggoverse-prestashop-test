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
if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminStripe_officialPaymentIntentController extends ModuleAdminController
{
    /** @var bool Active bootstrap for Prestashop 1.6 */
    public $bootstrap = true;

    /** @var Module Instance of your module automatically set by ModuleAdminController */
    public $module;

    /** @var string Associated object class name */
    public $className = StripeEvent::class;

    /** @var string Associated table name */
    public $table = 'stripe_event';

    /** @var string|false Object identifier inside the associated table */
    public $identifier = 'id_payment_intent';

    /** @var string Default ORDER BY clause when is not defined */
    protected $_defaultOrderBy = 'id_stripe_event';

    /** @var bool List content lines are clickable if true */
    protected $list_no_link = true;

    public $multishop_context = 1;

    protected $actions = ['details'];
    const MODULE_CLASS = 'Modules.Stripeofficial.AdminStripe_officialPaymentIntent';

    /**
     * @see AdminController::__construct()
     */
    public function __construct()
    {
        parent::__construct();

        $this->_select = 'o.id_order, sp.id_cart, sp.id_payment_intent, sp.type, spi.status, o.reference';
        $this->_join =
            'INNER JOIN `' . _DB_PREFIX_ . 'stripe_payment` sp ON (a.id_payment_intent = sp.id_payment_intent AND sp.result > 0)
            INNER JOIN `' . _DB_PREFIX_ . 'stripe_payment_intent` spi ON (sp.id_payment_intent = spi.id_payment_intent)
            INNER JOIN `' . _DB_PREFIX_ . 'orders` o ON (sp.id_cart = o.id_cart)';

        $this->explicitSelect = true;

        $this->fields_list = [
            'id_order' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Order ID', [], self::MODULE_CLASS) : $this->module->l('Order ID', 'AdminStripe_officialPaymentIntentController')),
                'filter_key' => 'o!id_order',
                'orderby' => false,
            ],
            'id_cart' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Cart ID', [], self::MODULE_CLASS) : $this->module->l('Cart ID', 'AdminStripe_officialPaymentIntentController')),
                'filter_key' => 'sp!id_cart',
                'orderby' => false,
            ],
            'id_payment_intent' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Payment Intent', [], self::MODULE_CLASS) : $this->module->l('Payment Intent', 'AdminStripe_officialPaymentIntentController')),
                'filter_key' => 'sp!id_payment_intent',
                'orderby' => false,
            ],
            'type' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Payment Method', [], self::MODULE_CLASS) : $this->module->l('Payment Method', 'AdminStripe_officialPaymentIntentController')),
                'orderby' => false,
            ],
            'status' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Charge Status', [], self::MODULE_CLASS) : $this->module->l('Charge Status', 'AdminStripe_officialPaymentIntentController')),
                'filter_key' => 'spi!status',
                'orderby' => false,
            ],
            'reference' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Order Reference', [], self::MODULE_CLASS) : $this->module->l('Order Reference', 'AdminStripe_officialPaymentIntentController')),
                'orderby' => false,
            ],
        ];
    }

    /**
     * @see AdminController::initToolbar()
     */
    public function initToolbar()
    {
        parent::initToolbar();
        // Remove the add new item button
        unset($this->toolbar_btn['new']);
        unset($this->toolbar_btn['delete']);
    }

    /**
     * @throws PrestaShopException
     *
     * @see AdminController::initToolbar()
     */
    public function renderDetails()
    {
        $this->_select = null;
        $this->_join = null;
        $this->_group = null;
        $this->_filter = null;
        $this->_where = ' AND a.id_payment_intent = "' . pSQL(Tools::getValue('id_payment_intent')) . '"';
        $this->_orderBy = 'date_add';

        $this->actions = [];

        $this->list_simple_header = true;
        $this->explicitSelect = false;

        $this->fields_list = [
            'id_payment_intent' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Payment Intent', [], self::MODULE_CLASS) : $this->module->l('Payment Intent', 'AdminStripe_officialPaymentIntentController')),
            ],
            'status' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Event Status', [], self::MODULE_CLASS) : $this->module->l('Event Status', 'AdminStripe_officialPaymentIntentController')),
            ],
            'is_processed' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Processed', [], self::MODULE_CLASS) : $this->module->l('Processed', 'AdminStripe_officialPaymentIntentController')),
            ],
            'date_add' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Saving date', [], self::MODULE_CLASS) : $this->module->l('Saving date', 'AdminStripe_officialPaymentIntentController')),
                'align' => 'right',
                'class' => 'fixed-width-xs',
            ],
            'flow_type' => [
                'title' => (self::useNewTranslationSystem() ? $this->module->trans('Flow Type', [], self::MODULE_CLASS) : $this->module->l('Flow Type', 'AdminStripe_officialPaymentIntentController')),
            ],
        ];

        return $this->renderList();
    }

    public static function useNewTranslationSystem()
    {
        if (version_compare(_PS_VERSION_, '1.7.6', '>=')) {
            return true;
        }

        return false;
    }
}
