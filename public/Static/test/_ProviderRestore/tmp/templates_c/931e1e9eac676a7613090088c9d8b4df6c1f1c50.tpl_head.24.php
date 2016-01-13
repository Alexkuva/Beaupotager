<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 17:11:56
         compiled from "tpl_head:24" */ ?>
<?php /*%%SmartyHeaderCode:64921889551f3bfcf827a63-02352134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931e1e9eac676a7613090088c9d8b4df6c1f1c50' => 
    array (
      0 => 'tpl_head:24',
      1 => 1374937912,
      2 => 'tpl_head',
    ),
  ),
  'nocache_hash' => '64921889551f3bfcf827a63-02352134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3bfcf854621_40671827',
  'variables' => 
  array (
    'newstitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3bfcf854621_40671827')) {function content_51f3bfcf854621_40671827($_smarty_tpl) {?><?php if (!is_callable('smarty_function_sitename')) include '/homepages/26/d480780604/htdocs/plugins/function.sitename.php';
if (!is_callable('smarty_function_title')) include '/homepages/26/d480780604/htdocs/plugins/function.title.php';
if (!is_callable('smarty_function_metadata')) include '/homepages/26/d480780604/htdocs/plugins/function.metadata.php';
if (!is_callable('smarty_cms_function_cms_stylesheet')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_stylesheet.php';
if (!is_callable('smarty_function_cms_selflink')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_selflink.php';
?><head>
<title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['newstitle']->value)){?><?php echo $_smarty_tpl->tpl_vars['newstitle']->value;?>
<?php }else{ ?><?php echo smarty_function_title(array(),$_smarty_tpl);?>
<?php }?></title>

<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

<?php echo smarty_cms_function_cms_stylesheet(array(),$_smarty_tpl);?>


<?php echo smarty_function_cms_selflink(array('dir'=>'start','rellink'=>1),$_smarty_tpl);?>

<?php echo smarty_function_cms_selflink(array('dir'=>'prev','rellink'=>1),$_smarty_tpl);?>

<?php echo smarty_function_cms_selflink(array('dir'=>'next','rellink'=>1),$_smarty_tpl);?>


<!-- JAVASCRIPT CALLS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/uploads/tpl-buddy-001/jquery.cycle.all.js" type="text/javascript"></script> 
<script src="/uploads/tpl-buddy-001/init.js" type="text/javascript"></script>
<!-- END JS CALLS -->


<!--[if IE 7]>
<style type="text/css">
#mainNav {margin:-60px 0 0;}
</style>
<![endif]-->



<!--[if lte IE 8]>
<style type="text/css">
#search input {padding: 8px 0 0;height:26px;}
</style>
<![endif]-->


</head><?php }} ?>