<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<?php global $NHP_Options; 

 if(isset($_POST['submitted2'])) {
  if(trim($_POST['email']) === '')  {
    $emailError = 'Please enter your email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  if(!isset($hasError)) {
    $emailTo = $NHP_Options->get('subscribe_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    
    //$emailTo ='albert.canals@medusateam.com';
    
    $subject = 'New email submited';
    $body = "New email submited from call us\n\nEmail: $email ";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    wp_mail($emailTo, $subject, $body, $headers);
    $emailSent2 = true;
  }
}
?>
</div>
<div class="wrapper_footer" style="float: left;position: relative;">  
  <footer class="container clearfix" style=" min-height:250px;">
    <div class="contentSF1">
      <div id="subfooter1">
        <?php
          /* A sidebar in the footer? Yep. You can can customize
           * your footer with four columns of widgets.
          */  
           get_sidebar( 'footer' );
        ?>
      </div>
      
      <div class="SMleftDown" style="background: silver;">
        <ul style="float: left; margin-top: 50px;">
          <li style="margin-left: -15px;border-left: initial;"><span class="linea"></span><a href="" class="ASMdown1">Aviso legal</a></li>
          <li style="border: initial;"><a href="" class="ASMdown2">Condiciones de Uso</a></li>
          <li><a href="" class="ASMdown3">Cookies</a></li>
          <li style="border: initial;"><a href="" class="ASMdown4">Politica de Calidad</a></li>
          <li style="border-right: 0px;"><a href="" class="ASMdown5">Política de Seguridad</a></li>
        </ul>
      </div> 
    </div>
    <div id="subfooter_blank" style="width: 5%;height: 1px;float: left;"></div>
    <div class="contentSF2">      
      <div id="subfooter2">
        <span>
          <div>
            <span class="span1">V2Contact LLC</span> <br>
            Calle dos de Mayo 516 Oficina 201 <br>
            Miraflores Lima Perú <br>
            Teléfono: 708-4100 <br><br>
            <label>Soporte Técnico</label>
            Mediante chats y tickets dentro del panel
          </div>
        </span>
      </div>
      <div class="SMrightDown" style="background: silver;">
        <div style="float: left; margin-top: 15px;">
          <div class="icones">
            <span class="copy_right" style="display: block;"><span class="social seguiendo">siguenos:</span></span><br>
                <?php if($NHP_Options->get('tumblr')!=''){?><a href="<?php $NHP_Options->show('tumblr'); ?>"><div class="social tumb"></div></a><?php }?>
                <?php if($NHP_Options->get('dribble')!=''){?><a href="<?php $NHP_Options->show('dribble'); ?>"><div class="social dribble"></div></a><?php }?>
                <?php if($NHP_Options->get('rss')!=''){?><a href="<?php echo home_url().'/rss'//$NHP_Options->show('rss'); ?>"><div class="social rss"></div></a><?php }?>
                <?php if($NHP_Options->get('behance')!=''){?><a href="<?php $NHP_Options->show('behance'); ?>"><div class="social behance"></div></a><?php }?>
                <?php if($NHP_Options->get('google')!=''){?><a href="<?php $NHP_Options->show('google'); ?>"><div class="social google"></div></a><?php }?>
                <?php if($NHP_Options->get('instagram')!=''){?><a href="<?php $NHP_Options->show('instagram'); ?>"><div class="social instagram"></div></a><?php }?>
          </div> 
        </div>
      </div>
    </div>
    <li id="li-poliAntispam"><a href="#" id="poliAntispam">Política Anti-Spam</a></li>
  </footer>
      
  <div class="wrapper_copyright"> 
    <div class="container" id="nimtm5">
      <p class="copy_left">© <?php echo date('Y'); ?> <span class="white">V2contact</span>. Todos los derechos reservados. </p>
    </div>
  </div>                  
</div>

    <!-- //END page home(start al header.php) -->
    </div>

<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
<script type="text/javascript">
  jQuery('ul.navegation li').eq(5).addClass('current-menu-item');
</script>

<section class="content">
  <div class="container_12">
    <div id="open-popup-politicas" class="simplemodal-data">
    
      <div id="popupAntispam" style="display: none;">
        <div class="content-popup">
            <div class="close"><a href="#" id="close"><img src="http://www.v2contact.com/imagenes/close.png"/></a></div>
            <div id="divContenido">
              <div class="titulov2c"><h2>Política Anti-Spam</h2></div>
                <p>
                  V2Contact prohibe cualquier intento de uso de la plataforma para el envío de mensajes masivos no solicitados (vulgarmente conocido como spam).
                </p>
                <p>
                  V2Contact pone en práctica comprobaciones y controles activos de todas las actividades relacionadas con el envío de spam a través de la plataforma V2Contact, incluido un análisis automático de las bases de datos de contacto de los clientes y de los mensajes que estos envían a esa base de datos a través de V2Contact.
                </p>
                <p>
                  Si V2Contact sospecha que la cuenta de un cliente está asociada, de forma directa o indirecta, al envío de spam, esta cuenta sería suspendida inmediatamente sin previo aviso y sin derecho de restitución. V2Contact aplica, también, las medidas civiles, criminales y administrativas previstas por la ley. En el caso de tener conocimiento de que cualquier cliente de V2Contact violara esta política, por favor, infórmenos inmediatamente.
                </p>
                <h4>Prevención y tratamiento del spam</h4>
                <p>
                  Al inscribirse:<br>
                  Al aceptar esta Política Anti-spam, el cliente de V2Contact asume que su método de inscripción de contactos le obliga a poseer un registro previo, voluntario y consentido de los contactos y indicar claramente el uso que se le dará a los datos de contacto, además del tipo de comunicaciones que el contacto recibirá.
                </p>
                <h4> En el momento de la eliminación:</h4>
                <p>
                  El cliente de V2Contact acepta que en cada mensaje enviado a través de V2Contact, se incluya un botón de eliminación (a través del cual, el contacto puede eliminarse automáticamente de la base de datos del cliente) de  los datos de contacto del cliente, ya sea su contacto telefónico o su domicilio (mediante los cuales, el contacto puede solicitar una eliminación manual). En el caso de haber recibido un mensaje vía V2Contact y no haya pedido efectuar la eliminación o pretenda eliminar sus datos de contacto de todas las bases de datos de clientes de V2Contact, por favor, hable con nosotros. También puede contactarnos por teléfono o escribiendo a:
                </p>
                <p>
                  Calle 2 de Mayo 516 Mezanine Interior 12 Miraflores <br>
                  Lima Perú <br>
                  Tel: (+51) 1707-3501
                </p>
                <div style="float:left; width:100%; margin-top: 25px;">
                  <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FV2Contact&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=102699406494946" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
      </div>
    <div id="popup-overlay" class="popup-overlay"></div>
    </div>
  </div>
</section>
<script>
  var ruta_afiliado       = window.location.href,
      ruta_estatica       = '<?php echo home_url(); ?>/afiliados/',
      registro_afiliados  = '<?php echo home_url(); ?>/registro-afiliados/',
      sistema_afiliados   = 'http://affiliates.v2contact.com/';
      if((ruta_afiliado == ruta_estatica) || (ruta_afiliado == registro_afiliados)){
        jQuery('#li_afiliados').hide();
        jQuery('nav>ul').find('li').last().find('a').attr('href',sistema_afiliados);
      }
</script>

<script type="text/javascript">
jQuery(document).ready(function(){  
  
  jQuery('#poliAntispam').click(function(){
    jQuery('#popupAntispam').fadeIn('slow');
    jQuery('.popup-overlay').fadeIn('slow');
    jQuery('.popup-overlay').css('height','100%');
    jQuery('.wrapper_header').css({'background':'#777777','opacity':'0.7','z-index':'999'});
    return false;
  });

  jQuery('#close, #popup-overlay').click(function(){
    jQuery('#popup').fadeOut(600);
    jQuery('#popup').fadeOut('slow');
    jQuery('#popupAntispam').fadeOut(600);
    jQuery('#popupAntispam').fadeOut('slow');
    jQuery('.popup-overlay').fadeOut('slow');
    jQuery('.wrapper_header').css({'background':'#FFFFFF','opacity':'1'});
    return false;
  });

  jQuery('ul.navegation li>a').eq(5).css({'background':'#66981E','font-family':'Open Sans light V2C'});

  jQuery('#subfooter1 article>div.title').hide();
  jQuery('#subfooter1 article>div.separador').hide();
  jQuery('#subfooter1 ul').css({'float':'left','padding-left':'27px'});
  jQuery('#li-poliAntispam').appendTo( jQuery('#menu-menu-sub-left') );

});


</script>
<span id="campania_marketing">
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1037644802;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
</span>
<script>
  jQuery('#campania_marketing iframe').css('display','none');
  jQuery('.chota span').css('font','bold 15px Arial');
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1037644802/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<div id="v2c_api_chat"><div class="v2c_api_content"></div></div>
<link rel="stylesheet" href="https://service.v2contact.com/chat/css">
<script src="https://service.v2contact.com/chat/api/37c34c25918ab0bca7f9a8256875be99"></script>

</body>
</html>