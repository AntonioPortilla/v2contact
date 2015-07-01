<?php
  require('defines.php');
/*
  Template Name: Template Registro2
*/




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
<?php
  //wp_head();
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
Registro | V2contact</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />


<link rel="pingback" href="http://www.v2contact.com/xmlrpc.php" />

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.v2contact.com/wp-content/themes/zenite/css/ie8.css">
<![endif]-->


<!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.15 - http://yoast.com/wordpress/seo/ -->
<meta name="description" content="Comunicación en la Nube"/>
<link rel="canonical" href="http://www.v2contact.com/registro/" />
<meta property="og:locale" content="es_ES"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Registro - V2contact"/>
<meta property="og:description" content="Comunicación en la Nube"/>
<meta property="og:url" content="http://www.v2contact.com/registro/"/>
<meta property="og:site_name" content="V2contact"/>
<!-- / Yoast WordPress SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="V2contact &raquo; Feed" href="http://www.v2contact.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="V2contact &raquo; RSS de los comentarios" href="http://www.v2contact.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="V2contact &raquo; Registro RSS de los comentarios" href="http://www.v2contact.com/registro/feed/" />
<link rel='stylesheet' id='q-a-plus-css'  href='http://www.v2contact.com/wp-content/plugins/q-and-a/css/q-a-plus.css?ver=1.0.6.2' type='text/css' media='screen' />
<link rel='stylesheet' id='wpcw-frontend-css'  href='http://www.v2contact.com/wp-content/plugins/wp-courseware/css/wpcw_frontend.css?ver=2.4' type='text/css' media='all' />
<link rel='stylesheet' id='main-css-css'  href='http://www.v2contact.com/wp-content/themes/zenite/style.css?ver=20130206' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.v2contact.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-settings-css'  href='http://www.v2contact.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-captions-css'  href='http://www.v2contact.com/wp-content/plugins/revslider/rs-plugin/css/captions.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='white-css-css'  href='http://www.v2contact.com/wp-content/themes/zenite/css/header-white.css?ver=20130208' type='text/css' media='all' />
<link rel='stylesheet' id='color-css-css'  href='http://www.v2contact.com/wp-content/themes/zenite/css/color-blue.css?ver=20120208' type='text/css' media='all' />
<script type='text/javascript' src='http://www.v2contact.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/plugins/wp-courseware/js/jquery.form.js?ver=2.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcw_fe_ajax = {"ajaxurl":"http:\/\/www.v2contact.com\/wp-admin\/admin-ajax.php","progress_nonce":"1b787c3a49","str_uploading":"Uploading:","str_quiz_all_fields":"Please provide an answer for all of the questions."};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/plugins/wp-courseware/js/wpcw_front.js?ver=2.4'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/jquery.flexslider-min.js?ver=1.0'></script>

<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/../jquery.mb.menu.2.8.5/inc/jquery.metadata.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/../jquery.mb.menu.2.8.5/inc/jquery.hoverIntent.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/../jquery.mb.menu.2.8.5/inc/mbMenu.js?ver=1.0'></script>

<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/fancybox/jquery.fancybox-1.3.4.pack.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/jquery.isotope.min.js?ver=1.0'></script>

<script type='text/javascript' src='http://www.v2contact.com/wp-content/themes/zenite/js/modernizr.custom.76532.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-includes/js/comment-reply.min.js?ver=3.6.1'></script>
<script type='text/javascript' src='http://www.v2contact.com/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?ver=3.6.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.v2contact.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.v2contact.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 3.6.1" />
<!-- Q & A -->
    <noscript><link rel="stylesheet" type="text/css" href="http://www.v2contact.com/wp-content/plugins/q-and-a/css/q-a-plus-noscript.css?ver=1.0.6.2" /></noscript><!-- Q & A -->



<link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">
</head>

<body  <?php if($NHP_Options->show('layout_mode')!='fluid'){?>style="background:url(<?php $NHP_Options->show('bgcolor'); ?>);"<?php }?> <?php body_class($whiteclass); ?>>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="page <?php $NHP_Options->show('header_mode'); ?> <?php $NHP_Options->show('layout_mode'); ?> <?php if ( is_home() ) {echo 'home';} ?>">
<div class="wrapper_header index">
  <div class="container cabecera">
    <header class="clearfix">
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
      
      </header>
  </div>
  <!-- //END wrapper_header -->
  <!--<div class="franja"></div>-->

</div>
<script type="text/javascript">
/*
  $(function(){
    $(".myMenu").buildMenu(
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
  });*/

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
<link   href='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css' rel="stylesheet" type="text/css" /> 
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script> 
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js'></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style> 
  .hidden{display:none;}
</style>

<div class="blog">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <!-- content --> 
    <div class="bg-white"><div class="shadow_top" id="nibi"></div>
      <section class="container content">
        <div class="blog clearfix" style="color: #000000;"> 
            
            <div style="margin-top: 35px;"></div>		
            <form id='preregister' class="register2"> 
              <table border="0" cellspaccing='0' style='font: 13px Verdana, Arial, Helvetica, sans-serif;'>
                <tr><td><label for="pais">Pais</label>        </td><td><select        name='pais'id='pais'>
                                 <option value=''>SELECCIONE PAIS</option>
                                 </select>                            </td></tr>
                <tr><td><label for="idn">Doc. Identidad</label> </td><td><select        name='idn' id='idn' >
                                  <option value=''>SELECCIONE OPCION</option>
                                  <option value='1'>DNI</option>
                                  <option value='2'>RUC</option>
                                  <option value='3'>CARNET EXTRANJERIA</option>
                                 </select>                            </td></tr>
                <tr><td><label for="doc">N° Doc</label>       </td><td><input type='text'   name='doc' id='doc' st/td></tr>
                <tr><td><label for="ape">Apellidos</label>    </td><td><input type='text'   name='ape' id='ape' ></td></tr>
                <tr><td><label for="nom">Nombres</label>      </td><td><input type='text'   name='nom' id='nom' ></td></tr>
                <tr><td><label for="ema">Email</label>      </td><td><input type='text'   name='ema' id='ema' ></td></tr>
                <tr><td><label for="co1">Contraseña</label>   </td><td><input type='password' name='co1' id='co1' ></td></tr>
                <tr><td><label for="co2">Repetir Contraseña</label>   </td><td><input type='password' name='co2' id='co2' ></td></tr>
                <tr><td><label for="tel">Telefono</label>   </td><td><input type='text'   name='tel' id='tel' ></td></tr>
                <tr><td><label for="dia">F. Nacimiento</label>  </td><td><select        name='dia' id='dia' ><option value=''>DIA</option></select>
                                 <select        name='mes' id='mes' ><option value=''>MES</option></select>
                                 <select        name='ani' id='ani' ><option value=''>AÑO</option></select></td></tr>
                <tr><td><label>Sexo</label>     </td><td><label class="sexo"><input type='radio'  name='sex' id='sex' value='M'> Masculino </label>
                                 <label class="sexo"><input type='radio'  name='sex' id='sex' value='F'> Femenino </label></td></tr>
                <tr><td></td><td><input type='button' id='send'  name='send' value='ENVIAR'></td></tr>
            </table>
            </form>
    				<script>
              $( document ).ready(function() {

              ini =  1;   fin = 31;   var dia = '';
              while(ini <= fin) {dia = dia + '<option value="'+ ini +'">'+ ini +'</option>';        ini = ini + 1;}

              ini =  1;   fin = 12;   var mes = '';
              while(ini <= fin) {mes = mes + '<option value="'+ ini +'">'+ ini +'</option>';        ini = ini + 1;}

              var d = new Date();   var y = d.getFullYear() * 1;
              ini =   0;  fin = 125;  
              while(ini <= fin) {ani = ani + '<option value="'+ (y - ini) +'">'+ (y - ini) +'</option>';  ini = ini + 1;}

              $('#dia').append(dia);  $('#mes').append(mes);  $('#ani').append(ani);
                          $.ajax({
                            cache: false
                             ,url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php'
                          ,dataType: 'json'
                              ,data: 'do=COUNTRY'
                              ,type: 'POST'
                           ,success: function(response){
                                          if(response.load){
                                                      $('#pais').append(response.tresponse);
                                                      $('.hidden').removeClass('hidden');
                                                   }  
                                                else {alert(response.error_message);}
                                         }
                              });
                               });

              function alertempytyinputselect(inselectput){ $('#' + inselectput).css('border','1px solid red'); setTimeout(function(){  $('#' + inselectput).css('border','');   },3000);   }
              $('#send').click(function(){sendpreregister();});

              function sendpreregister(){ 
              if(     $('#pais').val() == ''){ alertempytyinputselect('pais'); return;}
              if(      $('#idn').val() == ''){ alertempytyinputselect('idn');  return;}
              if(      $('#doc').val() == ''){ alertempytyinputselect('doc');  return;}
              if(      $('#ape').val() == ''){ alertempytyinputselect('ape');  return;}
              if(      $('#nom').val() == ''){ alertempytyinputselect('nom');  return;}
              if(      $('#ema').val() == ''){ alertempytyinputselect('ema');  return;}
              if(      $('#tel').val() == ''){ alertempytyinputselect('tel');  return;}
              if(      $('#dia').val() == ''){ alertempytyinputselect('dia');  return;}
              if(      $('#mes').val() == ''){ alertempytyinputselect('mes');  return;}
              if(      $('#ani').val() == ''){ alertempytyinputselect('ani');  return;}
              if(  $('#sex:checked').val() == ''){ alertempytyinputselect('sex');  return;}
              if(      $('#co1').val() == ''){ alertempytyinputselect('co1');  return;}
              if(      $('#co2').val() == ''){ alertempytyinputselect('co2');  return;}

              if( $('#co1').val() != $('#co2').val() ){alertempytyinputselect('co1'); alertempytyinputselect('co2');alert("LAS CONTRASEÑAS NO COINCIDEN"); return;}
                          $.ajax({
                            cache: false
                             ,url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php'
                          ,dataType: 'json'
                              ,data: 'do=PREREGISTER&' + $('#preregister').serialize()
                              ,type: 'POST'
                           ,success: function(response){if(response.load){alert(response.tresponse); $('select,input[type="text"],input[type="password"],input[type="radio"]').val('');}  else {alert(response.error_message);}}
                              });
                            }
            </script>

    		</div>
      </section>
     <div class="call-shadow-top"></div>
    </div>
</div> 				

<?php endwhile; // end of the loop. ?>

<?php /* get_sidebar(); */ ?>
<?php //get_footer(); ?>