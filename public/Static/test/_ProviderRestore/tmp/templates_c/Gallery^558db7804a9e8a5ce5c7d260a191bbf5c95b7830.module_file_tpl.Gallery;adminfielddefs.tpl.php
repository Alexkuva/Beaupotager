<?php /* Smarty version Smarty-3.1.12, created on 2013-09-16 18:22:00
         compiled from "module_file_tpl:Gallery;adminfielddefs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905881548523730288b84a0-23665712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558db7804a9e8a5ce5c7d260a191bbf5c95b7830' => 
    array (
      0 => 'module_file_tpl:Gallery;adminfielddefs.tpl',
      1 => 1374844376,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '905881548523730288b84a0-23665712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'newfielddeflink' => 0,
    'formstart' => 0,
    'fielddef' => 0,
    'galleries' => 0,
    'images' => 0,
    'alias' => 0,
    'type' => 0,
    'public' => 0,
    'entry' => 0,
    'formend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52373028918483_86675627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52373028918483_86675627')) {function content_52373028918483_86675627($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['items']->value)>0){?>
<div class="pageoverflow">
  <p class="pageoptions"><?php echo $_smarty_tpl->tpl_vars['newfielddeflink']->value;?>
</p>
</div>
<div class="pageoverflow">
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<table cellspacing="0" class="pagetable">
  <thead>
    <tr>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['fielddef']->value;?>
 (<?php if ($_smarty_tpl->tpl_vars['items']->value[0]->dirfield){?><?php echo $_smarty_tpl->tpl_vars['galleries']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['images']->value;?>
<?php }?>)</th>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
</th>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
      <th class="pagew10"><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
    </tr>
  </thead>
<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['entry']->value->newtable){?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table cellspacing="0" class="pagetable">
  <thead>
    <tr>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['fielddef']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
)</th>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
</th>
      <th class="pagew25"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
      <th class="pagew10"><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
    </tr>
  </thead>
<?php }?>
    <tr class="<?php echo $_smarty_tpl->tpl_vars['entry']->value->rowclass;?>
">
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->alias;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->type;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->public;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->moveup;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->movedown;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->editlink;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->deletelink;?>
</td>
    </tr>
<?php } ?>
</table>



<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

</div>
<?php }?>

<div class="pageoverflow">
  <p class="pageoptions"><?php echo $_smarty_tpl->tpl_vars['newfielddeflink']->value;?>
</p>
</div>
<?php }} ?>