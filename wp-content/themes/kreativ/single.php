<?php get_header(); ?>
<div id="containerwarp">
<div id="container">
	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

		<div class="post" id="post-<?php the_ID(); ?>" style="padding-top:0px;margin-top: 0px;">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small>
				<?php the_author() ?> | <?php the_category(', ') ?><br/>
				<?php the_time('j M Y') ?>
				</small>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<div style="clear: both;"></div>
				<div class="postmetadata alt">
					<small>
						
						

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Puedes <a href="#respond">dejar una respuesta</a>, o <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> desde tu propio sitio web.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Puedes saltar al final y dejar una respuesta. Pinging no est&aacute; permitido actualmente.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry','','.'); ?>

					</small>
					
					
				<div class="postnavigation">
				<div class="alignleft"><small>&laquo; <?php previous_post_link('%link') ?></small></div>
				<div class="alignright"><small><?php next_post_link('%link') ?> &raquo;</small></div>
				</div>
				</div>
			
			</div>
			
				
	<?php comments_template(); ?>
		</div>
	

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
