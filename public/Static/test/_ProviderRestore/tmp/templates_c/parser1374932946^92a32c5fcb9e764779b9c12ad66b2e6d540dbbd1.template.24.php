<?php /* Smarty version Smarty-3.1.12, created on 2013-07-27 15:49:06
         compiled from "template:24" */ ?>
<?php /*%%SmartyHeaderCode:199150622351f3cfd2cf4c79-15513872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a32c5fcb9e764779b9c12ad66b2e6d540dbbd1' => 
    array (
      0 => 'template:24',
      1 => 1374931807,
      2 => 'template',
    ),
  ),
  'nocache_hash' => '199150622351f3cfd2cf4c79-15513872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'newstitle' => 0,
    'display_slider' => 0,
    'display_breadcrumbs' => 0,
    'display_sidebar_menu' => 0,
    'display_search' => 0,
    'display_news' => 0,
    'display_news_slider' => 0,
    'display_to_top' => 0,
    'display_footer_menu' => 0,
    'display_validation' => 0,
    'pagetitle' => 0,
    'capturedcontent' => 0,
    'sidecontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f3cfd2f1b705_65268797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f3cfd2f1b705_65268797')) {function content_51f3cfd2f1b705_65268797($_smarty_tpl) {?><?php if (!is_callable('smarty_cms_function_cms_stylesheet')) include '/homepages/26/d480780604/htdocs/plugins/function.cms_stylesheet.php';
if (!is_callable('smarty_function_global_content')) include '/homepages/26/d480780604/htdocs/plugins/function.global_content.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)){?>en<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<?php }?>" >
<head>
<title> - <?php if (isset($_smarty_tpl->tpl_vars['newstitle']->value)){?><?php echo $_smarty_tpl->tpl_vars['newstitle']->value;?>
<?php }else{ ?><?php }?></title>


<?php echo smarty_cms_function_cms_stylesheet(array(),$_smarty_tpl);?>



<?php echo smarty_function_cms_selflink(array('dir'=>'prev','rellink'=>1),$_smarty_tpl);?>

<?php echo smarty_function_cms_selflink(array('dir'=>'next','rellink'=>1),$_smarty_tpl);?>


<!-- JAVASCRIPT CALLS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/uploads/tpl-buddy-001/jquery.cycle.all.js" type="text/javascript"></script> 
<script src="/uploads/tpl-buddy-001/init.js" type="text/javascript"></script>
<!-- END JS CALLS -->


<!--[if IE 7]>
<style type="text/css">
#mainNav {margin:-60px 0 0;}
</style>
<![endif]-->



<!--[if lte IE 8]>
<style type="text/css">
#search input {padding: 8px 0 0;height:26px;}
</style>
<![endif]-->


</head>
<body>
    <a id="top"></a>

    <!-- TEMPLATE BLOCKS --> 

    <?php if (empty($_smarty_tpl->tpl_vars['display_slider']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_slider"])) {$_smarty_tpl->tpl_vars["display_slider"] = clone $_smarty_tpl->tpl_vars["display_slider"];
$_smarty_tpl->tpl_vars["display_slider"]->value = "-"; $_smarty_tpl->tpl_vars["display_slider"]->nocache = null; $_smarty_tpl->tpl_vars["display_slider"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_slider"] = new Smarty_variable("-", null, 0);?><?php }?> 
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "galleryfolder", null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_breadcrumbs']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_breadcrumbs"])) {$_smarty_tpl->tpl_vars["display_breadcrumbs"] = clone $_smarty_tpl->tpl_vars["display_breadcrumbs"];
$_smarty_tpl->tpl_vars["display_breadcrumbs"]->value = "+"; $_smarty_tpl->tpl_vars["display_breadcrumbs"]->nocache = null; $_smarty_tpl->tpl_vars["display_breadcrumbs"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_breadcrumbs"] = new Smarty_variable("+", null, 0);?><?php }?>
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_sidebar_menu']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_sidebar_menu"])) {$_smarty_tpl->tpl_vars["display_sidebar_menu"] = clone $_smarty_tpl->tpl_vars["display_sidebar_menu"];
$_smarty_tpl->tpl_vars["display_sidebar_menu"]->value = "+"; $_smarty_tpl->tpl_vars["display_sidebar_menu"]->nocache = null; $_smarty_tpl->tpl_vars["display_sidebar_menu"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_sidebar_menu"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_search']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_search"])) {$_smarty_tpl->tpl_vars["display_search"] = clone $_smarty_tpl->tpl_vars["display_search"];
$_smarty_tpl->tpl_vars["display_search"]->value = "+"; $_smarty_tpl->tpl_vars["display_search"]->nocache = null; $_smarty_tpl->tpl_vars["display_search"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_search"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_news']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_news"])) {$_smarty_tpl->tpl_vars["display_news"] = clone $_smarty_tpl->tpl_vars["display_news"];
$_smarty_tpl->tpl_vars["display_news"]->value = "+"; $_smarty_tpl->tpl_vars["display_news"]->nocache = null; $_smarty_tpl->tpl_vars["display_news"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_news"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_news_slider']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_news_slider"])) {$_smarty_tpl->tpl_vars["display_news_slider"] = clone $_smarty_tpl->tpl_vars["display_news_slider"];
$_smarty_tpl->tpl_vars["display_news_slider"]->value = "+"; $_smarty_tpl->tpl_vars["display_news_slider"]->nocache = null; $_smarty_tpl->tpl_vars["display_news_slider"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_news_slider"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_to_top']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_to_top"])) {$_smarty_tpl->tpl_vars["display_to_top"] = clone $_smarty_tpl->tpl_vars["display_to_top"];
$_smarty_tpl->tpl_vars["display_to_top"]->value = "+"; $_smarty_tpl->tpl_vars["display_to_top"]->nocache = null; $_smarty_tpl->tpl_vars["display_to_top"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_to_top"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_footer_menu']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_footer_menu"])) {$_smarty_tpl->tpl_vars["display_footer_menu"] = clone $_smarty_tpl->tpl_vars["display_footer_menu"];
$_smarty_tpl->tpl_vars["display_footer_menu"]->value = "+"; $_smarty_tpl->tpl_vars["display_footer_menu"]->nocache = null; $_smarty_tpl->tpl_vars["display_footer_menu"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_footer_menu"] = new Smarty_variable("+", null, 0);?><?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['display_validation']->value)){?><?php if (isset($_smarty_tpl->tpl_vars["display_validation"])) {$_smarty_tpl->tpl_vars["display_validation"] = clone $_smarty_tpl->tpl_vars["display_validation"];
$_smarty_tpl->tpl_vars["display_validation"]->value = "+"; $_smarty_tpl->tpl_vars["display_validation"]->nocache = null; $_smarty_tpl->tpl_vars["display_validation"]->scope = 0;
} else $_smarty_tpl->tpl_vars["display_validation"] = new Smarty_variable("+", null, 0);?><?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'pagetitle', null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <!-- END TEMPLATE BLOCKS -->
    
    <!-- ACCESSIBILITY SKIP LINKS -->
    <ul class="accessibility">
      <li></li>
      <li><?php echo smarty_function_anchor(array('anchor'=>'main','title'=>'Skip to content','accesskey'=>'s','text'=>'Skip to content'),$_smarty_tpl);?>
</li>
    </ul>
    <!-- END ACCESSIBILITY SKIP LINKS -->
    <hr class="accessibility" />
    
    <!-- NEWS SLIDER SCRIPT --> 
    <?php if ($_smarty_tpl->tpl_vars['display_news_slider']->value=="+"){?>
      <script src="/uploads/tpl-buddy-001/news-banner.js" type="text/javascript"></script>
    <?php }?>
    <!-- END NEWS SLIDER SCRIPT --> 
    
    <!-- HEADER -->
    <div id="headerWrapper">
      <div id="header" class="span-950">
        <div id="logo">
          <h1><a href="" title="<?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
"><img alt="<?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
" src="/uploads/tpl-buddy-001/logo.png" /></a></h1>
          <hr class="accessibility" />
        </div>
        
        <!-- TOP NAVIGATION -->
        <div id="mainNav"> 
          <h2 class="accessibility">Navigation</h2>
           
          <hr class="accessibility" />
        </div>
        <!-- END TOP NAVIGATION -->
        
      </div>
    </div> 
    <!-- END HEADER -->

    
    <!-- SLIDER -->
    <div id="sliderWrapper">
      <div class="bannerHolder">
        <ul id="bannerNav">
        </ul>
        <a href="#"><span id="prevBanner">Previous</span></a> 
        <a href="#"><span id="nextBanner">Next</span></a> 	
        
		   
        
      </div>
    </div>
    <!-- END SLIDER -->
    

    <!-- CONTENT -->
    <div id="contentWrapper">
      <?php if ($_smarty_tpl->tpl_vars['display_slider']->value=="+"){?>
        <div id="content" class="span-950">
      <?php }else{ ?>
        <div id="content" class="span-950 border">
      <?php }?>
      
          <!-- MAIN CONTENT -->
          <div id="main" class="twoColumns float-left">
            
            <!-- BREADCRUMBS -->
            <?php if ($_smarty_tpl->tpl_vars['display_breadcrumbs']->value=="+"){?>
            <div class="breadcrumbs">
              <?php if (isset($_smarty_tpl->tpl_vars['newstitle']->value)){?>
                 » <?php echo $_smarty_tpl->tpl_vars['newstitle']->value;?>

              <?php }else{ ?>
                <?php echo smarty_function_breadcrumbs(array('starttext'=>'You are here','root'=>'Home','delimiter'=>'&raquo;'),$_smarty_tpl);?>

              <?php }?>
              <hr class="accessibility" />
            </div>
            <?php }?>
            <!-- END BREADCRUMBS -->

            <?php if (isset($_smarty_tpl->tpl_vars['newstitle']->value)){?>
              <h2><?php echo $_smarty_tpl->tpl_vars['newstitle']->value;?>
</h2>
            <?php }else{ ?>
              <h2><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h2>
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['capturedcontent']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['display_to_top']->value=="+"){?>              
               <a href="#top" class='to-top float-right'>To Top of the page</a>
            <?php }?>
            <hr class="accessibility" />
          </div>
          <!-- END MAIN CONTENT -->

          <!-- SIDEBAR -->
          <div id="sidebar" class="float-right col-border">

	  <!-- SIDE NAVIGATION (SUBMENU) -->          
          <div id="subNav">
            <h2 class="accessibility">Sub Navigation</h2>
            <?php if ($_smarty_tpl->tpl_vars['display_sidebar_menu']->value=="+"){?>
              
            <?php }?>
            <hr class="accessibility" />
          </div>
          
	  <!-- END SIDE NAVIGATION -->    
          
	  <!-- SEARCH -->                       
          <?php if ($_smarty_tpl->tpl_vars['display_search']->value=="+"){?>
            <div id="search">
               
            </div>
          <?php }?>
          <!-- END SEARCH -->
            
          <!-- NEWS -->  
          <?php if ($_smarty_tpl->tpl_vars['display_news']->value=="+"){?>  
          <div id="news">
<!-- <h2>Infos</h2>--> 
            
             
          </div>
          <?php }?>
          <!-- END NEWS -->
          
          <!-- SIDEBAR CONTENT BLOCK -->          
          
          <?php if (!empty($_smarty_tpl->tpl_vars['sidecontent']->value)){?>
          <div class="sidecontent">
            <?php echo $_smarty_tpl->tpl_vars['sidecontent']->value;?>

          </div>
          <?php }?> 
          <!-- END SIDEBAR CONTENT BLOCK -->
            
        </div>
      </div>
    </div>
    <!-- END CONTENT -->


    <!-- FOOTER -->
    <div id="footerWrapper">
      <div id="footer" class="span-950">
        
        <!-- FOOTER MENU -->
        <?php if ($_smarty_tpl->tpl_vars['display_footer_menu']->value=="+"){?>
        <div id="footerNav"> 
           
        </div>
        <?php }?>
        <!-- END FOOTER MENU -->
        
        <!-- VALIDATION ICONS -->
        <?php if ($_smarty_tpl->tpl_vars['display_validation']->value=="+"){?>
        <div class="footer-icons">
          <div class="validation"> 
            
             
          </div>
        </div>
        <?php }?>
        <!-- END VALIDATION ICONS -->
		
        <!-- GCB FOOTER -->
          <div class="clearer"> 
            <?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>

            <p class="float-right">
            	Design by <a href="http://www.cmstemplatebuddy.com" target="_blank">CMS Template Buddy </a>
            </p>
          </div>
        <!-- END GCB FOOTER -->
        
      </div>
    </div>
    <!-- END FOOTER -->
 
    <!-- 
      Template for CMS Made Simple
      Design by www.cmstemplatebuddy.com
      Version 1.01
      -->

</body>
</html><?php }} ?>