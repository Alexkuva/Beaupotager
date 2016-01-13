<?php /* Smarty version Smarty-3.1.12, created on 2013-10-20 08:51:37
         compiled from "module_file_tpl:MenuManager;simple_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139815090252637d79ba9c53-67161185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02234e5b263ba20351bf2a5ebb4b57d4402a3cab' => 
    array (
      0 => 'module_file_tpl:MenuManager;simple_navigation.tpl',
      1 => 1374837063,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '139815090252637d79ba9c53-67161185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuparams' => 0,
    'count' => 0,
    'nodelist' => 0,
    'node' => 0,
    'number_of_levels' => 0,
    'classes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52637d79c9a3f9_31794629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52637d79c9a3f9_31794629')) {function content_52637d79c9a3f9_31794629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include '/homepages/26/d480780604/htdocs/plugins/function.repeat.php';
?> 

<?php if (isset($_smarty_tpl->tpl_vars['number_of_levels'])) {$_smarty_tpl->tpl_vars['number_of_levels'] = clone $_smarty_tpl->tpl_vars['number_of_levels'];
$_smarty_tpl->tpl_vars['number_of_levels']->value = 10000; $_smarty_tpl->tpl_vars['number_of_levels']->nocache = null; $_smarty_tpl->tpl_vars['number_of_levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['number_of_levels'] = new Smarty_variable(10000, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels'])){?>
  <?php if (isset($_smarty_tpl->tpl_vars['number_of_levels'])) {$_smarty_tpl->tpl_vars['number_of_levels'] = clone $_smarty_tpl->tpl_vars['number_of_levels'];
$_smarty_tpl->tpl_vars['number_of_levels']->value = $_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels']; $_smarty_tpl->tpl_vars['number_of_levels']->nocache = null; $_smarty_tpl->tpl_vars['number_of_levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['number_of_levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->depth>$_smarty_tpl->tpl_vars['node']->value->prevdepth){?>
<?php echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-$_smarty_tpl->tpl_vars['node']->value->prevdepth),$_smarty_tpl);?>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->depth<$_smarty_tpl->tpl_vars['node']->value->prevdepth){?>
<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->prevdepth-$_smarty_tpl->tpl_vars['node']->value->depth),$_smarty_tpl);?>

</li>
<?php }elseif($_smarty_tpl->tpl_vars['node']->value->index>0){?></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['node']->value->parent==true||$_smarty_tpl->tpl_vars['node']->value->current==true){?>
  <?php if (isset($_smarty_tpl->tpl_vars['classes'])) {$_smarty_tpl->tpl_vars['classes'] = clone $_smarty_tpl->tpl_vars['classes'];
$_smarty_tpl->tpl_vars['classes']->value = 'menuactive'; $_smarty_tpl->tpl_vars['classes']->nocache = null; $_smarty_tpl->tpl_vars['classes']->scope = 0;
} else $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable('menuactive', null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['node']->value->parent==true){?>
    <?php if (isset($_smarty_tpl->tpl_vars['classes'])) {$_smarty_tpl->tpl_vars['classes'] = clone $_smarty_tpl->tpl_vars['classes'];
$_smarty_tpl->tpl_vars['classes']->value = 'menuactive menuparent'; $_smarty_tpl->tpl_vars['classes']->nocache = null; $_smarty_tpl->tpl_vars['classes']->scope = 0;
} else $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable('menuactive menuparent', null, 0);?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['node']->value->children_exist==true&&$_smarty_tpl->tpl_vars['node']->value->depth<$_smarty_tpl->tpl_vars['number_of_levels']->value){?>
    <?php if (isset($_smarty_tpl->tpl_vars['classes'])) {$_smarty_tpl->tpl_vars['classes'] = clone $_smarty_tpl->tpl_vars['classes'];
$_smarty_tpl->tpl_vars['classes']->value = ($_smarty_tpl->tpl_vars['classes']->value).(' parent'); $_smarty_tpl->tpl_vars['classes']->nocache = null; $_smarty_tpl->tpl_vars['classes']->scope = 0;
} else $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['classes']->value).(' parent'), null, 0);?>
  <?php }?>
  <li class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"><a class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->children_exist==true&&$_smarty_tpl->tpl_vars['node']->value->depth<$_smarty_tpl->tpl_vars['number_of_levels']->value&&$_smarty_tpl->tpl_vars['node']->value->type!='sectionheader'&&$_smarty_tpl->tpl_vars['node']->value->type!='separator'){?>
<li class="parent"><a class="parent" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->current==true){?>
<li class="currentpage"><h3><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></h3>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->type=='sectionheader'){?>
<li class="sectionheader"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->type=='separator'){?>
<li class="separator" style="list-style-type: none;"> <hr />

<?php }else{ ?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php }?>

<?php } ?>
<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-1),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>