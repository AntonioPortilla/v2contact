
<?php 	
	if (strpos($_SERVER['PHP_SELF'], 'wp-admin') !== false) {
?>
	<script type='text/javascript' src='http://www.v2contact.com/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<?php
	}else{
?>
	<link rel="stylesheet" href="https://service.v2contact.com/chat/css">
	<script src="https://service.v2contact.com/chat/api-source"></script> 
<?php		
	}
?>

<?php
global $post;
$class = (defined('OP_LIVEEDITOR') ? ' op-live-editor' : '');
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6<?php echo $class ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7<?php echo $class ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8<?php echo $class ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html<?php echo $class==''?'':' class="'.$class.'"'; ?> <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
	op_set_seo_title();
?>
<?php
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script('comment-reply', false, array(OP_SN.'-noconflict-js'), OP_VERSION);
wp_head();
?>
</head>
<body <?php body_class(); ?>>
	<div class="container main-content">
		<?php
		op_page_header();
		$GLOBALS['op_feature_area']->load_feature();
		op_page_feature_title();
		echo $GLOBALS['op_content_layout'];
		op_page_footer();
		?>
	</div><!-- container -->
<?php op_footer() ?>

<?php 
	if (strpos($_SERVER['PHP_SELF'], 'wp-admin') !== false) {
?>
	<script type='text/javascript' src='http://www.v2contact.com/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<?php	
	}else{
?>	
	<div id="v2c_api_chat"><div class="v2c_api_content"></div></div>
	<script src="https://service.v2contact.com/chat/api/37c34c25918ab0bca7f9a8256875be99"></script>
<?php		
	}
?>
</body>
</html>