<?php
function theme_styles()  
{

global $NHP_Options; 
$color=$NHP_Options->get('color');
$white=$NHP_Options->get('white');

  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'color-css', 
    get_template_directory_uri() . '/css/color-'.$color.'.css', 
    array(), 
    '20120208', 
    'all' );
	
  wp_register_style( 'white-css', 
    get_template_directory_uri() . '/css/header-white.css', 
    array(), 
    '20130208', 
    'all' );
	

  // enqueing:
  
  if($white==1){
  	wp_enqueue_style( 'white-css' );
  }
  wp_enqueue_style( 'color-css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');
?>