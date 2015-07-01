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
	

	<?php if (have_posts()) : ?>

		<h4 class="pagetitle">Search Results</h4>

		<div id="content">


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<?php if ($pov_disthumb == "true") { } else { ?>
				<div class="thumb">
    				<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
				</div>
				<?php } ?>
				
				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small>By <?php the_author() ?> | <?php the_category(', ') ?></small>
				
				
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<?php
				include('wp-pagenavi.php');
				if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
			?>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>