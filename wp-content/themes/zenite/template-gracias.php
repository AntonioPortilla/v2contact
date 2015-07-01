<?php

require_once 'defines.php';

/*
  Template Name: Template Gracias
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
Gracias | V2contact</title>
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

  <link href="<?php echo ASSETS_PATH ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo ASSETS_PATH ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/font-awesome.min.css">
  <!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
  <![endif]-->

  <!--fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300">
  <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/jquery.gritter.css">

  <!--ace styles-->
  <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/ace.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/ace-responsive.min.css">
  <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/ace-skins.min.css">




<link rel="shortcut icon" href="https://service.v2contact.com/favicon.ico">
</head>

<body  <?php if($NHP_Options->show('layout_mode')!='fluid'){?>style="background:url(<?php $NHP_Options->show('bgcolor'); ?>);"<?php }?> <?php body_class($whiteclass); ?>>
<?php 
  /*echo '<pre>';
  print_r(ASSETS_PATH);
  echo '</pre>';*/
?>
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


</div>
<script type="text/javascript">


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

<div class="blog gracias">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <!-- content --> 
    <div class="bg-white"><div class="shadow_top" id="nibi"></div>
      <section class="container content">
        <div class="blog clearfix" style="color: #000000;"> 
            
            <div style="margin-top: 35px;">	
            <body class="navbar-fixed">
    
    <div class="container-fluid" id="main-container" style="margin-top: 150px;">
        <div id="main-content" class="clearfix">

          <div id="page-content" class="clearfix">
          <div class="row-fluid">
              <div class="row-fluid">
                  <div class="span12">
                      <div class="widget-box" style="border-bottom: none; border: 1px solid #CCCCCC;">
                          <div class="widget-body" id="templateGracias" style="border: none; outline: 0px;">
                              <div class="widget-main">
                                  <div class="row-fluid ddesc">                                     
                                    <div class="divGracias" style="font-size: 35px; font-weight: bold; margin-left: 220px; margin-top: 25px;">¡Gracias por Registrarte!</div>
                                    <div style="width: 770px; padding: 15px; margin-top: 15px;">
                                      Te hemos enviado un correo electrónico al correo que nos proporcionaste con un  ENLACE DE CONFIRMACION en caso de no recibirlo,
                                      favor de revisar tu bandeja de correo no deseado y colocar nuestros correos como CORREOS DESEADOS.
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="gracias_footer">¿Quieres comenzar YA? ... Llamanos ahora mismo al 708-4100</div>
                          <div class="gracias_subfooter"></div>
                      </div>
                  </div>
              </div>
              
          </div>

            </div>
              </div><!--
              <footer class="footer">
                <p>  
                  Copyright &copy; <?php //echo date("Y") ?> V2Contact. Todos los derechos reservados 
                  </p>
              </footer> -->
            </div>


















            </div>  
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  window.jQuery || document.write("<script src='<?php echo ASSETS_PATH ?>/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
  var dataDialog = '', JS_ADMIN_PATH = '<?php echo JS_ADMIN_PATH?>';
</script>
<script src="<?php echo ASSETS_PATH ?>/js/uncompressed/bootstrap.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/ace-elements.min.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/ace.min.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/bootbox.min.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/jquery.gritter.min.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo ASSETS_PATH ?>/js/jquery.slimscroll.min.js"></script>


<script src="<?php echo ASSETS_PATH ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/jquery.dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/datepicker.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/bootstrap-timepicker.css">
    <script src="<?php echo ASSETS_PATH ?>/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/date-time/locales/bootstrap-datepicker.es.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/date-time/bootstrap-timepicker.min.js"></script>
     

    <link rel="stylesheet" href="<?php echo ASSETS_PATH ?>/css/chosen.css" />
    <script src="<?php echo ASSETS_PATH ?>/js/fuelux/fuelux.wizard.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/additional-methods.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/bootbox.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo ASSETS_PATH ?>/js/chosen.jquery.min.js"></script>
    <script type="text/javascript">
      $(function() {
      
        $('[data-rel=tooltip]').tooltip();
      
        $(".chzn-select").css('width','150px').chosen({allow_single_deselect:true , no_results_text: "No such state!"})
        .on('change', function(){
          $(this).closest('form').validate().element($(this));
        }); 
      
      
        var $validation = false;
        $('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
          if(info.step == 1 && $validation) {
            if(!$('#validation-form').valid()) return false;
          }
        }).on('finished', function(e) {
          bootbox.dialog("<h4 class='header grey clearfix' style='margin-top:0'>Para finalizar hacer click en CONFIRMAR!</h4>", [{
            "label" : "OK",
            "class" : "btn-small btn-primary",
            }]
          );
        });
      
      
        $('#validation-form').hide();
        $('#skip-validation').removeAttr('checked').on('click', function(){
          $validation = this.checked;
          if(this.checked) {
            $('#sample-form').hide();
            $('#validation-form').show();
          }
          else {
            $('#validation-form').hide();
            $('#sample-form').show();
          }
        });
      
      
      
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
      
      
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
      
        jQuery.validator.addMethod("phone", function (value, element) {
          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
      
        $('#validation-form').validate({
          errorElement: 'span',
          errorClass: 'help-inline',
          focusInvalid: false,
          rules: {
            email: {
              required: true,
              email:true
            },
            password: {
              required: true,
              minlength: 5
            },
            password2: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            name: {
              required: true
            },
            phone: {
              required: true,
              phone: 'required'
            },
            url: {
              required: true,
              url: true
            },
            comment: {
              required: true
            },
            state: {
              required: true
            },
            platform: {
              required: true
            },
            subscription: {
              required: true
            },
            gender: 'required',
            agree: 'required'
          },
      
          messages: {
            email: {
              required: "Please provide a valid email.",
              email: "Please provide a valid email."
            },
            password: {
              required: "Please specify a password.",
              minlength: "Please specify a secure password."
            },
            subscription: "Please choose at least one option",
            gender: "Please choose gender",
            agree: "Please accept our policy"
          },
      
          invalidHandler: function (event, validator) { //display error alert on form submit   
            $('.alert-error', $('.login-form')).show();
          },
      
          highlight: function (e) {
            $(e).closest('.control-group').removeClass('info').addClass('error');
          },
      
          success: function (e) {
            $(e).closest('.control-group').removeClass('error').addClass('info');
            $(e).remove();
          },
      
          errorPlacement: function (error, element) {
            if(element.is(':checkbox') || element.is(':radio')) {
              var controls = element.closest('.controls');
              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
              else error.insertAfter(element.nextAll('.lbl').eq(0));
            } 
            else if(element.is('.chzn-select')) {
              error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
            }
            else error.insertAfter(element);
          },
      
          submitHandler: function (form) {
          },
          invalidHandler: function (form) {
          }
        });
      
      })
    </script>   



</div> 				
<footer class="footer">
  <p>  
    Copyright &copy; <?php echo date("Y") ?> V2Contact. Todos los derechos reservados 
    </p>
</footer>
<?php endwhile; // end of the loop. ?>

<?php /* get_sidebar(); */ ?>
<?php //get_footer(); ?>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?23mvzjSLDdh0StmtTvP8nUJVckz7N8W9';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->