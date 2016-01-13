<?php /* Smarty version Smarty-3.1.12, created on 2013-09-16 21:56:50
         compiled from "/homepages/26/d480780604/htdocs/admin/themes/OneEleven/templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95093567552376282992479-22397362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40085aff0662e9a73a31f88cc9fa128881cf17c6' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/admin/themes/OneEleven/templates/messages.tpl',
      1 => 1374836818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95093567552376282992479-22397362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523762829c10a0_59044357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523762829c10a0_59044357')) {function content_523762829c10a0_59044357($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value[0]!=''){?><aside class="message pageerrorcontainer" role="alert"><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?><?php } ?></aside><?php }?><?php if (isset($_smarty_tpl->tpl_vars['messages']->value)&&$_smarty_tpl->tpl_vars['messages']->value[0]!=''){?><aside class="message pagemcontainer" role="status"><?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['message']->value){?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?><?php } ?></aside><?php }?>
<?php }} ?>