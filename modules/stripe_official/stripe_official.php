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

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;
use Stripe\Account;
use Stripe\PaymentIntent;
use Stripe\Stripe;

if (!defined('_PS_VERSION_')) {
    exit;
}
if (!defined('_PS_USE_MINIFY_JS_')) {
    define('_PS_USE_MINIFY_JS_', true);
}
require_once dirname(__FILE__) . '/vendor/autoload.php';

/**
 * Stripe official PrestaShop module main class extends payment class
 * Please note this module use _202 PrestaShop Classlib Project_ (202 classlib) a library developed by "202 ecommerce"
 * This library provide utils common features as DB installer, internal logger, chain of responsibility design pattern
 *
 * To let module compatible with Prestashop 1.6 please keep this following line commented in PrestaShop 1.6:
 * // use Stripe_officialClasslib\Install\ModuleInstaller;
 * // use Stripe_officialClasslib\Actions\ActionsHandler;
 * // use Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerExtension;
 *
 * Developers use declarative method to define objects, parameters, controllers... needed in this module
 */
class Stripe_official extends PaymentModule
{
    /**
     * Stripe Prestashop configuration
     * use Configuration::get(Stripe_official::CONST_NAME) to return a value
     */
    const KEY = 'STRIPE_KEY';
    const TEST_KEY = 'STRIPE_TEST_KEY';
    const PUBLISHABLE = 'STRIPE_PUBLISHABLE';
    const TEST_PUBLISHABLE = 'STRIPE_TEST_PUBLISHABLE';
    const CAPTURE_WAITING = 'STRIPE_CAPTURE_WAITING';
    const PAYMENT_WAITING = 'STRIPE_PAYMENT_WAITING';
    const SEPA_WAITING = 'STRIPE_SEPA_WAITING';
    const SEPA_DISPUTE = 'STRIPE_SEPA_DISPUTE';
    const OXXO_WAITING = 'STRIPE_OXXO_WAITING';
    const MODE = 'STRIPE_MODE';
    const MINIMUM_AMOUNT_3DS = 'STRIPE_MINIMUM_AMOUNT_3DS';
    const POSTCODE = 'STRIPE_POSTCODE';
    const CARDHOLDERNAME = 'STRIPE_CARDHOLDERNAME';
    const REINSURANCE = 'STRIPE_REINSURANCE';
    const VISA = 'STRIPE_PAYMENT_VISA';
    const MASTERCARD = 'STRIPE_PAYMENT_MASTERCARD';
    const AMERICAN_EXPRESS = 'STRIPE_PAYMENT_AMERICAN_EXPRESS';
    const CB = 'STRIPE_PAYMENT_CB';
    const DINERS_CLUB = 'STRIPE_PAYMENT_DINERS_CLUB';
    const UNION_PAY = 'STRIPE_PAYMENT_UNION_PAY';
    const JCB = 'STRIPE_PAYMENT_JCB';
    const DISCOVERS = 'STRIPE_PAYMENT_DISCOVERS';
    const ENABLE_IDEAL = 'STRIPE_ENABLE_IDEAL';
    const ENABLE_GIROPAY = 'STRIPE_ENABLE_GIROPAY';
    const ENABLE_BANCONTACT = 'STRIPE_ENABLE_BANCONTACT';
    const ENABLE_FPX = 'STRIPE_ENABLE_FPX';
    const ENABLE_EPS = 'STRIPE_ENABLE_EPS';
    const ENABLE_P24 = 'STRIPE_ENABLE_P24';
    const ENABLE_SEPA = 'STRIPE_ENABLE_SEPA';
    const ENABLE_ALIPAY = 'STRIPE_ENABLE_ALIPAY';
    const ENABLE_OXXO = 'STRIPE_ENABLE_OXXO';
    const ENABLE_APPLEPAY_GOOGLEPAY = 'STRIPE_ENABLE_APPLEPAY_GOOGLEPAY';
    const REFUND_ID = 'STRIPE_REFUND_ID';
    const REFUND_MODE = 'STRIPE_REFUND_MODE';
    const REFUND_AMOUNT = 'STRIPE_REFUND_AMOUNT';
    const PARTIAL_REFUND = 'STRIPE_PARTIAL_REFUND';
    const CATCHANDAUTHORIZE = 'STRIPE_CATCHANDAUTHORIZE';
    const CAPTURE_STATUS = 'STRIPE_CAPTURE_STATUS';
    const CAPTURE_EXPIRE = 'STRIPE_CAPTURE_EXPIRE';
    const WEBHOOK_SIGNATURE = 'STRIPE_WEBHOOK_SIGNATURE';
    const WEBHOOK_ID = 'STRIPE_WEBHOOK_ID';
    const ACCOUNT_ID = 'STRIPE_ACCOUNT_ID';
    const ENABLE_PAYMENT_ELEMENTS = 'STRIPE_ENABLE_PAYMENT_ELEMENTS';
    const ENABLE_KLARNA = 'STRIPE_ENABLE_KLARNA';
    const ENABLE_AFTERPAY = 'STRIPE_ENABLE_AFTERPAY';
    const ENABLE_AFFIRM = 'STRIPE_ENABLE_AFFIRM';
    const ENABLE_LINK = 'STRIPE_ENABLE_LINK';
    const THEME = 'STRIPE_THEME';
    const POSITION = 'STRIPE_POSITION';
    const LAYOUT = 'STRIPE_LAYOUT';
    const ENABLE_EXPRESS_CHECKOUT = 'STRIPE_ENABLE_EXPRESS_CHECKOUT';
    const EXPRESS_CHECKOUT_LOCATIONS = 'STRIPE_EXPRESS_CHECKOUT_LOCATIONS';
    const APPLE_PAY_BUTTON_THEME = 'STRIPE_APPLE_PAY_BUTTON_THEME';
    const APPLE_PAY_BUTTON_TYPE = 'STRIPE_APPLE_PAY_BUTTON_TYPE';
    const GOOGLE_PAY_BUTTON_THEME = 'STRIPE_GOOGLE_PAY_BUTTON_THEME';
    const GOOGLE_PAY_BUTTON_TYPE = 'STRIPE_GOOGLE_PAY_BUTTON_TYPE';
    const PAY_PAL_BUTTON_THEME = 'STRIPE_PAY_PAL_BUTTON_THEME';
    const PAY_PAL_BUTTON_TYPE = 'STRIPE_PAY_PAL_BUTTON_TYPE';
    const ORDER_FLOW = 'STRIPE_ORDER_FLOW';

    // const not used for inputs
    const TYPE_SECRET = 'type_secret';
    const TYPE_PUBLISHABLE = 'type_publishable';
    const MODE_LIVE = 0;
    const MODE_TEST = 1;
    const REFUND_MODE_PARTIAL = 0;
    const REFUND_MODE_FULL = 1;

    // payment method flows
    const PM_FLOW_REDIRECT = 'redirect';
    const PM_FLOW_IFRAME = 'iframe';
    // payment method names
    const PM_PAYMENT_ELEMENTS = 'stripe_payment_elements';
    const PM_CHECKOUT = 'stripe_checkout';
    const PM_EXPRESS_CHECKOUT = 'stripe_express_checkout';
    const PS_USE_MINIFY_JS = '1';
    const STRIPE_API_VERSION = '2022-08-01';
    const PS_MULTISHOP_FEATURE_ACTIVE = '0';
    const MODULE_MAIN_CLASS = 'Modules.Stripeofficial.Stripeofficial';

    /**
     * List of objectModel used in this Module
     *
     * @var array
     */
    public $objectModels = [
        'StripePayment',
        'StripePaymentIntent',
        'StripeCapture',
        'StripeCustomer',
        'StripeIdempotencyKey',
        'StripeEvent',
    ];

    /**
     * List of _202 classlib_ extentions
     *
     * @var array
     */
    public $extensions = [
        Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerExtension::class,
    ];

    /**
     * To be retrocompatible with PS 1.7, admin tab (controllers) are defined in moduleAdminControllers
     */
    public $moduleAdminControllers = [
        [
            'name' => [
                'en' => 'Logs',
                'fr' => 'Logs',
            ],
            'class_name' => 'AdminStripe_officialProcessLogger',
            'parent_class_name' => 'stripe_official',
            'visible' => false,
        ],
        [
            'name' => [
                'en' => 'Paiment Intent List',
                'fr' => 'Liste des intentions de paiement',
            ],
            'class_name' => 'AdminStripe_officialPaymentIntent',
            'parent_class_name' => 'stripe_official',
            'visible' => false,
        ],
    ];

    /**
     * List of ModuleFrontController used in this Module
     * Module::install() register it, after that you can edit it in BO (for rewrite if needed)
     *
     * @var array
     */
    public $controllers = [
        'orderFailure',
        'stripeCards',
    ];

    /**
     * List of hooks needed in this module
     * _202 classlib_ extentions will plugged automatically hooks
     *
     * @var array
     */
    public $hooks = [
        'header',
        'displayHeader',
        'orderConfirmation',
        'displayOrderConfirmation',
        'displayBackOfficeHeader',
        'displayAdminOrderTabOrder',
        'displayAdminOrderContentOrder',
        'displayAdminOrderTabLink',
        'displayAdminOrderTabContent',
        'displayAdminCartsView',
        'paymentOptions',
        'displayPaymentEU',
        'actionOrderStatusUpdate',
        'displayProductAdditionalInfo',
        'displayProductActions',
        'displayShoppingCart',
    ];

    /**
     * @var StripePaymentIntentService
     */
    private $stripePaymentIntentService;

    // Read the Stripe guide: https://stripe.com/payments/payment-methods-guide
    public static $paymentMethods = [
        self::PM_PAYMENT_ELEMENTS => [
            'name' => self::PM_PAYMENT_ELEMENTS,
            'flow' => self::PM_FLOW_IFRAME,
            'enable' => true,
            'catch_enable' => true,
            'display_in_back_office' => false,
        ],
        self::PM_CHECKOUT => [
            'name' => self::PM_CHECKOUT,
            'flow' => self::PM_FLOW_REDIRECT,
            'enable' => true,
            'catch_enable' => true,
            'display_in_back_office' => false,
        ],
        self::PM_EXPRESS_CHECKOUT => [
            'name' => self::PM_EXPRESS_CHECKOUT,
            'flow' => self::PM_FLOW_IFRAME,
            'enable' => true,
            'catch_enable' => true,
            'display_in_back_office' => false,
        ],
    ];

    public static $allowedPaymentFlows = [
        self::PM_PAYMENT_ELEMENTS,
        self::PM_CHECKOUT,
    ];

    public static $webhook_events = [
        \Stripe\Event::CHARGE_EXPIRED,
        \Stripe\Event::CHARGE_FAILED,
        \Stripe\Event::CHARGE_SUCCEEDED,
        \Stripe\Event::CHARGE_PENDING,
        \Stripe\Event::CHARGE_CAPTURED,
        \Stripe\Event::CHARGE_REFUNDED,
        \Stripe\Event::CHARGE_DISPUTE_CREATED,
        \Stripe\Event::PAYMENT_INTENT_REQUIRES_ACTION,
        \Stripe\Event::PAYMENT_INTENT_SUCCEEDED,
        \Stripe\Event::PAYMENT_INTENT_CANCELED,
    ];

    /* refund */
    protected $refund = 0;

    public $errors = [];

    public $warning = [];

    public $success;

    public $display;

    public $meta_title;

    public $button_label = [];

    public function __construct()
    {
        $this->name = 'stripe_official';
        $this->tab = 'payments_gateways';
        $this->version = '3.4.0';
        $this->author = 'Stripe';
        $this->bootstrap = true;
        $this->display = 'view';
        $this->module_key = 'bb21cb93bbac29159ef3af00bca52354';
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_,
        ];
        $this->currencies = true;

        /* curl check */
        if (is_callable('curl_init') === false) {
            if (self::useNewTranslationSystem()) {
                $translation = $this->trans('To be able to use this module, please activate cURL (PHP extension).', [], self::MODULE_MAIN_CLASS);
            } else {
                $translation = $this->l('To be able to use this module, please activate cURL (PHP extension).');
            }
        }

        parent::__construct();

        $this->button_label[self::PM_CHECKOUT] = self::useNewTranslationSystem() ? $this->trans('Pay online', [], self::MODULE_MAIN_CLASS) : $this->l('Pay online');
        $this->button_label[self::PM_PAYMENT_ELEMENTS] = self::useNewTranslationSystem() ? $this->trans('Pay online', [], self::MODULE_MAIN_CLASS) : $this->l('Pay online');

        $this->meta_title = self::useNewTranslationSystem() ? $this->trans('Stripe', [], self::MODULE_MAIN_CLASS) : $this->l('Stripe', $this->name);
        $this->displayName = self::useNewTranslationSystem() ? $this->trans('Stripe payment module', [], self::MODULE_MAIN_CLASS) : $this->l('Stripe payment module', $this->name);
        $this->description = self::useNewTranslationSystem() ? $this->trans('Start accepting stripe payments today, directly from your shop!', [], self::MODULE_MAIN_CLASS) : $this->l('Are you sure you want to uninstall?', $this->name);
        $this->confirmUninstall = self::useNewTranslationSystem() ? $this->trans('Are you sure you want to uninstall?', [], self::MODULE_MAIN_CLASS) : $this->l('Pay online', $this->name);

        require_once realpath(dirname(__FILE__) . '/smarty/plugins') . '/modifier.stripelreplace.php';

        /* Use a specific name to bypass an Order confirmation controller check */
        $bypassControllers = ['orderconfirmation', 'order-confirmation'];
        if (in_array(Tools::getValue('controller'), $bypassControllers)) {
            $this->displayName = self::useNewTranslationSystem() ? $this->trans('Payment by Stripe', [], self::MODULE_MAIN_CLASS) : $this->l('Payment by Stripe', $this->name);
        }
        // Do not call Stripe Instance if API keys are not already configured
        if (self::isWellConfigured()) {
            try {
                Stripe::setApiKey($this->getSecretKey());
                $this->setStripeAppInformation();
            } catch (\Stripe\Exception\ApiConnectionException $e) {
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                    'Fail to set API Key. Stripe SDK return error: ' . $e,
                    null,
                    null,
                    'Stripe_official - construct'
                );
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();
            }
        }
    }

    /**
     * Check if configuration is completed. If not, disabled frontend features.
     */
    public static function isWellConfigured()
    {
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();
        $publishableKey = self::getPublishableKey($shopGroupId, $shopId);
        $secretKey = self::getSecretKey($shopGroupId, $shopId);

        if ($publishableKey && $secretKey) {
            return true;
        }

        return false;
    }

    /**
     * install module depends _202 classlib_ to install hooks, objects models tables, admin controller, ...
     */
    public function install()
    {
        try {
            if (!parent::install()) {
                return false;
            }

            $installer = new Stripe_officialClasslib\Install\ModuleInstaller($this);
            $installer->installObjectModel('StripeAccountDetails');

            if (!$installer->install()) {
                PrestaShopLogger::addLog('our installer error', 3);

                return false;
            }

            $sql = 'SHOW KEYS FROM `' . _DB_PREFIX_ . "stripe_event` WHERE Key_name = 'ix_id_payment_intentstatus'";
            if (!Db::getInstance()->executeS($sql)) {
                $sql = 'SELECT MAX(id_stripe_event) AS id_stripe_event FROM `' . _DB_PREFIX_ . 'stripe_event` GROUP BY `id_payment_intent`, `status`';
                $duplicateRows = Db::getInstance()->executeS($sql);

                $idList = array_column($duplicateRows, 'id_stripe_event');

                if (!empty($idList)) {
                    $sql = 'DELETE FROM `' . _DB_PREFIX_ . 'stripe_event` WHERE id_stripe_event NOT IN (' . implode(',', $idList) . ');';
                    Db::getInstance()->execute($sql);
                }

                $sql = 'ALTER TABLE `' . _DB_PREFIX_ . 'stripe_event` ADD UNIQUE `ix_id_payment_intentstatus` (`id_payment_intent`, `status`);';
                Db::getInstance()->execute($sql);
            }
            $shopGroupId = Stripe_official::getShopGroupIdContext();
            $shopId = Stripe_official::getShopIdContext();

            // preset default values
            if (!Configuration::updateValue(self::MODE, 1, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::REFUND_MODE, 1, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::MINIMUM_AMOUNT_3DS, 50, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_IDEAL, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_GIROPAY, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_BANCONTACT, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_FPX, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_EPS, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_P24, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_SEPA, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_KLARNA, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_AFTERPAY, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_AFFIRM, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_LINK, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_ALIPAY, 0, false, $shopGroupId, $shopId)
                || !Configuration::updateValue(self::ENABLE_OXXO, 0, false, $shopGroupId, $shopId)) {
                return false;
            }

            if (!$this->installOrderState()) {
                return false;
            }

            /*
             * Clear both Smarty and Symfony cache.
             */
            Tools::clearAllCache();

            return true;
        } catch (Exception $e) {
            PrestaShopLogger::addLog('Stripe_official - install exception: ' . $e->getMessage() . ' - ' . $e->getTraceAsString(), 3);
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                $e->getMessage() . ' - ' . $e->getTraceAsString(),
                null,
                null,
                'Stripe_official - install'
            );
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

            return false;
        }
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        $id_product_attribute = null;
        if (isset($params['product'])) {
            $id_product_attribute = $params['product']['id_product_attribute'];
        }
        $this->context->smarty->assign([
            'id_product_attribute' => $id_product_attribute,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/product-page.tpl');
    }

    /**
     * install module depends _202 classlib_ to remove hooks, admin controller
     * please note objects models tables are NOT removed to keep payments data
     */
    public function uninstall()
    {
        $installer = new Stripe_officialClasslib\Install\ModuleInstaller($this);

        $result = parent::uninstall();
        $result &= $installer->uninstallModuleAdminControllers();
        $result &= $installer->uninstallConfiguration();

        /*
         * Clear both Smarty and Symfony cache.
         */
        Tools::clearAllCache();

        return $result
            && Configuration::deleteByName(self::MODE)
            && Configuration::deleteByName(self::REFUND_MODE)
            && Configuration::deleteByName(self::ENABLE_IDEAL)
            && Configuration::deleteByName(self::ENABLE_GIROPAY)
            && Configuration::deleteByName(self::ENABLE_BANCONTACT)
            && Configuration::deleteByName(self::ENABLE_FPX)
            && Configuration::deleteByName(self::ENABLE_EPS)
            && Configuration::deleteByName(self::ENABLE_P24)
            && Configuration::deleteByName(self::ENABLE_SEPA)
            && Configuration::deleteByName(self::ENABLE_KLARNA)
            && Configuration::deleteByName(self::ENABLE_AFTERPAY)
            && Configuration::deleteByName(self::ENABLE_AFFIRM)
            && Configuration::deleteByName(self::ENABLE_LINK)
            && Configuration::deleteByName(self::ENABLE_ALIPAY)
            && Configuration::deleteByName(self::ENABLE_OXXO);
    }

    /**
     * Reset module and clear cache
     */
    public function reset()
    {
        $installer = new Stripe_officialClasslib\Install\ModuleInstaller($this);

        $result = parent::uninstall();
        $result &= $installer->clearHookUsed();
        $result &= $installer->uninstallModuleAdminControllers();
        $result &= $installer->installAdminControllers();

        /*
         * Clear both Smarty and Symfony cache.
         */
        Tools::clearAllCache();

        return $result;
    }

    /**
     * Disable module and clear cache
     */
    public function disabled()
    {
        $module = Module::getInstanceByName('stripe_official');
        $module->disable(false);

        /*
         * Clear both Smarty and Symfony cache.
         */
        Tools::clearAllCache();
    }

    /**
     * Enable module and clear cache
     */
    public function enabled()
    {
        $module = Module::getInstanceByName('stripe_official');
        $module->enable(false);

        /*
         * Clear both Smarty and Symfony cache.
         */
        Tools::clearAllCache();
    }

    /**
     * Create order state
     *
     * @return bool
     */
    public function installOrderState()
    {
        /* Create Order State for Stripe */
        if (!Configuration::get(self::CAPTURE_WAITING)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::CAPTURE_WAITING)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('En attente de capture Stripe');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('A la espera de captura Stripe');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('Auf Festnahme Stripe warten');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('Wachten op opname van Stripe');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('In attesa di cattura Stripe');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('Waiting for Stripe capture');
                        break;
                }
            }
            $order_state->invoice = false;
            $order_state->send_email = false;
            $order_state->logable = true;
            $order_state->color = '#03befc';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::CAPTURE_WAITING, $order_state->id);
        }

        /* Create Order State for Stripe */
        if (!Configuration::get(self::SEPA_WAITING)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::SEPA_WAITING)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('En attente de paiement SEPA');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('Esperando pago SEPA');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('Warten auf SEPA-Zahlung');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('Wachten op SEPA-betaling');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('In attesa del pagamento SEPA');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('Waiting for SEPA payment');
                        break;
                }
            }
            $order_state->send_email = false;
            $order_state->hidden = false;
            $order_state->delivery = false;
            $order_state->logable = false;
            $order_state->invoice = false;
            $order_state->color = '#fcba03';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::SEPA_WAITING, $order_state->id);
        }

        /* Create Order State for Stripe */
        if (!Configuration::get(self::SEPA_DISPUTE)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::SEPA_DISPUTE)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('Litige SEPA');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('Disputa SEPA');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('SEPA-Streit');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('SEPA-geschil');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('Controversia SEPA');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('SEPA dispute');
                        break;
                }
            }
            $order_state->invoice = false;
            $order_state->send_email = false;
            $order_state->logable = true;
            $order_state->color = '#e3e1dc';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::SEPA_DISPUTE, $order_state->id);
        }

        /* Create Order State for Stripe */
        if (!Configuration::get(self::OXXO_WAITING)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::OXXO_WAITING)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('En attente de la confirmation de paiement OXXO');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('Esperando la confirmación del pago de OXXO');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('Warten auf OXXO-Zahlungsbestätigung');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('Wachten op OXXO betalingsbevestiging');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('In attesa della conferma del pagamento OXXO');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('Waiting for OXXO payment confirmation');
                        break;
                }
            }
            $order_state->invoice = false;
            $order_state->send_email = false;
            $order_state->hidden = false;
            $order_state->delivery = false;
            $order_state->logable = false;
            $order_state->color = '#C23416';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::OXXO_WAITING, $order_state->id);
        }

        /* Create Order State Awaiting for Payment for Stripe */
        if (!Configuration::get(self::PAYMENT_WAITING)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::PAYMENT_WAITING)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('En attente de confirmation de paiement');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('Esperando de confirmación de pago');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('Warten auf Zahlungsbestätigung');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('Wachten op betalingsbevestiging');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('In attesa di conferma del pagamento');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('Awaiting for payment confirmation');
                        break;
                }
            }
            $order_state->invoice = false;
            $order_state->send_email = false;
            $order_state->logable = true;
            $order_state->color = '#c7ff49';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::PAYMENT_WAITING, $order_state->id);
        }

        /* Create Order State Partial Refund for Payment for Stripe */
        if (!Configuration::get(self::PARTIAL_REFUND)
            || !Validate::isLoadedObject(new OrderState(Configuration::get(self::PARTIAL_REFUND)))) {
            $order_state = new OrderState();
            $order_state->name = [];
            foreach (Language::getLanguages() as $language) {
                switch (Tools::strtolower($language['iso_code'])) {
                    case 'fr':
                        $order_state->name[$language['id_lang']] = pSQL('Remboursement partiel');
                        break;
                    case 'es':
                        $order_state->name[$language['id_lang']] = pSQL('Reembolso parcial');
                        break;
                    case 'de':
                        $order_state->name[$language['id_lang']] = pSQL('Teilweise Rückerstattung');
                        break;
                    case 'nl':
                        $order_state->name[$language['id_lang']] = pSQL('Gedeeltelijke terugbetaling');
                        break;
                    case 'it':
                        $order_state->name[$language['id_lang']] = pSQL('Rimborso parziale');
                        break;

                    default:
                        $order_state->name[$language['id_lang']] = pSQL('Partial Refund');
                        break;
                }
            }
            $order_state->invoice = false;
            $order_state->send_email = false;
            $order_state->logable = true;
            $order_state->color = '#01B887';
            $order_state->module_name = $this->name;
            if ($order_state->add()) {
                $source = _PS_MODULE_DIR_ . 'stripe_official/views/img/ca_icon.gif';
                $destination = _PS_ROOT_DIR_ . '/img/os/' . (int) $order_state->id . '.gif';
                copy($source, $destination);
            }

            Configuration::updateValue(self::PARTIAL_REFUND, $order_state->id);
        }

        return true;
    }

    /**
     * description: render main content
     * Important The order in which the actions are performed in this method is important
     */
    public function getContent()
    {
        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();

        /* Check if SSL is enabled */
        if (!Configuration::get('PS_SSL_ENABLED')) {
            $this->warning[] = self::useNewTranslationSystem() ?
                $this->trans('You must enable SSL on the store if you want to use this module in production.', [], self::MODULE_MAIN_CLASS) :
                $this->l('You must enable SSL on the store if you want to use this module in production.', $this->name);
        }

        /* Do Log In */
        if (Tools::isSubmit('submit_login')) {
            $handler = new Stripe_officialClasslib\Actions\ActionsHandler();
            $conveyorModel = new ConveyorModel();
            $conveyorModel->setContext($this->context);
            $conveyorModel->setModule($this);
            $handler->setConveyor($conveyorModel);

            $handler->addActions(
                'registerKeys',
                'registerWebhookSignature',
                'registerCatchAndAuthorize',
                'registerOtherConfigurations',
                'registerApplePayDomain'
            );

            $handler->process('ConfigurationActions');

            /*
             * Clear both Smarty and Symfony cache.
             */
            Tools::clearAllCache();
        }

        /* Check if public and secret key have been defined */
        if (!self::isWellConfigured()) {
            $this->errors[] = self::useNewTranslationSystem() ? $this->trans('Keys are empty.', [], self::MODULE_MAIN_CLASS) : $this->l('Keys are empty.');
        }

        /* Check if TLS is enabled and the TLS version used is 1.2 */
        if (self::isWellConfigured()) {
            $secretKey = self::getSecretKey();
            if ($this->checkApiConnection($secretKey) !== false) {
                try {
                    \Stripe\Charge::all();
                } catch (\Stripe\Exception\ApiConnectionException $e) {
                    Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logInfo($e->getMessage());
                    Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

                    $this->warning[] = self::useNewTranslationSystem() ?
                        $this->trans('Your TLS version is not supported. You will need to upgrade your integration. Please check the FAQ if you don\'t know how to do it.', [], self::MODULE_MAIN_CLASS) :
                        $this->l('Your TLS version is not supported. You will need to upgrade your integration. Please check the FAQ if you don\'t know how to do it.', $this->name);
                }
            }
        }

        /* Check if webhook limit has been reached */
        if (self::isWellConfigured()) {
            $stripeWebhook = new StripeWebhook();
            if (!$stripeWebhook->webhookCanBeRegistered()) {
                $this->warning[] = self::useNewTranslationSystem() ?
                    $this->trans('You reached the limit of 16 webhook endpoints registered in your Dashboard Stripe for this account. Please remove one of them if you want to register this domain.', [], self::MODULE_MAIN_CLASS) :
                    $this->l('You reached the limit of 16 webhook endpoints registered in your Dashboard Stripe for this account. Please remove one of them if you want to register this domain.', $this->name);
            }
        }
        /* Check if webhook_id has been defined */
        $webhookId = Configuration::get(self::WEBHOOK_ID, null, $shopGroupId, $shopId);
        if (!$webhookId) {
            $this->errors[] = self::useNewTranslationSystem() ?
                $this->trans('Webhook configuration cannot be found in PrestaShop, click on save button to fix issue. A new webhook will be created on Stripe, then saved in PrestaShop.', [], self::MODULE_MAIN_CLASS) :
                $this->l('Webhook configuration cannot be found in PrestaShop, click on save button to fix issue. A new webhook will be created on Stripe, then saved in PrestaShop.', $this->name);
        }
        if ($webhookId && self::isWellConfigured()) {
            /* Check if webhook access is write */
            try {
                $webhookEndpoint = \Stripe\WebhookEndpoint::retrieve($webhookId);
                $stripeWebhook = new StripeWebhook();
                $updateWebhookData = $stripeWebhook->getWebhookUpdateData($webhookEndpoint);

                if (!empty($updateWebhookData) && isset($updateWebhookData['url'])) {
                    if (self::useNewTranslationSystem()) {
                        $this->errors[] =
                            $this->trans('Webhook URL configuration is wrong, click on save button to fix issue. Webhook configuration will be corrected.', [], self::MODULE_MAIN_CLASS) . ' | ' .
                            $this->trans('Current webhook URL : ', [], self::MODULE_MAIN_CLASS) . $webhookEndpoint->url . ' | ' .
                            $this->trans('Expected webhook URL : ', [], self::MODULE_MAIN_CLASS) . self::getWebhookUrl();
                    } else {
                        $this->errors[] =
                            $this->l('Webhook URL configuration is wrong, click on save button to fix issue. Webhook configuration will be corrected.', $this->name) . ' | ' .
                            $this->l('Current webhook URL : ', $this->name) . $webhookEndpoint->url . ' | ' .
                            $this->l('Expected webhook URL : ', $this->name) . self::getWebhookUrl();
                    }
                }
                if (!empty($updateWebhookData) && isset($updateWebhookData['enabled_events'])) {
                    if (self::useNewTranslationSystem()) {
                        $this->errors[] =
                            $this->trans('Webhook events configuration are wrong, click on save button to fix issue. Webhook configuration will be corrected.', [], self::MODULE_MAIN_CLASS) . ' | ' .
                            $this->trans('Current webhook events : ', [], self::MODULE_MAIN_CLASS) . implode(' / ', $webhookEndpoint->enabled_events) . ' | ' .
                            $this->trans('Expected webhook events : ', [], self::MODULE_MAIN_CLASS) . implode(' / ', Stripe_official::$webhook_events);
                    } else {
                        $this->errors[] =
                            $this->l('Webhook events configuration are wrong, click on save button to fix issue. Webhook configuration will be corrected.', $this->name) . ' | ' .
                            $this->l('Current webhook events : ', $this->name) . implode(' / ', $webhookEndpoint->enabled_events) . ' | ' .
                            $this->l('Expected webhook events : ', $this->name) . implode(' / ', Stripe_official::$webhook_events);
                    }
                }
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $this->errors[] = self::useNewTranslationSystem() ?
                    $this->trans('Webhook configuration cannot be accessed, click on save button to fix issue. A new webhook will be created on Stripe.', [], self::MODULE_MAIN_CLASS) :
                    $this->l('Webhook configuration cannot be accessed, click on save button to fix issue. A new webhook will be created on Stripe.', $this->name);
            }
        }

        /* Do Refund */
        if (Tools::isSubmit('submit_refund_id')) {
            $refund_id = Tools::getValue(self::REFUND_ID);
            if (!empty($refund_id)) {
                $query = new DbQuery();
                $query->select('*');

                $query->from('stripe_payment');
                $query->where('id_stripe = "' . pSQL($refund_id) . '"');
                $refund = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($query->build());
            } else {
                $this->errors[] = self::useNewTranslationSystem() ?
                    $this->trans('The Stripe Payment ID can\'t be empty.', [], self::MODULE_MAIN_CLASS) :
                    $this->l('The Stripe Payment ID can\'t be empty.');
            }

            if ($refund) {
                $this->refund = 1;
                Configuration::updateValue(self::REFUND_ID, Tools::getValue(self::REFUND_ID), false, $shopGroupId, $shopId);
            } else {
                $this->refund = 0;
                $this->errors[] = self::useNewTranslationSystem() ? $this->trans('Unknown Stripe Payment ID.', [], self::MODULE_MAIN_CLASS) : $this->l('Unknown Stripe Payment ID.');
                Configuration::updateValue(self::REFUND_ID, '', false, $shopGroupId, $shopId);
            }

            $amount = null;
            $mode = (int) Tools::getValue(self::REFUND_MODE);
            if ($mode === self::REFUND_MODE_PARTIAL) {
                $amount = Tools::getValue(self::REFUND_AMOUNT);
                $amount = str_replace(',', '.', $amount);
            }

            $this->apiRefund($refund[0]['id_stripe'], $refund[0]['currency'], $mode, $refund[0]['id_cart'], $amount);

            if (!count($this->errors)) {
                $this->success = self::useNewTranslationSystem() ? $this->trans('Refunds processed successfully', [], self::MODULE_MAIN_CLASS) : $this->l('Refunds processed successfully');
            }
        }

        $domain = Tools::getShopDomain(true, true);
        if (Tools::usingSecureMode()) {
            $domain = Tools::getShopDomainSsl(true, true);
        }

        $this->context->controller->addJS($this->_path . '/views/js/faq.js');
        $this->context->controller->addJS($this->_path . '/views/js/back.js');
        $this->context->controller->addJS($this->_path . '/views/js/PSTabs.js');
        $this->context->controller->addJS($this->_path . '/views/js/handleNextAction.js');

        $this->context->controller->addCSS($this->_path . '/views/css/admin.css');

        $keys_configured = false;
        if (self::isWellConfigured()) {
            $keys_configured = true;
        }

        $allOrderStatus = OrderState::getOrderStates($this->context->language->id);
        $statusSelected = [];
        $statusUnselected = [];

        if (Configuration::get(self::CAPTURE_STATUS, null, $shopGroupId, $shopId) && Configuration::get(self::CAPTURE_STATUS, null, $shopGroupId, $shopId) != '') {
            $capture_status = explode(',', Configuration::get(self::CAPTURE_STATUS, null, $shopGroupId, $shopId));
            foreach ($allOrderStatus as $status) {
                if (in_array($status['id_order_state'], $capture_status)) {
                    $statusSelected[] = $status;
                } else {
                    $statusUnselected[] = $status;
                }
            }
        } else {
            $statusUnselected = $allOrderStatus;
        }

        $orderStatus = [];
        $orderStatus['selected'] = $statusSelected;
        $orderStatus['unselected'] = $statusUnselected;

        $this->context->smarty->assign([
            'logo' => $domain . __PS_BASE_URI__ . basename(_PS_MODULE_DIR_) . '/' . $this->name . '/views/img/Stripe_logo.png',
            'new_base_dir', $this->_path,
            'keys_configured' => $keys_configured,
            'link' => new Link(),
            'catchandauthorize' => Configuration::get(self::CATCHANDAUTHORIZE, null, $shopGroupId, $shopId),
            'orderStatus' => $orderStatus,
            'orderStatusSelected' => Configuration::get(self::CAPTURE_STATUS, null, $shopGroupId, $shopId),
            'allOrderStatus' => $allOrderStatus,
            'captureExpire' => Configuration::get(self::CAPTURE_EXPIRE, null, $shopGroupId, $shopId),
            'payment_methods' => Stripe_official::$paymentMethods,
            'language_iso_code' => $this->context->language->iso_code,
            'stripe_payments_url' => 'https://dashboard.stripe.com/settings/payments',
        ]);

        $this->displaySomething();
        $this->assignSmartyVars();

        if (count($this->warning)) {
            $this->context->smarty->assign('warnings', $this->warning);
        }

        if (!empty($this->success) && !count($this->errors)) {
            $this->context->smarty->assign('success', $this->success);
        }

        if (count($this->errors)) {
            $this->context->smarty->assign('errors', $this->errors);
        }

        return $this->display($this->_path, 'views/templates/admin/main.tpl');
    }

    /**
     * Display Form
     */
    protected function assignSmartyVars()
    {
        $shopGroupId = self::getShopGroupIdContext();
        $shopId = self::getShopIdContext();
        $this->context->smarty->assign([
            'stripe_mode' => Configuration::get(self::MODE, null, $shopGroupId, $shopId),
            'stripe_key' => Configuration::get(self::KEY, null, $shopGroupId, $shopId),
            'stripe_publishable' => Configuration::get(self::PUBLISHABLE, null, $shopGroupId, $shopId),
            'stripe_test_publishable' => Configuration::get(self::TEST_PUBLISHABLE, null, $shopGroupId, $shopId),
            'stripe_test_key' => Configuration::get(self::TEST_KEY, null, $shopGroupId, $shopId),
            'postcode' => Configuration::get(self::POSTCODE, null, $shopGroupId, $shopId),
            'cardholdername' => Configuration::get(self::CARDHOLDERNAME, null, $shopGroupId, $shopId),
            'reinsurance' => Configuration::get(self::REINSURANCE, null, $shopGroupId, $shopId),
            'visa' => Configuration::get(self::VISA, null, $shopGroupId, $shopId),
            'mastercard' => Configuration::get(self::MASTERCARD, null, $shopGroupId, $shopId),
            'american_express' => Configuration::get(self::AMERICAN_EXPRESS), null, $shopGroupId, $shopId,
            'cb' => Configuration::get(self::CB, null, $shopGroupId, $shopId),
            'diners_club' => Configuration::get(self::DINERS_CLUB, null, $shopGroupId, $shopId),
            'union_pay' => Configuration::get(self::UNION_PAY, null, $shopGroupId, $shopId),
            'jcb' => Configuration::get(self::JCB, null, $shopGroupId, $shopId),
            'discovers' => Configuration::get(self::DISCOVERS, null, $shopGroupId, $shopId),
            'ideal' => Configuration::get(self::ENABLE_IDEAL, null, $shopGroupId, $shopId),
            'giropay' => Configuration::get(self::ENABLE_GIROPAY, null, $shopGroupId, $shopId),
            'bancontact' => Configuration::get(self::ENABLE_BANCONTACT, null, $shopGroupId, $shopId),
            'fpx' => Configuration::get(self::ENABLE_FPX, null, $shopGroupId, $shopId),
            'eps' => Configuration::get(self::ENABLE_EPS, null, $shopGroupId, $shopId),
            'p24' => Configuration::get(self::ENABLE_P24, null, $shopGroupId, $shopId),
            'sepa_debit' => Configuration::get(self::ENABLE_SEPA), null, $shopGroupId, $shopId,
            'alipay' => Configuration::get(self::ENABLE_ALIPAY, null, $shopGroupId, $shopId),
            'oxxo' => Configuration::get(self::ENABLE_OXXO, null, $shopGroupId, $shopId),
            'applepay_googlepay' => Configuration::get(self::ENABLE_APPLEPAY_GOOGLEPAY, null, $shopGroupId, $shopId),
            'url_webhhoks' => self::getWebhookUrl(),
            'payment_element' => Configuration::get(self::ENABLE_PAYMENT_ELEMENTS, null, $shopGroupId, $shopId),
            'klarna' => Configuration::get(self::ENABLE_KLARNA, null, $shopGroupId, $shopId),
            'afterpay_clearpay' => Configuration::get(self::ENABLE_AFTERPAY, null, $shopGroupId, $shopId),
            'affirm' => Configuration::get(self::ENABLE_AFFIRM, null, $shopGroupId, $shopId),
            'link' => Configuration::get(self::ENABLE_LINK, null, $shopGroupId, $shopId),
            'stripe_theme' => Configuration::get(self::THEME, null, $shopGroupId, $shopId),
            'stripe_position' => Configuration::get(self::POSITION, null, $shopGroupId, $shopId),
            'stripe_layout' => Configuration::get(self::LAYOUT, null, $shopGroupId, $shopId),
            'use_new_ps_translation' => self::useNewTranslationSystem(),
            'express_checkout' => Configuration::get(self::ENABLE_EXPRESS_CHECKOUT, null, $shopGroupId, $shopId),
            'stripe_locations' => explode(', ', Configuration::get(self::EXPRESS_CHECKOUT_LOCATIONS, null, $shopGroupId, $shopId)),
            'apple_pay_button_theme' => Configuration::get(self::APPLE_PAY_BUTTON_THEME, null, $shopGroupId, $shopId),
            'apple_pay_button_type' => Configuration::get(self::APPLE_PAY_BUTTON_TYPE, null, $shopGroupId, $shopId),
            'google_pay_button_theme' => Configuration::get(self::GOOGLE_PAY_BUTTON_THEME, null, $shopGroupId, $shopId),
            'google_pay_button_type' => Configuration::get(self::GOOGLE_PAY_BUTTON_TYPE, null, $shopGroupId, $shopId),
            'pay_pal_button_theme' => Configuration::get(self::PAY_PAL_BUTTON_THEME, null, $shopGroupId, $shopId),
            'pay_pal_button_type' => Configuration::get(self::PAY_PAL_BUTTON_TYPE, null, $shopGroupId, $shopId),
            'stripe_order_flow' => Configuration::get(self::ORDER_FLOW, null, $shopGroupId, $shopId),
        ]);
    }

    /*
     ** @Method: copyAppleDomainFile
     ** @description: Copy apple-developer-merchantid-domain-association file to .well-known/ folder
     **
     ** @arg: (none)
     ** @return: bool
     */
    public function copyAppleDomainFile()
    {
        if (!Tools::copy(_PS_MODULE_DIR_ . 'stripe_official/apple-developer-merchantid-domain-association', _PS_ROOT_DIR_ . '/.well-known/apple-developer-merchantid-domain-association')) {
            return false;
        } else {
            return true;
        }
    }

    /*
     ** @Method: displaySomething
     ** @description: Register Apple Pay domain in Stripe dashboard
     **
     ** @arg: secret_key
     ** @return: (none)
     */
    public function addAppleDomainAssociation($secret_key)
    {
        if (!is_dir(_PS_ROOT_DIR_ . '/.well-known')) {
            if (!mkdir(_PS_ROOT_DIR_ . '/.well-known')) {
                $this->warning[] = self::useNewTranslationSystem() ? $this->trans('Settings updated successfully.', [], self::MODULE_MAIN_CLASS) : $this->l('Settings updated successfully.');

                return false;
            }
        }

        $domain_file = _PS_ROOT_DIR_ . '/.well-known/apple-developer-merchantid-domain-association';
        if (!file_exists($domain_file)) {
            if (!$this->copyAppleDomainFile()) {
                $this->warning[] = self::useNewTranslationSystem() ?
                    $this->trans('Your host does not authorize us to add your domain to use ApplePay. To add your domain manually please follow the subject "Add my domain ApplePay manually from my dashboard" which is located in the tab F.A.Q of the module.', [], self::MODULE_MAIN_CLASS) :
                    $this->l('Your host does not authorize us to add your domain to use ApplePay. To add your domain manually please follow the subject "Add my domain ApplePay manually from my dashboard" which is located in the tab F.A.Q of the module.');
            } else {
                try {
                    Stripe::setApiKey($secret_key);
                    \Stripe\ApplePayDomain::create([
                        'domain_name' => $this->context->shop->domain,
                    ]);

                    $curl = curl_init(Tools::getShopDomainSsl(true, true) . '/.well-known/apple-developer-merchantid-domain-association');
                    curl_setopt($curl, CURLOPT_FAILONERROR, true);
                    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
                    $result = curl_exec($curl);
                    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                    curl_close($curl);

                    if ($httpcode != 200 || !$result) {
                        $this->warning[] = self::useNewTranslationSystem() ?
                            $this->trans('The configurations has been saved, however your host does not authorize us to add your domain to use ApplePay. To add your domain manually please follow the subject "Add my domain ApplePay manually from my dashboard in order to use ApplePay" which is located in the tab F.A.Q of the module.', [], self::MODULE_MAIN_CLASS) :
                            $this->l('The configurations has been saved, however your host does not authorize us to add your domain to use ApplePay. To add your domain manually please follow the subject "Add my domain ApplePay manually from my dashboard in order to use ApplePay" which is located in the tab F.A.Q of the module.');
                    }
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    $this->warning[] = $e->getMessage();
                }
            }
        }
    }

    /*
     ** @Method: displaySomething
     ** @description: just display something (it's something)
     **
     ** @arg: (none)
     ** @return: (none)
     */
    public function displaySomething()
    {
        $return_url = '';

        if (Configuration::get('PS_SSL_ENABLED')) {
            $domain = Tools::getShopDomainSsl(true);
        } else {
            $domain = Tools::getShopDomain(true);
        }

        if (isset($_SERVER['REQUEST_URI'])) {
            $return_url = urlencode($domain . $_SERVER['REQUEST_URI']);
        }

        $this->context->smarty->assign('return_url', $return_url);
    }

    /*
     ** @Method: apiRefund
     ** @description: Make a Refund (charge) with Stripe
     **
     ** @arg: amount, id_stripe
     ** @amount: if null total refund
     ** @currency: "USD", "EUR", etc..
     ** @mode: (boolean) ? total : partial
     ** @return: (none)
     */
    public function apiRefund($refund_id, $currency, $mode, $id_card, $amount = null)
    {
        $stripeAccount = $this->checkApiConnection($this->getSecretKey());
        if (!empty($stripeAccount) && !empty($refund_id)) {
            $query = new DbQuery();
            $query->select('*');
            $query->from('stripe_payment');
            $query->where('id_stripe = "' . pSQL($refund_id) . '"');
            $refund = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($query->build());
            if ($mode === self::REFUND_MODE_FULL) { /* Total refund */
                try {
                    $stripeClient = new \Stripe\StripeClient($this->getSecretKey());
                    $stripeClient->refunds->create(['charge' => $refund_id]);
                } catch (Exception $e) {
                    // Something else happened, completely unrelated to Stripe
                    $this->errors[] = $e->getMessage();

                    return false;
                }

                Db::getInstance()->Execute(
                    'UPDATE `' . _DB_PREFIX_ . 'stripe_payment` SET `result` = 2, `date_add` = NOW(), `refund` = "'
                    . pSQL($refund[0]['amount']) . '" WHERE `id_stripe` = "' . pSQL($refund_id) . '"'
                );
            } elseif ($mode === self::REFUND_MODE_PARTIAL) { /* Partial refund */
                if (!self::isZeroDecimalCurrency($currency)) {
                    $ref_amount = $amount * 100;
                }
                try {
                    $stripeClient = new \Stripe\StripeClient($this->getSecretKey());
                    $stripeClient->refunds->create([
                        'charge' => $refund_id,
                        'amount' => isset($ref_amount) ? $ref_amount : 0,
                    ]);
                } catch (Exception $e) {
                    // Something else happened, completely unrelated to Stripe
                    $this->errors[] = $e->getMessage();

                    return false;
                }

                $amount += $refund[0]['refund'];
                if ($amount == $refund[0]['amount']) {
                    $result = 2;
                } else {
                    $result = 3;
                }
                if ($amount <= $refund[0]['amount']) {
                    Db::getInstance()->Execute(
                        'UPDATE `' . _DB_PREFIX_ . 'stripe_payment`
                        SET `result` = ' . (int) $result . ',
                            `date_add` = NOW(),
                            `refund` = "' . pSQL($amount) . '"
                        WHERE `id_stripe` = "' . pSQL($refund_id) . '"'
                    );
                }
            }

            $this->success = self::useNewTranslationSystem() ? $this->trans('Refunds processed successfully', [], self::MODULE_MAIN_CLASS) : $this->l('Refunds processed successfully');
        } elseif (empty($stripeAccount)) {
            $this->errors[] = self::useNewTranslationSystem() ?
                $this->trans('Invalid Stripe credentials, please check your configuration.', [], self::MODULE_MAIN_CLASS) :
                $this->l('Invalid Stripe credentials, please check your configuration.');
        }
    }

    public static function isZeroDecimalCurrency($currency)
    {
        // @see: https://support.stripe.com/questions/which-zero-decimal-currencies-does-stripe-support
        $zeroDecimalCurrencies = [
            'BIF',
            'CLP',
            'DJF',
            'GNF',
            'JPY',
            'KMF',
            'KRW',
            'MGA',
            'PYG',
            'RWF',
            'UGX',
            'VND',
            'VUV',
            'XAF',
            'XOF',
            'XPF',
        ];

        return in_array(Tools::strtoupper($currency), $zeroDecimalCurrencies);
    }

    /**
     * Get a list of files contained in directory
     *
     * @param string $dir Target directory path
     * @param string $regex Apply regex
     * @param false $onlyFilename Get only filename
     * @param array $results Results search
     *
     * @return array
     */
    private static function getDirContentFiles($dir, $regex = '/.*/', $onlyFilename = false, &$results = [])
    {
        $files = scandir($dir);

        foreach ($files as $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path) && preg_match($regex, $value)) {
                $results[] = $onlyFilename ? $value : $path;
            } elseif (is_dir($path) && $value != '.' && $value != '..') {
                self::getDirContentFiles($path, $regex, $onlyFilename, $results);
            }
        }

        return $results;
    }

    /**
     * clean cache for upgrade to prevent issue during module upgrade
     *
     * @return void
     */
    public function cleanModuleCache()
    {
        $path = _PS_MODULE_DIR_ . 'stripe_official/views/templates';
        $regPattern = '/.*\.tpl/';
        $templates = self::getDirContentFiles($path, $regPattern, true);

        foreach ($templates as $tpl) {
            $this->_clearCache($tpl);
        }
    }

    /**
     * get webhook url of stripe_official module
     *
     * @return string
     */
    public static function getWebhookUrl()
    {
        $context = Context::getContext();
        $locale = $context->language->iso_code;

        $url = $context->link->getModuleLink(
            'stripe_official',
            'webhook',
            [],
            true,
            null,
            Configuration::get('PS_SHOP_DEFAULT')
        );

        return str_replace('/' . $locale, '', $url);
    }

    /**
     * get current LangId according to activate multishop feature
     *
     * @return int|null
     */
    public static function getLangIdContext()
    {
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && Shop::getContext() === Shop::CONTEXT_ALL) {
            return Configuration::get('PS_LANG_DEFAULT', null, 1, 1);
        }

        return Configuration::get('PS_LANG_DEFAULT');
    }

    /**
     * get current ShopId according to activate multishop feature
     *
     * @return int|null
     */
    public static function getShopIdContext()
    {
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE')) {
            return Context::getContext()->shop->id;
        }

        return Configuration::get('PS_SHOP_DEFAULT');
    }

    /**
     * get current ShopGroupId according to activate multishop feature
     *
     * @return int|null
     */
    public static function getShopGroupIdContext()
    {
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE')) {
            return Context::getContext()->shop->id_shop_group;
        }

        return Configuration::get('PS_SHOP_DEFAULT');
    }

    /**
     * get Secret Key according MODE staging or live
     *
     * @param null $id_shop Optional, if set, get the secret key of the specified shop
     *
     * @return string
     */
    public static function getSecretKey($id_shop_group = null, $id_shop = null)
    {
        $shopGroupId = $id_shop_group ?: Stripe_official::getShopGroupIdContext();
        $shopId = $id_shop ?: Stripe_official::getShopIdContext();
        $mode = (int) Configuration::get(self::MODE, null, $shopGroupId, $shopId);
        $secretKeyConstant = self::getApiKeyConstantByModeAndType($mode, self::TYPE_SECRET);

        return Configuration::get($secretKeyConstant, null, $shopGroupId, $shopId);
    }

    /**
     * get Publishable Key according MODE staging or live
     *
     * @return string
     */
    public static function getPublishableKey($id_shop_group = null, $id_shop = null)
    {
        $shopGroupId = $id_shop_group ?: Stripe_official::getShopGroupIdContext();
        $shopId = $id_shop ?: Stripe_official::getShopIdContext();
        $mode = (int) Configuration::get(self::MODE, null, $shopGroupId, $shopId);
        $publishableKeyConstant = self::getApiKeyConstantByModeAndType($mode, self::TYPE_PUBLISHABLE);

        return Configuration::get($publishableKeyConstant, null, $shopGroupId, $shopId);
    }

    public function checkApiConnection($secretKey = null)
    {
        if (!$secretKey) {
            $secretKey = $this->getSecretKey();
        }

        try {
            Stripe::setApiKey($secretKey);

            return Account::retrieve();
        } catch (Exception $e) {
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                $e->getMessage(),
                null,
                null,
                'Stripe_official - checkApiConnection'
            );
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

            return false;
        }
    }

    public function updateConfigurationKey($oldKey, $newKey)
    {
        if (Configuration::hasKey($oldKey)) {
            $set = '';

            if ($oldKey == '_PS_STRIPE_secure' && Configuration::get($oldKey) == '0') {
                $set = ',`value` = 2';
            }

            $sql = 'UPDATE `' . _DB_PREFIX_ . 'configuration`
                    SET `name`="' . pSQL($newKey) . '"' . $set . '
                    WHERE `name`="' . pSQL($oldKey) . '"';

            return Db::getInstance()->execute($sql);
        }
    }

    public function captureFunds($amount, $id_payment_intent)
    {
        Stripe::setApiKey($this->getSecretKey());

        try {
            $intent = PaymentIntent::retrieve($id_payment_intent);
            if ($intent->amount_capturable === 0) {
                return false;
            }
            $intent->capture(['amount_to_capture' => $amount]);

            return true;
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                'Fail to capture amount. Stripe SDK return error: ' . $e,
                null,
                null,
                'Stripe_official - captureFunds'
            );
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

            return false;
        }
    }

    /**
     * Set JS var in backoffice
     */
    public function hookDisplayBackOfficeHeader($params)
    {
        if (
            Tools::getIsset('controller')
            && Tools::getValue('controller') == 'AdminModules'
            && Tools::getIsset('configure')
            && Tools::getValue('configure') == $this->name
        ) {
            Media::addJsDef([
                'transaction_refresh_url' => $this->context->link->getAdminLink(
                    'AdminAjaxTransaction',
                    true,
                    [],
                    ['ajax' => 1, 'action' => 'refresh']
                ),
            ]);
        }
    }

    /**
     * Add a tab to controle intents on a cart details admin page
     */
    public function hookDisplayAdminCartsView($params)
    {
        $stripePayment = new StripePayment();
        $paymentInformations = $stripePayment->getStripePaymentByCart($params['cart']->id);

        if (empty($paymentInformations->getIdPaymentIntent())) {
            return;
        }

        $paymentInformations->state = $paymentInformations->state ? 'TEST' : 'LIVE';
        $paymentInformations->url_dashboard = $stripePayment->getDashboardUrl();

        $this->context->smarty->assign([
            'paymentInformations' => $paymentInformations,
            'use_new_ps_translation' => self::useNewTranslationSystem(),
        ]);

        return $this->display(__FILE__, 'views/templates/hook/admin_cart.tpl');
    }

    /**
     * Add a tab to controle intents on an order details admin page (tab header)
     *
     * @return html|bool
     */
    public function hookDisplayAdminOrderTabOrder($params)
    {
        if (!$this->getSecretKey() || !$this->getPublishableKey()) {
            return false;
        }

        if (version_compare(_PS_VERSION_, '1.7.7.4', '>=')) {
            $order = new Order($params['id_order']);
        } else {
            $order = $params['order'];
        }

        if ($order->module != 'stripe_official') {
            return false;
        }

        return $this->display(__FILE__, 'views/templates/hook/admin_tab_order.tpl');
    }

    public function hookDisplayAdminOrderTabLink($params)
    {
        return $this->hookDisplayAdminOrderTabOrder($params);
    }

    /**
     * Add a tab to controle intents on an order details admin page (tab content)
     *
     * @return html|bool
     */
    public function hookDisplayAdminOrderContentOrder($params)
    {
        if (!$this->getSecretKey() || !$this->getPublishableKey()) {
            return false;
        }

        if (version_compare(_PS_VERSION_, '1.7.7.4', '>=')) {
            $order = new Order($params['id_order']);
        } else {
            $order = $params['order'];
        }

        $stripePayment = new StripePayment();
        $stripePayment->getStripePaymentByCart($order->id_cart);

        $stripeCapture = new StripeCapture();
        $stripeCapture->getByIdPaymentIntent($stripePayment->getIdPaymentIntent());

        $dispute = false;
        if (!empty($stripePayment->getIdStripe())) {
            $stripeDispute = new StripeDispute();
            $dispute = $stripeDispute->orderHasDispute($stripePayment->getIdStripe(), $order->id_shop);
        }

        $riskLevel = $riskScore = $stripeCustomerID = $paymentMethod = $intent = null;
        try {
            if ($stripePayment->getIdPaymentIntent()) {
                $intent = PaymentIntent::retrieve(
                    $stripePayment->getIdPaymentIntent()
                );
            }

            if ($intent && isset($intent->charges->data[0])) {
                $riskLevel = $intent->charges->data[0]->outcome->risk_level;
                $riskScore = $intent->charges->data[0]->outcome->risk_score;
                $stripeCustomerID = $intent->charges->data[0]->customer;
                $paymentMethod = $intent->charges->data[0]->payment_method_details->type;
            }
        } catch (Exception $e) {
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                $e->getMessage(),
                null,
                null,
                'Stripe_official - hookDisplayAdminOrderContentOrder'
            );
            Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

            return false;
        }

        $stripePartialRefunded = false;
        $stripeRefundedAmount = 0;
        $currency = new Currency($order->id_currency);
        $orderCurrencyIsoCode = isset($currency->iso_code) ? $currency->iso_code : null;
        if ((int) $order->current_state === (int) Configuration::get(self::PARTIAL_REFUND)) {
            $stripePartialRefunded = true;
            $stripeRefundedAmount = $orderCurrencyIsoCode ? $stripePayment->getRefund() . ' ' . $orderCurrencyIsoCode : $stripePayment->getRefund();
        }

        $this->context->smarty->assign([
            'stripe_charge' => $stripePayment->getIdStripe(),
            'stripe_paymentIntent' => $stripePayment->getIdPaymentIntent(),
            'stripe_dashboardUrl' => $stripePayment->getDashboardUrl(),
            'stripe_paymentType' => $stripePayment->getType(),
            'stripe_paymentMethod' => $paymentMethod,
            'stripe_dateCatch' => $stripeCapture->getDateCatch(),
            'stripe_dateAuthorize' => $stripeCapture->getDateAuthorize(),
            'stripe_expired' => $stripeCapture->getExpired(),
            'stripe_dispute' => $dispute,
            'stripe_voucher_expire' => $stripePayment->getVoucherExpire(),
            'stripe_voucher_validate' => $stripePayment->getVoucherValidate(),
            'stripe_riskLevel' => $riskLevel,
            'stripe_riskScore' => $riskScore,
            'stripe_customerID' => $stripeCustomerID,
            'stripe_partialRefunded' => $stripePartialRefunded,
            'stripe_refundedAmount' => $stripeRefundedAmount,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/admin_content_order.tpl');
    }

    public function hookDisplayAdminOrderTabContent($params)
    {
        return $this->hookDisplayAdminOrderContentOrder($params);
    }

    public function hookActionOrderStatusUpdate($params)
    {
        $order = new Order($params['id_order']);

        if ($order->module == 'stripe_official'
            && !empty($order->getHistory($this->context->language->id, Configuration::get(self::CAPTURE_WAITING)))
            && in_array($params['newOrderStatus']->id, explode(',', Configuration::get(self::CAPTURE_STATUS)))) {
            $stripePayment = new StripePayment();

            try {
                $stripePaymentDatas = $stripePayment->getStripePaymentByCart($order->id_cart);
                $amount = self::isZeroDecimalCurrency($stripePayment->currency) ? $order->total_paid : $order->total_paid * 100;

                if (!$this->captureFunds($amount, $stripePaymentDatas->id_payment_intent)) {
                    return false;
                }

                $stripeCapture = new StripeCapture();
                $stripeCapture->getByIdPaymentIntent($stripePaymentDatas->id_payment_intent);
                $stripeCapture->date_authorize = date('Y-m-d H:i:s');
                $stripeCapture->save();
            } catch (\Stripe\Exception\UnexpectedValueException $e) {
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                    $e->getMessage(),
                    null,
                    null,
                    'Stripe_official - hookActionOrderStatusUpdate'
                );
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

                return false;
            } catch (PrestaShopException $e) {
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::logError(
                    $e->getMessage(),
                    null,
                    null,
                    'Stripe_official - hookActionOrderStatusUpdate'
                );
                Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerHandler::closeLogger();

                return false;
            }
        }

        return true;
    }

    /*
        Display Express Checkout Element on the Product Page
    */
    public function hookDisplayProductActions()
    {
        $priceAmount = $this->context->smarty->tpl_vars['product']->value->price_amount;
        $productId = $this->context->smarty->tpl_vars['product']->value->id_product;
        $isoCode = strtolower($this->context->currency->iso_code);
        $stripeExpressAmount = round($priceAmount, 2);
        $stripeExpressAmount = Stripe_official::isZeroDecimalCurrency($isoCode) ?
            (int) $stripeExpressAmount :
            (int) number_format($stripeExpressAmount * 100, 0, '', '');
        $customerModel = CustomerModel::getFromContext($this->context);
        $address = new Address(Address::getFirstCustomerAddressId($this->context->customer->id));
        $phone = $address->phone;
        $cartId = $this->context->cart->id ?: null;
        $productId = $this->context->smarty->tpl_vars['product']->value->id_product;
        $productAttributeId = $this->context->smarty->tpl_vars['product']->value->id_product_attribute;

        $productQuantity = \PrestaShop\PrestaShop\Adapter\Entity\StockAvailable::getQuantityAvailableByProduct($productId, $productAttributeId);

        Media::addJsDef([
            'stripe_express_amount' => $stripeExpressAmount,
            'stripe_express_currency_iso' => $isoCode,
            'stripe_express_cart_id' => $cartId,
            'stripe_express_customer_model' => $customerModel,
            'stripe_express_phone' => $phone,
            'stripe_express_product_id' => $productId,
            'stripe_express_product_quantity' => $productQuantity,
            'stripe_express_return_url' => $this->context->link->getModuleLink(
                'stripe_official',
                'orderConfirmationReturn',
                ['cartId' => $this->context->cart->id],
                true
            ),
        ]);

        return $this->context->smarty->fetch(
            'module:' . $this->name . '/views/templates/front/express_checkout.tpl'
        );
    }

    /*
        Display Express Checkout Element on the Cart Page
    */
    public function hookDisplayShoppingCart()
    {
        $cart = $this->context->cart;
        $currency = new Currency($cart->id_currency);
        $stripeExpressAmount = $cart->getOrderTotal();
        $stripeExpressAmount = round($stripeExpressAmount, 2);
        $stripeExpressAmount = Stripe_official::isZeroDecimalCurrency($currency->iso_code) ?
            (int) $stripeExpressAmount :
            (int) number_format($stripeExpressAmount * 100, 0, '', '');
        $isoCode = strtolower($this->context->currency->iso_code);
        $customerModel = CustomerModel::getFromContext($this->context);
        $address = new Address(Address::getFirstCustomerAddressId($this->context->customer->id));
        $phone = $address->phone;
        $cartId = $this->context->cart->id ?: null;
        $cartProducts = $cart->getProducts();
        $productOutOfStock = Stripe_official::getCartProductOutOfStock($cartProducts);

        Media::addJsDef([
            'stripe_express_amount' => $stripeExpressAmount,
            'stripe_express_currency_iso' => $isoCode,
            'stripe_express_cart_id' => $cartId,
            'stripe_express_customer_model' => $customerModel,
            'stripe_express_phone' => $phone,
            'stripe_express_product_quantity' => $productOutOfStock,
            'stripe_express_return_url' => $this->context->link->getModuleLink(
                'stripe_official',
                'orderConfirmationReturn',
                ['cartId' => $this->context->cart->id],
                true
            ),
        ]);

        return $this->context->smarty->fetch(
            'module:' . $this->name . '/views/templates/front/express_checkout.tpl'
        );
    }

    /**
     * Load JS on the front office order page
     */
    public function hookHeader()
    {
        $orderPageNames = ['order', 'orderopc', 'cart', 'product'];
        Hook::exec('actionStripeDefineOrderPageNames', ['orderPageNames' => &$orderPageNames]);
        if ($_GET['controller'] === 'product') {
            Hook::exec('displayProductActions');
        }
        if ($_GET['controller'] === 'cart') {
            Hook::exec('displayShoppingCart');
        }

        if (!in_array(Dispatcher::getInstance()->getController(), $orderPageNames)) {
            return;
        }

        if (!self::isWellConfigured() || !$this->active) {
            return;
        }

        $cart = $this->context->cart;

        $address = new Address($cart->id_address_invoice);
        $currency = new Currency($cart->id_currency);
        $amount = $cart->getOrderTotal();
        $amount = Tools::ps_round($amount, 2);
        $amount = self::isZeroDecimalCurrency($currency->iso_code) ? $amount : $amount * 100;

        //        if ($amount == 0) {
        //            return;
        //        }

        // Merchant country (for payment request API)
        $merchantCountry = new Country(Configuration::get('PS_COUNTRY_DEFAULT'));

        if (version_compare(_PS_VERSION_, '1.7', '>=')) {
            $this->context->controller->registerJavascript(
                $this->name . '-stripe-v3',
                'https://js.stripe.com/v3/',
                [
                    'server' => 'remote',
                    'position' => 'head',
                ]
            );

            if (_PS_USE_MINIFY_JS_) {
                $this->context->controller->registerJavascript(
                    $this->name . '-payments',
                    'modules/' . $this->name . '/views/js/checkout.js'
                );
            } else {
                $this->context->controller->registerJavascript(
                    $this->name . '-payments',
                    'modules/' . $this->name . '/views/js/extensions/checkout.js'
                );
            }

            $this->context->controller->registerJavascript(
                $this->name . '-express-payments',
                'modules/' . $this->name . '/views/js/expressCheckout.js'
            );

            $prestashop_version = '1.7';
            $firstname = str_replace('"', '\\"', $this->context->customer->firstname);
            $lastname = str_replace('"', '\\"', $this->context->customer->lastname);
            $stripe_fullname = $firstname . ' ' . $lastname;
        }

        $address = new Address($this->context->cart->id_address_invoice);

        // Javacript variables needed by Elements
        Media::addJsDef([
            'stripe_pk' => $this->getPublishableKey(),
            'stripe_merchant_country_code' => $merchantCountry->iso_code,

            'stripe_currency' => Tools::strtolower($currency->iso_code),
            'stripe_amount' => Tools::ps_round($amount, 2),

            'stripe_fullname' => $stripe_fullname,

            'stripe_address' => $address,
            'stripe_address_country_code' => Country::getIsoById($address->id_country),

            'stripe_email' => $this->context->customer->email,

            'stripe_locale' => $this->context->language->iso_code,

            'stripe_create_elements' => $this->context->link->getModuleLink(
                $this->name,
                'createElements',
                [],
                true
            ),

            'stripe_css' => '{"base": {"iconColor": "#666ee8","color": "#31325f","fontWeight": 400,"fontFamily": "-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif","fontSmoothing": "antialiased","fontSize": "15px","::placeholder": { "color": "#aab7c4" },":-webkit-autofill": { "color": "#666ee8" }}}',

            'stripe_ps_version' => $prestashop_version,

            'stripe_module_dir' => Media::getMediaPath(_PS_MODULE_DIR_ . $this->name),

            'stripe_message' => [
                'processing' => self::useNewTranslationSystem() ? $this->trans('Processing…', [], self::MODULE_MAIN_CLASS) : $this->l('Processing…'),
                'accept_cgv' => self::useNewTranslationSystem() ? $this->trans('Please accept the CGV', [], self::MODULE_MAIN_CLASS) : $this->l('Please accept the CGV'),
                'redirecting' => self::useNewTranslationSystem() ? $this->trans('Redirecting…', [], self::MODULE_MAIN_CLASS) : $this->l('Redirecting…'),
            ],

            'stripe_payment_elements_enabled' => Configuration::get(self::ENABLE_PAYMENT_ELEMENTS),
            'capture_method' => Configuration::get(Stripe_official::CATCHANDAUTHORIZE) ? 'manual' : 'automatic',
            'postcode' => $address->postcode,
            'stripe_theme' => Configuration::get(self::THEME),
            'stripe_position' => Configuration::get(self::POSITION),
            'stripe_layout' => Configuration::get(self::LAYOUT),
            'use_new_ps_translation' => self::useNewTranslationSystem(),
            'express_checkout' => Configuration::get(self::ENABLE_EXPRESS_CHECKOUT),
            'stripe_locations' => explode(', ', Configuration::get(self::EXPRESS_CHECKOUT_LOCATIONS)),
            'apple_pay_button_theme' => Configuration::get(self::APPLE_PAY_BUTTON_THEME),
            'apple_pay_button_type' => Configuration::get(self::APPLE_PAY_BUTTON_TYPE),
            'google_pay_button_theme' => Configuration::get(self::GOOGLE_PAY_BUTTON_THEME),
            'google_pay_button_type' => Configuration::get(self::GOOGLE_PAY_BUTTON_TYPE),
            'pay_pal_button_theme' => Configuration::get(self::PAY_PAL_BUTTON_THEME),
            'pay_pal_button_type' => Configuration::get(self::PAY_PAL_BUTTON_TYPE),
            'stripe_order_flow' => Configuration::get(self::ORDER_FLOW),

            'handle_order_action_url' => $this->context->link->getModuleLink(
                $this->name,
                'handleOrderAction',
                [],
                true
            ),

            'stripe_create_express_checkout' => $this->context->link->getModuleLink(
                $this->name,
                'createExpressCheckout',
                [],
                true
            ),
            'stripe_create_intent' => $this->context->link->getModuleLink(
                $this->name,
                'createIntent',
                [],
                true
            ),
            'stripe_order_confirm' => $this->context->link->getModuleLink(
                $this->name,
                'orderConfirmationReturn',
                [],
                true
            ),
            'stripe_calculate_shipping' => $this->context->link->getModuleLink(
                $this->name,
                'calculateShipping',
                [],
                true
            ),
        ]);
    }

    public function hookDisplayPaymentEU($params)
    {
        return [];
    }

    /**
     * Hook Stripe Payment
     */
    public function hookPaymentOptions($params)
    {
        if (!self::isWellConfigured() || !$this->active) {
            return [];
        }

        $stripeAccount = $this->checkApiConnection();
        if (!$stripeAccount instanceof Account) {
            return [];
        }

        $shopGroupId = Stripe_official::getShopGroupIdContext();
        $shopId = Stripe_official::getShopIdContext();

        $paymentMethod = self::$paymentMethods[self::PM_PAYMENT_ELEMENTS];
        if (!Configuration::get(self::ENABLE_PAYMENT_ELEMENTS, null, $shopGroupId, $shopId)) {
            $paymentMethod = self::$paymentMethods[self::PM_CHECKOUT];
        }

        $paymentOption = new PaymentOption();
        $paymentOption
            ->setModuleName($this->name)
            // ->setLogo(Media::getMediaPath(_PS_MODULE_DIR_.$this->name.'/views/img/example.png'))
            ->setCallToActionText($this->button_label[$paymentMethod['name']]);

        // Display additional information for redirect and receiver based payment methods
        if ($paymentMethod['flow'] === self::PM_FLOW_REDIRECT) {
            $paymentOption->setAdditionalInformation(
                $this->context->smarty->fetch(
                    'module:' . $this->name . '/views/templates/front/payment_info_redirect.tpl'
                )
            );
        }

        // Payment methods with embedded form fields
        if ($paymentMethod['flow'] === self::PM_FLOW_IFRAME) {
            $paymentOption->setForm(
                $this->context->smarty->fetch(
                    'module:' . $this->name . '/views/templates/front/payment_form_card.tpl'
                )
            );
        }
        $paymentOption->setAction($this->context->link->getModuleLink(
            $this->name,
            'handleOrderAction',
            [],
            true
        ));

        return [$paymentOption];
    }

    /**
     * Hook Order Confirmation
     */
    public function hookOrderConfirmation($params)
    {
        $order = $params['order'];
        $prestashop_version = '1.7';

        if (!self::isWellConfigured() || !$this->active || $order->module != $this->name) {
            return;
        }

        $stripePayment = new StripePayment();
        $stripePayment->getStripePaymentByCart($order->id_cart);

        $this->context->smarty->assign([
            'stripe_order_reference' => pSQL($order->reference),
            'prestashop_version' => $prestashop_version,
            'stripePayment' => $stripePayment,
            'use_new_ps_translation' => self::useNewTranslationSystem(),
        ]);

        return $this->display(__FILE__, 'views/templates/front/order-confirmation.tpl');
    }

    public static function getApiKeyConstantByModeAndType($mode, $type)
    {
        switch ($mode) {
            case self::MODE_LIVE:
                if ($type === self::TYPE_PUBLISHABLE) {
                    return self::PUBLISHABLE;
                }
                if ($type === self::TYPE_SECRET) {
                    return self::KEY;
                }
                break;
            case self::MODE_TEST:
                if ($type === self::TYPE_PUBLISHABLE) {
                    return self::TEST_PUBLISHABLE;
                }
                if ($type === self::TYPE_SECRET) {
                    return self::TEST_KEY;
                }
                break;
        }

        return '';
    }

    public function setStripeAppInformation()
    {
        $version = $this->version . '_' . _PS_VERSION_ . '_' . phpversion();
        Stripe::setAppInfo(
            'StripePrestashop',
            $version,
            'https://addons.prestashop.com/en/payment-card-wallet/24922-stripe-official.html',
            'pp_partner_EX2Z2idAZw7OWr'
        );
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    public static function useNewTranslationSystem()
    {
        if (version_compare(_PS_VERSION_, '1.7.6', '>=')) {
            return true;
        }

        return false;
    }

    public function getCartProductOutOfStock($cartProducts)
    {
        if (!empty($cartProducts)) {
            foreach ($cartProducts as $cartProduct) {
                $productQuantity = StockAvailable::getQuantityAvailableByProduct($cartProduct['id_product'], $cartProduct['id_product_attribute']);

                if (($productQuantity <= 0) || ($productQuantity < $cartProduct['quantity'])) {
                    return false;
                }
            }
        }

        return true;
    }
}
