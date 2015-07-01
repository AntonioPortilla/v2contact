<?php
/* Template Name: Pagina Casos */



get_header(); ?>

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
               
        <?php putRevSlider( "slider-casos" ) ?>         

        <div class="bg-menu" style="background: #FFFFFF;height: auto; padding-top: 25px;">
            <div class="primary clearfix container" style="height: auto;">
              <div class="separa-contenido-casos"></div>
              <div class="mas-casos">
                <div class="column eight columns">
                  <iframe class="mivideo" width="100%" height="315" src="//www.youtube.com/embed/8CLodJ_SSuY" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="column eight columns">
                  <p class="titlecontenido">
                    Sabrina Sosa - Marketing Leader
                  </p>
                  <p class="contenido_serv">V2contact nos ha ayudado a incrementar nuestras
                ventas de una forma imparable. Utilizamos v2contact
                para posicionar nuestra marca con todos nuestros 
                clientes, les enviamos promociones y cobranzas de 
                una forma muy fácil y rápida.<br>
                  </p>
                        <p class="pcontenido" style="float: left;margin-top: 68px;">
                  <a href="http://www.v2contact.com/registro/" class="tp-button blueslider big testFREE" style="font-weight: normal;font-size: 18px;border-radius: 0px;">Prueba Gratis Ahora</a>
                  </p>
                </div>
              </div><div class="separa-contenido-casos"></div>
            </div> 
        </div>
       
        <div class="bg-menu" style="background: #F5F5F5;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos" style="background: #F5F5F5;"></div>
              <div class="mas-casos">
                <div class="column eight columns">
                    <p class="titlecontenido">
                      Miguel Rivero - Programa el Pueblo
                    </p>
                    <p class="contenido_serv">Por medio de v2contact podemos interactuar con nuestra
audiencia haciendoles interactuar de una manera muy fácil.
Con v2contact tenemos una herramienta fundamental
para poder, enviarles a nuestros aficionados información
acerca de encuestas, promociones etc.<br>
                    </p>
                          <p class="pcontenido" style="float: left;margin-top: 68px;">
                    <a href="http://www.v2contact.com/registro/" class="tp-button blueslider big testFREE" style="font-weight: normal;font-size: 18px;border-radius: 0px;">Prueba Gratis Ahora</a>
                    </p>
                </div>
                <div class="column eight columns">
                  <iframe src="//www.youtube.com/embed/OsDVcBtVHDY" height="315" width="100%" allowfullscreen="" frameborder="0"></iframe>
                </div>
              </div><div class="separa-contenido-casos" style="background: #F5F5F5;"></div>
            </div> 
         </div>
         <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos"></div>
              <div class="column eight columns">
                  <iframe src="//www.youtube.com/embed/yHzkurEiovI" height="315" width="100%" allowfullscreen="" frameborder="0"></iframe>
              </div>
              <div class="column eight columns">
                <p class="titlecontenido">Carolina Sierra - Sierra Abogados</p>
                  <p class="contenido_serv">V2contact nos a ayudado a ofrecer servicios de
                  recuperación de deudas de la manera más rápida
                  posible. Con v2contact podemos enviar un mensaje
                  de cobranza con un solo click, nuestros clientes
                  se encuentran ampliamente satisfechos ya que
                  nuestros indicadores de recuperación de deudas
                  es muy alto.</p>
                  <p class="pcontenido" style="float: left; margin-top: 20px;"><a class="tp-button blueslider big testFREE" style="font-weight: normal; font-size: 18px; border-radius: 0px;" href="http://www.v2contact.com/registro/">Prueba Gratis Ahora</a></p>
              </div><div class="separa-contenido-casos"></div>   
            </div>
          </div>
          <div class="bg-menu" style="background: #F5F5F5;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos" style="background: #F5F5F5;"></div>
              <div class="column eight columns">
                <p class="titlecontenido">Alexis Nuñez - Agencia de Marketing</p>
                <p class="contenido_serv">
                      Somos una empresa importante, consultora de marketing que
se enfoca a desarrollar campañas de marketing y publicidad
a clientes importantes, a la vez somos distribuidores de los
servicios de v2contact.
Recomendamos ampliamente los servicios de v2Contact ya
que aumentan significativamente el cierre de ventas de nuestros clientes.
                  </p>
                  <p class="pcontenido" style="float: left; margin-top: 20px;"><a class="tp-button blueslider big testFREE" style="font-weight: normal; font-size: 18px; border-radius: 0px;" href="http://www.v2contact.com/registro/">Prueba Gratis Ahora</a></p>
              </div>  
              <div class="column eight columns">
                  <iframe src="//www.youtube.com/embed/9nOfsOBZ24k" height="315" width="100%" allowfullscreen="" frameborder="0"></iframe>
              </div><div class="separa-contenido-casos" style="background: #F5F5F5;"></div>
            </div>
          </div>
         <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos"></div>
              <div class="column eight span12" style="background: #26BBE9; padding: 20px 30px;">
              <p class="titlecontenido" style="font-size: 2.8em; margin: 0px; color: #FFFFFF;">"V2Contact ha sido <font face="Open Sans extrabold V2C">Ganador</font> de varios premios y concursos a nivel Internacional"</p>
              <p style="font: 1.5em 'Open sans v2c'; margin: 0px; margin-top: 12px;">Conoce más de nuestros galardones</p>

              </div><div class="separa-contenido-casos"></div>
            </div>
          </div>
          <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos"></div>
              <div class="column eight columns">
                <img class="alignnone size-full wp-image-488" alt="WAYRA" src="http://www.v2contact.com/wp-content/uploads/2013/12/WAYRA.jpg" width="350" height="175" />
              </div>
              <div class="column eight columns">
                <p class="titlecontenido">Ganadores de Wayra 2013</p>
                <p class="contenido_serv">Wayra es la incubadora de startup más importante
                de Latinoamerica. Hemos sido seleccionados ganadores
                de la 3a generación y actualmente estamos en proceso
                de aceleración.</p>
              </div><div class="separa-contenido-casos"></div>
           </div>
         </div>
         <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos"></div>
              <div class="column eight columns">
                <p class="titlecontenido" style="font-size: 1.6em;">Ganadores del Ecommerceday Peru 2013</p>
                <p class="contenido_serv">Somos ganadores del la edicion 2013 del Ecomerday llevado
                a cabo en el Swiss Hotel en la Ciudad de Lima Perú.
                V2Contact ha sido seleccionada como uno de los proyectos
                más innovadores y de rapido crecimiento en la región.</p>
              </div>
              <div class="column eight columns">
                <center><img class="alignnone size-full wp-image-491" alt="ecommerceday" src="http://www.v2contact.com/wp-content/uploads/2013/12/ecommerceday.jpg" width="350" height="175" /></center>
              </div><div class="separa-contenido-casos"></div>
            </div>
          </div>
          <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos"></div>
              <div class="column eight columns">
              <img class="alignnone size-full wp-image-503" alt="startup-academy" src="http://www.v2contact.com/wp-content/uploads/2013/12/startup-academy1.png" width="350" height="175" />
              </div>
              <div class="column eight columns">
              <p class="titlecontenido">Ganadores del Startup Academy 2013</p>
              <p class="contenido_serv">V2Contact Gana la 6a generación de la academia de
              incubamiento de startups más importante del Perú.
              Hemos sido seleccionado como un proyecto de alta
              innovación y gran escalabilidad.</p>

              </div><div class="separa-contenido-casos"></div>
            </div>
          </div>
          <div class="bg-menu" style="background: #EFEEE8;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><div class="separa-contenido-casos" style="background: #EFEEE8;"></div>
              <div class="column eight span12" style="width: 100%;">
                <p class="titlecontenido" style="font-size: 2.4em; margin: 0px;">Únete a la plataforma Líder en <font face="Open Sans extrabold V2C">Comunicación Multicanal</font></p>
                <p class="pcontenido"><center><a class="tp-button blueslider big pruebaGratis" href="http://www.v2contact.com/registro/">Prueba Gratis Ahora</a></center></p>
              </div><div class="separa-contenido-casos" style="background: #EFEEE8;"></div>
            </div>
          </div>


      </div>
<?php get_footer(); ?>