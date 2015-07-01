<?php
/**
 * Template Name: Shop Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

/**
 * woocommerce Template - This is the template for the blog item content.
 */
get_header();

?>

  

<div class="blog">
 
       <div class="bg-menu">
           <nav class="primary clearfix container">

				<div class="titol"><span class="slim">Our</span> <span class="blau">Shop</span></div>
			</nav>
       </div>
       
      <!-- content --> 
      <div class="bg-white"><div class="shadow_top"></div>
      <section class="container content">


        <div class="titular extra" id="nipt20">
            <h2>Our <span>Shop</span></h2>
            <div class="sp_doble port"></div>
        </div>           

        <div class="title-port">Shop are regarded as industry leaders in digital strategy and solutions, focused solely on delivering.</div>
        <div class="bottomline-port"></div>



				<div class="lista column twelve columns"> 
                
                        
<?php woocommerce_content(); ?>
                
                </div>


<aside class="sidebar four columns">
                    <?php get_sidebar(''); ?>
</aside>


               
     </section>
     <div class="call-shadow-top"></div>
     </div>
  
  </div>


<?php
get_footer();
?>