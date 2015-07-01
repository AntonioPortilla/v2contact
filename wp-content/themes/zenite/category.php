<?php
/**
 * The template for displaying Category Archive pages.
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

				<h1><?php
					printf( __( 'Archivos de la Categoria: %s', 'zenite' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>


			</div>

<aside class="sidebar four columns">
               		
 <?php get_sidebar(); ?>
</aside>


   </section>
</div>

</div>

<?php get_footer(); ?>