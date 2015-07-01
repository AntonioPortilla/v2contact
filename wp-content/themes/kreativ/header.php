<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>


<meta charset="UTF-8">

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/kreativ/bootstrap-responsive.css" />
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="http://localhost/centrosvirtuales/wp-content/themes/kreativ/style.css">
<![endif]-->

<?php wp_head(); ?>
</head>
<body>

<?php global $options;
		foreach ($options as $value) {
    	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
		}?>
<div style="clear: both;"></div> 
<div id="headerwarp">
<div id="header">
<div id="headerleft">
	<h1>
		<a href="<?php echo get_settings('home'); ?>/">
			<img src="<?php echo home_url(); ?>/wp-content/themes/kreativ/images/logo-v2c.png" alt="Go Home" />
		</a>
	</h1>
</div>





<div id="headerright">
	<?php include ( TEMPLATEPATH . '/includes/cats.php' ); ?>
</div>


</div>	
</div>
<div style="clear: both;"></div>