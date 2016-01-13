<?php /*%%SmartyHeaderCode:18321158455296137f832297-64741416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac8870c18c11e0ea746a8c7192347d73502205a4' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/boutique/modules/blockcategories/blockcategories.tpl',
      1 => 1385556443,
      2 => 'file',
    ),
    '790aec52cc85185976b577478e6c8f39518cf560' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/boutique/modules/blockcategories/category-tree-branch.tpl',
      1 => 1385556443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18321158455296137f832297-64741416',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c0602a31bca9_49114920',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0602a31bca9_49114920')) {function content_54c0602a31bca9_49114920($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4 class="title_block">Catégories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li class="category_3">
	<a href="http://beaupotager.fr/boutique/index.php?id_category=3&amp;controller=category" class="selected"		title="Jardin d&#039;int&eacute;rieur">Int&eacute;rieur</a>
	</li>

												
<li class="category_4">
	<a href="http://beaupotager.fr/boutique/index.php?id_category=4&amp;controller=category" 		title="Jardin d&#039;ext&eacute;rieur">Ext&eacute;rieur</a>
	</li>

												
<li class="category_5 last">
	<a href="http://beaupotager.fr/boutique/index.php?id_category=5&amp;controller=category" 		title="Tous nos services pour savoir jardiner">Services</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>