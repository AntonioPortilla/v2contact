<?php
/**
 * Template Name: Portfolio Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

/**
 * Single Portfolio Template - This is the template for the single portfolio item content.
 */
get_header();

?>

<div class="">
 
       <div class="bg-menu">
           <nav class="primary clearfix container">

				<div class="titol"><span class="slim"><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?></span> / <span class="blau"><?php the_title();?></span></div>
                
                
                <ul>
                    <li><span class="sel_left"></span><a href="#" class="selected" data-filter="*">Todos</a><span class="sel_right"></span></li>
 <?php               
 $terms = get_terms("portfolio_category");
 $count = count($terms);
 if ( $count > 0 ){
     foreach ( $terms as $term ) {
	   echo '<li><a href="#" data-filter=".'.$term->slug.'">'.$term->name.'</a></li>';
     }
 }
 ?>                     
                </ul>
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

           <div class="portfolio">

<?php

query_posts( 'post_type=portfolio');

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="column one-third <?php
				
$eventpostid = $post->ID;
$eventslug = wp_get_post_terms( $eventpostid, 'portfolio_category' );

$count = count($eventslug);
if ( $count > 0 ){
     foreach ( $eventslug as $term ) {
		echo ' '.$term->slug;
	 }
}

?> <?php //$terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'portfolio_category', '', ' ', '' ) );echo $terms_as_text; ?>">

                	<div class="posicio leftal">
					<span class="ribbon"></span>
					<!--<img src="img/portfolio-image.jpg" alt="">-->
                    <?php if(get_post_meta(get_the_ID(), 'zenite_new', true)=='on'){?><div class="new"></div><?php }?>
                    <div class="imagen"><div class="hover"><a href="<?php the_permalink(); ?>"><div class="link"></div></a></div><?php the_post_thumbnail('portfolio3'); //the_post_thumbnail(array(272,164)); ?></div>
                    <div class="text"><?php the_title(); ?> <!--<span class="slim"><?php // the_title(); ?></span>--></div>
                    <div class="bottomline"></div>
					<span class="hover"></span>
                    </div>
				</article>

<?php endwhile; // end of the loop.?>



			</div>
               
     </section>
     <div class="call-shadow-top"></div>
     </div>
  
  </div>


<?php
get_footer();
?>

