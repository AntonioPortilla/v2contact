<?php
/* Template Name: Pagina Registro */
session_start();
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
      
      <div id="bloque1" class="bg-white">
        <div class="bg-menu" id="bg_registro">
            <div class="primary clearfix container" style="height: auto;">
              <div id="content_registro">
                <div class="column eight columns">
                  
                  <div id="respond" class="cuerpoRegistro">
                    <form id='preregister'>
                      <input type='hidden' name='afiliado' value='<?php echo $_SESSION["afiliado"]?>' >
                      <input type='hidden' name='previous' value='<?php echo $_SESSION["previous"]?>' >
                      <p class="comment-form-author">
                        <label for="country">Pais: <span class="required">*</span></label>
                        <select name='pais'id='country'>
                            <option value=''>SELECCIONE PAIS</option>
                        </select> 
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
                      <p class="comment-form-author" id="prueba_tel">
                        <label for="tel" class="full_width">Teléfono Celular: <span class="required">*</span></label> 
                        <span class="codigoPais"></span>  
                        <input type="text"  name="tel" id="tel" class="codtelf">
                      </p>
                      <p class="comment-form-author">
                        <label for="dia" class="full_width">Fecha de Nacimiento: <span class="required">*</span></label> 
                        <select name='dia' id='dia' ><option value=''>DIA</option></select>
                        <select name='mes' id='mes' ><option value=''>MES</option></select>
                        <select name='ani' id='ani' ><option value=''>AÑO</option></select>
                      </p>
                      <p class="comment-form-author">
                        <label for="sex" class="sexoHM">Sexo: <span class="required">*</span></label> 
                        <label class="sexo"><input type='radio'  name='sex' id='sex' value='M'> Masculino </label>
                        <label class="sexo"><input type='radio'  name='sex' id='sex' value='F'> Femenino </label>
                      </p>
                      <p class="form-submit">
                        <input type='button' id='send'  name='send' value='Confirmar y Enviar'>
                        <?php //var_dump($_SESSION);?>
                      </p>
                    </form>
                  </div>

                </div>
                <div class="column eight columns">
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress uno">
                          <span style="margin-top: 23px;">Rellene el formulario y le llamaremos <br> para CONFIRMAR su teléfono celular.</span>
                        </p>
                      </div>
                    </div>
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress dos">
                          <span style="margin-top: 18px;">Revise su Correo electrónico para <br>OBTENER sus <font face="Open Sans extrabold V2C">credenciales de acceso</font>.</span>
                        </p>
                      </div>
                    </div>
                    <div class="fondo_pasos contact">
                      <div class="info" style="margin-top: 12px;">
                        <p class="adress tres">
                          <span style="margin-top: 17px;">FELICIDADES haz activado tu cuenta!<br>Tiene <font face="Open Sans extrabold V2C">15 Días Gratis</font> para probar las funciones y adquirir el plan que más te convenga :)</span>
                        </p>
                      </div>
                    </div>
                </div>

              </div>
            </div> 
        </div>
        
      </div>
      <div id="bloque2" class="bg-white" style="display: none;">
        <div class="bg-menu" id="bg_register">
            <div id="content_register" class="primary clearfix container" style="height: auto;">
              <div class="separa_top2"></div>
              <div id="confirmation_register2">
                <form action=""><br><br>
                  <div class="bloque1">
                    <span>Te llamaremos  en un minuto con el  código de confirmación</span><br><br>
                    <label for="cod_call">Ingrese el Código de la llamada</label><br>
                    <div class="inputs_call">
                      <input type="text" name="cod_call" id="cod_call">
                      <input type="button" id="recod1" value="Reenviar Código">
                    </div>
                  </div>
                  <!--
                  <div class="bloque2">
                    <span style="margin-top:30px;">Te enviaremos un SMS con el código de confirmación</span><br><br>
                    <label for="cod_SMS">Ingrese el Código SMS</label><br>
                    <div class="inputs_call">
                      <input type="text" name="cod_SMS" id="cod_SMS">
                      <input type="button" id="recod2" value="Reenviar Código">
                    </div>
                  </div>
                  -->
                  <div class="confirmar">
                    <input type="button" id="sendForm" value="Confirmar">

                  </div>
                </form>
              </div>
              <div class="iconV2C">
                <a href="http://www.v2contact.com/" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/themes/zenite/images/icon-v2c.png" alt=""></a>
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
  jQuery('#country').prop('disabled',true);
  jQuery.ajax({
    cache: false, 
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do=COUNTRY&' + jQuery('#preregister').serialize(),
    type: 'POST',
    success: function(response){
      if(response.load){
      jQuery('#country').prop('disabled',false);
      jQuery('#country').append(response.tresponse);
      jQuery('.hidden').removeClass('hidden');
      }  
      else {alert(response.error_message);}
    }
  });
  jQuery('#send').click(function(){sendpreregister();});
  jQuery('#recod1').click(function(){resendcall();});
  jQuery('#sendForm').click(function(){confirmfirstcode();});
  
});

function alertempytyinputselect(inselectput){
  var seleccionar = jQuery('#' + inselectput);
    seleccionar.focus();
  jQuery('#' + inselectput).css({'background':'#EED3D7', 'color':'#b94a48', 'outline':'2px solid #B94A48'}); 
  setTimeout(function(){  
    jQuery('#' + inselectput).css({'background':'', 'color':'', 'outline':''});   
  },3000);   
}


function confirmfirstcode(){

  var doit = '';
  doit = 'COMPARECALL';

  jQuery.ajax({
    cache: false,
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do='+ doit +'&codphone='+jQuery('#cod_call').val()+'&codigoPais='+jQuery('span.codigoPais').text()+'&' + jQuery('#preregister').serialize(),
    type: 'POST',
    success: function(res){
      if(res.load){
          if( res.infos != '' && res.estado === true){

             document.location.href='http://www.v2contact.com/gracias/'; 
          }else{
            alert(res.message2);
          }
      }  
      else {alert(response.error_message);}
    }
  });

}

function resendcall(){

  var doit = '';
  doit = 'CODERECALL';

  jQuery.ajax({
    cache: false,
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do='+ doit +'&codigoPais='+jQuery('span.codigoPais').text()+'&' + jQuery('#preregister').serialize(),
    type: 'POST',
    success: function(response){
      if(response.load){
          
          //document.location.href='http://www.v2contact.com/confirmacion/'+url+'/'; 

      }  
      else {alert(response.error_message);}
    }
  });


}











function sendpreregister(){ 
  
  /*
  if(jQuery('#idn').val() == ''){ 
    alertempytyinputselect('idn');  
    return;
  }*/
  /*
  if(jQuery('#doc').val() == ''){ 
    alertempytyinputselect('doc');  
    return;
  }
  if(jQuery('#co2').val() == ''){ 
    alertempytyinputselect('co2');  
    return;
  }

  if( jQuery('#co1').val() != jQuery('#co2').val() ){
    alertempytyinputselect('co1'); 
    alertempytyinputselect('co2');
    alert("LAS CONTRASEÑAS NO COINCIDEN"); 
    return;
  }*/

  /**/
  if(jQuery('#country').val() == ''){ 
    alertempytyinputselect('country'); 
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
  if(jQuery('#codigo').val() == ''){ 
    alertempytyinputselect('codigo');  
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
/**/
  var doit = '';
  doit = 'CODECALL';

  jQuery.ajax({
    cache: false,
    url: 'https://service.v2contact.com/include/ajax/ajax.preregister.php',
    dataType: 'json',
    data: 'do='+ doit +'&codigoPais='+jQuery('span.codigoPais').text()+'&' + jQuery('#preregister').serialize(),
    type: 'POST',
    success: function(response){
      if(response.load){
          
          //document.location.href='http://www.v2contact.com/confirmacion/'+url+'/'; 
          console.log(response.procedetocall);
          if(response.message != ''){alert(response.message);}
          if(response.procedetocall){
            jQuery('#bloque1').css('display','none');
            jQuery('#bloque2').css('display','');
          }
      }  
      else {alert(response.error_message);}
    }
  });
}
jQuery('#country').change(republica);
function republica() {
console.log(jQuery('select#country option[value="'+jQuery('select#country').val()+'"]').attr('extension'));
jQuery('#prueba_tel span.codigoPais').html(jQuery('select#country option[value="'+jQuery('select#country').val()+'"]').attr('extension')); 

/*

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
    });*/
}

</script>
<?php get_footer(); ?>
<script>jQuery('.wrapper_footer').css('margin-top','-20px');</script>