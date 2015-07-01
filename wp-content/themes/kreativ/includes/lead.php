<div id="leadwarp">
<div id="lead">
	<?php 
	$featbig = get_option('pov_featbig_category'); // Number of other entries to be shown
	
	$my_query = new WP_Query('category_name= '. $featbig .'&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
	?>
	
		<div class="big-thumb">
			<?php $screen = get_post_meta($post->ID,'screen', true); ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" > <img src="<?php echo ($screen); ?>" width="500" height="300" alt="<?php the_title(); ?>"/> </a>
		</div>
	
		<div class="big-text">
	
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div style="clear: both;"></div>
					<p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
 	
					<div style="clear: both;"></div>
			<div class="readmore">
    			<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a> 
    		</div>
		</div>
	<?php endwhile; ?>
</div>
</div>
	<div style="clear: both;"></div>