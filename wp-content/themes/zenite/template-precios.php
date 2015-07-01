<?php 
	/* Template Name: Pagina Precios */

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
               
        <?php putRevSlider( "slider-precios" ) ?>         

        <div class="bg-menu" style="background: #54BED8;height: auto; padding-top: 25px;">
            <div class="primary clearfix container" style="height: auto;">
              <div class="audios_telefonicos">
                <center><span style="color: white;"><font face="Open Sans extrabold V2C">Seleccione su País</font></span><br>
                <select name="pais" id="pais" style="width: 200px;">
				    <option value="Perú" selected>Perú</option>
				    <option value="Ecuador">Ecuador</option>
				    <option value="España">España</option>
				    <option value="Usa">Usa</option>
				    <option value="Canadá">Canadá</option>
				    <option value="Colombia">Colombia</option>
				    <option value="México">México</option>
				    <option value="Uruguay">Uruguay</option>
				    <option value="Paraguay">Paraguay</option>
				</select></center>
              </div>
          </div>
      </div>

      <div class="bg-menu" style="background: #FFFFFF;height: auto; padding-top: 25px;">
            <div class="primary clearfix container" style="height: auto;">

				<div id="precios_v2c">
				<div class="container_12">
					<article class="grid_12 pricing-style-1">
				<div class="pricing-table-col">
				<ul>
					<li class="head">
				<h5></h5>
				<span class="price" style="display:initial;">Características </span>
					<span></span></li>
				<ul>
					<li class="fosc notop">Envío/Recepción Audios</li>
					<li>Envío/Recepción SMS</li>
					<li class="fosc notop">Envío Estratégico Email</li>
					<li>Autorespondedor</li>
					<li class="fosc notop">Estadísticas de envío</li>
					<li>PBX Virtual</li>
					<li class="fosc notop">CRM</li>
					<li>Almacén de contactos</li>
					<li class="liprecios fosc notop" style="height: 38px;"></li>
				<div class="ocultaPrecios" style="display: none;">
					<li class="fosc notop">Heramientas Avanzadas</li>
					<li>Herramientas Redes Sociales</li>
					<li class="fosc notop">Gestion de Usuarios</li>
					<li>Grupos Creados</li>
					<li class="fosc notop">Campañas Activas</li>
					<li>Llamadas concurrentes</li>
					<li class="fosc notop">Capacitación ON Line</li>
					<li>Soporte vía Tel/chat</li>
					<li class="fosc notop">Atención Presencial</li>
					<li class="fosc notop">Planes al Detalle</li>
				</div></ul>
					<li class="pricing-footer">
				<div class="btn-black">
				<a href="http://www.v2contact.com/afiliados/"> </a></div></li>
				</ul>
				</div>
				<div class="pricing-table-col selected">
				<ul>
					<li class="head">
						<h5></h5>
						<span class="price" style="display:initial; font-size: 27px;"><font face="Open Sans extrabold V2C">Plan <br>Starter</font></span>
					</li>
				<ul>
					<li class="fosc notop"><span class="cantidad">316</span></li>
					<li><span class="cantidad">1000*</span></li>
					<li class="fosc notop"><span class="cantidad">4,750</span></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li><span class="cantidad">500</span></li>
					<li class="liprecios fosc notop" style="height: 38px;"></li>
				<div class="ocultaPrecios" style="display: none;">
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop">1</li>
					<li><span class="cantidad">5</span></li>
					<li class="fosc notop"><span class="cantidad">5</span></li>
					<li><span class="cantidad">1</span></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png">
					<li class="fosc notop"><span class="cantidad"><a href="http://www.v2contact.com/descargas/Tarifas-Peru.pdf">Descargar</a></span></li>
				</div></ul>
					<li class="pricing-footer">
				<div class="btn-black">
					<a href="http://www.v2contact.com/afiliados/"><font face="Open Sans extrabold V2C">Probar</font></a></div></li>
				</ul>
				</div>
				<div class="pricing-table-col">
				<ul>
					<li class="head">
						<h5></h5>
						<span class="price" style="display:initial;font-size: 27px;"><font face="Open Sans extrabold V2C">Plan <br>Bronce</font></span>
					</li>
				<ul>
					<li class="fosc notop"><span class="cantidad">2,500</span></li>
					<li><span class="cantidad">GRATIS*</span></li>
					<li class="fosc notop"><span class="cantidad">25,000</span></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li><span class="cantidad">3,500</span></li>
					<li class="liprecios" style="background: #E9E8E3;height:38px;">
						<!--<a href="#" style="color: white; font-size: 15px;" class="vermasPrecios">Ver tabla completa</a>-->
						<a href="http://www.v2contact.com/casos/" class="tp-button blueslider vermasPrecios" style="font: normal 16px 'Open Sans Regular V2C';border-radius: 15px;z-index: 999;text-shadow: none;background: #66981E;line-height: 0px;">Ver Tabla Completa</a>
					</li>
				<div class="ocultaPrecios" style="display: none;">
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop">3</li>
					<li><span class="cantidad">15</span></li>
					<li class="fosc notop"><span class="cantidad">15</span></li>
					<li><span class="cantidad">1</span></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li class="fosc notop"><span class="cantidad"><a href="http://www.v2contact.com/descargas/Tarifas-Peru.pdf">Descargar</a></span></li>
				</div></ul>
					<li class="pricing-footer">
				<div class="btn-black">
					<a href="http://www.v2contact.com/afiliados/"><font face="Open Sans extrabold V2C">Probar</font></a></div></li>
				</ul>
				</div>
				<div class="pricing-table-col selected">
				<ul>
					<li class="head">
						<h5></h5>
						<span class="price" style="display:initial;font-size: 27px;"><font face="Open Sans extrabold V2C">Plan <br>Plata</font></span>
					</li>
				<ul>
					<li class="fosc notop"><span class="cantidad">6,800</span></li>
					<li><span class="cantidad">GRATIS*</span></li>
					<li class="fosc notop"><span class="cantidad">85,000</span></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/uncheck.png"></li>
					<li><span class="cantidad">8,000</span></li>
					<li class="liprecios fosc notop" style="height: 38px;"></li>
				<div class="ocultaPrecios" style="display: none;">
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop">8</li>
					<li><span class="cantidad">30</span></li>
					<li class="fosc notop"><span class="cantidad">30</span></li>
					<li><span class="cantidad">3</span></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li class="fosc notop"><span class="cantidad"><a href="http://www.v2contact.com/descargas/Tarifas-Peru.pdf">Descargar</a></span></li>
				</div></ul>
					<li class="pricing-footer">
				<div class="btn-black">
					<a href="http://www.v2contact.com/afiliados/"><font face="Open Sans extrabold V2C">Consultar</font></a></div></li>
				</ul>
				</div>
				<div class="pricing-table-col">
				<ul>
					<li class="head">
						<h5></h5>
						<span class="price" style="display:initial;font-size: 27px;"><font face="Open Sans extrabold V2C">Plan <br>Oro</font></span>
					</li>
				<ul>
					<li class="fosc notop"><span class="cantidad">16,000</span></li>
					<li><span class="cantidad">GRATIS*</span></li>
					<li class="fosc notop"><span class="cantidad">213,000</span></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><span class="cantidad">20,000</span></li>
					<li class="liprecios fosc notop" style="height: 38px;"></li>
				<div class="ocultaPrecios" style="display: none;">
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop">10</li>
					<li><span class="cantidad">50</span></li>
					<li class="fosc notop"><span class="cantidad">50</span></li>
					<li><span class="cantidad">5</span></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png"></li>
					<li class="fosc notop"><img alt="check" src="http://www.v2contact.com/wp-content/uploads/2014/02/check.png">
					<li class="fosc notop"><span class="cantidad"><a href="http://www.v2contact.com/descargas/Tarifas-Peru.pdf">Descargar</a></span></li>
				</div></ul>
					<li class="pricing-footer">
				<div class="btn-black">
					<a href="http://www.v2contact.com/afiliados/"><font face="Open Sans extrabold V2C">Consultar</font></a></div></li>
				</ul>
				</div>
				</article></div>
				<script>
					jQuery(".vermasPrecios").click(function(e){
					    e.preventDefault();
					    jQuery(".ocultaPrecios").show();
					    jQuery(".liprecios").hide();
					  });
					</script>
				</div>
            </div> 
        </div>
        <!--<div class="separa-contenido-serv"></div>-->
        <div class="bg-menu" style="background: #54BED8;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;">
              <div class="sol_soporte">
                <div class="column eight columns">
					<p>
						<span>¿Solución a Medida?</span><br>
						Tenemos planes para integrar todas las herramientas 
de v2contact a su sistema actual pregunte a los 
expertos en comunicación multicanal!      Contactenos

					</p>
				</div>
				<div class="column eight columns">
					<p>
						<span>¿Soporte y Capacitación?</span><br>
						Realizamos seminarios GRATUITOS! suscribase a uno
y aprenda a utilizar las herramientas que llevarán
al exito las comunicaciones de su empresa!.


					</p>
				</div>
              </div>
            </div> 
         </div>
         <div class="separa-contenido-serv"></div>
         <div class="bg-menu" style="background: #FFFFFF;height: auto;">
            <div class="primary clearfix container" style="height: auto; color: white;"><center>
              <span class="titulos">¿Listo para comprobar el <font face="Open Sans extrabold V2C">Éxito Multicanal</font>?</span><br><br><br>
              <div class="precios_multicanal">
              	<div class="preciosTXT">Pruebe cualquiera de nuestros planes mensuales</div>
              	<a href="http://www.v2contact.com/afiliados/" class="tp-button blueslider" style="font: normal 16px 'Open Sans Regular V2C';border-radius: 15px;letter-spacing: 0px;margin-left: 550px;text-shadow: none;background: #66981E;line-height: 0px;">Comenzar</a></div></center>
            </div>
          </div>         
                   
          

        <div class="call-shadow-top"></div>
      </div>
<script type="text/javascript">
	jQuery('#pais').change(paises);
  	function paises () {
      var $this = jQuery(this), data = 'do='+$this.val();//, tipoPais = $this.val();
      console.log('Cargando...');
      switch (data) {
      	case 'Ecuador':
      		alert('Estas en Ecuador');
      	break;
      	default:
      		jQuery('#pais').html('<option>Perú</option>');
      		alert('Proximamente');
      	break;
      }

      jQuery.ajax({
          url: 'https://service.v2contact.com/include/ajax/ajax.paises.php',
          dataType: 'json',
          data: data,            
          success: function(rec)
           {
              if(rec.load){
                  //jQuery('.titol span').eq(0).text(tipoPais);
                  //jQuery('#precios_v2c').html(rec.data);
                  console.log(rec.success_message);
              }else {
                  alert(rec.error_message);
              }
           }
      });
  } 

</script>
<?php get_footer(); ?>