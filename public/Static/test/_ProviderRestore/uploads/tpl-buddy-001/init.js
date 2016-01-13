/*  ----------------------------------------------------
	JavaScript Document - CMS Template Buddy
	www.cmstemplatebuddy.com
-------------------------------------------------------- */


/*	Image/Content Slider initialization based on
	jQuery Cycle Plugin: http://jquery.malsup.com/cycle/
-------------------------------------------------------- */
$(document).ready(function() {

	$('#homeBanner').cycle({
	    fx:     'fade',  // name of transition effect (ex: 'fade,scrollLeft,scrollDown,scrollRight,scrollUp,shuffle')
		timeout:  5000,  // milliseconds between slide transitions (0 to disable auto advance)
		pause: true,     // true to enable "pause on hover"
        prev:    '#prevBanner',
        next:    '#nextBanner',
        pager:   '#bannerNav',
        pagerAnchorBuilder: pagerFactory
    });
    function pagerFactory(idx, slide) {
		var totalslide = $('#homeBanner').children().length; 
		if (totalslide > 1)	{
			return '<li><a href="#">'+(idx+1)+'</a></li>';
		}
		else {
			$('#prevBanner').css("position", "absolute"); 
			$('#prevBanner').css("left", "-9999px"); 
			$('#nextBanner').css("position", "absolute"); 
			$('#nextBanner').css("left", "-9999px"); 
		}
    };


/*	Smooth scroll for anchor links
---------------------------------------------------- */
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');

  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 1600, function() {
            location.hash = target;
          });
        });
      }
    }
  });

  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }

});