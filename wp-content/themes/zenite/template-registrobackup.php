<?php
/* Template Name: Pagina Registro */

  get_header(); ?>
  <link   href='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css'     rel="stylesheet" type="text/css" />
  <!--<script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'>       </script>-->
  <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js'>      </script>
  <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js">                 </script>
  <meta name="description" content="V2Contact, Incrementa ventas y cobranzas"/>
  
  <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>        
  <div class="bg-menu">
    <nav class="primary clearfix container" style="padding-top: 40px;">
      <div class="titol"><span class="title_registro">Crea tu Cuenta en <font face="Open Sans extrabold V2C">3 Simples</font> Pasos</span></div>
      <div class="search" id="prueba_gratis">
        <span></span>  
      </div>
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

<?php } ?>
      
      <div class="bg-white">
        <div class="bg-menu" id="bg_registro">
            <div class="primary clearfix container" style="height: auto;">
              <div id="content_registro">
                <div class="column eight columns">
                  
                  <div id="respond" class="cuerpoRegistro">
                    <form id='preregister'>
                      <p class="comment-form-author">
                        <label for="country">Pais: <span class="required">*</span></label>
                        <select name='pais'id='country'>
                            <option value=''>SELECCIONE PAIS</option>
                        </select> 
                      </p>
                      <p class="comment-form-author">
                        <label for="idn" class="full_width">Tipo Doc: <span class="required">*</span></label> 
                        <select name='idn' id='idn' >
                            <option value=''>SELECCIONE OPCION</option>
                            <option value='1'>DNI</option>
                            <option value='2'>RUC</option>
                            <option value='3'>CARNET EXTRANJERIA</option>
                        </select>
                      </p>
                      <p class="comment-form-author">
                        <label for="doc">N° Doc: <span class="required">*</span></label> 
                        <input type='text'  name='doc' id='doc'>
                      </p>
                      <p class="comment-form-email">
                        <label for="nom">Nombre: <span class="required">*</span></label> 
                        <input type='text'  name='nom' id='nom' >
                      </p>
                      <p class="comment-form-author">
                        <label for="ape">Apellidos: <span class="required">*</span></label> 
                        <input type='text'  name='ape' id='ape' >
                      </p>
                      <p class="comment-form-author">
                        <label for="ema">Email: <span class="required">*</span></label> 
                        <input type='text'  name='ema' id='ema' >
                      </p>
                      <p class="comment-form-author">
                        <label for="co1">Contraseña: <span class="required">*</span></label> 
                        <input type='password' name='co1' id='co1' >
                      </p>
                      <p class="comment-form-author">
                        <label for="co2" class="full_width">Repetir Contraseña: <span class="required">*</span></label> 
                        <input type='password' name='co2' id='co2' >
                      </p>
                      <p class="comment-form-author" id="prueba_tel">
                        <label for="tel" class="full_width">Teléfono: <span class="required">*</span></label> 
                        <input type="text"  name="tel" id="tel">
                      </p>
                      <p class="comment-form-author">
                        <label for="dia" class="full_width">Fecha de Nacimiento: <span class="required">*</span></label> 
                        <select name='dia' id='dia' ><option value=''>DIA</option></select>
                        <select name='mes' id='mes' ><option value=''>MES</option></select>
                        <select name='ani' id='ani' ><option value=''>AÑO</option></select>
                      </p>
                      <p class="comment-form-author">
                        <label for="sex" class="sexoHM">Sexo: <span class="required">*</span></label> 
                        <label class="sexo"><input type='radio'   name='sex' id='sex' value='M'> Masculino </label>
                        <label class="sexo"><input type='radio'  name='sex' id='sex' value='F'> Femenino </label>
                      </p>
                      <p class="form-submit">
                        <input type='button' id='send'  name='send' value='Confirmar y Enviar'>
                      </p>
                    </form>
                  </div>

                </div>
                <div class="column eight columns">
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress uno">
                          <span style="margin-top: 23px;">Rellena el formulario<br> y CONFIRMA tu correo electrónico</span>
                        </p>
                      </div>
                    </div>
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress dos">
                          <span style="margin-top: 18px;">Recibe una llamada telefónica al número<br> telefonico que nos proporcionaste<br> e ingresa el CODIGO DE CONFIRMACIÓN</span>
                        </p>
                      </div>
                    </div>
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress tres">
                          <span style="margin-top: 17px;">FELICIDADES haz activado tu cuenta!<br>Tienes <font face="Open Sans extrabold V2C">$3 Gratis</font> para probar las funciones<br>y adquirir el plan que más te convenga :)</span>
                        </p>
                      </div>
                    </div>
                </div>

              </div>
            </div> 
        </div>
        
      </div>
<script>
jQuery( document ).ready(function() {
  ini =  1;   fin = 31;   var dia = '';
  while(ini <= fin) {
    dia = dia + '<option value="'+ ini +'">'+ ini +'</option>';        
    ini = ini + 1;
  }

  ini =  1;   fin = 12;   var mes = '';
  while(ini <= fin) {
    mes = mes + '<option value="'+ ini +'">'+ ini +'</option>';        
    ini = ini + 1;
  }

  var d = new Date();   var y = d.getFullYear() * 1;
  ini =   0;  fin = 125;  
  while(ini <= fin) {
    ani = ani + '<option value="'+ (y - ini) +'">'+ (y - ini) +'</option>';  
    ini = ini + 1;
  }

  jQuery('#dia').append(dia);  
  jQuery('#mes').append(mes);  
  jQuery('#ani').append(ani);
  jQuery.ajax({
    cache: false,
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do=COUNTRY',
    type: 'POST',
    success: function(response){
      if(response.load){
      jQuery('#country').append(response.tresponse);
      jQuery('.hidden').removeClass('hidden');
      }  
      else {alert(response.error_message);}
    }
  });
  jQuery('#send').click(function(){sendpreregister();});
});

function alertempytyinputselect(inselectput){
  var seleccionar = jQuery('#' + inselectput);
    seleccionar.focus();
  jQuery('#' + inselectput).css({'background':'#EED3D7', 'color':'#b94a48', 'outline':'2px solid #B94A48'}); 
  setTimeout(function(){  
    jQuery('#' + inselectput).css({'background':'', 'color':'', 'outline':''});   
  },3000);   
}

function sendpreregister(){ 
  if(jQuery('#country').val() == ''){ 
    alertempytyinputselect('country'); 
    return;
  }
  if(jQuery('#idn').val() == ''){ 
    alertempytyinputselect('idn');  
    return;
  }
  if(jQuery('#doc').val() == ''){ 
    alertempytyinputselect('doc');  
    return;
  }
  if(jQuery('#nom').val() == ''){ 
    alertempytyinputselect('nom');  
    return;
  }
  if(jQuery('#ape').val() == ''){ 
    alertempytyinputselect('ape');  
    return;
  }
  if(jQuery('#ema').val() == ''){ 
    alertempytyinputselect('ema');  
    return;
  }
  if(jQuery('#co1').val() == ''){ 
    alertempytyinputselect('co1');  
    return;
  }
  if(jQuery('#co2').val() == ''){ 
    alertempytyinputselect('co2');  
    return;
  }
  if(jQuery('#tel').val() == ''){ 
    alertempytyinputselect('tel');  
    return;
  }
  if(jQuery('#dia').val() == ''){ 
    alertempytyinputselect('dia');  
    return;
  }
  if(jQuery('#mes').val() == ''){ 
    alertempytyinputselect('mes');  
    return;
  }
  if(jQuery('#ani').val() == ''){ 
    alertempytyinputselect('ani');  
    return;
  }
  if(jQuery('#sex:checked').val() == ''){ 
    alertempytyinputselect('sex').eq(1);  
    return;
  }

  if( jQuery('#co1').val() != jQuery('#co2').val() ){
    alertempytyinputselect('co1'); 
    alertempytyinputselect('co2');
    alert("LAS CONTRASEÑAS NO COINCIDEN"); 
    return;
  }

  jQuery.ajax({
    cache: false,
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do=PREREGISTER&' + jQuery('#preregister').serialize(),
    type: 'POST',
    success: function(response){
      if(response.load){
        console.log(response.tresponse);
        if(response.tresponse =='SOLICITUD DE PRE - REGISTRO ENVIADA EXITOSAMENTE'){
          document.location.href='http://www.v2contact.com/gracias/'; 
        }else{
          alert('Su email ya ha sido registrado');
        }
        if(response.sucess){
          jQuery('select,input[type="text"],input[type="password"],input[type="radio"]').val('');}

      }  
      else {alert(response.error_message);}
    }
  });
}
jQuery('#country').change(republica);
function republica() {
    var $this = jQuery(this), data = 'do='+$this.val();
    jQuery.ajax({
        url: 'https://service.v2contact.com/include/ajax/ajax.paises.php',
        dataType: 'json',
        data: data,            
        success: function(rec)
         {
            if(rec.load){
                jQuery('#prueba_tel').html(rec.data); 
                console.log(rec.success_message);
            }else {
                alert(rec.error_message);
            }
         }
    });
}
</script>
<?php get_footer(); ?>