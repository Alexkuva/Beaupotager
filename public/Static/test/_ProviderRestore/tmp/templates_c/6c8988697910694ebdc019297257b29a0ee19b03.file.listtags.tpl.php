<?php /* Smarty version Smarty-3.1.12, created on 2013-08-28 09:35:44
         compiled from "/homepages/26/d480780604/htdocs/admin/templates/listtags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417019243521da8500fc393-54093898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8988697910694ebdc019297257b29a0ee19b03' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/admin/templates/listtags.tpl',
      1 => 1374836792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417019243521da8500fc393-54093898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'subheader' => 0,
    'wiki_url' => 0,
    'image_help_external' => 0,
    'content' => 0,
    'error' => 0,
    'plugins' => 0,
    'rowclass' => 0,
    'one' => 0,
    'back_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_521da8501d3e14_61700929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521da8501d3e14_61700929')) {function content_521da8501d3e14_61700929($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/function.cycle.php';
?><div class="pagecontainer">
  <div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
  <?php if (isset($_smarty_tpl->tpl_vars['subheader']->value)){?>
    <div class="pageheader"><?php echo $_smarty_tpl->tpl_vars['subheader']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['wiki_url']->value)&&isset($_smarty_tpl->tpl_vars['image_help_external']->value)){?>
       <span class="helptext">
         <a class='helpicon' href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['image_help_external']->value;?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo lang('help');?>
</a> (<?php echo lang('new_window');?>
)
       </span>
    <?php }?>
    </div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  <?php }elseif(isset($_smarty_tpl->tpl_vars['error']->value)){?>
    <div class="pageerrorcontainer"><div class="pageoverflow"><ul class="pageerror"><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul></div></div>
  <?php }elseif(isset($_smarty_tpl->tpl_vars['plugins']->value)){?>
    <table cellspacing="0" class="pagetable">
      <thead> 
       <tr>
         <th><?php echo lang('name');?>
</th>
         <th><?php echo lang('type');?>
</th>
         <th class="pagew10"><?php echo lang('cachable');?>
</th>
         <th class="pagew10"><?php echo lang('help');?>
</th>
         <th class="pagew10"><?php echo lang('about');?>
</th>
       </tr>
      </thead> 
      <tbody>
      <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
	<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])){?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
           <?php }else{ ?>
             <?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

           <?php }?>
         </td>
         <td>
            <?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>

         </td>
         <td><?php if (isset($_smarty_tpl->tpl_vars['one']->value['cachable'])&&$_smarty_tpl->tpl_vars['one']->value['cachable']!=''){?><?php echo lang($_smarty_tpl->tpl_vars['one']->value['cachable']);?>
<?php }?></td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])){?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
"><?php echo lang('help');?>
</a>
           <?php }?>
         </td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['about_url'])){?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['about_url'];?>
"><?php echo lang('about');?>
</a>
           <?php }?>
         </td>
       </tr>
      <?php } ?>
      </tbody>
    </table>
  <?php }?>
</div>
<p class="pageback"><a class="pageback" href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
">&#171; <?php echo lang('back');?>
</a></p><?php }} ?>