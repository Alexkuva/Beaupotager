<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 14:40:47
         compiled from "module_db_tpl:News;summarySummary_Simplex" */ ?>
<?php /*%%SmartyHeaderCode:38585489151f3bfcf71f0d3-63798365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f3d391c6c019982659e30ca333d92551214d8b' => 
    array (
      0 => 'module_db_tpl:News;summarySummary_Simplex',
      1 => 1374919871,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '38585489151f3bfcf71f0d3-63798365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'node' => 0,
    'items' => 0,
    'entry' => 0,
    'author_label' => 0,
    'category_label' => 0,
    'pagecount' => 0,
    'pagenumber' => 0,
    'firstpage' => 0,
    'prevpage' => 0,
    'pagetext' => 0,
    'oftext' => 0,
    'nextpage' => 0,
    'lastpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3bfcf7fdbd2_55275424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3bfcf7fdbd2_55275424')) {function content_51f3bfcf7fdbd2_55275424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include '/homepages/26/d480780604/htdocs/plugins/function.repeat.php';
if (!is_callable('smarty_modifier_cms_escape')) include '/homepages/26/d480780604/htdocs/plugins/modifier.cms_escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/26/d480780604/htdocs/lib/smarty/plugins/modifier.date_format.php';
?><!-- .news-summary wrapper --><article class='news-summary'><ul class='category-list cf'><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['node']->value['depth']>$_smarty_tpl->tpl_vars['node']->value['prevdepth']){?><?php echo smarty_function_repeat(array('string'=>'<ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-$_smarty_tpl->tpl_vars['node']->value['prevdepth']),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['node']->value['depth']<$_smarty_tpl->tpl_vars['node']->value['prevdepth']){?><?php echo smarty_function_repeat(array('string'=>'</li></ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['prevdepth']-$_smarty_tpl->tpl_vars['node']->value['depth']),$_smarty_tpl);?>
</li><?php }elseif($_smarty_tpl->tpl_vars['node']->value['index']>0){?></li><?php }?><li<?php if ($_smarty_tpl->tpl_vars['node']->value['index']==0){?> class='first'<?php }?>><?php if ($_smarty_tpl->tpl_vars['node']->value['count']>0){?><a href='<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
'><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
</a><?php }else{ ?><span><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
 </span><?php }?><?php } ?><?php echo smarty_function_repeat(array('string'=>'</li></ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-1),$_smarty_tpl);?>
</li></ul><?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?><!-- .news-article (wrapping each article) --><section class='news-article'><header><h2><a href='<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
' title='<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
'><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a></h2><div class='meta cf'><time class='date' datetime='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%Y-%m-%d');?>
'><span class='day'> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%d');?>
 </span><span class='month'> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%b');?>
 </span></time><span class='author'> <?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>
 </span><span class='category'> <?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
</span></div></header><?php if ($_smarty_tpl->tpl_vars['entry']->value->summary){?><p><?php $_template = new Smarty_Internal_Template('eval:'.preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->summary), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></p><span class='more'><?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
 →</span><?php }elseif($_smarty_tpl->tpl_vars['entry']->value->content){?><p><?php $_template = new Smarty_Internal_Template('eval:'.preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->content), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></p><?php }?></section><!-- .news-article //--><?php } ?><!-- news pagination --><?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?><span class='paginate'><?php if ($_smarty_tpl->tpl_vars['pagenumber']->value>1){?><?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value<$_smarty_tpl->tpl_vars['pagecount']->value){?><?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
<?php }?></span><?php }?></article><!-- .news-summary //--><?php }} ?>