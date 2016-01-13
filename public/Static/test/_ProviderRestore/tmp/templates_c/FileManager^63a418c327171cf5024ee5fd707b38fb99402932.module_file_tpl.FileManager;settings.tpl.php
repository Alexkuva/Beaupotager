<?php /* Smarty version Smarty-3.1.12, created on 2013-08-09 12:01:05
         compiled from "module_file_tpl:FileManager;settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14502158765204bde1b57ed0-98965950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63a418c327171cf5024ee5fd707b38fb99402932' => 
    array (
      0 => 'module_file_tpl:FileManager;settings.tpl',
      1 => 1374837058,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '14502158765204bde1b57ed0-98965950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formstart' => 0,
    'advancedmodetext' => 0,
    'advancedmodeinput' => 0,
    'advancedmodehelp' => 0,
    'showhiddenfilestext' => 0,
    'showhiddenfilesinput' => 0,
    'showhiddenfileshelp' => 0,
    'showthumbnailstext' => 0,
    'showthumbnailsinput' => 0,
    'showthumbnailshelp' => 0,
    'mod' => 0,
    'actionid' => 0,
    'yesno_options' => 0,
    'create_thumbnails' => 0,
    'iconsizetext' => 0,
    'iconsizeinput' => 0,
    'thousanddelimitertext' => 0,
    'thousanddelimiterinput' => 0,
    'permissionstyletext' => 0,
    'permissionstyleinput' => 0,
    'submit' => 0,
    'formend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5204bde1b9a728_52063749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5204bde1b9a728_52063749')) {function content_5204bde1b9a728_52063749($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>


<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['advancedmodetext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['advancedmodeinput']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['advancedmodehelp']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['showhiddenfilestext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['showhiddenfilesinput']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['showhiddenfileshelp']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['showthumbnailstext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['showthumbnailsinput']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['showthumbnailshelp']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_thumbnails');?>
:</p>
  <p class="pageinput">
    <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
create_thumbnails">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno_options']->value,'selected'=>$_smarty_tpl->tpl_vars['create_thumbnails']->value),$_smarty_tpl);?>

    </select>
    <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_create_thumbnails');?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['iconsizetext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['iconsizeinput']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['thousanddelimitertext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['thousanddelimiterinput']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['permissionstyletext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['permissionstyleinput']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

<?php }} ?>