<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div class="page blog search">

   <div class="bg-white"><div class="shadow_top"></div>
      
      <section class="container content">

			<div class="lista column twelve columns"> 

<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Resultados de: %s', 'zenite' ), '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2 style="color: #464646;"><?php _e( 'Búsqueda no encontrada', 'zenite' ); ?></h2>
					<?php $noencontrado = ' 
						<div class="sidebar"><ul class="xoxo">
						<li id="archives-2" class="widget-container widget_archive">
							<h3 class="widget-title">Sugerencias</h3>
							<div class="bottomline2"></div>		
							<ul>
								<li>
									<a>Asegúrese de que todas las palabras estén escritas correctamente.</a>
								</li>
								
								<li>
									<a>Pruebe con diferentes palabras clave.</a>
								</li>
								
								<li>
									<a>Intente usar palabras más generales.</a>
								</li>
								
							</ul>
						</li>
						</ul></div>'; 
					?>
					<p><?php _e($noencontrado, 'zenite' ); ?></p>
					<?php get_search_form(); ?>
<?php endif; ?>


			</div>

<aside class="sidebar four columns">
               		
 <?php get_sidebar(); ?>
</aside>


   </section>
</div>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
