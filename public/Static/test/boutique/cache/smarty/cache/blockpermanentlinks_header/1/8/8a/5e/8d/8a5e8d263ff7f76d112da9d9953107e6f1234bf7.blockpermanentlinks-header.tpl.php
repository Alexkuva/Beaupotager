<?php /*%%SmartyHeaderCode:1292848922529622be2cf9e8-11677434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a5e8d263ff7f76d112da9d9953107e6f1234bf7' => 
    array (
      0 => '/homepages/26/d480780604/htdocs/boutique/themes/leoconv/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1385570016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1292848922529622be2cf9e8-11677434',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5499ebd2478431_60916314',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5499ebd2478431_60916314')) {function content_5499ebd2478431_60916314($_smarty_tpl) {?><script type="text/javascript">
$(document).ready(function () {
	var width = $(window).width(); 
		
	$('#permanentlinks').each(function(){
		$(this).find('a.leo-mobile').click(function(){
		 $('#').slideToggle('slow');

		});
	  });
	
  $(window).resize(function(){
		var width = $(window).width();
		if(width >= 600){	
			$("#form-permanentlinks").css("display","block");
			$(".leo-button").css("display","none");
		}
		else{
			$("#form-permanentlinks").css("display","none");
			$(".leo-button").css("display","block");
			
		}
	});	
	

});
</script>

<!-- Block permanent links module HEADER -->
<div id="permanentlinks">
	<div class="leo-button"><a class="leo-mobile">Informations	</a></div>
	<div id="form-permanentlinks">
		<div class="nav-item">
			<div class="item-top"> 
									<a href="http://beaupotager.fr/boutique/index.php?controller=my-account" title="Connectez-vous à votre compte client" class="login" rel="nofollow">Connexion</a>
							</div>
		</div>
		<div class="nav-item">
			<div class="item-top">
				<a href="http://beaupotager.fr/boutique/index.php?controller=my-account" title="Mon compte">Mon compte</a>
			</div>
		</div>
		<div class="nav-item" id="wishlist_block">
			<div class="item-top">
				<a href="http://beaupotager.fr/boutique/index.php?fc=module&module=blockwishlist&controller=mywishlist" title="Mes listes">Ma liste d'envies</a>
			</div>
		</div>
	</div>
</div>
<!-- /Block permanent links module HEADER --><?php }} ?>