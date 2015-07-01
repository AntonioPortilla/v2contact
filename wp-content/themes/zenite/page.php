<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

	<?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>    	  
      <div class="bg-menu">
        <nav class="primary clearfix container">
				<div class="titol"><span class="blau"><?php the_title();?></span></div>
        <div class="search">
          <?php get_search_form(); ?>
        </div>
		    </nav> 
      </div>	       
	<?php } ?> 
       
	<?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) != '0' and get_post_meta( get_the_ID(), 'zenite_slider', true )!= null) { ?>
	<div class="franja"></div>
		<?php //if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'zenite_slider', true )); } ?>
        <?php 
		
		if( isset($_COOKIE['themeblvd-header-style']) ){
 		   //Set Style
    		$barra_style = $_COOKIE['themeblvd-header-style']; 
		}else{
			$barra_style = 'black';
		}
		
		if( isset($_GET['header']) ){
 		   //Set Style
    		$barra_style = $_GET['header'];
		}		
		
		if ($barra_style =='white'){
			if(class_exists('RevSlider')){ putRevSlider('slider3'); }
		}else{
			if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'zenite_slider', true )); }
		}
		
		?>
	<?php } /* end slidertype = revslider */ ?>       
       
      <!-- content --> 
	  
      
<?php if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){?>
<div class="home">
<div class="success">
  <div class="container" style="display: block;">
    <h1><?php $NHP_Options->show('hover1_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover1_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover1_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover2_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover2_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover2_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover3_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover3_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover3_image'); ?>)"></div>
  </div><div class="container" style="display: none;">
    <h1><?php $NHP_Options->show('hover4_title'); ?></h1>
    <h2><?php $NHP_Options->show('hover4_subtitle'); ?></h2>
    <div class="image" style="background-image:url(<?php $NHP_Options->show('hover4_image'); ?>)"></div>
  </div>
</div>


<?php } ?>
      
      <div class="bg-white"><div class="shadow_top"></div>
      
      <section class="container content">
      
      
      <?php if (get_post_meta( get_the_ID(), 'zenite_slider', true ) == '0' or get_post_meta( get_the_ID(), 'zenite_slider', true )== null) { ?>    
        <div class="titular extra" id="nip20-0-0">
            <h2><?php echo get_post_meta(get_the_ID(), 'zenite_page_info', true) ?> <span>/ <?php the_title();?></span></h2>

            <div class="sp_doble features"></div>
        </div>
	  <?php } ?>
<?php if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){?>

<div class="moduls clearfix whiteover">

			   <div class="flecha_home"></div>

               <article class="column four columns article activo">
               		<div style="position:relative;">
                    
                    <div class="container"><div class="helper"><div class="content"><!--stuff--></div></div></div>
                    
					<a href="<?php $NHP_Options->show('column1_link'); ?>"><div class="imagen"><div class="icono"><img src="<?php $NHP_Options->show('column1_image'); ?>" /></div></div>
<?php /*  <div class="imagen"><div class="new"></div><div class="hover"><a href="<?php $NHP_Options->show('column1_link'); ?>"><div class="link"></div></a></div><img src="<?php $NHP_Options->show('column1_image'); ?>" /></div>*/ ?>
<div class="title"><?php $NHP_Options->show('column1_title'); ?></div></a>
                    <p><?php $NHP_Options->show('column1_desc'); ?></p>
                    </div>
               </article>

               <article class="column four columns article">
	                <div>
					<a href="<?php $NHP_Options->show('column2_link'); ?>"><div class="imagen"><div class="icono"><img src="<?php $NHP_Options->show('column2_image'); ?>" /></div></div>
					<div class="title"><?php $NHP_Options->show('column2_title'); ?></div></a>                    
                    <p><?php $NHP_Options->show('column2_desc'); ?></p>
                    </div>
               </article>

               <article class="column four columns article">
   					<div>
					<a href="<?php $NHP_Options->show('column3_link'); ?>"><div class="imagen"><div class="icono"><img src="<?php $NHP_Options->show('column3_image'); ?>" /></div></div>
					<div class="title"><?php $NHP_Options->show('column3_title'); ?></div></a>                    
                    <p><?php $NHP_Options->show('column3_desc'); ?></p>
					</div>
               </article>

               <article class="column four columns article">
   					<div>
					<a href="<?php $NHP_Options->show('column4_link'); ?>"><div class="imagen"><div class="icono"><img src="<?php $NHP_Options->show('column4_image'); ?>" /></div></div>
					<div class="title"><?php $NHP_Options->show('column4_title'); ?></div></a>                    
                    <p><?php $NHP_Options->show('column4_desc'); ?></p>
					</div>
               </article>

           </div>
<?php } ?>


		<div class="about" <?php if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){?>style="padding-top:0px;"<?php } ?>> 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>	
					<?php } ?>				


					<?php if(get_post_meta($post->ID, 'zenite_new_field', true)!=''){?>
                    <div class="title"><?php echo get_post_meta($post->ID, 'zenite_new_field', true);?></div>                        
                    <div class="bottomline"></div>
                    <?php } ?>

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'zenite' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'zenite' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>
	</div>
   </section>
   <div class="call-shadow-top"></div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>