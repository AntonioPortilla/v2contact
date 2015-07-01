<?php
function zenite_scripts(){
	 if (!is_admin())
	 {
		wp_enqueue_script( 'jquery', ZENITE_JS .'/jquery-1.7.1.min.js', array('jquery'));
		wp_enqueue_script( 'flexslider', ZENITE_JS.'/jquery.flexslider-min.js', array('jquery'),'1.0');
		wp_enqueue_script( 'zenite', ZENITE_JS.'/zenite.js', array('jquery'),'1.0');
   		wp_enqueue_script( 'mbMetadata', ZENITE_JS.'/../jquery.mb.menu.2.8.5/inc/jquery.metadata.js', array('jquery'),'1.0');
		wp_enqueue_script( 'mbHoverintent', ZENITE_JS.'/../jquery.mb.menu.2.8.5/inc/jquery.hoverIntent.js', array('jquery'),'1.0');		
		wp_enqueue_script( 'mbMenu', ZENITE_JS.'/../jquery.mb.menu.2.8.5/inc/mbMenu.js', array('jquery'),'1.0');
		wp_enqueue_script( 'custom', ZENITE_JS.'/custom.js', array('jquery'),'1.0');
		wp_enqueue_script( 'fancybox', ZENITE_JS.'/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery'),'1.0');

         wp_enqueue_script( 'isotope', ZENITE_JS.'/jquery.isotope.min.js', array('jquery'),'1.0');
		 wp_enqueue_script( 'portfolio', ZENITE_JS.'/portfolio.js', array('jquery'),'1.0');	
		 wp_enqueue_script( 'modernizr', ZENITE_JS.'/modernizr.custom.76532.js', array('jquery'),'1.0');			 			 	
	}
	
  // To load a script only on a Page with ID = 23, follow this format:
/*    if( is_page('42') ) {
         wp_enqueue_script( 'isotope', ZENITE_JS.'/jquery.isotope.min.js', array('jquery'),'1.0');
		 wp_enqueue_script( 'portfolio', ZENITE_JS.'/portfolio.js', array('jquery'),'1.0');
   }*/	
}
add_action('init', 'zenite_scripts',100);
?>