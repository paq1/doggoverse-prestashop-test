<?php
/* Smarty version 4.3.4, created on 2024-12-09 15:56:55
  from '/home/u781792684/domains/pierre-paquin.fr/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67570537aacff2_91351050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43663ce27f9150c0ca8c1e879e66b84c481f96de' => 
    array (
      0 => '/home/u781792684/domains/pierre-paquin.fr/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67570537aacff2_91351050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u781792684/domains/pierre-paquin.fr/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/43/66/3c/43663ce27f9150c0ca8c1e879e66b84c481f96de_2.file.helpers.tpl.php',
    'uid' => '43663ce27f9150c0ca8c1e879e66b84c481f96de',
    'call_name' => 'smarty_template_function_renderLogo_109460930667570537aa81d7_41528866',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_109460930667570537aa81d7_41528866 */
if (!function_exists('smarty_template_function_renderLogo_109460930667570537aa81d7_41528866')) {
function smarty_template_function_renderLogo_109460930667570537aa81d7_41528866(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_109460930667570537aa81d7_41528866 */
}
