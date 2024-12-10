<?php
/* Smarty version 4.3.4, created on 2024-12-09 15:56:55
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67570537bb40c6_87295375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_67570537bb40c6_87295375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u781792684/domains/pierre-paquin.fr/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/43/66/3c/43663ce27f9150c0ca8c1e879e66b84c481f96de_2.file.helpers.tpl.php',
    'uid' => '43663ce27f9150c0ca8c1e879e66b84c481f96de',
    'call_name' => 'smarty_template_function_renderLogo_109460930667570537aa81d7_41528866',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://pierre-paquin.fr/index.php?controller=my-account" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="https://pierre-paquin.fr/index.php?controller=guest-tracking" title="Suivi de commande" rel="nofollow">Suivi de commande</a></li>
        <li><a href="https://pierre-paquin.fr/index.php?controller=my-account" title="Identifiez-vous" rel="nofollow">Connexion</a></li>
        <li><a href="https://pierre-paquin.fr/index.php?controller=registration" title="Créez votre compte" rel="nofollow">Créez votre compte</a></li>
        <li>
  <a href="//pierre-paquin.fr/index.php?fc=module&module=ps_emailalerts&controller=account" title="Mes alertes">
    Mes alertes
  </a>
</li>

       
	</ul>
</div>
<?php }
}
