<?php include('style.inc.php'); ?>

<blockquote id="<?php echo $id; ?>" class="testimonial testimonial-image-style-3 cf">
	<img alt="" src="<?php echo $image ?>" />	
	<div class="estilo4 testimonial-content">
		<?php echo op_texturize($content); ?>
		<cite class="testi"><strong><?php echo $name ?></strong>
			<!--
			<?php /*if (trim($href) != ''): ?>
				<a href="<?php echo $href ?>" target="_blank"><?php echo $company ?></a>
			<?php else: ?>
				<span class="op-testimonial-company"><?php echo $company ?></span>
			<?php endif;*/ ?> -->
		</cite>
	</div>
	<script>
	/*
		var ruta = jQuery('.bloque-testimonios img').attr('src'),
			reemplazo = ruta.replace('”','').replace('”','');
		jQuery('.bloque-testimonios img').attr('src', reemplazo);*/
		jQuery('.bloque-testimonios img').eq(0).attr('src', 'http://www.v2contact.com/wp-content/uploads/2015/02/test1.png');
		jQuery('.bloque-testimonios img').eq(1).attr('src', 'http://www.v2contact.com/wp-content/uploads/2015/02/test2.png');

		/*jQuery('.estilo4 cite>strong').eq(0).css('color', '#D8D8D7').html('Alexis Nuñez - Grupo Nisa');
		jQuery('.estilo4 cite>strong').eq(1).css('color', '#D8D8D7').html('Sabrina Parreira - La Curacao');*/
		jQuery('.estilo4 cite>strong').each(function(i){
		   if(i%2==0){
		      $(this).css('color', '#D8D8D7').html('Alexis Nuñez - Grupo Nisa');
		   }else{
		      $(this).css('color', '#D8D8D7').html('Sabrina Parreira - La Curacao');
		   }
		});

	</script>
</blockquote>