<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 15:36:01
         compiled from "module_db_tpl:News;detailSimplex_Detail" */ ?>
<?php /*%%SmartyHeaderCode:74744116251f3ccc1b3dce8-61856478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9686dd5bd72314919894b2edbe33b69c6a7d6776' => 
    array (
      0 => 'module_db_tpl:News;detailSimplex_Detail',
      1 => 1374839715,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '74744116251f3ccc1b3dce8-61856478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entry' => 0,
    'extra_label' => 0,
    'return_url' => 0,
    'category_name' => 0,
    'category_link' => 0,
    'field' => 0,
    'category_label' => 0,
    'author_label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3ccc1c2d527_07887840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3ccc1c2d527_07887840')) {function content_51f3ccc1c2d527_07887840($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cms_escape')) include '/homepages/26/d480780604/htdocs/plugins/modifier.cms_escape.php';
if (!is_callable('smarty_cms_modifier_cms_date_format')) include '/homepages/26/d480780604/htdocs/plugins/modifier.cms_date_format.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->canonical)){?>
  <?php if (isset($_smarty_tpl->tpl_vars['canonical'])) {$_smarty_tpl->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];
$_smarty_tpl->tpl_vars['canonical']->value = $_smarty_tpl->tpl_vars['entry']->value->canonical; $_smarty_tpl->tpl_vars['canonical']->nocache = null; $_smarty_tpl->tpl_vars['canonical']->scope = 0;
} else $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable($_smarty_tpl->tpl_vars['entry']->value->canonical, null, 0);?>
<?php }?>

<h2><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary){?>
    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['entry']->value->summary, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php }?>
    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['entry']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php if ($_smarty_tpl->tpl_vars['entry']->value->extra){?>
		<?php echo $_smarty_tpl->tpl_vars['extra_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['return_url']->value!=''){?>
    <br />
        <span class='back'>← <?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['category_name']->value!=''){?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;?>
<?php }?></span>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)){?>
  <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
     <div>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type=='file'){?>
	  
          <img src='<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
' alt='' />
        <?php }else{ ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
: <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['field']->value->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
        <?php }?>
     </div>
  <?php } ?>
<?php }?>
    <footer class='news-meta'>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate){?>
        <?php echo smarty_cms_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->category){?>
        <strong><?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->author){?>
        <strong><?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

    <?php }?>
    </footer><?php }} ?>