<?php
/* Template Name: Landing Page V2C */



get_headerLP(); ?>

<body>
  
    <?php 
      if( has_post_thumbnail()){ 
    $img =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' , false );
    ?>
    <div id="xd" style="background: url('<?php echo $img[0]; ?>') no-repeat #52BDD0;background-size: cover;">
    <?php
  }else{
  ?>
    <div id="xd" style="background: url('<?php echo home_url(); ?>/wp-content/themes/zenite/images/bg-lp.jpg') no-repeat #52BDD0;background-size: cover;">
  <?php
  }
     ?>
  
  
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div class="fondaszo_landing_page page fluid">

  <?php /*if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>        
       <div class="bg-menu">
        <nav class="primary clearfix container">
        <div class="titol"><span class="slim"><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?></span> / <span class="blau"><?php the_title();?></span></div>
                <div class="search">
                <!-- <input id="search" name="search" type="text" value="search"  /> -->
        <?php get_search_form(); ?></div>
    </nav> 
       </div>        
  <?php }*/ ?>   
  <?php //putRevSlider( "slider-servicios" ) ?>
  <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) != '0' and get_post_meta( get_the_ID(), 'zenite_slider', true )!= null) { ?>
  <div class="franja"></div>
    <?php //if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'zenite_slider', true )); } ?>
        <?php 
    
    if( isset($_COOKIE['themeblvd-header-style']) ){
       //Set Style
        $barra_style = $_COOKIE['themeblvd-header-style']; 
    }else{
      $barra_style = 'black';
    }
    
    if( isset($_GET['header']) ){
       //Set Style
        $barra_style = $_GET['header'];
    }   
    
    if ($barra_style =='white'){
      if(class_exists('RevSlider')){ putRevSlider('slider3'); }
    }else{
      if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'zenite_slider', true )); }
    }
    
    ?>
  <?php } /* end slidertype = revslider */ ?>       
       
      <!-- content --> 
    
      
<?php if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){?>
<div class="home">
  <?php } ?>

  <div class="contenedor_landing">
    <div id="the_post">
      <?php the_content(); ?>
    </div>  
  </div>
</div> 
<textarea name="" id="mytextarea" cols="30" rows="10" style="display: none;"><?php echo htmlentities(the_content()); ?></textarea>
<script>
  /*var data = jQuery('#mytextarea').text();
  if(data !== ''){
      console.log('EUREKA');
      jQuery('#the_post').appendTo('.contenedor_LP');
      jQuery('#the_post').show();
      jQuery('#the_post hgroup').find('br').remove();
  }else{
      console.log('NO HAY DATOS QUE MOSTRAR');           
      jQuery('#content_example').appendTo( jQuery('.contenedor_LP') );
      jQuery('#content_example').show();
  }*/

  /********************/
    window.onload = function(){
      jQuery('#v2c_apiform').find('div').eq(0).css('padding-top','15px');
      jQuery('#Ppriva').appendTo( jQuery('#v2c_apiform form') ).end().css('display','initial');
      jQuery('.v2c_btn_submit').closest('div').appendTo('#v2c_apiform form');
      jQuery('input[type="submit"]').closest('div').eq(0).addClass('divbtn').css('padding-bottom','15px');
      jQuery('.v2c_btn_submit').val('Enviar');
      
      jQuery('.v2c_btn_submit').on('click', function(e){

        if((jQuery('#poli_priva').prop('checked'))==true){
          console.log('los datos ingresados son correctos');   
          jQuery('#v2c_apiform form').on('submit');
        }else{
          console.log('no esta seleccionado');
          e.preventDefault();
          alert('Usted debe aceptar nuestras policias de privacidad');
        }
      });
    }
   
</script>
<?php get_footer(); ?>






