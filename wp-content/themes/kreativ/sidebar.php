<style type="text/css">
#v2c_apiform>form>div
{margin-top: 6px;
overflow: hidden;}
#v2c_apiform>form>div>label
{float: left;
cursor: pointer;
text-align: right;
width: 100px;
margin: 3px 5px 0 0;}
#v2c_apiform>form>div>input[type="submit"]{	
	float: right;
	border: none;
	background: #18D020;
    color: #FFFFFF;
    font-family: 'font-centros';
    font-size: 16pt;
    height: 36px;
    padding: 0 20px;
    text-align: center;
    text-decoration: none;
    width: auto;
    margin: 20px 30px 0px 0px; 
}
#v2c_apiform>form>div>input
{margin: 0px;
border: 1px solid #DDD;
background-color: #FFFFFF;}
</style>
<div id="sidebar">
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<!-- featured news -->
<?php /*if ($pov_disfeat == "true") { } else { ?> 	
<div id="featured">			
<!-- <h2>Featured</h2> -->	
			
			<?php 
	$highcat = get_option('pov_story_category'); 
	$highcount = get_option('pov_story_count');
	
	$my_query = new WP_Query('category_name= '. $highcat .'&showposts='.$highcount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="fblock">
<?php if ($pov_disthumb == "true") { } else { ?>
<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
<?php } ?>

<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

<p><?php echo pov_excerpt( get_the_excerpt(), '100'); ?></p>

</div>
<?php endwhile; ?>

</div>
<?php } */?>
		
<!-- end featured news -->
<ul style="padding-top:0px;">
	<li><h2>Suscribete ahora</h2>			
		<div class="suscribete">			
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



		</div>

	</li>
	<li><h2>Sponsor</h2>			
		<div class="sponsor">
			<a href="http://www.centrosvirtuales.com" target="_blank"><img src="http://www.centrosvirtuales.com/banners/300X250.gif"  /></a>
		</div>
	</li>

	<li><h2>Siguenos en facebook</h2>			
		<div class="facebook">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FV2Contact&amp;width&amp;height=558&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=true&amp;appId=102699406494946" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:558px;" allowTransparency="true"></iframe>
		</div>
	</li>
<!--
<ul>
<?php /*if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<li><h2>Publicaciones Recientes</h2></li>
			
<?php wp_get_archives('title_li=&type=postbypost&limit=5'); */?>
</ul> -->


	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

	<li><h2>Publicaciones Recientes</h2>
				
		<ul> 
			<li><?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?></li>
		</ul>
	</li>
	<!--<li><h2>Archivos</h2>
		<ul>
			<li><?php //wp_get_archives('type=monthly'); ?></li>
		</ul>
	</li>-->

	<?php endif; ?>		
</ul>

</div>

