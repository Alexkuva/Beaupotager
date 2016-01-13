<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 16:16:39
         compiled from "module_file_tpl:Gallery;editimage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81732475751f3d647a01997-22802740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327d4b040c47ea59356ecd0105c2a9bf7b74f1a6' => 
    array (
      0 => 'module_file_tpl:Gallery;editimage.tpl',
      1 => 1374844376,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '81732475751f3d647a01997-22802740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'file' => 0,
    'rotateanticlockwise' => 0,
    'rotateclockwise' => 0,
    'TabHeaders' => 0,
    'StartTab_image' => 0,
    'formstart' => 0,
    'hidden' => 0,
    'title' => 0,
    'comment' => 0,
    'filedate' => 0,
    'field' => 0,
    'submit' => 0,
    'apply' => 0,
    'cancel' => 0,
    'formend' => 0,
    'EndTab' => 0,
    'StartTab_thumbs' => 0,
    'formstart2' => 0,
    'hidden2' => 0,
    'prompt_template' => 0,
    'template' => 0,
    'thumb_current' => 0,
    'thumb_preview' => 0,
    'editthumb_help' => 0,
    'submit2' => 0,
    'apply2' => 0,
    'cancel2' => 0,
    'redirect_url' => 0,
    'id' => 0,
    'EndTabContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3d647a8d667_27432732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3d647a8d667_27432732')) {function content_51f3d647a8d667_27432732($_smarty_tpl) {?>

<div class="pageoverflow">
	<div style="float:left; border:2px solid #ccc; margin:0 50px; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
</div>
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
: #<?php echo $_smarty_tpl->tpl_vars['image']->value->fileid;?>
</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['image']->value->filename_input;?>
</p>
  <p class="pageinput"><br /><br /></p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['rotateanticlockwise']->value;?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['rotateclockwise']->value;?>
</p>
</div>


<?php echo $_smarty_tpl->tpl_vars['TabHeaders']->value;?>

<?php echo $_smarty_tpl->tpl_vars['StartTab_image']->value;?>


<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>


<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['image']->value->title_input;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['image']->value->comment_input;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['filedate']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['image']->value->filedate_input;?>
</p>
</div>

<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['image']->value->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['field']->value['fieldhtml'];?>
</p>
</div>
<?php } ?>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
<?php echo $_smarty_tpl->tpl_vars['apply']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</p>
	<p>&nbsp;</p>
</div>

<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>


<?php echo $_smarty_tpl->tpl_vars['EndTab']->value;?>

<?php echo $_smarty_tpl->tpl_vars['StartTab_thumbs']->value;?>


<?php echo $_smarty_tpl->tpl_vars['formstart2']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hidden2']->value;?>


<div style="float:left; min-width:200px;">
	<?php echo $_smarty_tpl->tpl_vars['prompt_template']->value;?>
<br />
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

	<br /><br />
	<?php echo $_smarty_tpl->tpl_vars['thumb_current']->value;?>
<br />
	<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumburl;?>
" id="currentthumb" alt="current thumbnail" style="border:2px solid #ccc; padding:1px;" />
	<br /><br />
	<?php echo $_smarty_tpl->tpl_vars['thumb_preview']->value;?>
<br />
	<div style="padding-right:40px; margin-right:20px; background: transparent url(../modules/Gallery/images/back.gif) no-repeat right center;">
		<div id="thumbpreviewcontainer" style="overflow:hidden; border:2px solid #ccc; padding:1px;">
			<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" id="thumbpreview" alt="thumbnail preview" />
		</div>
	</div>
	<br /><br />
	
</div>

<div style="float:left;">
	<?php echo $_smarty_tpl->tpl_vars['editthumb_help']->value;?>
<br />
  <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" id="cropbox" <?php echo $_smarty_tpl->tpl_vars['image']->value->filewidthheight;?>
 alt="" style="border:2px solid #ccc; padding:1px;" />
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit2']->value;?>
<?php echo $_smarty_tpl->tpl_vars['apply2']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cancel2']->value;?>
</p>
	<p>&nbsp;</p>
</div>

<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>


<script type="text/javascript">
	$(function() {
		$('#templateid').change( function() {
			location.href = "<?php echo $_smarty_tpl->tpl_vars['redirect_url']->value;?>
"+$(this).val();
		});
		ias = $('#cropbox').imgAreaSelect({
			instance: true,
			onSelectChange: preview,
			onSelectEnd: function (img, selection) {
				$('input[name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
x1"]').val(selection.x1);
				$('input[name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
y1"]').val(selection.y1);
				$('input[name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
x2"]').val(selection.x2);
				$('input[name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
y2"]').val(selection.y2);
			}
		});
		changethumb();
	});
</script>

<?php echo $_smarty_tpl->tpl_vars['EndTab']->value;?>

<?php echo $_smarty_tpl->tpl_vars['EndTabContent']->value;?>
<?php }} ?>