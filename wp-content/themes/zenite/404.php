<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

       <div class="bg-menu">
        <nav class="primary clearfix container">
				<div class="titol"><span class="slim">Error 404</span></div>
                <div class="search"><?php get_search_form(); ?></div>
		</nav> 
       </div>

      <div class="bg-white"><div class="shadow_top"></div>
      <section class="container content">
           
		<div class="about">     
				<article class="column sixteen columns">
                    <div class="titular extra">
                        <h2>Error 404</h2>
                        <div class="sp_doble special"></div>
                    </div>
                
                	<div class="notfound"><img src="<?php echo get_template_directory_uri()?>/css/img/404.png" alt="img"></div>
                    <div class="bottomline"></div>
                    <div class="title">La página que está buscando no existe.  <a href="<?php echo home_url( '/' ); ?>" class="gohome"><< Volver</a>.</div>

					<div class="clearfix"></div>
                    <div id="nih30" style="height:60px;"></div>
				</article>
		</div>     


     </section>
     
     <?php /*

				<h1><?php _e( 'Not Found', 'zenite' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'zenite' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
	
	*/?>

<?php get_footer(); ?>