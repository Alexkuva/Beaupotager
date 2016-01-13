<?php /* Smarty version Smarty-3.1.12, created on 2013-09-16 18:22:00
         compiled from "module_file_tpl:Gallery;admingalleries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:748875244523730287e4b49-62309171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa86b5e18db34de896620621935b6f915d9b325' => 
    array (
      0 => 'module_file_tpl:Gallery;admingalleries.tpl',
      1 => 1374844376,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '748875244523730287e4b49-62309171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addgallery' => 0,
    'itemcount' => 0,
    'formstart' => 0,
    'gallerypath' => 0,
    'dirtag' => 0,
    'active' => 0,
    'items' => 0,
    'entry' => 0,
    'prompt_multiaction' => 0,
    'multiaction' => 0,
    'formend' => 0,
    'nogalleriestext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523730288669b8_55037154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523730288669b8_55037154')) {function content_523730288669b8_55037154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.cycle.php';
?><div class="pageoverflow">
	<?php echo $_smarty_tpl->tpl_vars['addgallery']->value;?>

</div>
<?php if ($_smarty_tpl->tpl_vars['itemcount']->value>0){?>

	<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>

	<table id="gtree" cellspacing="0" class="pagetable">
		<thead>
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['gallerypath']->value;?>
</th>
				<th class="pagew60"><?php echo $_smarty_tpl->tpl_vars['dirtag']->value;?>
</th>
				<th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['active']->value;?>
</th>			
				<th class="pageicon">&nbsp;</th>
				<th class="pageicon">&nbsp;</th>
				<th class="pageicon"><input id="selectall" type="checkbox" /></th>
			</tr>
		</thead>
		<tbody>
	<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
		<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

			
			<tr id="node-<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value->gidclass)){?> class="<?php echo trim($_smarty_tpl->tpl_vars['entry']->value->gidclass);?>
"<?php }?>>
				<td class="tfile"><?php echo $_smarty_tpl->tpl_vars['entry']->value->file;?>
</td>
				<td class="tfile"><?php echo $_smarty_tpl->tpl_vars['entry']->value->dirtag;?>
</td>
				<td class="pagepos" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['entry']->value->activelink;?>
</td>			
				<td class="pagepos" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['entry']->value->editlink;?>
</td>
				<td class="pagepos" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['entry']->value->deletelink;?>
</td>
				<td class="checkbox"><?php echo $_smarty_tpl->tpl_vars['entry']->value->imgselect;?>
</td>
			</tr>
	<?php } ?>
		</tbody>
	</table>

	<div style="margin-top: 0; float: right; text-align: right">
		<?php echo $_smarty_tpl->tpl_vars['prompt_multiaction']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['multiaction']->value;?>

	</div>

	<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>


<?php }else{ ?>
	<h4><?php echo $_smarty_tpl->tpl_vars['nogalleriestext']->value;?>
</h4>
<?php }?>

<div class="pageoverflow">
	&nbsp;
</div><?php }} ?>