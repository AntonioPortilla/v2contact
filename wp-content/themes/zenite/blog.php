<?php
/**
 * Template Name: Blog Page
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
      <div class="titol">
        <span class="blau"><?php the_title();?></span>
      </div>
    </nav>
  </div>
  <div class="bg-white">
    <div class="shadow_top"></div>
    <section class="container content">
      <div class="titular extra" id="nipt20">
        <h2><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?> <span>/ <?php the_title();?></span></h2>            
          <div class="sp_doble port"></div>
      </div>
      <br>
      <div class="lista column twelve columns"> 
      <?php
        query_posts( 'posts_per_page=5' );
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?>>
            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="imagen"><div class="hover nidn"><a href="<?php the_permalink(); ?>"><div class="link"></div></a></div><?php the_post_thumbnail('blog'); ?></div>
            <div class="text"><?php the_excerpt();?></div>
            <a href="<?php the_permalink(); ?>"><div class="button tipo1">Leer más</div></a>
            <div class="bottomline"></div>
            <div class="icons">
            <span class="nombre"><strong><?php the_author(); ?></strong></span>
            <span class="fecha"><?php the_date('M j, Y'); ?></span>
            <span class="tags"><?php the_tags(''); ?></span>
            </div>
            <div class="bottomline"></div>
          </article>
      <?php endwhile; ?>
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

