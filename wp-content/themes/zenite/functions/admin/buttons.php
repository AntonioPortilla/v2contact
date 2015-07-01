<?php
/**
Hook into WordPress
*/
 
add_action('init', 'mylink_button');

/**
Create Our Initialization Function
*/
 
function mylink_button() {
 
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
     return;
   }
 
   if ( get_user_option('rich_editing') == 'true' ) {
     add_filter( 'mce_external_plugins', 'add_plugin' );
     add_filter( 'mce_buttons', 'register_button' );
   }
 
}

/**
Register Button
*/

function register_button( $buttons ) {
 array_push( $buttons, "|", "mylink" );
 return $buttons;
}

/**
Register TinyMCE Plugin
*/
 
function add_plugin( $plugin_array ) {
   $plugin_array['mylink'] = get_template_directory_uri() . '/js/mybuttons.js';
   return $plugin_array;
}

?>