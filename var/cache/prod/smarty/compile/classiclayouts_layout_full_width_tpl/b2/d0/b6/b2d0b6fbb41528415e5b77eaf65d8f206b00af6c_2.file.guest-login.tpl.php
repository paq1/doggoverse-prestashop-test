<?php
/* Smarty version 4.3.4, created on 2024-12-09 16:05:35
  from '/home/u781792684/domains/pierre-paquin.fr/public_html/themes/classic/templates/customer/guest-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6757073f5f1225_98277786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d0b6fbb41528415e5b77eaf65d8f206b00af6c' => 
    array (
      0 => '/home/u781792684/domains/pierre-paquin.fr/public_html/themes/classic/templates/customer/guest-login.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6757073f5f1225_98277786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3012697946757073f5ed313_16983198', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3016335706757073f5edf91_70791524', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_3012697946757073f5ed313_16983198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_3012697946757073f5ed313_16983198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Order Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_3016335706757073f5edf91_70791524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3016335706757073f5edf91_70791524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form id="guestOrderTrackingForm" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking'], ENT_QUOTES, 'UTF-8');?>
" method="get">
    <header>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To track your order, please enter the following information:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">
    
      <input type="hidden" name="controller" value="guest-tracking" >

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="order_reference"
            type="text"
            size="8"
            value="<?php if ((isset($_REQUEST['order_reference']))) {
echo htmlspecialchars((string) $_REQUEST['order_reference'], ENT_QUOTES, 'UTF-8');
}?>"
          >
          <div class="form-control-comment">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: QIIXJXNUI or QIIXJXNUI#1','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="email"
            type="email"
            value="<?php if ((isset($_REQUEST['email']))) {
echo htmlspecialchars((string) $_REQUEST['email'], ENT_QUOTES, 'UTF-8');
}?>"
          >
        </div>
      </div>

    </section>

    <footer class="form-footer text-sm-center clearfix">
      <button class="btn btn-primary" type="submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </footer>
  </form>
<?php
}
}
/* {/block 'page_content'} */
}
