<?php



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
  <header id="headerLP">
    <span><call>¡Llamenos!</call> (01)708-4100</span>
  </header>
  <section id="secLP">
    <article>      
      <textarea name="" id="mytextarea" cols="30" rows="10" style="display: none;"><?php echo htmlentities(the_content()); ?></textarea>

      <div class="contenedor_LP"></div>        
        <div id="content_example" style="display: none;">          
          <hgroup>
            <h1>
              <span class="extrabold">Primer Autorespondedor</span> de E-Mails, SMS, y Llamadas Telefónicas
            </h1>
            <h2>la mejor estrategia para crear campañas de <span class="extrabold">marketing online</span> con éxito</h2>
          </hgroup>
          <div id="contenedor_video">
            <div class="contvideo">
              <iframe width="560" height="315" src="//www.youtube.com/embed/aiWMeL7_9-w" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div id="the_post" style="display: none;">
            <?php the_content(); ?>
        </div>
        <script>
        var data = jQuery('#mytextarea').text();
        if(data !== ''){
            console.log('EUREKA');
            jQuery('#the_post').appendTo('.contenedor_LP');
            jQuery('#the_post').show();
            jQuery('#the_post hgroup').find('br').remove();
        }else{
            console.log('NO HAY DATOS QUE MOSTRAR');           
            jQuery('#content_example').appendTo( jQuery('.contenedor_LP') );
            jQuery('#content_example').show();
        }
         
        </script>

    </article>
    <aside>
      <div class="contentRight">
        <span class="span1">Pre-Lanzamiento PERU</span>
        <span class="span2">¡Sin Costo!</span> 
        Rellene el formulario Y obtenga un
        Bono de <span class="span3">$3 GRATIS!</span>
      </div>
      <div id="form_LP">
        <div id="v2c_api_contact">
          <div id="v2c_form_contact">
            <div id="v2c_apiform">
              <form method="post" action="https://service.v2contact.com/rest/form/post.jsp">
                <input type="hidden" name="api_key" value="37bc2f75bf1bcfe8450a1a41c200364c">
                <input type="hidden" name="api_server" value="http://www.v2contact.com">
                <input type="hidden" name="url_origen" value="http%3A%2F%2Fwww.v2contact.com%2Fabba%2F">
                <input type="hidden" name="ip_origen" value="162.243.42.96">
                <div>
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" required="">
                </div>
                <div>
                  <label for="email">Correo</label>
                  <input type="email" name="email" id="email" required="">
                </div>
                <div>
                  <label for="celular">Celular</label>
                  <input type="text" name="celular" id="celular" required="">
                </div>
                <div>
                  <input type="submit" name="btnSend" value="Suscribirse" class="v2c_btn_submit">
                </div>
              </form>
              <div id="v2c_apiform"></div>
            </div>
          </div>
          <!--<script type="text/javascript" async="" src="https://service.v2contact.com/rest/form/api_contacto.js.php?v2c_key=37bc2f75bf1bcfe8450a1a41c200364c"></script>-->
        </div>
        <!--
        <div id="v2c_api_contact">
          <div id="v2c_form_contact">
            <div id="v2c_apiform">
              <form method="post" action="https://service.v2contact.com/rest/form/post.jsp">
                <input type="hidden" name="api_key" value="b5dc4e5d9b495d0196f61d45b26ef33e">
                <input type="hidden" name="api_server" value="http://www.v2contact.com/">
                <input type="hidden" name="url_origen" value="http%3A%2F%2Fwww.v2contact.com%2Fcasos%2F">
                <input type="hidden" name="ip_origen" value="162.243.42.96">
                <div>
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" required="">
                </div>
                <div>
                  <label for="email">Correo</label>
                  <input type="email" name="email" id="email" required="">
                </div>
                <div>
                  <label for="celular">Celular</label>
                  <input type="text" name="celular" id="celular" required="">
                </div>
                
                <div>
                  <input type="submit" name="btnSend" value="Suscribirse" class="v2c_btn_submit">
                </div>
              </form>
              <div id="v2c_apiform"></div>
            </div>
          </div> -->
        <!--<script type="text/javascript" async="" src="https://service.v2contact.com/rest/form/api_contacto.js.php?v2c_key=b5dc4e5d9b495d0196f61d45b26ef33e"></script>-->
      <!--</div>-->
        <!--
        <div id="v2c_api_contact">
        <div id="v2c_form_contact"></div>
        </div>
        <script type="text/javascript">
        var api_key = '37bc2f75bf1bcfe8450a1a41c200364c',
        v2c_api = document.getElementById('v2c_api_contact');
        (function() {
        var v2c = document.createElement('script');
        v2c.type = 'text/javascript';
        v2c.async = true;
        v2c.src = 'https://service.v2contact.com/rest/form/api_contacto.js.php?v2c_key='+api_key;
        v2c_api.appendChild( v2c );})();
        </script> 
        -->
        <div id="Ppriva" style="display: none;">
          <input type="checkbox" id="poli_priva" value="yes" checked>
          <label for="poli_priva" style="width: auto;margin-bottom: 15px;margin-left: 0px;font-size: 12px;">Acepto las políticas de privacidad</label>
        </div>  
        <script>
          jQuery(function(){
            jQuery('#v2c_apiform').find('div').eq(0).css('padding-top','15px');
            
            jQuery('#Ppriva').appendTo( jQuery('#v2c_apiform form') ).end().css('display','initial');
            jQuery('.v2c_btn_submit').closest('div').appendTo('#v2c_apiform form');
            jQuery('input[type="submit"]').closest('div').eq(0).addClass('divbtn').css('padding-bottom','15px');

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
            jQuery('.v2c_btn_submit').val('Enviar');





          });
        </script>      
      </div>
    </aside>
  </section>
</div>    

<?php get_footer(); ?>