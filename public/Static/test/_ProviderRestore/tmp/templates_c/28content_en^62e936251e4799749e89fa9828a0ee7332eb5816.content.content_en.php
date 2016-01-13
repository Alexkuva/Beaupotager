<?php /* Smarty version Smarty-3.1.12, created on 2013-10-21 10:26:02
         compiled from "content:content_en" */ ?>
<?php /*%%SmartyHeaderCode:14029909525264e51aa1f644-14256574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1374852132,
      2 => 'content',
    ),
  ),
  'nocache_hash' => '14029909525264e51aa1f644-14256574',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5264e51abba939_80366980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5264e51abba939_80366980')) {function content_5264e51abba939_80366980($_smarty_tpl) {?><p>One of the little known features of CMS Made Simple is the User Defined tag.  Basically, this allows you to write PHP code inside the Admin Panel.  Use the 'Add User Defined Tag' button in Extension &raquo; User Defined Tags in the Admin Panel, write some code, and then insert into a template or page with {newpluginname}.  Simple!</p>
<p>As an example, I've put together a one line plugin/tag that will show your current User Agent information (which browser you're using).  The output is right here: <strong><?php echo cms_user_tag_user_agent(array(),$_smarty_tpl);?>
</strong>.</p>
<p>If you're not looking at the source, all that is in the page is {user_agent}.  To see how this code works, edit the user_agent tag in the Extensions &raquo; User Defined Tags page of the admin.</p>
<p>This is a VERY powerful feature if used right.  Remember, user defined tags do not get cached, therefore, scripts to rotate ad banners and such will work just fine. Note also that tag code has to be written <em>without</em> opening &lt; ? php  and ending  ? &gt; tags.</p><?php }} ?>