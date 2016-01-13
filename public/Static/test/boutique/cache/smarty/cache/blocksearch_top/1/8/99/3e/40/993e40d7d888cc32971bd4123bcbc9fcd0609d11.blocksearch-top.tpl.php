<?php /*%%SmartyHeaderCode:910800293529622bf553375-56009494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993e40d7d888cc32971bd4123bcbc9fcd0609d11' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/boutique/themes/leoconv/modules/blocksearch/blocksearch-top.tpl',
      1 => 1385570016,
      2 => 'file',
    ),
    'c72f492aae719c0e1f501381b3acba5793b44ffc' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/boutique/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1385556470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910800293529622bf553375-56009494',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5499ebd2725678_92427922',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5499ebd2725678_92427922')) {function content_5499ebd2725678_92427922($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">

	<form method="get" action="http://beaupotager.fr/boutique/index.php?controller=search" id="searchbox">

			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="submit" name="submit_search" value="Rechercher" class="button" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://beaupotager.fr/boutique/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>