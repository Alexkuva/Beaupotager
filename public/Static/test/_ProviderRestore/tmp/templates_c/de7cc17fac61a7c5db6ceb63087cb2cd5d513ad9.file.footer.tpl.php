<?php /* Smarty version Smarty-3.1.12, created on 2013-09-16 21:56:50
         compiled from "/homepages/26/d480780604/htdocs/admin/themes/OneEleven/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27410068152376282a35273-17346776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7cc17fac61a7c5db6ceb63087cb2cd5d513ad9' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/admin/themes/OneEleven/templates/footer.tpl',
      1 => 1374836817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27410068152376282a35273-17346776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'marks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52376282a55701_88840508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52376282a55701_88840508')) {function content_52376282a55701_88840508($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_version')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_versionname.php';
?><footer id="oe_footer" class="cf"><div class="footer-left"><small class="copyright">Copyright &copy; <a rel="external" href="http://www.cmsmadesimple.org">CMS Made Simple&trade; <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 &ldquo;<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
&rdquo;</a></small></div><?php if (isset($_smarty_tpl->tpl_vars['marks']->value)){?><div class="footer-right cf"><ul class="links"><li><a href="http://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a href="http://forum.cmsmadesimple.org/" rel="external" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/" rel="external" title="<?php echo lang('about');?>
"><?php echo lang('about');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/about-us/" rel="external" title="<?php echo lang('team');?>
"><?php echo lang('team');?>
</a></li></ul></div><?php }?></footer><?php }} ?>