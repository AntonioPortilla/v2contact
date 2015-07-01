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



 if(isset($_POST['submitted2'])) {
	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(!isset($hasError)) {
		$emailTo = get_option('admin_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		
		//$emailTo ='albert.canals@medusateam.com';
		
		$subject = 'New email submited';
		$body = "New email submited from call us\n\nEmail: $email ";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

}

/* white header*/
global $NHP_Options; 
if($NHP_Options->get('white')==1){$whiteclass='white';}else{$whiteclass='';}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

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
</head>

<body <?php body_class($whiteclass); ?>>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="page <?php if ( is_home() ) {echo 'home';} ?>">
<div class="wrapper_header index">
  <div class="container cabecera">
    <header class="clearfix">
      <div class="light<?php if(isset($m)){if($m==1){echo ' full';}else{echo' min';}}?>"></div>
      <div class="columns six logo"> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php global $NHP_Options; ?>
        <div class="colorlogo"></div>
        <?php /*<img src="<?php $NHP_Options->show('logo'); ?>" alt="">*/?>
        </a> </div>
      <nav class="columns ten menu myMenu">
        <?php


 wp_nav_menu( array(
 'container' =>false,
 'menu_class' => 'navegation',
 'echo' => true,
 'before' => '<span class="navcurrent_left"></span>',
 'after' => '<span class="navcurrent_right"></span><div class="lineamenu"></div>',
 'link_before' => '',
 'link_after' => '',
 'depth' => 0,
 'walker' => new description_walker())
 );
	 ?>
        <?php 

wp_nav_menu_select(
    array(
        'theme_location' => 'select-menu'
    )
);

?>
      </nav>
    </header>
  </div>
  <!-- //END wrapper_header --> 
  <!--<div class="franja"></div>--> 
  
</div>
<script type="text/javascript">

  jQuery(function(){
    jQuery(".myMenu").buildMenu(
    {
      template:"menuVoices.html",
      additionalData:"pippo=1",
      menuWidth:200,
      openOnRight:false,
      menuSelector: ".menuContainer",
      iconPath:"jquery.mb.menu.2.8.5/ico/",
      hasImages:true,
      fadeInTime:0,
      fadeOutTime:0,
      adjustLeft:2,
      minZindex:"auto",
      adjustTop:10,
      opacity:1,
      shadow:false,
      shadowColor:"#ccc",
      hoverIntent:0,
      openOnClick:false,
      closeOnMouseOut:true,
      closeAfter:0,
      submenuHoverIntent:200
    });
  });

  //this function get the id of the element that fires the context menu.
  function testForContextMenu(el){
    if (!el) el= $.mbMenu.lastContextMenuEl;
    alert("the ID of the element is:   "+jQuery(el).attr("id"));
  }

  function recallcMenu(el){
    if (!el) el= $.mbMenu.lastContextMenuEl;
    var cmenu=+jQuery(el).attr("cmenu");
    jQuery(cmenu).remove();
  }

  function showMessage(msg){
    var msgBox=jQuery("<div>").addClass("msgBox");
    jQuery("body").append(msgBox);
    msgBox.append("You click on: <br>"+msg);
    setTimeout(function(){msgBox.fadeOut(500,function(){msgBox.remove();})},3000)
  }

</script>