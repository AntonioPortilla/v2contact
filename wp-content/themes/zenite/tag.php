<?php
/**
 * The template for displaying Tag Archive pages.
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
					printf( __( 'Archivos de la etiqueta: %s', 'zenite' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

			</div>

<aside class="sidebar four columns">
               		
 <?php get_sidebar(); ?>
</aside>


   </section>
</div>

</div>

<?php get_footer(); ?>