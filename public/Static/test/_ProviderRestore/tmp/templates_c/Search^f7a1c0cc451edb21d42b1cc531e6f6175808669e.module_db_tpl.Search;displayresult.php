<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 16:04:14
         compiled from "module_db_tpl:Search;displayresult" */ ?>
<?php /*%%SmartyHeaderCode:209927900151f3d35ea9dd31-08770594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a1c0cc451edb21d42b1cc531e6f6175808669e' => 
    array (
      0 => 'module_db_tpl:Search;displayresult',
      1 => 1374839715,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '209927900151f3d35ea9dd31-08770594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchresultsfor' => 0,
    'phrase' => 0,
    'itemcount' => 0,
    'results' => 0,
    'entry' => 0,
    'timetaken' => 0,
    'timetook' => 0,
    'noresultsfound' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3d35eb14c94_39049449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3d35eb14c94_39049449')) {function content_51f3d35eb14c94_39049449($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['searchresultsfor']->value;?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['phrase']->value;?>
&quot;</h3>
<?php if ($_smarty_tpl->tpl_vars['itemcount']->value>0){?>
<ul>
  <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->urltxt;?>
</a> (<?php echo $_smarty_tpl->tpl_vars['entry']->value->weight;?>
%)</li>
  
  <?php } ?>
</ul>

<p><?php echo $_smarty_tpl->tpl_vars['timetaken']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['timetook']->value;?>
</p>
<?php }else{ ?>
  <p><strong><?php echo $_smarty_tpl->tpl_vars['noresultsfound']->value;?>
</strong></p>
<?php }?><?php }} ?>