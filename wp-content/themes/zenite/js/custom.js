jQuery(document).ready(function() {

/* Flecha home */

var posFlecha;
var screenWidth;
var indexArticle;
var maxpag;
var maxpagC;
var maxpagT;
var ultima;
var ultimaC;
var ultimaT;
var mou;
var res_actual;

posFlecha=new Array(100,340,775,820);
jQuery('.home .moduls article:first-child').addClass("activo");
//jQuery('.home .moduls article:first-child').addClass("activo");

function updateFlecha(){

	screenWidth = jQuery(window).width();

	if(screenWidth>=970){
		posFlecha=new Array(100,340,580,820);
		jQuery('.flecha_home').css('display', 'block');
	}

	if(screenWidth>=783 && screenWidth< 970){
		posFlecha=new Array(75,270,460,655);
		jQuery('.flecha_home').css('display', 'block');
	}
	if(screenWidth<783){
		jQuery('.flecha_home').css('display', 'none');
	}

	indexArticle = jQuery('.home .moduls article.activo').index();
	jQuery('.flecha_home').css('left', posFlecha[indexArticle-1]);

	//bgtwitter
	jQuery(".bgtwitter").height((jQuery(".wrapper_footer footer").children().next().height())+80);
	jQuery(".bgtwitter").css('top',(jQuery(".wrapper_footer footer").children().height())+80);
}


jQuery('.home .whiteover article').mouseenter(function() {
	jQuery('.home  .moduls article').removeClass("activo");
	jQuery(this).addClass("activo");

	indexArticle = jQuery('.home .moduls article.activo').index();
	//-- flecha
	jQuery('.flecha_home').css('left', posFlecha[indexArticle-1]);
	//-- info
	jQuery('.home .success .container').css('display', "none");
	jQuery('.home .success .container').eq(indexArticle-1).css('display', "block");
});

jQuery(window).bind("resize", function() {updateFlecha();});
updateFlecha();

/* fin flecha */



jQuery('.portfolio article .imagen').mouseenter(function() {
  jQuery('.hover', this).fadeIn("fast");
});
jQuery('.portfolio article .imagen').mouseleave(function() {
  jQuery('.hover', this).fadeOut("fast");
});


jQuery('.home article .imagen2').mouseenter(function() {
  jQuery('.hover', this).fadeIn("fast");
});
jQuery('.home article .imagen2').mouseleave(function() {
  jQuery('.hover', this).fadeOut("fast");
});
/* end Portfolio Filter */



/* View portfolio*/
jQuery('.work-view .image').mouseenter(function() {
	jQuery('.light_big', this).fadeIn("fast");
}).mouseleave(function() {
	jQuery('.light_big', this).fadeOut("fast");
});



/* Banner-mostrar-econder flechas */
jQuery('.oneByOne1, .oneByOne1_v2').mouseenter(function() {
	jQuery('.arrowButton .prevArrow').fadeIn();
	jQuery('.arrowButton .nextArrow').fadeIn();
}).mouseleave(function() {
	jQuery('.arrowButton .prevArrow').fadeOut();
	jQuery('.arrowButton .nextArrow').fadeOut();
});



/* Clients*/

jQuery('.clients li').mouseenter(function() {
	jQuery('img', this).fadeOut();
	jQuery('img.color', this).fadeIn();
}).mouseleave(function() {
	jQuery('img', this).fadeIn();
	jQuery('img.color', this).fadeOut();
});




/* Home portfolio*/
screenWidth = jQuery(window).width();
var canvi=783;
if(screenWidth>=canvi){res_actual='gran';}else{res_actual='petit';}

var total=jQuery('.page section .projects .contenedor article').length;
jQuery('.page section .projects .contenedor').css('width',500*total);
var pag=1;
calc_pag();
estilo_pag(pag);

jQuery('.botright').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag();
	if(pag!==maxpag){
		pag++;
		estilo_pag(pag);
		if(screenWidth>=canvi){
			if(pag===maxpag){
				if(ultima===0){mou=100;}
				//else{mou=(ultima/3)*100;}
				else{mou=(ultima/2.9326)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .projects .contenedor').animate({'left': '-='+mou+'%'}, "slow");
	}
});

jQuery('.botleft').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag();
	if(pag!==1){
		pag--;
		estilo_pag(pag);
		if(screenWidth>=canvi){
			if(pag===1){
				if(ultima===0){mou=100;}
				//else{mou=(ultima/3)*100;}
				else{mou=(ultima/2.9326)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .projects .contenedor').animate({'left': '+='+mou+'%'}, "slow");
	}
});

jQuery('.botright').mouseenter(function(){if(pag!==maxpag){jQuery('.botright').removeClass('off');}}).mouseleave(function() {jQuery('.botright').addClass('off');});
jQuery('.botleft').mouseenter(function() {if(pag!==1){jQuery('.botleft').removeClass('off');}}).mouseleave(function() {jQuery('.botleft').addClass('off');});

function calc_pag(){
	if(screenWidth>=canvi){
		maxpag=Math.ceil(total/3);
		ultima=total%3;
	}else{
		maxpag=total;
		ultima=total;
	}
}

function estilo_pag(pag){
	if(pag===1){jQuery('.botleft').css('opacity', 0.4); jQuery('.botright').css('opacity', 1);}
	else if(pag===ultima){jQuery('.botright').css('opacity', 0.4); jQuery('.botleft').css('opacity', 1);}
	else{jQuery('.botright').css('opacity', 1); jQuery('.botleft').css('opacity', 1);}
}

function updateporfolio(){
	screenWidth = jQuery(window).width();

	if(screenWidth>=canvi){
		if(res_actual==='petit'){reset_porfolio();}
		res_actual='gran';
	}else{
		if(res_actual==='gran'){reset_porfolio();}
		res_actual='petit';
	}


}

function reset_porfolio(){
	pag=1;
	pagT=1;
	pagC=1;
	jQuery('.page section .projects .contenedor').css('left','0px');
	jQuery('.page section .testimonials .contenedor').css('left','0px');
	jQuery('.page section .clients ul').css('left','0px');
	estilo_pag(1);
	estilo_pag_cli(1);
	estilo_pag_test(1);
}

jQuery(window).bind("resize", function() {updateporfolio();});

// testimonials services
var totalT=jQuery('.page section .testimonials .contenedor article').length;
jQuery('.page section .testimonials .contenedor').css('width',500*totalT);
var pagT=1;
calc_pag_test();
estilo_pag_test(pagT);

function calc_pag_test(){
	if(screenWidth>=canvi){
		maxpagT=Math.ceil(totalT/3);
		ultimaT=totalT%3;
	}else{
		maxpagT=totalT;
		ultimaT=totalT;
	}
}

function estilo_pag_test(pagT){
	if(pagT===1){jQuery('.botleft2').css('opacity', 0.4); jQuery('.botright2').css('opacity', 1);}
	else if(pagT===maxpagT){jQuery('.botright2').css('opacity', 0.4); jQuery('.botleft2').css('opacity', 1);}
	else{jQuery('.botright2').css('opacity', 1); jQuery('.botleft2').css('opacity', 1);}
}

jQuery('.botright2').mouseenter(function() {if(pagT!==maxpagT){jQuery('.botright2').removeClass('off');}}).mouseleave(function() {jQuery('.botright2').addClass('off');});
jQuery('.botleft2').mouseenter(function() {if(pagT!==1){jQuery('.botleft2').removeClass('off');}}).mouseleave(function() {jQuery('.botleft2').addClass('off');});

jQuery('.botright2').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_test();
	if(pagT!==maxpagT){
		pagT++;
		estilo_pag_test(pagT);
		if(screenWidth>=canvi){
			if(pagT===maxpagT){
				if(ultimaT===0){mou=100;}
				else{mou=(ultimaT/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .testimonials .contenedor').animate({'left': '-='+mou+'%'}, "slow");
	}
});

jQuery('.botleft2').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_test();
	if(pagT!==1){
		pagT--;
		estilo_pag_test(pagT);
		if(screenWidth>=canvi){
			if(pagT===1){
				if(ultimaT===0){mou=100;}
				else{mou=(ultimaT/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .testimonials .contenedor').animate({'left': '+='+mou+'%'}, "slow");
	}
});

//clients services

var totalC=jQuery('.page section .clients ul li').length;
/*jQuery('.page section .clients ul').css('width',500*totalC)*/
var pagC=1;
calc_pag_cli();
estilo_pag_cli(pagC);

function calc_pag_cli(){
	if(screenWidth>=canvi){
		maxpagC=Math.ceil(totalC/5);
		ultimaC=totalC%5;
	}else{
		maxpagC=Math.ceil(totalC/2);
		ultimaC=totalC%2;
	}
}

function estilo_pag_cli(pagC){
	if(pagC===1){jQuery('.botleft3').css('opacity', 0.4); jQuery('.botright3').css('opacity', 1);}
	else if(pagC===maxpagC){jQuery('.botright3').css('opacity', 0.4); jQuery('.botleft3').css('opacity', 1);}
	else{jQuery('.botright3').css('opacity', 1); jQuery('.botleft3').css('opacity', 1);}
}

jQuery('.botright3').mouseenter(function() {if(pagC!==maxpagC){jQuery('.botright3').removeClass('off');}}).mouseleave(function() {jQuery('.botright3').addClass('off');});
jQuery('.botleft3').mouseenter(function() {if(pagC!==1){jQuery('.botleft3').removeClass('off');}}).mouseleave(function() {jQuery('.botleft3').addClass('off');});

jQuery('.botright3').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_cli();
	if(pagC!==maxpagC){
		pagC++;
		estilo_pag_cli(pagC);
		if(screenWidth>=canvi){
			if(pagC===maxpagC){
				if(ultimaC===0){mou=100;}
				else{mou=(ultimaC/5)*100;}
			}
			else{mou=100;}
		}else{
			if(pagC===maxpagC){
				if(ultimaC===0){mou=100;}
				else{mou=(ultimaC/2)*100;}
			}
			else{mou=100;}
		}
		jQuery('.page section .clients ul').animate({'left': '-='+mou+'%'}, "slow");
	}
});

jQuery('.botleft3').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_cli();
	if(pagC!==1){
		pagC--;
		estilo_pag_cli(pagC);
		if(screenWidth>=canvi){
			if(pagC===1){
				if(ultimaC===0){mou=100;}
				else{mou=(ultimaC/5)*100;}
			}
			else{mou=100;}
		}else{
			if(pagC===maxpagC){
				if(ultimaC===0){mou=100;}
				else{mou=(ultimaC/2)*100;}
			}
			else{mou=100;}
		}
		jQuery('.page section .clients ul').animate({'left': '+='+mou+'%'}, "slow");
	}
});



/* home hover*/
	jQuery('.page article .imagen, .page article .imagen2').mouseenter(function() {
		jQuery('.hover', this).fadeIn("fast");
		/*jQuery('.hover .lupa',this).css('right','5%');
		jQuery('.hover .lupa',this).animate({'right': '30%'}, "fast");
		jQuery('.hover .link',this).css('top','15%');
		jQuery('.hover .link',this).animate({'top': '38%'}, "fast");*/
	});

	jQuery('.page article .imagen, .page article .imagen2').mouseleave(function() {
		jQuery('.hover', this).fadeOut("fast");
		/*jQuery('.hover .lupa',this).css('right','30%');
		jQuery('.hover .lupa',this).animate({'right': '5%'}, "fast");
		jQuery('.hover .link',this).css('top','38%');
		jQuery('.hover .link',this).animate({'top': '5%'}, "fast");*/
	});

/* Menu line*/
	jQuery('.myMenu .current-menu-item .lineamenu').css('width',(jQuery('.myMenu .current-menu-item').width()+10));

/* Menu hover*/

	jQuery('.menu ul li.nomenu').mouseenter(function() {
		jQuery(this).addClass('selected');
	}).mouseleave(function() {
		jQuery(this).removeClass('selected');
	});

/* Search */

	jQuery('.search input:text').focus(function(){
		jQuery(this).attr('value','');
	});
	jQuery('.widget_search input:text').focus(function(){
		jQuery(this).attr('value','');
	});


	jQuery("#search").focusout(function() {
		if(jQuery(this).val() === ''){jQuery(this).attr('value','search');}
	});
	jQuery("#s").focusout(function() {
		if(jQuery(this).val() === ''){jQuery(this).attr('value','search');}
	});


/* menu responsive*/

    jQuery(function(){
      // bind change event to select
      jQuery('.navegation_resp').bind('change', function () {
          var url = jQuery(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });


/* faq */

	jQuery('.question').click(function(){
		if(jQuery(this).hasClass('qclosed')){
			jQuery('.qopen').parent().find('.answer').slideUp('fast');
			jQuery('.qopen').removeClass('qopen').addClass('qclosed');
			jQuery(this).removeClass('qclosed').addClass('qopen');
			jQuery(this).parent().find('.answer').slideDown('fast');
		}else{
			jQuery(this).removeClass('qopen').addClass('qclosed');
			jQuery(this).parent().find('.answer').slideUp('fast');
		}
	});

//hover team

	jQuery('.team li').mouseenter(function(){
		jQuery('.color',this).css('display','block');
		jQuery('.grisos',this).css('display','none');
	}).mouseleave(function() {
		jQuery('.color',this).css('display','none');
		jQuery('.grisos',this).css('display','block');
	});


// fancybox
	jQuery("a.fancy").fancybox();

// widgets
	jQuery(".blog .sidebar .widget-container h3").after('<div class="bottomline2"></div>');
	jQuery(".blog .sidebar .xoxo ul li").after('<li class="sp_puntos"></li>');

	//linea windows
	var OSName="Unknown OS";
	if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
/*	if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
	if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
	if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";*/

	if (OSName=="Windows"){
		jQuery('.menu .lineamenu').css('bottom','-37px')
	}


	jQuery(window).load(function(){

            large_logo_height   = jQuery('.wrapper_header .logo').find("img").outerHeight();
            delaware_header_size();

        });

        jQuery(window).smartresize(function(){
            delaware_header_size();
        });

        function delaware_header_size() {

            /* animation variables */
            var sitewrap           = jQuery('body > .page.header_fixed'),
                header             = jQuery('.header_fixed .wrapper_header'),
                logowrap           = jQuery('.header_fixed .wrapper_header .logo'),
                                    toolbarheight       = 0,
                large_logo_height   = 44,
                menutop				= 7,
                newmenutop			= 0,
                new_logo_height     = large_logo_height,
                mini_logo_height    = 34,
                header_height       = header.outerHeight(),
                runanimation        = true,
                animated            = 1,
                newHP               = 0 + toolbarheight,
                newSWP              = header_height - jQuery('#wpadminbar').outerHeight(),
                win                 = jQuery(window),
                menu 				= 7,
                opacity				= 1,
                pbot 				= 25,
                set_header_height   = function () {
                    var header_position = win.scrollTop();

                    if( header_position > 0 && animated === 1 && win.width() > 979 ) {

                        newHP  = -40 + jQuery('#wpadminbar').outerHeight();
                        newSWP = header_height - mini_logo_height - toolbarheight - jQuery('#wpadminbar').outerHeight()-30;
                        new_logo_height = mini_logo_height;
                        menu = newmenutop;
                        opacity = 0.98;
                        pbot = 10;
						jQuery('.wrapper_header .light.min').css('height','151px');
						jQuery('.lineamenu').css('display','none');

                        runanimation = true;
                        animated++;
                        jQuery('body').addClass("scrolled");

                    } else if ( header_position === 0 && animated === 2 ) {

                        newHP  = 0 ;
                        newSWP = header_height - jQuery('#wpadminbar').outerHeight();
                        new_logo_height = large_logo_height;
                        menu = menutop;
                        opacity = 1;
                        pbot = 25;
						jQuery('.wrapper_header .light.min').css('height','175px');
						jQuery('.lineamenu').css('display','block');						

                        runanimation = true;
                        animated = 1;
                        jQuery('body').removeClass("scrolled");

                    }

                    if( runanimation ) {
                            /* animate the stuff  */
                            logowrap.stop().animate({ "height" : new_logo_height } , { duration: 100 , queue: false } );
                            header.stop().animate({ "top" : newHP, 'opacity' : opacity, 'padding-bottom' : pbot } , { duration: 100 , queue: false } );
                            sitewrap.stop().animate({ "padding-top" : newSWP } , { duration: 100 , queue: false } );
                            jQuery('.header_fixed .wrapper_header .menu').stop().animate({ "margin-top" : menu } , { duration: 100 , queue: false } );
                            runanimation = false;
                    }

                };

            win.scroll( set_header_height );
            set_header_height();

        }
});