<?php
/**
 * Template Name: Blog Page - Left Sidebar
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

/**
 * Single Portfolio Template - This is the template for the blog item content.
 */
get_header();

?>

<div class="blog">
 
       <div class="bg-menu">
           <nav class="primary clearfix container">

				<div class="titol"><span class="blau"><?php the_title();?></span></div>
			</nav>
       </div>
       
      <!-- content --> 
      <div class="bg-white"><div class="shadow_top"></div>
      <section class="container content">


        <div class="titular extra" id="nipt20">
            <h2><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?> <span>/ <?php the_title();?></span></h2>
            <div class="sp_doble port"></div>
        </div>           

        <div class="title-port">We are regarded as industry leaders in digital strategy and solutions, focused solely on delivering.</div>
        <div class="bottomline-port"></div>



				<div class="lista column twelve columns" style="float:right;"> 
                
                        
<?php

query_posts( 'posts_per_page=5' );

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


                <article <?php post_class(); ?>>
                    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="imagen"><div class="hover nidn"><a href="<?php the_permalink(); ?>"><div class="link"></div></a></div><?php the_post_thumbnail('blog'); ?></div>
                    <!--<div class="marc"></div>-->
                    <div class="text"><?php the_excerpt();?></div>
                    <a href="<?php the_permalink(); ?>"><div class="button tipo1">Read More</div></a>
                    <div class="bottomline"></div>
                    <div class="icons">
                        <span class="nombre">Publicado <strong><?php the_author(); ?></strong></span>
                        <span class="fecha"><?php the_date('M j, Y'); ?></span>
                        <span class="tags"><?php the_tags(''); ?></span>
                        <span class="comentaris"><a href="<?php comments_link(); ?>"><strong><?php comments_number( 'no responses', 'one response', '% responses' ); ?></strong></a></span>
                    </div>
                    <div class="bottomline"></div>
                   <!-- <div class="bottomline2"></div>-->
                </article>

<?php endwhile; // end of the loop.?>
                
                </div>


<aside class="sidebar four columns">
               		
<?php get_sidebar(); ?>
</aside>


               
     </section>
     <div class="call-shadow-top"></div>
     </div>
  
  </div>


<?php
get_footer();
?>

