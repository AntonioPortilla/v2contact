<?php
/* Template Name: Pagina Confirmacion */

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


<link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/zenite/css/zenite.css">
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/zenite/css/media_queries.css">
<link rel="stylesheet" id="main-css-css" href="http://www.v2contact.com/wp-content/themes/zenite/style.css?ver=20130206" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="http://www.v2contact.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.5.2" type="text/css" media="all">
<link rel="stylesheet" id="rs-settings-css" href="http://www.v2contact.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?ver=3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="rs-captions-css" href="http://www.v2contact.com/wp-content/plugins/revslider/rs-plugin/css/captions.css?ver=3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="white-css-css" href="http://www.v2contact.com/wp-content/themes/zenite/css/header-white.css?ver=20130208" type="text/css" media="all">
<link rel="stylesheet" id="color-css-css" href="http://www.v2contact.com/wp-content/themes/zenite/css/color-blue.css?ver=20120208" type="text/css" media="all">
<script type="text/javascript" src="http://www.v2contact.com/wp-includes/js/jquery/jquery.js?ver=1.10.2"></script>
<script type="text/javascript" src="http://www.v2contact.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
<script type="text/javascript" src="http://www.v2contact.com/wp-content/plugins/wp-courseware/js/jquery.form.js?ver=2.4"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wpcw_fe_ajax = {"ajaxurl":"http:\/\/www.v2contact.com\/wp-admin\/admin-ajax.php","progress_nonce":"2858a53363","str_uploading":"Uploading:","str_quiz_all_fields":"Please provide an answer for all of the questions."};
/* ]]> */
</script>
<meta name="generator" content="WordPress 3.6.1">
<!-- Q & A -->
<noscript>&lt;link rel="stylesheet" type="text/css" href="http://www.v2contact.com/wp-content/plugins/q-and-a/css/q-a-plus-noscript.css?ver=1.0.6.2" /&gt;</noscript><!-- Q & A --><link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">

</head>

<body  <?php if($NHP_Options->show('layout_mode')!='fluid'){?>style="background:url(<?php $NHP_Options->show('bgcolor'); ?>);"<?php }?> <?php body_class($whiteclass); ?>>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div class="page_confirmacion page fluid" style="padding-top: 0px;">
<!--
  <div class="wrapper_header index">
  </div>
-->
  <link href='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css' rel="stylesheet" type="text/css" />
  <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js'> </script>
  <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <meta name="description" content="V2Contact, Incrementa ventas y cobranzas"/>
  
  <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>        
         
  <?php } ?>
  <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) != '0' and get_post_meta( get_the_ID(), 'zenite_slider', true )!= null) { ?>
  <div class="franja"></div>    
  <?php } /* end slidertype = revslider */ ?>    
      
<?php if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){?>
<div class="home">

<?php } ?>
      <?php $numero = explode( "/", $_SERVER['REQUEST_URI']); $a = $numero[2];?>
      <div class="bg-white">
        <div class="bg-menu" id="bg_register">
            <div id="content_register" class="primary clearfix container" style="height: auto;">
              <div class="separa_top2"></div>
              <div id="confirmation_register2">
                <form action=""><br><br>
                  <div class="bloque1">
                    <span>Te llamaremos  en un minuto con el  código de confirmación</span><br><br>
                    <label for="cod_call">Ingrese el Código de la llamada</label><br>
                    <div class="inputs_call">
                      <input type="text" name="cod_call" id="cod_call" value="<? echo $a;?>">
                      <input type="button" id="recod1" value="Reenviar Código">
                    </div>
                  </div>
                  <!--
                  <div class="bloque2">
                    <span style="margin-top:30px;">Te enviaremos un SMS con el código de confirmación</span><br><br>
                    <label for="cod_SMS">Ingrese el Código SMS</label><br>
                    <div class="inputs_call">
                      <input type="text" name="cod_SMS" id="cod_SMS">
                      <input type="button" id="recod2" value="Reenviar Código">
                    </div>
                  </div>
                -->
                  <div class="confirmar">
                    <input type="button" id="sendForm" value="Confirmar">
                  </div>
                </form>
              </div>
              <div class="iconV2C">
                <a href="http://www.v2contact.com/" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/themes/zenite/images/icon-v2c.png" alt=""></a>
              </div>
            </div> 
        </div>
        
      </div>
  <script>
    var ruta = '<?php echo home_url(); ?>/confirmacion/'
    if (window.location.href == ruta) {
        //alert('ruta igual a confirmacion');
        jQuery('.wrapper_header').css('display','none');      
        jQuery('html').css('margin-top','0px');     
        
    }else{
      console.log('ruta !== a confirmacion');
    };
    window.onload = function(){
      jQuery('#cod_call').focus();
      jQuery('.page').eq(1).css('padding-top','0px');
    }
        
  </script>
<?php //get_footer(); ?>
