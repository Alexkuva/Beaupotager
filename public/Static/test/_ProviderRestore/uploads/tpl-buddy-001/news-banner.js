/*  ----------------------------------------------------
	JavaScript Document - CMS Template Buddy
	www.cmstemplatebuddy.com
-------------------------------------------------------- */


/*	News Slider initialization based on
	jQuery Cycle Plugin: http://jquery.malsup.com/cycle/
-------------------------------------------------------- */

$(document).ready(function() {

	$('#NewsBanner').cycle({ 
		fx:     'scrollUp', 
		timeout: 5000,
		pause: true
    });                            
	
});