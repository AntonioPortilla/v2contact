<?php
/**
 * Template Name: Map
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

/**
 * Map - This is the template for maps content.
 */
get_header();

?>

<div class="page">

   <div class="bg-menu">
        <nav class="primary clearfix container">
				<div class="titol display"><span class="slim">Pages</span> / <span class="blau">Map</span></div>
		</nav>
       </div>

       <div class="maps">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div id="niw100"><div class="wpgmappity_container niw100h500" id="wpgmappitymap"></div></div>
<script type="text/javascript">
(function(){
function wpgmappity_maps_loaded() {
var latlng = new google.maps.LatLng(<?php $NHP_Options->show('longitude_coord'); ?>,<?php $NHP_Options->show('latitude_coord'); ?>);
var options = {
 center : latlng,
 mapTypeId: google.maps.MapTypeId.ROADMAP,
 zoomControl : true,
 zoomControlOptions :
 {
 style: google.maps.ZoomControlStyle.SMALL,
 position: google.maps.ControlPosition.TOP_LEFT
 },
 mapTypeControl : true,
 mapTypeControlOptions :
 {
 style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
 position: google.maps.ControlPosition.TOP_RIGHT
 },
 scaleControl : false,
 streetViewControl : false,
 panControl : false, zoom : <?php echo get_post_meta(get_the_ID(), 'zenite_zoom', true) ?>
};
var wpgmappitymap = new google.maps.Map(document.getElementById('wpgmappitymap'), options);
var point0 = new google.maps.LatLng(<?php $NHP_Options->show('longitude_coord'); ?>,<?php $NHP_Options->show('latitude_coord'); ?>);
var marker0= new google.maps.Marker({
 position : point0,
 map : wpgmappitymap
 });
google.maps.event.addListener(marker0,'click',
 function() {
 var infowindow = new google.maps.InfoWindow(
 {content: 'undefined'});
 infowindow.open(wpgmappitymap,marker0);
 });
}
window.onload = function() {
 wpgmappity_maps_loaded();
};
})()
</script>
       </div>


     <!-- content -->
	  <div class="bg-white"><div class="shadow_top special"></div>
      	<div class="about">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'zenite' ), 'after' => '' ) ); ?>
                                <?php edit_post_link( __( 'Edit', 'zenite' ), '', '' ); ?>

                        <?php //comments_template( '', true ); ?>

        <?php endwhile; ?>
        </div>

     <div class="call-shadow-top"></div>
     </div>

  </div>


<?php
get_footer();
?>

