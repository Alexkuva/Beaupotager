<?php /* Smarty version Smarty-3.1.12, created on 2013-08-09 12:01:05
         compiled from "module_file_tpl:FileManager;filemanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5408646515204bde17f09c1-15549565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97925fbb1dcac0611e24940ad8d3b768bb7136d' => 
    array (
      0 => 'module_file_tpl:FileManager;filemanager.tpl',
      1 => 1374837057,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '5408646515204bde17f09c1-15549565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noform' => 0,
    'refresh_url' => 0,
    'currentpath' => 0,
    'path' => 0,
    'formstart' => 0,
    'actionid' => 0,
    'mod' => 0,
    'confirm_unpack' => 0,
    'hiddenpath' => 0,
    'filenametext' => 0,
    'fileinfotext' => 0,
    'fileownertext' => 0,
    'filepermstext' => 0,
    'filesizetext' => 0,
    'filedatetext' => 0,
    'files' => 0,
    'rowclass' => 0,
    'file' => 0,
    'countstext' => 0,
    'formend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5204bde19b5300_71661654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5204bde19b5300_71661654')) {function content_5204bde19b5300_71661654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_cms_modifier_cms_date_format')) include '/homepages/26/d480780604/htdocs/plugins/modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/modifier.replace.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['noform']->value)){?>

<script type="text/javascript">
var refresh_url = '<?php echo $_smarty_tpl->tpl_vars['refresh_url']->value;?>
'+'&showtemplate=false';
refresh_url = refresh_url.replace(/amp;/g,'');
// <![CDATA[
  function enable_action_buttons() {
    var files = $("#filesarea input[type='checkbox'].fileselect").filter(':checked').length;
    var dirs = $("#filesarea input[type='checkbox'].dir").filter(':checked:').length;
    var arch = $("#filesarea input[type='checkbox'].archive").filter(':checked:').length;
    var imgs = $("#filesarea input[type='checkbox'].image").filter(':checked:').length;
    $('.filebtn').attr('disabled','disabled');
    if( jQuery.ui ) $('.filebtn').button( "option", "disabled", true ).addClass('disabled');
    if( files == 0 &&  dirs == 0 ) {
      // nothing selected, enable anything with select_none
      $('#btn_newdir').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_newdir').button( "option", "disabled", false );
    }
    else if( files == 1 ) {
      // 1 selected, enable anything with select_one
      $('#btn_rename').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_rename').button( "option", "disabled", false );

      $('#btn_move').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_move').button( "option", "disabled", false );
   
      $('#btn_delete').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_delete').button( "option", "disabled", false );
   
      if( dirs == 0 ) {
        // one selected, it's not a directory
        $('#btn_copy').removeAttr('disabled').removeClass('disabled');
        if( jQuery.ui ) $('#btn_copy').button( "option", "disabled", false );
      }
      if( arch == 1 ) {
	// one selected, it's an archive.
        $('#btn_unpack').removeAttr('disabled').removeClass('disabled');
        if( jQuery.ui ) $('#btn_unpack').button( "option", "disabled", false );
      }
      if( imgs == 1 ) {
        $('#btn_thumb').removeAttr('disabled').removeClass('disabled');
        if( jQuery.ui ) $('#btn_thumb').button( "option", "disabled", false );
      }
    }
    else if( files > 1 && dirs == 0 ) {
      // multiple files selected
      $('#btn_delete').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_delete').button( "option", "disabled", false );

      $('#btn_copy').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_copy').button( "option", "disabled", false );

      $('#btn_move').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_move').button( "option", "disabled", false );
    }
    else if( files > 1 && dirs > 0 ) {
      // multiple selected, at least one dir.
      $('#btn_delete').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_delete').button( "option", "disabled", false );

      $('#btn_move').removeAttr('disabled').removeClass('disabled');
      if( jQuery.ui ) $('#btn_move').button( "option", "disabled", false );
    }
  }

  $(document).ready(function(){
    enable_action_buttons(); 
    $('#refresh').unbind('click');
    $('#refresh').live('click',function(){
      // ajaxy reload for the files area.
      $('#filesarea').load(refresh_url);
      return false;
    });

    $(this).live('dropzone_chdir',function(e,data){
      // if change dir via the dropzone, make sure filemanager refreshes.
      location.reload();
    });

    $("#filesarea input[type='checkbox'].fileselect").live('change',function(e){
      // find the parent row
      e.stopPropagation();
      var t = $(this).attr('checked');
      if( t ) {
        $(this).closest('tr').addClass('selected');
      }
      else {
        $(this).closest('tr').removeClass('selected');
      }
      enable_action_buttons();
    });

    $('#tagall').live('change',function(event){
      if( $(this).attr('checked') == 'checked' ) {
        $('#filesarea input:checkbox.fileselect').attr('checked','checked').trigger('change');
      }
      else {
        $('#filesarea input:checkbox.fileselect').removeAttr('checked').trigger('change');
      }
    });

    $('td.clickable').live('click',function(){
      var t = $(this).parent().find(':checkbox:').attr('checked');
      if( t != 'checked' ) {
        $(this).parent().find(':checkbox:').attr('checked','checked').trigger('change');
      }
      else {
        $(this).parent().find(':checkbox:').removeAttr('checked').trigger('change');
      }
    });
  });
// ]]>
</script>

<h3><?php echo $_smarty_tpl->tpl_vars['currentpath']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</h3>

<div>
  <?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>


<div>
  <fieldset>
    <input type="submit" id="btn_newdir" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactionnewdir" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('newdir');?>
" class="filebtn"/>
    <input type="submit" id="btn_rename" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactionrename" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('rename');?>
" class="filebtn"/>
    <input type="submit" id="btn_delete" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactiondelete" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete');?>
" class="filebtn"/> 
    <input type="submit" id="btn_move" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactionmove" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('move');?>
" class="filebtn"/> 
    <input type="submit" id="btn_copy" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactioncopy" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('copy');?>
" class="filebtn"/> 
    <input type="submit" id="btn_unpack" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactionunpack" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('unpack');?>
" class="filebtn" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm_unpack']->value;?>
');"/>
    <input type="submit" id="btn_thumb" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
fileactionthumb" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('thumbnail');?>
" class="filebtn"/>
  </fieldset>

</div>
<?php echo $_smarty_tpl->tpl_vars['hiddenpath']->value;?>

<?php }?>

  <div id="filesarea">  
  <table width="100%" class="pagetable" cellspacing="0">
  <thead>
  <tr>
    <th class="pageicon">&nbsp;</th>
    <th><?php echo $_smarty_tpl->tpl_vars['filenametext']->value;?>
</th>

    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['fileinfotext']->value;?>
</th>
    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['fileownertext']->value;?>
</th>
    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['filepermstext']->value;?>
</th>
    <th class="pageicon" style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['filesizetext']->value;?>
</th>
    <th class="pageicon">&nbsp;</th>
    <th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['filedatetext']->value;?>
</th>
    
    <th class="pageicon">
     <input type="checkbox" name="tagall" value="tagall" id="tagall"/>
    </th>
  </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
	<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

  <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">    
    <td valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->thumbnail)&&$_smarty_tpl->tpl_vars['file']->value->thumbnail!=''){?><?php echo $_smarty_tpl->tpl_vars['file']->value->thumbnail;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['file']->value->iconlink;?>
<?php }?></td>
    <td class="clickable" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->txtlink;?>
</td>

    <td class="clickable" style="padding-right:8px;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->fileinfo;?>
</td>
    <td class="clickable" style="padding-right:8px;" valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->fileowner)){?><?php echo $_smarty_tpl->tpl_vars['file']->value->fileowner;?>
<?php }else{ ?>&nbsp;<?php }?></td>
    <td class="clickable" style="padding-right:8px;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->filepermissions;?>
</td>
    <td class="clickable" style="padding-right:2px;text-align:right;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->filesize;?>
</td>
    <td class="clickable" style="padding-right:8px;" valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->filesizeunit)){?><?php echo $_smarty_tpl->tpl_vars['file']->value->filesizeunit;?>
<?php }else{ ?>&nbsp;<?php }?></td>
    <td class="clickable" style="padding-right:8px;" valign="middle"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_cms_modifier_cms_date_format($_smarty_tpl->tpl_vars['file']->value->filedate)," ","&nbsp;"),"-","&minus;");?>
</td>
    <td>
      <?php if (!isset($_smarty_tpl->tpl_vars['file']->value->noCheckbox)){?>
      <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
selall[]" value="<?php echo $_smarty_tpl->tpl_vars['file']->value->urlname;?>
" class="fileselect <?php echo $_smarty_tpl->tpl_vars['file']->value->type;?>
" <?php if (isset($_smarty_tpl->tpl_vars['file']->value->checked)){?>checked="checked"<?php }?>/>
      <?php }?>
    </td>
  
  </tr>
  <?php } ?>
  </tbody>
  <tfoot>
  <tr>
    <td>&nbsp;</td>
    <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['countstext']->value;?>
</td>
  </tr>
  </tfoot>
  </table>
  </div>

<?php if (!isset($_smarty_tpl->tpl_vars['noform']->value)){?>
  
  <?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

</div>
<?php }?>  
<?php }} ?>