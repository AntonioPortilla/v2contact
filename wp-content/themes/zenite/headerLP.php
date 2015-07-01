<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

global $NHP_Options;

/* white header*/
if($NHP_Options->get('white')==1){$whiteclass='white';}else{$whiteclass='';}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * zenite_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<script src="https://service.v2contact.com/chat/api-source"></script>
<?php

  wp_register_style( 'main-css',
    get_stylesheet_uri(),
    array(),
    '20130206',
    'all' );

  wp_enqueue_style( 'main-css' );

?>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/ie8.css">
<![endif]-->
<!-- inicio eliminar chota -->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();

?>
<!-- fin eliminar chota -->
<link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">
<style>
  #v2c_apiform form>div>label{
    color: white;
    display: inline-block;
    font: 15px 'Open Sans Regular V2C';
    margin-left: 20px;
    width: 80px;
  }
  #v2c_apiform form>div>input[type="text"], #v2c_apiform form>div>input[type="email"]{
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    height: 15px;
    margin-right: 0px;
    width: 187px;
  }
  #v2c_apiform form>div>input[type="submit"]{
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    display: block;
    font: 18px 'Open Sans Regular V2C';
    margin: auto;
  }
</style>
</head>



