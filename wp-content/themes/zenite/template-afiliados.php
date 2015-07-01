<?php
/* Template Name: Template Afiliados */



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
               
      <?php putRevSlider( "slider-afiliados" ) ?>
      <div class="bg-menu" style="background: #52BED7;height: auto;">
        <div class="primary clearfix container" style="height: auto;">
          <div class="about" style="padding-top: 30px;">
            <ul class="clearfix">
            </ul>
          </div>
          <ul class="team equipoA">
            <li class="li-afiliados">
              
                
                  <img src="<?php echo home_url(); ?>/imagenes/dinero.png">
                
              
              <div class="title">
                <span class="title-afiliados">Control via web <br>de ingresos</span> 
              </div>
            </li>
          </ul>
          <ul class="team equipoA">
            <li class="li-afiliados">
              
                  <img src="<?php echo home_url(); ?>/imagenes/soporte.png">
              
              <div class="title">
                <span class="title-afiliados">Soporte <br>permanente</span> 
              </div>
            </li>
          </ul>
          <ul class="team equipoA">
            <li class="li-afiliados">
              
                  <img src="<?php echo home_url(); ?>/imagenes/sin-inversion.png">
                
              <div class="title">
                <span class="title-afiliados">Sin <br>inversion</span> 
              </div>
            </li>
          </ul>
        </div>
      </div> 
      <div class="bg-menu" id="bloque-white">
        <div class="primary clearfix container" style="height: auto;">
          <div id="div_white">            
            <p style="margin-top: 0px;">
              Genere ingresos recomendando V2contact <br>con su <font face="Open Sans extrabold V2C">enlace de afiliado</font> 
            </p>
            <p class="p2">
              No necesita <font face="Open Sans extrabold V2C">vender ni cobrar</font>, por cada usuario que <br> se suscriba y adquiera un plan le hara <font face="Open Sans extrabold V2C">GANAR DINERO</font>
            </p>                       
          </div>
        </div>
      </div>
      <div class="bg-menu" id="bloque-silver">
        <div class="primary clearfix container" style="height: auto;">
          <div id="div_silver">
            <div class="column eight columns">
              <p>
                Descubra en solo <font face="Open Sans extrabold V2C">3 minutos</font><br> 
                como <font face="Open Sans extrabold V2C">generar ingresos</font> con <br>
                nuestro sistema de afiliados
              </p>
            </div>
            <div class="column eight columns">
              <div id="contenedor_video">
                <div class="contenedor_video">
                  <iframe width="560" height="315" src="//www.youtube.com/embed/_6rb4kMxQXA" frameborder="0" allowfullscreen=""></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-menu" id="bloque-white">
        <div class="primary clearfix container" style="height: auto;">
          <div id="div_white">            
            <p style="margin-top: 0px; margin-bottom: 0px;">
              Cuadro de <font face="Open Sans extrabold V2C" style="color:#333;">Comisiones</font> 
            </p>
            <p style="font-size: 18px;margin-top: 2px;">
              Clientes referidos por mes
            </p>
            <table id="tbl_comisiones" border="0" style="width: 100%;">
              <thead>
                <th style="width: 30%;">1 - 5 por mes</th>
                <th style="width: 30%;">6 - 10 por mes</th>
                <th style="width: 30%;">10  + por mes</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    50% del primer mes <br>+ 5% Recurrente
                  </td>
                  <td>
                    70% del primer mes <br>+ 8% Recurrente
                  </td>
                  <td>
                    100% del primer mes <br>+ 10% Recurrente
                  </td>
                </tr>
              </tbody>
            </table>
            <a href="<?php echo home_url(); ?>/registro-afiliados/" class="btn-suscripcion">Suscribase como Afiliado</a>

          
          </div>
        </div>
      </div>
  
      </div>
<?php get_footer(); ?>