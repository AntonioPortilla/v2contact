<?php
/* Template Name: Pagina Servicios */



get_header(); ?>

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
      
      <div class="bg-white">
               
        <?php putRevSlider( "slider-servicios" ) ?>         

        <div class="bg-menu" style="background: #F5F5F5;height: auto; padding-top: 25px;">
            <div class="primary clearfix container" style="height: auto;">
              <div class="audios_telefonicos">
                <div class="column eight columns">
                  <p>
                    <img alt="Audios Telefónicos" src="http://www.v2contact.com/wp-content/uploads/2013/12/audios-telefonicos.png">
                  </p>
                </div>
                <div class="column eight columns">
                  <p class="titlecontenido">
                    Envio/Recepción de <font face="Open Sans extrabold V2C">Audios</font> Telefónicos
                  </p>
                  <p class="contenido_serv" style="color: #3F4040;">Capta la atención al instante!. Envia una llamada
                        telefonica con un audio pregrabado.
                        Los usuarios podrán interactuar con las teclas 
                        del telefono y los resultados serán mostrados 
                        en el panel de control.<br>
                  </p>
                  <p>
                    <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
              </div>
            </div> 
        </div>
        <div class="separa-contenido-serv"></div>
        <div class="bg-menu" style="background: white;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <div class="recepcion_mensajes">
                <div class="column eight columns">
                  <p class="titlecontenido">
                    Envio/Recepción de Mensajes <font face="Open Sans extrabold V2C">SMS</font>
                  </p>
                  <p class="contenido_serv" style="color: #3F4040;">Más del 90% lee un mensaje SMS!
                    Atrae más clientes con esta novedosa solución.
                    Crea campañas personalizadas y 100% efectivas
                    y recibe respuestas inmediatas de los mensajes enviados
                    en un panel de control.<br>
                  </p>
                        <p>
                  <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
                <div class="column eight columns">
                  <p>
                    <center><img alt="Mensajes SMS" src="http://www.v2contact.com/wp-content/uploads/2013/12/mensajesSMS.png"></center>
                  </p>  
                </div>
              </div>
            </div> 
         </div>
         <div class="separa-contenido-serv"></div>
         <div class="bg-menu" style="background: #F5F5F5;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <div class="marketing_efectivo">
                <div class="column eight columns">
                  <p>
                    <img alt="Marketing Efectivo" src="http://www.v2contact.com/wp-content/uploads/2013/12/marketing-efectivo.png">
                  </p>
                </div>
                <div class="column eight columns">
                  <p class="titlecontenido">
                    Email <font face="Open Sans extrabold V2C">Marketing</font> Efectivo!
                  </p>
                  <p class="contenido_serv" style="color:#3F4040;">Crea las campañas más efectivas e incrementa tu
                    retorno de inversión publicitaria en más de un 40%
                    Atrea a clientes con envión automaticos y programados
                    de correos con el seguimiento automatico de contactos.<br>
                  </p>
                    <p>
                    <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="separa-contenido-serv"></div>
          <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <div class="cloud_PBX">
                <div class="column eight columns">
                  <p class="titlecontenido">
                    <font face="Open Sans extrabold V2C">Cloud PBX</font> ¡Lo ultimo en Comunicación!
                  </p>
                  <p class="contenido_serv" style="color: #3F4040;">Con una Central Telefónica en la nube, podrás
                    grabar llamadas telefonicas y obtener indicadores
                    de llamadas para tomar desiciones inmediatas en
                    la empresa y supervisar tu personal.
                    Asegura la calidad de las comunicaciones y 
                    el ahorro en telefonía.<br>
                  </p>
                  <p>
                    <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
                <div class="column eight columns">
                  <p>
                    <center><img alt="PBX" src="http://www.v2contact.com/wp-content/uploads/2013/12/pbx.png"></center>
                  </p>  
                </div>
              </div>
            </div>
          </div>
          <div class="separa-contenido-serv"></div>
          <div class="bg-menu" style="background: #F5F5F5;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
             <div class="CRM_integrado">
                <div class="column eight columns">
                  <p>
                    <img alt="CRM" src="http://www.v2contact.com/wp-content/uploads/2013/12/CRM.png">
                  </p>
                </div>
                <div class="column eight columns">
                  <p class="titlecontenido">
                    <font face="Open Sans extrabold V2C">CRM</font> Integrado
                  </p>
                  <p class="contenido_serv" style="color: #3F4040;">SIgue el estado de tus ventas y prospectos
                    con recordatorios en piloto automatico. 
                    Fideliza y haz que compren una y otra vez más.
                    ¡V2Contact hace el trabajo duro, mientras duermes!<br>
                  </p>
                    <p>
                    <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
              </div>
            </div>
         </div>
         <div class="separa-contenido-serv"></div>
         <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <div class="herramientas_comunicaciones">
                <div class="column eight columns">
                  <p class="titlecontenido">
                    Herramientas de <font face="Open Sans extrabold V2C">Comunicaciones</font>
                  </p>
                  <p class="contenido_serv" style="color: #3F4040;">Unifica las comunicaciones en una sola plataforma.
                    V2contact te ayuda a integrar via API aplicaciones
                    asi como integrar redes sociales y diversos
                    canales online y offline haciendo MAS RENTABLE
                    los negocios modernos. Cada dia integramos nuevas
                    funciones!<br>
                  </p>
                  <p>
                    <a href="http://www.youtube.com/watch?v=_6rb4kMxQXA" target="_blank" class="tp-button blueslider big " style="font-weight: normal;font-size: 18px;border-radius: 0px;">Ver Video Presentación</a>
                  </p>
                </div>
                <div class="column eight columns">
                  <p>
                    <center><img alt="Comunicaciones" src="http://www.v2contact.com/wp-content/uploads/2013/12/comunicaciones.png"></center>
                  </p>  
                </div>
              </div>
            </div>
          </div>
          <div class="separa-contenido-serv"></div>
          <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <center><div style="background: #4C4B4B;padding: 1px;width: 90%;"></div></center>
            </div>
          </div>
          <div class="separa-contenido-serv"></div>
          <div class="bg-menu" style="background: #FFFFFF;height: auto; padding-bottom: 35px;">
            <div class="primary clearfix container" style="height: auto; color: white;">
                <div class="impulsa_crecimiento">
                  <p class="titlecontenido" style="color: white;font-weight: normal;">
                    Impulsa el <font face="Open Sans extrabold V2C">crecimiento</font> de tu negocio con las herramientas de comunicación que ofrece V2Contact
                  </p>
                  <p style="font: 1.5em 'Open sans v2c';">
                    Conoce más de Casos de Exito y Premios
                  </p>
                  <p class="pcontenido">
                    <center><a href="http://www.v2contact.com/registro/" class="tp-button blueslider big " style="font: normal 20px 'Open Sans Regular V2C';border-radius: 15px;z-index: 999;letter-spacing: 0px;text-shadow: none;background: #66981E;">Prueba Gratis Ahora</a></center>
                  </p>
                </div>
            </div>
          </div>

        <div class="call-shadow-top"></div>
      </div>
<?php get_footer(); ?>