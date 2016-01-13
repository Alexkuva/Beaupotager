<?php /* Smarty version Smarty-3.1.12, created on 2013-10-25 00:22:48
         compiled from "module_db_tpl:CMSPrinting;printtemplate" */ ?>
<?php /*%%SmartyHeaderCode:179258984652699db8bdce25-33325795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28fd80bec914544389cbf784794930a520c2058e' => 
    array (
      0 => 'module_db_tpl:CMSPrinting;printtemplate',
      1 => 1374839715,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '179258984652699db8bdce25-33325795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rooturl' => 0,
    'encoding' => 0,
    'templateid' => 0,
    'overridestylesheet' => 0,
    'content' => 0,
    'printscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52699db8deb1b7_61075204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52699db8deb1b7_61075204')) {function content_52699db8deb1b7_61075204($_smarty_tpl) {?><?php if (!is_callable('smarty_function_title')) include '/homepages/26/d480780604/htdocs/plugins/function.title.php';
if (!is_callable('smarty_cms_function_cms_stylesheet')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_stylesheet.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Printing <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>
    <meta name="robots" content="noindex" />
    <base href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
" />
    <meta name="Generator" content="CMS Made Simple - Copyright (C) 2004-12 Ted Kulp. All rights reserved." />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['encoding']->value;?>
" />

    <?php echo smarty_cms_function_cms_stylesheet(array('media'=>'print','templateid'=>$_smarty_tpl->tpl_vars['templateid']->value),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['overridestylesheet']->value!=''){?>
    <style type="text/css">
    <?php echo $_smarty_tpl->tpl_vars['overridestylesheet']->value;?>

    </style>
    <?php }?>
    
  </head>
  <body style="background-color: white; color: black; background-image: none; text-align: left;">	
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
    <?php echo $_smarty_tpl->tpl_vars['printscript']->value;?>

  </body>
</html>
<?php }} ?>