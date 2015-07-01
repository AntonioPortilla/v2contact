<?php
/**
 * Single Portfolio Template - This is the template for the single portfolio item content.
 */
get_header();?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       <div class="bg-menu">
			<nav class="primary clearfix container">
				<div class="titol"><span class="slim"><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?></span> / <span class="blau"><?php the_title();?></span></div>
                <div class="nav2">
					<?php previous_post_link('%link', '<div class="prev"><div class="texte">Prev</div></div>'); ?>
                    <?php next_post_link('%link', '<div class="next"><div class="texte">Next</div></div>'); ?>
                </div>
			</nav>
       </div>

      <!-- content -->
      <div class="bg-white"><div class="shadow_top"></div>
      <section class="container content">

                    <div class="titular extra" id="nip20-0-0">
                        <h2><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?> <span>/ <?php the_title();?></span></h2>
                        <div class="sp_doble port"></div>
                    </div>

           <div class="work-view">
           	<div class="side-left">
				<div class="title"><?php the_title(); ?></div>
                <div class="separa2"></div>
                <div class="text"><?php the_content(); ?></div>
				<div class="title">Project Details</div>
                <div class="separa2"></div>
                <div class="text espai">
                <span class="blau"><b>Client:</b></span> <?php echo get_post_meta(get_the_ID(), 'zenite_client', true) ?><br>
                <span class="blau"><b>Author:</b></span> <?php echo get_post_meta(get_the_ID(), 'zenite_author', true) ?><br>
				<span class="blau"><b>Website:</b></span> <a href="http://<?php echo get_post_meta(get_the_ID(), 'zenite_web', true) ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'zenite_web', true) ?></a>
                </div>
                <div class="like">

                	<!--Facebook-->
                	<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" id="niface"></iframe>

                	<!--Twiter-->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                </div>
            </div>
            <div class="images_wrapper">
                <ul class="slides">
                 <? if ($images = get_posts(array(
                                    'post_parent'    => get_the_ID(),
                                    'post_type'      => 'attachment',
                                    'numberposts'    => -1,
                                    'posts_per_page'    => -1,
                                    'post_status'    => null,
                                    'post_mime_type' => 'image',
                                    'orderby'        => 'menu_order',
                                    'order'           => 'ASC',
                                ))) :
                            ?>
                                <? foreach($images as $image) : ?>
                                <li class="image">
                                    <? $image_big_data = wp_get_attachment_image_src( $image->ID, 'full' ); ?>
                                    <a class="fancy" rel="group" href="<? echo $image_big_data[0]; ?>" >
                                        <div class="lupa"></div>
                                        <div class="light_big"><div class="lupa"></div></div>
                                        <? echo wp_get_attachment_image($image->ID, 'full'); ?>
                                    </a>
                                </li>
                                <?  endforeach; ?>
                            <? endif; ?>
                </ul>
            </div>
<?php
endwhile; // end of the loop.
?>
            <div class="sixteen columns" id="niml5">

            <div class="lastest no titular" id="nimb10ml0">
                    <div class="title">LAST <span class="slim">PROJECTS</span></div>
                    <div class="nav-right off botright"></div>
                    <div class="nav-left off botleft"></div>
                    <div class="sp_line"></div>
                </div>


			<div class="projects view" style="margin-top:50px;">

                <div class="contenedor">

<?php query_posts( 'post_type=portfolio&posts_per_page=5');
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article class="column one-third article">
            <div class="imagen2"><div class="hover"><a href="<?php the_permalink(); ?>"><div class="link"></div></a></div><?php the_post_thumbnail('portfolioIn'); ?></div>
            <span class="hover"></span>
    </article>

<?php endwhile; // end of the loop.?>

                </div>

            </div>
			</div>

        </div>

     </section>



<?php /*
					<h1><?php the_title(); ?></h1>

						<?php zenite_posted_on(); ?>

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'zenite' ), 'after' => '' ) ); ?>

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'zenite_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( esc_attr__( 'About %s', 'zenite' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s &rarr;', 'zenite' ), get_the_author() ); ?>
							</a>
<?php endif; ?>


<?php
*/

get_footer();
?>

