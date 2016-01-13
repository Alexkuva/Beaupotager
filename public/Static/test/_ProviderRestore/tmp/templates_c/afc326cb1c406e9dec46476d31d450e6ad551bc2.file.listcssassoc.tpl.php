<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 16:34:25
         compiled from "/homepages/26/d480780604/htdocs/admin/templates/listcssassoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21006310851f3da710598b1-52119294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc326cb1c406e9dec46476d31d450e6ad551bc2' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/admin/templates/listcssassoc.tpl',
      1 => 1374836792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21006310851f3da710598b1-52119294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_template' => 0,
    'edittemplate_link' => 0,
    'cssassoc' => 0,
    'text_title' => 0,
    'text_move' => 0,
    'currow' => 0,
    'one' => 0,
    'formstart' => 0,
    'dropdown' => 0,
    'hidden' => 0,
    'submit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3da710fbe69_60595565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3da710fbe69_60595565')) {function content_51f3da710fbe69_60595565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.cycle.php';
?><div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['text_template']->value;?>
</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['edittemplate_link']->value;?>
</p>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['cssassoc']->value)){?>
<div class=pageoverflow">
<table cellspacing="0" class="pagetable">
  <thead>
  <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['text_title']->value;?>
</th>
    <th class="pageicon" colspan="2"><?php echo $_smarty_tpl->tpl_vars['text_move']->value;?>
</th>
    <th class="pageicon">&nbsp;</th>
    <th class="pageicon">&nbsp;</th>
 </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssassoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
    <?php echo smarty_function_cycle(array('values'=>'row1,row2','assign'=>'currow'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['currow']->value;?>
">
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['editlink'];?>
</td>
      <td><?php if (isset($_smarty_tpl->tpl_vars['one']->value['downlink'])){?><?php echo $_smarty_tpl->tpl_vars['one']->value['downlink'];?>
<?php }?></td>
      <td><?php if (isset($_smarty_tpl->tpl_vars['one']->value['uplink'])){?><?php echo $_smarty_tpl->tpl_vars['one']->value['uplink'];?>
<?php }?></td>
      <td><?php echo $_smarty_tpl->tpl_vars['one']->value['editimg'];?>
</td>
      <td><?php if (isset($_smarty_tpl->tpl_vars['one']->value['deletelink'])){?><?php echo $_smarty_tpl->tpl_vars['one']->value['deletelink'];?>
<?php }?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['formstart']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<div class="pageoverflow">
  <p class="pageinput">
    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value;?>

  </p>
</div>
<div class="pageoverflow">
  <div><?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
</div>
  <p class="pageinput">
    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>

  </p>
</form>
<?php }?><?php }} ?>