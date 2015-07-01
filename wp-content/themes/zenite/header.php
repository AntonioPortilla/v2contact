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
<html <?php language_attributes(); ?>>
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
<link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">


<style>
#divContenido p{
  color: #3F4040;
}
#content {
  width: 900px;
  margin: 0px auto;
  padding: 2em 1em;
}

#header {
  background-color: #EBE9EA;
  border: 1px solid #D2D2D2;
  border-radius: 8px 8px 8px 8px;
  margin-bottom: 10px;
  text-align: center;
  width: 900px;
  min-height: 150px;
}

#central {
  background-color: #EBE9EA;
  border: 1px solid #D2D2D2;
  border-radius: 8px 8px 8px 8px;
  float: left;
  min-height: 225px;
  margin-bottom: 10px;
  margin-right: 10px;
  width: 685px;
  padding:10px;
}

#footer {
  background-color: #EBE9EA;
  border: 1px solid #D2D2D2;
  border-radius: 8px 8px 8px 8px;
  margin-top: 10px;
  text-align: center;
  clear: left;
  width: 900px;
  min-height: 100px;
}

#popup {
  left: 0;
  top: 0;
  position: fixed;/*absolute;*/
  width: 100%;
  z-index: 1001;
}

#popupAntispam{
  left: 0;
  top: 0;
  position: fixed;/*absolute;*/
  width: 100%;
  z-index: 1001;  
}

.content-popup {
  margin:0px auto;
  margin-top:10%;
  position: relative;/*fixed*/
  padding:10px;
  width: 800px;
  min-height:250px;
  max-height: 375px;
  border-radius:4px;
  background-color:#FFFFFF;
  overflow: auto;
  outline: 5px solid #2E2E2E;
  /*box-shadow: 0 2px 5px #666666;*/
  box-shadow: 0 0 20px #000000;
  -moz-box-shadow: 0 0 20px #000000;
  -webkit-box-shadow: 0 0 20px #000000;
  -o-box-shadow: 0 0 20px #000000;
  -ms-box-shadow: 0 0 20px #000000;
}

.content-popup h2 {
  color:#48484B;
  border-bottom: 1px solid #48484B;
  margin-top: 0;
  padding-bottom: 4px;
  height: 38px;
  padding: 0px;
}
.content-popup h4{
  color:#48484B;
  font-size: 1.8em;
  font-weight: 200;
  margin-bottom: 20px;
}

.popup-overlay {
  left: 0;
  position: fixed;/*absolute;*/
  top: 0;
  width: 100%;
  z-index: 999;
  display:none;
  background-color: #777777;
  cursor: pointer;
  opacity: 0.7;
}

.close {
  position: absolute;
  right: 15px;
}

</style>



<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '230311053842275']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=230311053842275&amp;ev=NoScript" /></noscript>


</head>

<body  <?php if($NHP_Options->show('layout_mode')!='fluid'){?>style="background:url(<?php $NHP_Options->show('bgcolor'); ?>);"<?php }?> <?php body_class($whiteclass); ?>>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->



<div class="page <?php $NHP_Options->show('header_mode'); ?> <?php $NHP_Options->show('layout_mode'); ?> <?php if ( is_home() ) {echo 'home';} ?>">
<div class="wrapper_header index">
  <div class="container cabecera">
    <header class="clearfix" id="cabeceraV2C">
      <div class="light<?php if(isset($m)){if($m==1){echo ' full';}else{echo' min';}}?>"></div>
      <div class="columns six logo"> 
        <a href="<?php echo home_url( '/' ); ?>" class="logo_v2contact" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php global $NHP_Options; ?>
          <img src="<?php $NHP_Options->show('logo'); ?>" alt="V2Contact">
        </a> </div>
      <nav class="columns ten menu myMenu">
        <?php

        /*
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
         );*/

        	 ?>

        <?php

        wp_nav_menu_zenite(
            array(
                'theme_location' => 'zenite-menu'
            )
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
      <li class="rootVoice {menu: 'menu_47'}  current-menu-item" menu="menu_47" style="white-space: nowrap;" id="li_afiliados">
        <a href="<?php echo home_url(); ?>/afiliados/" style="background-color: rgb(102, 152, 30); font-family: 'Open Sans light V2C'; background-position: initial initial; background-repeat: initial initial;">Afiliados</a>
        <div class="lineamenu" style="width: 66px; bottom: -37px; display: block;"></div>    
        <ul class="mbmenu" id="menu_47" style="display: none;">
        </ul>
      </li>
      
      </header>
  </div>
  <!-- //END wrapper_header -->
  <!--<div class="franja"></div>-->

</div>
<script type="text/javascript">

  jQuery(function(){
    jQuery('#li_afiliados').appendTo(jQuery('nav ul.navegation'));
    /*jQuery(".myMenu").buildMenu(
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
    });*/
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
