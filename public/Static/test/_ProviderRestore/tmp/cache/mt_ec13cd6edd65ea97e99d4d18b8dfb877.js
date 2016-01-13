
		//Creates a new plugin class and a custom listbox
		tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
		createControl: function(n, cm) {
			switch (n) {
				case 'cmslinker':
					var c = cm.createMenuButton('cmslinker', {
						title : 'CMSMS Linker',
						image : 'http://www.beaupotager.com/modules/MicroTiny/images/cmsmslink.gif',
						icons : false
					});

					c.onRenderMenu.add(function(c, m) {
		
						m.add({title : '1 Accueil', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Accueil';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='home'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '2 Association'});
		
						mm.add({title : '2 Association', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Association';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='how-cmsms-works'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
							var mm = m.addMenu({title : '3 Services'});
		
						mm.add({title : '3 Services', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Services';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='default_templates'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '3.7.1 NCleanBlue', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='NCleanBlue';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='ncleanblue'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.7.2 ShadowMenu Tab + 2 colum &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ShadowMenu Tab + 2 columns';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='shadowmenu-tab-2-columns'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.7.3 ShadowMenu left + 1 colu &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ShadowMenu left + 1 column';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='shadowmenu-left-1-column'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '4 Contactez-nous'});
		
						mm.add({title : '4 Contactez-nous', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Contactez-nous';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='default-extensions'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '4.1.1 News', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='News';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='news'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.1.2 Menu Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Menu Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='menu-manager-2'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.1.3 Theme Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Theme Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='theme-manager'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.1.4 MicroTiny', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='MicroTiny';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='microtiny'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.1.5 Search', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Search';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='search'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.1.6 Module Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Module Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='module-manager'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.2.1 Tags in the core', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Tags in the core';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='tags-in-the-core'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '4.2.2 User Defined Tags', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='User Defined Tags';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='user-defined-tags'}\">"+sel+"</a>");
						}});
		
					});

					// Return the new menu button instance
					return c;
			}

			return null;
		}
		});

		// Register plugin with a short name
		tinymce.PluginManager.add('cmslinker', tinymce.plugins.CMSLinkerPlugin);

		 tinyMCE.init({ 
  
  mode : "exact",
  elements : "mt_content_en,mt_sidebar",
  body_class : "CMSMSBody",
      content_css : "http://www.beaupotager.com/tmp/cache/stylesheet_combined_b673e1cecc82e9f00c1b136407a70715.css,http://www.beaupotager.com/tmp/cache/stylesheet_combined_29b23304e735cd73b6282d528a45fafb.css",
    
  entity_encoding : "raw",
  button_tile_map : true, 

		
  theme : "advanced",
  skin : "o2k7",
  skin_variant : "black",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  visual : true,
	      
  accessibility_warnings : false,

  forced_root_block : '',      			
  fix_list_elements : true,
  verify_html : true,
  verify_css_classes : false,
  
  plugins : "paste,inlinepopups,cmslinker",
  
  paste_auto_cleanup_on_paste : true,
  paste_remove_spans : true,
  paste_remove_styles : true,
  theme_advanced_buttons1 : "undo,|,bold,italic,underline,|,cut,copy,paste,pastetext,removeformat,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,cmslinker,link,unlink,|,formatselect",
  theme_advanced_buttons2 : "",
  theme_advanced_buttons3 : "",
  

  theme_advanced_blockformats : "p,div,h1,h2,h3,h4,h5,h6,blockquote,code",
  document_base_url : "http://www.beaupotager.com/",

  relative_urls : true,
  remove_script_host : true,
  language: "en",
  dialog_type: "modal",
  apply_source_formatting : true  
	 

  ,file_browser_callback : 'CMSMSFilePicker'
  
});
  

function toggleMicroTiny(id) {
  if (!tinyMCE.getInstanceById(id))
    tinyMCE.execCommand('mceAddControl', false, id);
  else
    tinyMCE.execCommand('mceRemoveControl', false, id);
}
	
    
function CMSMSFilePicker (field_name, url, type, win) {
     
  var cmsURL = "http://www.beaupotager.com/admin/moduleinterface.php?mact=MicroTiny,,filepicker,0&_sx_=f59c5a54&type="+type+"&showtemplate=false";
  
  tinyMCE.activeEditor.windowManager.open({
  
    file : cmsURL,
    title : 'File picker',
    width : '800',
    height : '500',
    resizable : "yes",
    scrollbars : "yes",
    inline : "yes",  
    close_previous : "no"
  
  }, {
    window : win,
    input : field_name
  });
  return false;
}

