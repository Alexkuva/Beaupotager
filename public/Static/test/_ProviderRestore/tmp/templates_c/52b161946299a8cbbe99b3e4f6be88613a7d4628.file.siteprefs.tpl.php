<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 16:44:57
         compiled from "/homepages/26/d480780604/htdocs/admin/templates/siteprefs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103889123551f3dce9404075-32541652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b161946299a8cbbe99b3e4f6be88613a7d4628' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/admin/templates/siteprefs.tpl',
      1 => 1374836794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103889123551f3dce9404075-32541652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_start' => 0,
    'general_start' => 0,
    'formurl' => 0,
    'SECURE_PARAM_NAME' => 0,
    'CMS_USER_KEY' => 0,
    'lang_sitename' => 0,
    'sitename' => 0,
    'lang_frontendlang' => 0,
    'languages' => 0,
    'frontendlang' => 0,
    'lang_frontendwysiwygtouse' => 0,
    'wysiwyg' => 0,
    'frontendwysiwyg' => 0,
    'lang_nogcbwysiwyg' => 0,
    'nogcbwysiwyg' => 0,
    'lang_globalmetadata' => 0,
    'metadata' => 0,
    'themes' => 0,
    'lang_logintheme' => 0,
    'logintheme' => 0,
    'lang_backendwysiwygtouse' => 0,
    'backendwysiwyg' => 0,
    'lang_date_format_string' => 0,
    'defaultdateformat' => 0,
    'lang_date_format_string_help' => 0,
    'lang_thumbnail_width' => 0,
    'thumbnail_width' => 0,
    'lang_thumbnail_height' => 0,
    'thumbnail_height' => 0,
    'search_modules' => 0,
    'search_module' => 0,
    'lang_submit' => 0,
    'lang_cancel' => 0,
    'tab_end' => 0,
    'listcontent_start' => 0,
    'titlemenu' => 0,
    'listcontent_showtitle' => 0,
    'yesno' => 0,
    'listcontent_showalias' => 0,
    'listcontent_showurl' => 0,
    'editcontent_start' => 0,
    'content_autocreate_urls' => 0,
    'content_autocreate_flaturls' => 0,
    'content_mandatory_urls' => 0,
    'all_contenttypes' => 0,
    'disallowed_contenttypes' => 0,
    'lang_basic_attributes' => 0,
    'all_attributes' => 0,
    'basic_attributes' => 0,
    'lang_info_basic_attributes' => 0,
    'content_imagefield_path' => 0,
    'content_thumbnailfield_path' => 0,
    'contentimage_path' => 0,
    'sitedown_start' => 0,
    'lang_enablesitedown' => 0,
    'enablesitedownmessage' => 0,
    'lang_enablewysiwyg' => 0,
    'use_wysiwyg' => 0,
    'lang_sitedownmessage' => 0,
    'textarea_sitedownmessage' => 0,
    'sitedownexcludeadmins' => 0,
    'lang_sitedownexcludes' => 0,
    'sitedownexcludes' => 0,
    'lang_info_sitedownexcludes' => 0,
    'setup_start' => 0,
    'allow_browser_cache' => 0,
    'browser_cache_expiry' => 0,
    'auto_clear_cache_age' => 0,
    'lang_info_autoclearcache' => 0,
    'lang_global_umask' => 0,
    'global_umask' => 0,
    'testresults' => 0,
    'lang_results' => 0,
    'lang_test' => 0,
    'lang_disablesafemodewarning' => 0,
    'disablesafemodewarning' => 0,
    'lang_admin_enablenotifications' => 0,
    'enablenotifications' => 0,
    'lang_pseudocron_granularity' => 0,
    'pseudocron_options' => 0,
    'pseudocron_granularity' => 0,
    'lang_info_pseudocron_granularity' => 0,
    'lang_adminlog_lifetime' => 0,
    'adminlog_options' => 0,
    'adminlog_lifetime' => 0,
    'lang_info_adminlog_lifetime' => 0,
    'lang_checkversion' => 0,
    'checkversion' => 0,
    'smarty_start' => 0,
    'use_smartycache' => 0,
    'use_smartycompilecheck' => 0,
    'smarty_cacheoptions' => 0,
    'smarty_cachemodules' => 0,
    'smarty_cacheoptions2' => 0,
    'smarty_cacheudt' => 0,
    'tabs_end' => 0,
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3dce96976c9_00481770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3dce96976c9_00481770')) {function content_51f3dce96976c9_00481770($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.html_options.php';
?><div class="pagecontainer">

<?php echo $_smarty_tpl->tpl_vars['tab_start']->value;?>


<?php echo $_smarty_tpl->tpl_vars['general_start']->value;?>

	<form id="siteprefform_general" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="general" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_sitename']->value;?>
</p>
		  <p class="pageinput"><input type="text" class="pagesmalltextarea" name="sitename" size="30" value="<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
" /></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_frontendlang']->value;?>
</p>
		  <p class="pageinput">
			<select name="frontendlang" style="vertical-align: middle;">
			   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['languages']->value,'selected'=>$_smarty_tpl->tpl_vars['frontendlang']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
			<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_frontendwysiwygtouse']->value;?>
:</p>
			<p class="pageinput">
				<select name="frontendwysiwyg">
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'selected'=>$_smarty_tpl->tpl_vars['frontendwysiwyg']->value),$_smarty_tpl);?>

				</select>
			</p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_nogcbwysiwyg']->value;?>
:</p>
		  <p class="pageinput"><input type="hidden" name="nogcbwysiwyg" value="0"/><input class="pagenb" type="checkbox" value="1" name="nogcbwysiwyg" <?php if ($_smarty_tpl->tpl_vars['nogcbwysiwyg']->value=="1"){?>checked="checked"<?php }?> /></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_globalmetadata']->value;?>
:</p>
		  <p class="pageinput"><textarea class="pagesmalltextarea" name="metadata" cols="80" rows="20"><?php echo $_smarty_tpl->tpl_vars['metadata']->value;?>
</textarea>
		  </p>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['themes']->value)){?>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_logintheme']->value;?>
:</p>
		  <p class="pageinput">
			<select name="logintheme">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['themes']->value,'selected'=>$_smarty_tpl->tpl_vars['logintheme']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>
		<?php }?>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_backendwysiwygtouse']->value;?>
:</p>
			<p class="pageinput">
				<select name="backendwysiwyg">
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'selected'=>$_smarty_tpl->tpl_vars['backendwysiwyg']->value),$_smarty_tpl);?>

				</select>
			</p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_date_format_string']->value;?>
:</p>
		  <p class="pageinput">
			<input class="pagenb" type="text" name="defaultdateformat" size="20" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['defaultdateformat']->value;?>
"/>
			<br/><?php echo $_smarty_tpl->tpl_vars['lang_date_format_string_help']->value;?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_thumbnail_width']->value;?>
:</p>
		  <p class="pageinput">
			<input class="pagenb" type="text" name="thumbnail_width" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail_width']->value;?>
"/>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_thumbnail_height']->value;?>
:</p>
		  <p class="pageinput">
			<input class="pagenb" type="text" name="thumbnail_height" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail_height']->value;?>
"/>
		  </p>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['search_modules']->value)){?>
		  <p class="pagetext"><?php echo lang('search_module');?>
:</p>
		  <p class="pageinput">
			<select name="search_module">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['search_modules']->value,'selected'=>$_smarty_tpl->tpl_vars['search_module']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_search_module');?>

		  </p>
		<?php }?>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>
	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['listcontent_start']->value;?>

	<form id="siteprefform_general" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="listcontent" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('listcontent_showtitle');?>
:</p>
		  <p class="pageinput">
			<select name="listcontent_showtitle">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['titlemenu']->value,'selected'=>$_smarty_tpl->tpl_vars['listcontent_showtitle']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('listcontent_showalias');?>
:</p>
		  <p class="pageinput">
			<select name="listcontent_showalias">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['listcontent_showalias']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('listcontent_showurl');?>
:</p>
		  <p class="pageinput">
			<select name="listcontent_showurl">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['listcontent_showurl']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>
	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['editcontent_start']->value;?>

	<form id="siteprefform_editcontent" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="editcontent" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('content_autocreate_urls');?>
:</p>
		  <p class="pageinput">
			<select name="content_autocreate_urls">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_autocreate_urls']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('content_autocreate_flaturls');?>
:</p>
		  <p class="pageinput">
			<select name="content_autocreate_flaturls">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_autocreate_flaturls']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_content_autocreate_flaturls');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('content_mandatory_urls');?>
:</p>
		  <p class="pageinput">
			<select name="content_mandatory_urls">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_mandatory_urls']->value),$_smarty_tpl);?>

			</select>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('disallowed_contenttypes');?>
:</p>
		  <p class="pageinput">
			<select name="disallowed_contenttypes[]" multiple="multiple" size="5">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_contenttypes']->value,'selected'=>$_smarty_tpl->tpl_vars['disallowed_contenttypes']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_disallowed_contenttypes');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_basic_attributes']->value;?>
:</p>
		  <p class="pageinput">
			<select name="basic_attributes[]" multiple="multiple" size="5">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_attributes']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_attributes']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo $_smarty_tpl->tpl_vars['lang_info_basic_attributes']->value;?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('content_imagefield_path');?>
:</p>
		  <p class="pageinput">
			<input type="text" name="content_imagefield_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['content_imagefield_path']->value;?>
"/>
			<br/>
			<?php echo lang('info_content_imagefield_path');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('content_thumbnailfield_path');?>
:</p>
		  <p class="pageinput">
			<input type="text" name="content_thumbnailfield_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['content_thumbnailfield_path']->value;?>
"/>
			<br/>
			<?php echo lang('info_content_thumbnailfield_path');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('contentimage_path');?>
:</p>
		  <p class="pageinput">
			<input type="text" name="contentimage_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['contentimage_path']->value;?>
"/>
			<br/>
			<?php echo lang('info_contentimage_path');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>

	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['sitedown_start']->value;?>

	<form id="siteprefform_sitedown" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="sitedown" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_enablesitedown']->value;?>
:</p>
		  <p class="pageinput"><input type="hidden" name="enablesitedownmessage" value="0"/><input class="pagenb" type="checkbox" value="1" name="enablesitedownmessage" <?php if ($_smarty_tpl->tpl_vars['enablesitedownmessage']->value=="1"){?>checked="checked"<?php }?>/></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_enablewysiwyg']->value;?>
:</p>
		  <p class="pageinput"><input type="hidden" name="use_wysiwyg" value="0"/><input type="checkbox" name="use_wysiwyg" id='use_wysiwyg' value="1" class="pagenb" <?php if ($_smarty_tpl->tpl_vars['use_wysiwyg']->value=="1"){?>checked="checked"<?php }?>/></p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_sitedownmessage']->value;?>
:</p>
		  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['textarea_sitedownmessage']->value;?>
</p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('sitedownexcludeadmins');?>
:</p>
		  <p class="pageinput">
			<input type="hidden" name="sitedownexcludeadmins" value="0"/>
			<input type="checkbox" name="sitedownexcludeadmins" value="1" <?php if ($_smarty_tpl->tpl_vars['sitedownexcludeadmins']->value==1){?>checked="checked"<?php }?>/>
		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_sitedownexcludes']->value;?>
:</p>
		  <p class="pageinput">
			 <input type="text" name="sitedownexcludes" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['sitedownexcludes']->value;?>
"/>
			 <br/>
			 <strong><?php echo lang('your_ipaddress');?>
:</strong>&nbsp;<?php echo $_SERVER['REMOTE_ADDR'];?>
<br/>
			 <?php echo $_smarty_tpl->tpl_vars['lang_info_sitedownexcludes']->value;?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>
	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['setup_start']->value;?>

	<form id="siteprefform_setup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="setup" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>

		<fieldset>
		<legend><?php echo lang('browser_cache_settings');?>
:&nbsp;</legend>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('allow_browser_cache');?>
:</p>
		  <p class="pageinput">
		   <input type="hidden" name="allow_browser_cache" value="0"/><input class="pagenb" value="1" type="checkbox" name="allow_browser_cache" <?php if ($_smarty_tpl->tpl_vars['allow_browser_cache']->value){?>checked="checked"<?php }?> /><br/><?php echo lang('info_browser_cache');?>
</p>
		</div>  
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('browser_cache_expiry');?>
:</p>
		  <p class="pageinput">
		   <input type="text" name="browser_cache_expiry" value="<?php echo $_smarty_tpl->tpl_vars['browser_cache_expiry']->value;?>
" size="6" maxlength="10"/><br/><?php echo lang('info_browser_cache_expiry');?>
</p>
		</div>  
		</fieldset>

		<fieldset>
		<legend><?php echo lang('server_cache_settings');?>
:&nbsp;</legend>

		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('autoclearcache2');?>
:</p>
		  <p class="pageinput">
			<input type="text" class="pagesmalltextarea"  name="auto_clear_cache_age" size="4" value="<?php echo $_smarty_tpl->tpl_vars['auto_clear_cache_age']->value;?>
" maxlength="4"/>
			<br/>
			<?php echo $_smarty_tpl->tpl_vars['lang_info_autoclearcache']->value;?>

		  </p>
		</div>

		</fieldset>

		<fieldset>
		<legend><?php echo lang('general_operation_settings');?>
:&nbsp;</legend>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_global_umask']->value;?>
:</p>
		  <p class="pageinput">
			<input type="text" class="pagesmalltextarea" name="global_umask" size="4" value="<?php echo $_smarty_tpl->tpl_vars['global_umask']->value;?>
" />
			<br/>
			<?php echo lang('info_umask');?>

		  </p>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['testresults']->value)){?>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_results']->value;?>
</p>
		  <p class="pageinput"><strong><?php echo $_smarty_tpl->tpl_vars['testresults']->value;?>
</strong></p>
		</div>
		<?php }?>
		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput"><input type="submit" name="testumask" value="<?php echo $_smarty_tpl->tpl_vars['lang_test']->value;?>
" class="pagebutton"  /></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_disablesafemodewarning']->value;?>
:</p>
		  <p class="pageinput"><input type="hidden" name="disablesafemodwarning" value="0"/><input class="pagenb" type="checkbox" value="1" name="disablesafemodewarning" <?php if ($_smarty_tpl->tpl_vars['disablesafemodewarning']->value){?>checked="checked"<?php }?> /></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_admin_enablenotifications']->value;?>
:</p>
		  <p class="pageinput"><input type="hidden" name="enablenotifications" value="0"/><input class="pagenb" type="checkbox" value="1" name="enablenotifications" <?php if ($_smarty_tpl->tpl_vars['enablenotifications']->value){?>checked="checked"<?php }?> /></p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_pseudocron_granularity']->value;?>
:</p>
		  <p class="pageinput">
			<select name="pseudocron_granularity">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pseudocron_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pseudocron_granularity']->value),$_smarty_tpl);?>

			</select><br/>
			<?php echo $_smarty_tpl->tpl_vars['lang_info_pseudocron_granularity']->value;?>

		  </p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_adminlog_lifetime']->value;?>
:</p>
		  <p class="pageinput">
			<select name="adminlog_lifetime">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['adminlog_options']->value,'selected'=>$_smarty_tpl->tpl_vars['adminlog_lifetime']->value),$_smarty_tpl);?>

			</select><br/>
			<?php echo $_smarty_tpl->tpl_vars['lang_info_adminlog_lifetime']->value;?>

		  </p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['lang_checkversion']->value;?>
:</p>
		  <p class="pageinput">
			<input type="hidden" name="checkversion" value="0"/>
			<input type="checkbox" name="checkversion" value="1" <?php if ($_smarty_tpl->tpl_vars['checkversion']->value){?>checked="checked"<?php }?>/>
			<br/><?php echo lang('info_checkversion');?>

		  </p>
		</div>
		</fieldset>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>
	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['smarty_start']->value;?>

	<form id="siteprefform_setup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
		  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
		  <input type="hidden" name="active_tab" value="smarty" />
		  <input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('prompt_use_smartycaching');?>
</p>
		  <p class="pageinput">
			<select name="use_smartycache">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['use_smartycache']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_smarty_caching2');?>

		  </p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('info_smarty_options');?>
</p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('prompt_smarty_compilecheck');?>
</p>
		  <p class="pageinput">
			<select name="use_smartycompilecheck">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['use_smartycompilecheck']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_smarty_compilecheck');?>

		  </p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('prompt_smarty_cachemodules');?>
</p>
		  <p class="pageinput">
			<select name="smarty_cachemodules">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['smarty_cacheoptions']->value,'selected'=>$_smarty_tpl->tpl_vars['smarty_cachemodules']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_smarty_cachemodules');?>

		  </p>
		</div>
		<div class="pageoverflow">
		  <p class="pagetext"><?php echo lang('prompt_smarty_cacheudt');?>
</p>
		  <p class="pageinput">
			<select name="smarty_cacheudt">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['smarty_cacheoptions2']->value,'selected'=>$_smarty_tpl->tpl_vars['smarty_cacheudt']->value),$_smarty_tpl);?>

			</select>
			<br/>
			<?php echo lang('info_smarty_cacheudt');?>

		  </p>
		</div>

		<div class="pageoverflow">
		  <p class="pagetext">&nbsp;</p>
		  <p class="pageinput">
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_submit']->value;?>
" class="pagebutton"  />
			<input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
" class="pagebutton"  />
		  </p>
		</div>
	</form>
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>


<?php echo $_smarty_tpl->tpl_vars['tabs_end']->value;?>


	<p class="pageback">
		<a class="pageback" href="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">&#171; <?php echo lang('back');?>
</a>
	</p>

</div>
<?php }} ?>