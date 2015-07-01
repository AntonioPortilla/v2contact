<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div class="blog">
 
       <div class="bg-menu">
        <nav class="primary clearfix container">
				<div class="titol display"><span class="blau">Incrementa ventas y cobranzas</span></div>
		</nav>
       </div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       
      <!-- content --> 
<div class="bg-white"><div class="shadow_top" id="nibi"></div>
      <section class="container content">
           
		<div class="blog clearfix"> 
        
        		<div class="detalle column twelve columns"> 
                   
                        <article <?php post_class(); ?>>
                            <div class="title" style="margin-top:50px;"><a href=""><?php the_title(); ?></a></div>
                            
                            <div class="imagen"><?php the_post_thumbnail('blog'); ?></div>
                            
                            <div class="text"><?php the_content(); ?></div>
                            
                          <div class="bottomline sup"></div>
                            <div class="icons">
                                <span class="nombre">By <strong><?php the_author(); ?></strong></span>
                                <span class="fecha"><?php the_date('M j, Y'); ?></span>
                                <span class="tags"><?php the_tags(''); ?></span>
                                <!--<span class="comentaris"><a href="<?php comments_link(); ?>"><strong><?php //comments_number( '0 Comentario', '1 Comentario', '% Comentarios' ); ?></strong></a></span>-->
                        </div>
                            <div class="bottomline"></div>
                           <!-- <div class="bottomline2"></div>-->
                           
                           
                        <div class="like">
                
                	<!--Facebook-->
                	<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21" id="niface"></iframe>
                
                	<!--Twiter-->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                       </div>
                           
                      </article>

                      <?php //comments_template( '/comments.php' ); ?>
                      
                </div>

				<aside class="sidebar four columns">
				<?php get_sidebar(); ?>
				</aside>

		</div>     


     </section>
     <div class="call-shadow-top"></div>
     </div>
</div> 

<?php /* ?>

					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'zenite' ) . ' %title' ); ?>
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'zenite' ) . '' ); ?>

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

						<?php zenite_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'zenite' ), '', '' ); ?>

				<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'zenite' ) . ' %title' ); ?>
				<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'zenite' ) . '' ); ?>
<?php */ ?>
				

<?php endwhile; // end of the loop. ?>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>