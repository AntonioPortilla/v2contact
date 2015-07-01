<?php
/* Template Name: Pagina Inicio */



get_header(); ?>
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/zenite/css/JALP.css">

  <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>        
       <div class="bg-menu">
        <nav class="primary clearfix container">
        <div class="titol"><span class="slim"><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?></span> / <span class="blau"><?php the_title();?></span></div>
                <div class="search">
<!--                <input id="search" name="search" type="text" value="search"  />-->
        <?php get_search_form(); ?></div>
    </nav> 
       </div>        
  <?php } ?> 
       
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
<!--<div class="success">
  <div class="container" style="display: block;">
    <h1><?php $NHP_Options->show('hover1_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover1_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover1_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover2_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover2_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover2_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover3_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover3_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover3_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover4_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover4_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover4_image'); ?>)"></div>
  </div>
</div> -->


<?php } ?>
      
      <div class="bg-white">
        <!--<div class="shadow_top"></div> -->
      

      <div class="bg-menu" style="background: white;height: auto;">
          <div class="primary clearfix container" style="height: auto;">
            <div class="moduls clearfix whiteover">

         <div class="flecha_home" style="display: block; left: 100px;"></div>

               <article class="column four columns article activo">
                  <div style="position:relative;">
                    
                    <div class="container"><div class="helper"><div class="content"><!--stuff--></div></div></div>
                    
          <a href="http://www.v2contact.com/"><div class="imagen"><div class="icono"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/icon-audios-masivos.png"></div></div>
<div class="title"><span class="remarcar">Audios Masivos</span> </div></a>
                    <p>Realiza llamadas telefónicas masivas, programa dia y hora ¡Sorprende a tus Clientes! </p>
                    </div>
               </article>

               <article class="column four columns article">
                  <div>
          <a href="http://www.v2contact.com/"><div class="imagen"><div class="icono"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/icon-sms.png"></div></div>
          <div class="title"><span class="remarcar">SMS</span> </div></a>                    
                    <p>Más del 90% lee un mensaje de texto. Contacta y Fideliza! </p>
                    </div>
               </article>

               <article class="column four columns article">
            <div>
          <a href="http://www.v2contact.com/"><div class="imagen"><div class="icono"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/icon-email1.png"></div></div>
          <div class="title"><span class="remarcar">E-mail</span> </div></a>                    
                    <p>Personaliza el mensaje con el nombre del contacto, programalo y envíalo ¡Más fácil imposible!</p>
          </div>
               </article>

               <article class="column four columns article">
            <div>
          <a href="http://www.v2contact.com/"><div class="imagen"><div class="icono"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/icon-crm.png"></div></div>
          <div class="title"><span class="remarcar">Virtual PBX</span></div></a>                    
                    <p>Contestadora Telefónica de Voz Graba llamadas y monitorea Campañas de marketing.</p>
          </div>
               </article>

           </div>
          </div>          
       </div>
        
        <div class="bg-menu" id="bloque-gris" style="background: #F3F3F1;">
          <div class="primary clearfix container" style="height: auto;">
            <div id="div_gris" style="padding-top: 16px;">
              <div class="column eight columns plataformasV2C">
                <p style="color: #212121;">
                  Primera Plataforma Multicanal para <font face="Open Sans extrabold V2C">automatizar</font> Campañas de Marketing y Ventas<br>
                  <a href='http://www.v2contact.com/servicios-v2contact/' class='tp-button blueslider big ' style="font: normal 16px 'Open Sans Regular V2C';border-radius: 15px;z-index: 999;letter-spacing: 0px;text-shadow: none;background: #D81686;">
                    Ver Servicios
                  </a>
                </p>
              </div>
              <div class="column eight columns plataformasV2C">
                <div id="contenedor_video">
                  <div class="contvideo" style="border: 8px solid rgba(0,0,0,0.3);">
                    <a href="#modal-v2c">
                      <img src="<?php echo home_url(); ?>/imagenes/autorespondedor.jpg" alt="autorespondedor">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="bg-menu" style="background: white;height: auto;">
          <div class="primary clearfix container" style="height: auto;">
            <div class="incrementaVentas">“Cambiamos la forma de comunicar un mensaje <br>
<font face="Open Sans extrabold V2C">incrementando</font> <font color="#50BDD1">ventas y cobranzas con un solo CLICK</font>”</div>
          </div> 
       </div>
        
        <div class="bg-menu" id="bloque-gris" style="background: #50BDD1;">
          <div class="primary clearfix container" style="height: auto;">
            <div id="div_gris" style="padding-top: 30px;">
              <div class="column eight columns plataformasV2C">
                <div id="contenedor_video">
                  <div class="contvideo">
                    <a href="#modal-casos">
                      <img src="<?php echo home_url(); ?>/imagenes/casos-exito.jpg" alt="casos de exito">
                    </a>
                  </div>
                </div>
              </div>
              <div class="column eight columns plataformasV2C">
                <div class="titleCasos">Casos de Éxito</div>
                  <p>
                    V2contact nos ha ayudado a incrementar nuestras ventas de una forma 
                    <font face="Open Sans extrabold V2C">imparable.</font><br><br>
                    <a href='http://www.v2contact.com/casos/' class='tp-button blueslider big ' style="font: normal 16px 'Open Sans Regular V2C';border-radius: 15px;z-index: 999;letter-spacing: 0px;text-shadow: none;background: #66981E;">Ver Más Casos</a>
                  </p>  
              </div>
            </div>
          </div>
        </div>

       <div class="bg-menu" style="background: white;height: auto;">
          <div class="primary clearfix container" style="height: auto;padding-bottom: 50px;">
            <div class="Premios_internacionales"><font face="Open Sans extrabold V2C">Premios </font> Internacionales Obtenidos</div>
            <div class="column one-third columns">
              <p> <img src="http://www.v2contact.com/wp-content/uploads/2013/12/wayra.png"><br></p>
            </div>
            <div class="column one-third columns">
              <p> <img src="http://www.v2contact.com/wp-content/uploads/2013/12/ecommerceday.png"><br></p>
            </div>
            <div class="column one-third columns">
              <p> <img src="http://www.v2contact.com/wp-content/uploads/2013/12/startup-academy.png"><br></p>
            </div>
          </div> 
       </div>

       <div class="bg-menu" style="background: #312D2E;height: auto;">
          <div class="primary clearfix container" style="height: auto; color: white;">
            <div class="Prueba_sincosto"><span style="font-size: 38px;">¿Esta dispuesto a comprobarlo?<br></span>
              <span style="font-size: 17px;"><font face="Open Sans extrabold V2C">ATENCIÓN</font> Mucho cuidado, esta herramienta podría causarle <font face="Open Sans extrabold V2C">adicción</font> :)</span><br><br>
              <a href='http://www.v2contact.com/precios/' class='tp-button blueslider big ' style="font: normal 20px 'Open Sans Regular V2C';border-radius: 15px;z-index: 999;letter-spacing: 0px;text-shadow: none;background: #66981E;">Prueba Sin Costo</a>
            </div>
          </div> 
       </div>
       <div class="about">
       <div class="bg-menu" style="background: white;height: auto;">
          <div class="primary clearfix container" style="height: auto; color: white;">
            <div class="titular">
              <div class="title">Clientes</div>
              <div class="nav-right off botright3" style="opacity: 1;"></div>
              <div class="nav-left off botleft3" style="opacity: 0.4;"></div>
              <div class="sp_line"></div>
            </div>
            <div class="clients clearfix">
              <ul>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/banorte.png" alt="Banorte" width="165" height="96" style="display: block; opacity: 1;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/banorte.png" alt="Banorte" width="165" height="96" class="color" style="display: inline; opacity: 0;"></li>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/golds-gym.png" alt="Golds Gym" width="165" height="96" style="display: block;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/golds-gym.png" alt="Golds Gym" width="165" height="96" class="color" style="display: none;"></li>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/bostons.png" alt="Bostons" width="165" height="96" style="display: block;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/bostons.png" alt="Bostons" width="165" height="96" class="color" style="display: none;"></li>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/BBVA.png" alt="Bancomer" width="165" height="96" style="display: block;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/BBVA.png" alt="Bancomer" width="165" height="96" class="color" style="display: none;"></li>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/mapfre.png" alt="Mapfre" width="165" height="96" style="display: block;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/mapfre.png" alt="Mapfre" width="165" height="96" class="color" style="display: none;"></li>
                <li><img src="http://www.v2contact.com/wp-content/uploads/2013/10/dominos-pizza.png" alt="Dominos Pizza" width="165" height="96" style="display: block;"><img src="http://www.v2contact.com/wp-content/uploads/2013/10/dominos-pizza.png" alt="Dominos Pizza" width="165" height="96" class="color" style="display: none;"></li>
              </ul>
            </div>

          </div>
       </div></div>

   <div class="call-shadow-top"></div>
</div>
<!--inicio del modal-->
<div id="video_principal" class="main" role="main">
  <section class="semantic-content" id="modal-v2c" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
    <div class="modal-inner">
      <iframe width="560" height="315" src="http://www.youtube.com/embed/WMhtI4-nycQ" frameborder="0" allowfullscreen></iframe>   
    </div>
    <a href="#!" class="modal-close" title="Cerrar" data-close="Cerrar">&times;</a>
  </section>
  <section class="semantic-content" id="modal-casos" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
    <div class="modal-inner">
      <iframe width="560" height="315" src="http://www.youtube.com/embed/8CLodJ_SSuY" frameborder="0" allowfullscreen></iframe>
    </div>
    <a href="#!" class="modal-close" title="Cerrar" data-close="Cerrar">&times;</a>
  </section>
</div>
<!--fin del modal -->
<?php get_footer(); ?>