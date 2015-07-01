jQuery(window).load(function(){

//flex slider
      jQuery('.flexslider').flexslider({
        animation: "slide",
		directionNav: true,
		slideshow: false,
		controlNav: true,
      });

    jQuery('.flexslider2').flexslider({
        animation: "slide",
		directionNav: false,
		slideshow: false,
		controlNav: true,
      });

    jQuery('.flexslider3').flexslider({
        animation: "slide",
		directionNav: false,
		slideshow: false,
		controlNav: true,
      });

    jQuery('.flexslider4').flexslider({
        animation: "slide",
		directionNav: false,
		slideshow: false,
		controlNav: true,
      });
   	jQuery('.images_wrapper').flexslider({
        animation: "slide",
		directionNav: false,
		slideshow: false,
		controlNav: true,
      });


//rev slider


if (jQuery.browser.msie  && parseInt(jQuery.browser.version, 10) === 8) {

} else {
		jQuery('.tparrows').fadeOut(0);

		jQuery('.tparrows').each(function() {
		var arrows=jQuery(this);
		//console.log("start");
		var timer = setInterval(function() {
		//console.log(arrows.css('opacity'));
		if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
		  arrows.fadeOut(300);
		},500);
		})
		jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
		jQuery('.tp-simpleresponsive').addClass("mouseisover");
		jQuery('body').find('.tparrows').each(function() {
		jQuery(this).fadeIn(300);
		});
		}, function() {
		if (!jQuery(this).hasClass("tparrows"))
		jQuery('.tp-simpleresponsive').removeClass("mouseisover");
		})
}
});

jQuery(window).load(function(){
	var $app = jQuery('#descarga_v2c article').eq(1), store = $app.find('h2')
	store.css({'text-align':'right','display':'block','color':'#4c4c4c'});
	/**********************************************/
	/*var $my = jQuery('.videos_v2c div.section'), video = $my.find('div.image iframe');
	video.css({'width':'300px','height':'240px'});*/
});

/**************************************************/

