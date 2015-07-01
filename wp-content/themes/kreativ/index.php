<?php get_header(); ?>
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<?php if ($pov_disfeatbig == "true") { } else { ?> 
<?php //include (TEMPLATEPATH . '/includes/lead.php'); ?>
<?php } ?>
<div id="containerwarp">
<div id="container">
	<div id="content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>" style="margin-top: 0px; padding-top: 0px;">
					<?php if ($pov_disthumb == "true") { } else { ?>
					<div class="thumb">
	    				<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
					</div>
					<?php } ?>					
					
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					<!--<small><?php //the_author() ?> | <?php //the_category(', ') ?></small>-->
					
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
					<div class="postmetadata">
						<div style="float:left">
							<?php //the_time('j M Y') ?>
							<?php if (function_exists('the_tags')) { the_tags('Etiquetas: ', ', ', ''); } ?></div><div style="float:right"> <?php comments_popup_link('Comentario &#187;', '1 Comentario &#187;', '% Comentarios &#187;'); ?></div></div>
				</div>

			<?php endwhile; ?>
			<?php
				query_posts( array( 'post_type' => 'post', 'paged' => get_query_var( 'paged' ) ) );
			?>

			<div class="navigation">
				<?php wp_pagenavi(); ?>		
			</div>
			<script>
				jQuery('.wp-pagenavi span.pages').hide();
			</script>
		

		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
