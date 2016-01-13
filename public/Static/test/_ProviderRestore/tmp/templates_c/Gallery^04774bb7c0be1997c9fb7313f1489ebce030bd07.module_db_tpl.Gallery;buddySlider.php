<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 14:40:47
         compiled from "module_db_tpl:Gallery;buddySlider" */ ?>
<?php /*%%SmartyHeaderCode:167821716651f3bfcf62f122-99041773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04774bb7c0be1997c9fb7313f1489ebce030bd07' => 
    array (
      0 => 'module_db_tpl:Gallery;buddySlider',
      1 => 1374919281,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '167821716651f3bfcf62f122-99041773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3bfcf69c0a0_02577706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3bfcf69c0a0_02577706')) {function content_51f3bfcf69c0a0_02577706($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_root_url')) include '/homepages/26/d480780604/htdocs/plugins/function.root_url.php';
?><div class="banner" id="homeBanner">
<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
<div>
<?php if ($_smarty_tpl->tpl_vars['image']->value->isdir){?><img src="<?php echo smarty_modifier_replace(rawurlencode($_smarty_tpl->tpl_vars['image']->value->thumb),'%2F','/');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)){?>title="<?php echo $_smarty_tpl->tpl_vars['image']->value->comment;?>
"<?php }?> />
       <?php }else{ ?>
<img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/<?php echo smarty_modifier_replace(rawurlencode($_smarty_tpl->tpl_vars['image']->value->thumb),'%2F','/');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)){?>title="<?php echo $_smarty_tpl->tpl_vars['image']->value->comment;?>
"<?php }?> />
       <?php }?>
<h2><?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)){?><p><?php echo $_smarty_tpl->tpl_vars['image']->value->comment;?>
</p><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['image']->value->fields['link']['value'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->fields['link']['value'];?>
" class="readmore-slider">En savoir plus...</a>
<?php }?>
</div>
<?php } ?>
</div><?php }} ?>