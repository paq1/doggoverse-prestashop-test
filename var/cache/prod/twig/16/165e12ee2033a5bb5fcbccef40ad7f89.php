<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__9b53957dd2eb8e614fa03b917aafab87 */
class __TwigTemplate_51893aae34a10a7fbf87a8adf48a7178 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Préférences • doggoverse</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPreferences';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'b8d6ca4ee7eaeb8c4598b1e0c922793f';
    var currentIndex = 'index.php?controller=AdminPreferences';
    var employee_token = '143090e6242069680d0b67bac3aec843';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '2';
    var admin_modules_link = '/ffs9tffreb6valbk/index.php/improve/modules/manage?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4';
    var admin_notification_get_link = '/ffs9tffreb6valbk/index.php/common/notifications?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4';
    var admin_notification_push_link = adminNotificationPushLink = '/ffs9tffreb6valbk/index.php/common/notifications/ack?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4';
    var tab_modules_list = '';
    var update_s";
        // line 42
        echo "uccess_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/ffs9tffreb6valbk/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/ffs9tffreb6valbk/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ffs9tffreb6valbk/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ffs9tffreb6valbk/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ffs9tffreb6valbk\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/ffs9tffreb6valbk\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"p";
        // line 67
        echo "rimaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ffs9tffreb6valbk/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/ffs9tffreb6valbk/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/ffs9tffreb6valbk/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ffs9tffreb6valbk/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/ffs9tffreb6valbk/index.php/common/notifications?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpreferences\"
  data-base-url=\"/ffs9tffreb6valbk/index.php\"  data-token=\"R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminDashboard&amp;token=33e743c737a162fa768e58926bc8f848\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/orders?token=a597064c01b901cac4f4c19a3c921abe\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0f482274539e573ff6cad5f227a9ac6f\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/improve/modules/manage?token=a597064c01b901cac4f4c19a3c921abe\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f37d122a04fa56172f0cd6fd5bb54e6f\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouvea";
        // line 138
        echo "u bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/catalog/products-v2/create?token=a597064c01b901cac4f4c19a3c921abe\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/catalog/categories/new?token=a597064c01b901cac4f4c19a3c921abe\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"78\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences/preferences?-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\"
        data-post-link=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminQuickAccesses&token=0dad06fbd58a740ff4c624e3d52e7ed1\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Param&egrave;tres...\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminQuickAccesses&token=0dad06fbd58a740ff4c624e3d52e7ed1\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/ffs9tffreb6valbk/index.php?controller=AdminSearch&amp;token=230e2cfc8663ecf78d713cc6c5b82e39\"
      role=\"search\">
  <in";
        // line 177
        echo "put type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=";
        // line 192
        echo "\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/orders?token=a597064c01b901cac4f4c19a3c921abe\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0f482274539e573ff6cad5f227a9ac6f\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/improve/modules/manage?token=a597064c01b901cac4f4c19a3c921abe\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f37d122a04fa56172f0cd6fd5bb54e6f\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/catalog/products-v2/create?token=a597064c01b90";
        // line 229
        echo "1cac4f4c19a3c921abe\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php/sell/catalog/categories/new?token=a597064c01b901cac4f4c19a3c921abe\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"148\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/preferences/preferences?-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\"
      data-post-link=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminQuickAccesses&token=0dad06fbd58a740ff4c624e3d52e7ed1\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Param&egrave;tres...\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminQuickAccesses&token=0dad06fbd58a740ff4c624e3d52e7ed1\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://pierre-paquin.fr/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\"";
        // line 274
        echo " data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7bc67d6d1f2b7af2acc245e2befc5690\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y";
        // line 324
        echo " trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_ci";
        // line 374
        echo "rcle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://pierre-paquin.fr/img/pr/default.jpg\" alt=\"Site\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Site</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/ffs9tffreb6valbk/index.php/configure/advanced/employees/1/edit?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminLogin&amp;logout=1&amp;token=c7cf8e3fa9313ed1ef999a2cff0eafa7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ffs9tffreb6valbk/index.php/configure/advanced/employees/toggle-navigation?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminDashboard&amp;token=33e743c737a162fa768e58926bc8f848\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://pierre-paquin.fr/ffs9tffr";
        // line 421
        echo "eb6valbk/index.php?controller=AdminDashboard&amp;token=33e743c737a162fa768e58926bc8f848\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/ffs9tffreb6valbk/index.php/sell/orders/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/orders/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                          ";
        // line 459
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/orders/invoices/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/orders/credit-slips/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/orders/delivery-slips/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCarts&amp;token=7bc67d6d1f2b7af2acc245e2befc5690\" class=\"link\"> Paniers
                                </a>
                              </li>

                    ";
        // line 490
        echo "                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/ffs9tffreb6valbk/index.php/sell/catalog/products?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/catalog/products?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/catalog/categories?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Catégories
                 ";
        // line 520
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/catalog/monitoring/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminAttributesGroups&amp;token=4b943a93889509a8979a4850a1de739f\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/catalog/brands/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                         ";
        // line 551
        echo "       <a href=\"/ffs9tffreb6valbk/index.php/sell/attachments/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCartRules&amp;token=f37d122a04fa56172f0cd6fd5bb54e6f\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/stocks/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/ffs9tffreb6valbk/index.php/sell/customers/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                          ";
        // line 583
        echo "          <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/customers/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/addresses/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCustomerThreads&amp;token=e16e77a00d879d5e1fbeb3e40b93ff5a\" class=\"link\">
                      <i class=\"material-icon";
        // line 612
        echo "s mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCustomerThreads&amp;token=e16e77a00d879d5e1fbeb3e40b93ff5a\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/ffs9tffreb6valbk/index.php/sell/customer-service/order-messages/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminReturn&amp;token=94a5c8c5412cb2f783354e584787fe6c\" c";
        // line 641
        echo "lass=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminStats&amp;token=0f482274539e573ff6cad5f227a9ac6f\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/ffs9tffreb6valbk/index.php/improve/modules/manage?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                 ";
        // line 682
        echo "                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/modules/manage?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/ffs9tffreb6valbk/index.php/improve/design/themes/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-col";
        // line 711
        echo "lapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/design/themes/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/design/mail_theme/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/design/cms-pages/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/design/modules/positions/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC";
        // line 740
        echo "6Cj4\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminImages&amp;token=0db5caca3a1a0890c23860bfe8c0bd89\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/ffs9tffreb6valbk/index.php/modules/link-widget/list?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCarriers&amp;token=b960c986be7c50c7192bb27a27c11a98\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                            ";
        // line 773
        echo "                                        keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminCarriers&amp;token=b960c986be7c50c7192bb27a27c11a98\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/shipping/preferences/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/ffs9tffreb6valbk/index.php/improve/payment/payment_methods?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </";
        // line 804
        echo "span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/payment/payment_methods?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/payment/preferences?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/ffs9tffreb6valbk/index.php/improve/international/localization/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                    ";
        // line 834
        echo "  <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/international/localization/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/international/zones/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/international/taxes/?_token=R8RlGKBxuv-eX7K";
        // line 863
        echo "30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/ffs9tffreb6valbk/index.php/improve/international/translations/settings?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/preferences/preferences?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                    ";
        // line 900
        echo "                        </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/preferences/preferences?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/order-preferences/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/product-preferences/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"su";
        // line 929
        echo "btab-AdminParentCustomerPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/customer-preferences/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/contacts/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/seo-urls/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminSearchConf&amp;token=a4030f2e2dc4fb2ff2be33b790a19b31\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                             ";
        // line 959
        echo "           </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/system-information/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/system-information/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/performance/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Performances
   ";
        // line 988
        echo "                             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/administration/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/emails/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/import/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/ffs9tffreb6valbk/index.ph";
        // line 1019
        echo "p/configure/advanced/employees/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/sql-requests/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/logs/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/webservice-keys/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                     ";
        // line 1047
        echo "               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/feature-flags/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/ffs9tffreb6valbk/index.php/configure/advanced/security/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres généraux</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Préférences          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
         ";
        // line 1102
        echo "          data-url=\"/ffs9tffreb6valbk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.2.0%2526country%253Dfr/Aide?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/preferences/preferences?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"73\">
                      Paramètres généraux
                      <span class=\"notification-container\">
                        <span class=\"n";
        // line 1121
        echo "otification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/ffs9tffreb6valbk/index.php/configure/shop/maintenance/?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/ffs9tffreb6valbk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminPreferences%253Fversion%253D8.2.0%2526country%253Dfr/Aide?_token=R8RlGKBxuv-eX7K30-NormRB8jFCfgnFwGaHPkC6Cj4\"
            >
              Aide
     ";
        // line 1151
        echo "       </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1169
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://pierre-paquin.fr/ffs9tffreb6valbk/index.php?controller=AdminDashboard&amp;token=33e743c737a162fa768e58926bc8f848\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1203
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1169
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9b53957dd2eb8e614fa03b917aafab87";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1368 => 1203,  1347 => 1169,  1336 => 102,  1327 => 1203,  1287 => 1169,  1267 => 1151,  1235 => 1121,  1214 => 1102,  1157 => 1047,  1127 => 1019,  1094 => 988,  1063 => 959,  1031 => 929,  1000 => 900,  961 => 863,  930 => 834,  898 => 804,  865 => 773,  830 => 740,  799 => 711,  768 => 682,  725 => 641,  694 => 612,  663 => 583,  629 => 551,  596 => 520,  564 => 490,  531 => 459,  491 => 421,  442 => 374,  390 => 324,  338 => 274,  291 => 229,  252 => 192,  235 => 177,  194 => 138,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9b53957dd2eb8e614fa03b917aafab87", "");
    }
}
