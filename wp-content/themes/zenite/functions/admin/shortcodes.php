<?php
/*function testimonial_wrap_shortcode( $atts, $content = null ) {
   return ' <div id="highlight"><h3>Highlight</h3><div>' . do_shortcode($content) . '</div></div>';
}
add_shortcode( 'testimonial_wrap', 'testimonial_wrap_shortcode' );

function testimonial_shortcode( $atts, $content = null ) {
   return ' <blockquote class="testimonial">' . do_shortcode($content) . '</blockquote>';
}
add_shortcode( 'testimonial', 'testimonial_shortcode' );

function client_name_shortcode( $atts, $content = null ) {
   return ' <cite>' . $content . '</cite>';
}
add_shortcode( 'client_name', 'client_name_shortcode' );
*/

function testimonials_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title atts',
        'subtitle' => 'Set subtitle atts',
        ), $atts ) );
   return '<div class="titular">
				<div class="title">'. $title .'<span>'. $subtitle .'</span></div>
				<div class="nav-right off botright2"></div>
				<div class="nav-left off botleft2"></div>
				<div class="sp_line"></div>
			</div>

			<div class="testimonials clearfix">
				<div class="contenedor clearfix">
					' . do_shortcode($content) . '
				</div>
			</div>';
}
add_shortcode( 'testimonials', 'testimonials_shortcode' );

function testimonial_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'name' => 'Set name attribute',
        'surname' => 'Set surname attribute',
        'from' => 'Set from attribute'
        ), $atts ) );
   return '<article class="column one-third article testimonials">
				<h1>' . $name . '<span>' . $surname . '</span></h1>
				<ul class="base">
					<li>
						<p><span class="quote">"</span>' . do_shortcode($content) . '</p>
						<p class="autor">' . $name .' '. $surname . ' - ' . $from . '</p>
					</li>
				</ul>
			</article>';
}
add_shortcode( 'testimonial', 'testimonial_shortcode' );

function multi_test_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        ), $atts ) );
	return '<div class="box2 testimonials">
           		<div style="margin-left:15px;">
           		<h1><span>' . $title .'</span></h1>
            	<ul class="base">
                	<li>
		   	            <div class="flexslider3">
	                        <ul class="slides">' . do_shortcode($content) . '</ul>
		                </div>
                    </li>

                </ul>
              </div>
           </div>';
}
add_shortcode( 'multi_test', 'multi_test_shortcode' );

function mtest_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
        'name' => 'Set name attribute',
        'from' => 'Set from attribute'
        ), $atts ) );
	return '<li>
				<p><span class="quote">"</span>' . $content . '</p>
				<p class="autor">' . $name .' - ' . $from .'</p>
			</li>';
}
add_shortcode( 'mtest', 'mtest_shortcode' );

function box_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'subtitle' => 'Set subtitle attribute',
        ), $atts ) );
	return '<div class="home"><div class="box1 features">
           		<h1>' . $title .'<span>' . $subtitle . '</span></h1>
            	<ul class="base">
                    <li>
			            <div class="flexslider2">
	                        <ul class="slides">' . do_shortcode($content) . '</ul>
		               	</div>
		            </li>
                </ul>
           </div></div>';
}
add_shortcode( 'box', 'box_shortcode' );

function section_shortcode($atts, $content = null){
	return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'section', 'section_shortcode' );

function item_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'icon' => 'Set icon attribute',
        ), $atts ) );
	return '<article>
				' . $icon .'
				<h2>' . $title .'</h2>
				<p>' . do_shortcode($content) . '</p>
			</article>';
}
add_shortcode( 'item', 'item_shortcode' );


//Columns

function two_columns_shortcode( $atts, $content = null ) {
   return ' <div class="column eight columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'one_half', 'two_columns_shortcode' );

function three_columns_shortcode( $atts, $content = null ) {
   return ' <div class="column one-third columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'one_third', 'three_columns_shortcode' );

function four_columns_shortcode( $atts, $content = null ) {
   return ' <div class="column four columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'one_fourth', 'four_columns_shortcode' );

function cols_1_3_shortcode( $atts, $content = null ) {
   return ' <div class="column one-third columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( '1_3', 'cols_1_3_shortcode' );

function cols_2_3_shortcode( $atts, $content = null ) {
   return ' <div class="column two-thirds columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( '2_3', 'cols_2_3_shortcode' );

function cols_1_4_shortcode( $atts, $content = null ) {
   return ' <div class="column four columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( '1_4', 'cols_1_4_shortcode' );

function cols_2_4_shortcode( $atts, $content = null ) {
   return ' <div class="column eight columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( '2_4', 'cols_2_4_shortcode' );

function cols_3_4_shortcode( $atts, $content = null ) {
   return ' <div class="column twelve columns">' . do_shortcode($content) . '</div>';
}
add_shortcode( '3_4', 'cols_3_4_shortcode' );

// Linea/Titol //

function linea_shortcode( $atts, $content = null ) {
   return ' <div class="clearfix"></div><div class="bottomline"></div>';
}
add_shortcode( 'linea', 'linea_shortcode' );

function linea_mobile_shortcode( $atts, $content = null ) {
   return '<div class="linea_mobile clearfix"></div>';
}
add_shortcode( 'linea_mobile', 'linea_mobile_shortcode' );


function lineadoble_shortcode( $atts, $content = null ) {
   return ' <div class="clearfix"></div><div class="columns sixteen separa2"></div><div class="clearfix"></div>';
}
add_shortcode( 'lineadoble', 'lineadoble_shortcode' );

function titol_shortcode( $atts, $content = null ) {
   return ' <div class="titlecols column sixteen columns">' . $content . '</div>';
}
add_shortcode( 'title', 'titol_shortcode' );

function titol_linea_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'subtitle' => 'Set subtitle attribute',
        ), $atts ) );
   return '<div class="clearfix"></div>
			<div class="titular">
				<div class="title">' . $content . ' <span>' . $subtitle . '</span></div>
				<div class="sp_line"></div>
			</div>';
}
add_shortcode( 'titol_linea', 'titol_linea_shortcode' );

//circle back
function circle_container_shortcode( $atts, $content = null ) {
   return '<ul class="rodones clearfix">' .  do_shortcode($content) . '</ul>';
}
add_shortcode( 'circle_container', 'circle_container_shortcode' );


function circle_back_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'image' => 'Set image attribute',
        'title' => 'Set title attribute',
        'info' => 'Set info attribute'
        ), $atts ) );
	return '<li>
				<a href="#"><div class="ch-item ch-img-1" style="background-image:url('. $image .')">
					<div class="ch-info-wrap">
						<div class="ch-info">
							<div class="ch-info-front ch-img-1" style="background-image:url('. $image .')"></div>
							<div class="ch-info-back">
								<h3>'. $title .'</h3>
								<p>'. $info .'<br>
								View Portfolio</p>
							</div>
						</div>
					</div>
				</div></a>
				<p class="icoinfo">' . $content . '</p>
			</li>';

/*   return '<li>
		<div class="ch-item">'. $atts['image'] .'<div class="ch-info-wrap"><div class="ch-info"><div class="ch-info-front ch-img-1"></div>
		<div class="ch-info-back"><h3>'. $atts['title'] .'</h3><p>'. $atts['info'] .'<br><a href="#">View Portfolio</a></p>
		</div></div></div></div>
		<p class="icoinfo">' . $content . '</p>
		</li>';*/
}
add_shortcode( 'circle_back', 'circle_back_shortcode' );

/*
'                            <li>
                                <div class="ch-item ch-img-1">
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-1"></div>
                                            <div class="ch-info-back">
                                                <h3>'. $atts['title'] .'</h3>
                                                <p>'. $atts['info'] .'<br>
                                                <a href="#">View Portfolio</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="icoinfo">' . $content . '</p>
                            </li>';*/

//Services
function services_shortcode( $atts, $content = null ) {
   return '<ul class="iconos clearfix">' . do_shortcode($content) . '</ul>';
}
add_shortcode( 'services', 'services_shortcode' );

function service_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'cols3' => 'yes',
        'image' => 'Set image attribute',
        'title' => 'Set title attribute'
        ), $atts ) );
   if($cols3 =='yes'){$type='class="info"';} else {$type='';}

   return '<li '. $type .'>
				<div class="icono">'. $image .'</div>
				<div class="title">'. $title .'</div>
				<div class="text">' . $content . '</div>
			</li>';
}
add_shortcode( 'service', 'service_shortcode' );

//FAQ

function faq_shortcode( $atts, $content = null ) {
extract( shortcode_atts( array(
		'small' => 'yes',
        'question' => 'Set question attribute',
        ), $atts ) );
if($atts['small']=='yes'){$small='';}else{$small=' big';}
return '<div class="faq"><div class="item">
<div class="question qclosed'.$small.'"><div class="icon"></div>'. $question .'</div>
<div class="answer none'.$small.'"><p>' . $content . '</p></div>
</div></div>';
}
add_shortcode( 'faq', 'faq_shortcode' );

//Boxes

function hiring_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'link' => '',		
        ), $atts ) );
   return '<div class="hiring">
				<div class="t1">'. $title .'</div>
				<div class="t2">' . $content . '</div>
				<a href="'. $link .'"><div class="t3">More info</div></a>
			</div>';
}
add_shortcode( 'hiring', 'hiring_shortcode' );

function offer_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'link' => '',		
        ), $atts ) );
   return '<div class="offer">
				<div class="t1">'. $title .'</div>
				<div class="t2">' . $content . '</div>
				<a href="'. $link .'"><div class="t3">More info</div></a>
			</div>';
}
add_shortcode( 'offer', 'offer_shortcode' );

//Team

function team_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'link' => 'Set link attribute',
        'name' => 'Set name attribute',
        'twitter' => 'Set twitter attribute',
        'facebook' => 'Set facebook attribute',
        'digg' => 'Set digg attribute',
        'vimeo' => 'Set vimeo attribute',
        'youtube' => 'Set youtube attribute',
        'skype' => 'Set skype attribute',
		'image' => get_bloginfo('template_directory').'/css/img/circulo_team.png',
        ), $atts ) );
   return '<ul class="team">
					<li>
<a href="'. $atts['link'] .'">
<!--[if lte IE 9]>    <div class="ch-itemie9 ch-img-1" style="background-image:url('. $image .')"><div class="ch-infoie9"> <![endif]-->
<!--[if gt IE 9]><!--> <div class="ch-item ch-img-1"  style="background-image:url('. $image .')"><div class="ch-info"> <!--<![endif]-->
                                <h3>'. $name .'</h3>
                                <p>' . $content . '<br>
                                Contact him</p>
							</div>
						</div>
</a>
							<div class="team-sombra"></div>
                        	<div class="name">'. $name .'</div>
                            <div class="info">' . $content . '</div>
							<div class="social">
                            	<a href="'. $twitter .'"><div class="t-twitter"></div></a>
                                <a href="'. $fb .'"><div class="t-fb"></div></a>
                                <a href="'. $digg .'"><div class="t-digg"></div></a>
                                <a href="'. $vimeo .'"><div class="t-vimeo"></div></a>
                                <a href="'. $youtube .'"><div class="t-youtube"></div></a>
                                <a href="'. $skype .'"><div class="t-skype"></div></a>
                            </div>
					</li>
</ul>';
}
add_shortcode( 'team', 'team_shortcode' );


//Map
/*
function map_shortcode( $atts, $content = null ) {
   return '<div class="maps">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div id="niw100"><div class="wpgmappity_container niw100h500" id="wpgmappitymap"></div></div>
<script type="text/javascript">
(function(){
function wpgmappity_maps_loaded() {
var latlng = new google.maps.LatLng('. $atts['lat'] .','. $atts['lng'] .');
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
 panControl : false, zoom : '. $atts['zoom'] .'
};
var wpgmappitymap = new google.maps.Map(document.getElementById('."'".'wpgmappitymap'."'".'), options);
var point0 = new google.maps.LatLng('. $atts['lat'] .','. $atts['lng'] .');
var marker0= new google.maps.Marker({
 position : point0,
 map : wpgmappitymap
 });
google.maps.event.addListener(marker0,'."'".'click'."'".',
 function() {
 var infowindow = new google.maps.InfoWindow(
 {content: '."'".'undefined'."'".'});
 infowindow.open(wpgmappitymap,marker0);
 });
}
window.onload = function() {
 wpgmappity_maps_loaded();
};
})()
</script>
       </div>';
}
add_shortcode( 'map', 'map_shortcode' );
*/

function form_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'mail' => 'Set mail attribute',
        'info' => 'Set info attribute',
        'phone' => 'Set phone attribute'
        ), $atts ) );
  $sabe = dynamic_sidebar('widget-contacto');
   return '<section class="container content contact">

		<div class="info">
            	<h2>Contactenos Hoy!</h2>
                <p class="adress"><span>'. $info .'</span></p>
            	<p class="telf chota"><span>'. $phone .'</span></p>
                <p class="mail"><span><a href="mailto:'. $mail .'">'. $mail .'</a></span></p>
        </div>
            <div class="form">                
            </div>
            <script>
                jQuery(".formContact").appendTo(jQuery("section>div.form"));
                var fono = jQuery(".chota span").html();
                    arr = fono.split("br");
                var sabe = arr[0].substring(0, arr[0].length-1);
                jQuery(".chota span").html(sabe);
            </script>
     </section>';
}
add_shortcode( 'form', 'form_shortcode' );

function pricing_shortcode( $atts, $content = null ) {
return '<div class="container_12"><article class="grid_12 pricing-style-1">' . do_shortcode($content) . '</article></div>';
}
add_shortcode( 'pricing-table', 'pricing_shortcode' );


function plan_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'type' => '1',
        'regular' => 'no',
        'name' => 'Set name attribute',
        'per' => 'Set per attribute',
        'price' => 'Set price attribute',
        'linkname' => 'Set linkname attribute',
        ), $atts ) );
$ulclass='';
$liclass='';
$divclass='';

if($type=="1"){$liclass=' nobg'; $divclass=' labels';}
if($type=="2"){$ulclass=' class="gc"';$liclass=' grisclar';}
if($type=="3"){$divclass=' selected';}

if($regular=="yes"){$divclass=$divclass.' style2';}



if($type!="1"){
$headcontent='<h5>'. $name .'</h5>
					<span class="price">'. $price .'</span>
					<span>'. $per .'</span>';
}else{$headcontent='';}

if($type!="1"){
$footercontent='<li class="pricing-footer'.$liclass.'">
					<div class="btn-black">
						<a>'. $linkname .'</a>
					</div>
				</li>	';
}else{$footercontent='';}

return '<div class="pricing-table-col'.$divclass.'">
			<ul'.$ulclass.'>
				<li class="head'.$liclass.'">'.$headcontent.'
				</li>
				' . do_shortcode($content) . $footercontent.'
			</ul>
		</div>';
}
add_shortcode( 'plan', 'plan_shortcode' );


function whitestripe_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'description' => 'Set description attribute',
        ), $atts ) );
return '<div class="container">
	<div class="icon"></div>
	<h1>' . do_shortcode($content) . '</h1>
	<h2>'. $description .'</h2>
	<div class="image"></div>
</div>';
}
add_shortcode( 'whitestripe', 'whitestripe_shortcode' );

function clients_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'subtitle' => 'Set subtitle attribute'
        ), $atts ) );
return '<div class="titular">
			<div class="title">'. $title .'<span>' . $subtitle . '</span></div>
			<div class="nav-right off botright3"></div>
			<div class="nav-left off botleft3"></div>
			<div class="sp_line"></div>
		</div>

		<div class="clients clearfix"><ul>' . do_shortcode($content) . '</ul></div>';
}
add_shortcode( 'clients', 'clients_shortcode' );

function client_shortcode( $atts, $content = null ) {
return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'client', 'client_shortcode' );


function slide_images_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'description' => 'Set description attribute',
        ), $atts ) );
return '<div class="section">
			<div class="image">
			   <div class="flexslider4">
					<ul class="slides">
						 ' . do_shortcode($content) . '
					</ul>
			   </div>
			</div>
			<div class="text">
				<span class="title">'. $title .'</span><br><br>
				'. $description .'
			</div>
		</div>';
}
add_shortcode( 'slide_images', 'slide_images_shortcode' );

function slide_image_shortcode( $atts, $content = null ) {
return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'slide_img', 'slide_image_shortcode' );

function expertice_shortcode( $atts, $content = null ) {
return '<ul class="iconos circles">' . do_shortcode($content) . '</ul>';
}
add_shortcode( 'expertice', 'expertice_shortcode' );

function element_shortcode( $atts, $content = null ) {
return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'element', 'element_shortcode' );

function diagram_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
        'title' => 'Set title attribute',
        'yellow' => 'Set yellow attribute',
        'pink' => 'Set pink attribute',
        'green' => 'Set green attribute',
        'red' => 'Set red attribute'
        ), $atts ) );
return '<li class="diagram">'. $title .'<br><br>
			<div class="cuadre yellow">'. $yellow .'</div><br>
			<div class="cuadre pink">'. $pink .'</div><br>
			<div class="cuadre green">'. $green .'</div><br>
			<div class="cuadre red">'. $red .'</div>
			</li>';
}
add_shortcode( 'diagram', 'diagram_shortcode' );

add_shortcode( 'latest_projects_widget', 'zenite_latest_projects_widget' );
function zenite_latest_projects_widget($atts, $content=null) {
    extract( shortcode_atts( array(
        'limit' => '9'
        ), $atts ) );
	$projects_list = '<div style="height:15px;"></div>';
    $projects = new WP_Query(array('post_type'=>'portfolio', 'posts_per_page'=>$limit));
    while ($projects->have_posts()) : $projects->the_post();
/*        if ($images = get_posts(array(
                    'post_parent'    => get_the_ID(),
                    'post_type'      => 'attachment',
                    'numberposts'    => 1,
                    'posts_per_page'    => 1,
                    'post_status'    => null,
                    'post_mime_type' => 'image',
                    'orderby'        => 'menu_order',
                    'order'           => 'ASC'
            ))) :
			$image_url = wp_get_attachment_image_src( $images[0]->ID, array(80,80));
//          $projects_list .= '<a class="fancy" href="'. get_permalink() . '"><div class="flickr"><img width="70" height="70" src="' . $image_url[0] . '" /></div></a>';
            $projects_list .= '<a href="'. get_permalink() . '"><div class="flickr"><img width="70" height="70" src="' . $image_url[0] . '" /></div></a>';

        endif;*/
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 70,70 ), false, '' );
		$projects_list .= '<a href="'. get_permalink() . '"><div class="flickr"><img width="70" height="70" src="' . $src[0] . '" /></div></a>';
    endwhile;
    return $projects_list;
}


add_shortcode( 'last_projects', 'zenite_last_projects' );
function zenite_last_projects($atts, $content=null) {

	extract( shortcode_atts( array(
        'limit' => '5',	
        'title' => 'NUESTRO',
        'subtitle' => 'SISTEMA'
        ), $atts ) );
		
	$projects_list = '<div class="sixteen columns">

		<div class="titular">
			<div class="title">'. $title .' <span class="slim">'. $subtitle .' </span></div>
			<div class="nav-right off botright"></div>
			<div class="nav-left off botleft"></div>
			<div class="sp_line"></div>
		</div>

			<div class="projects view">

                <div class="contenedor">';

	global $post;
	global $wp_query;


    $projects = new WP_Query(array('post_type'=>'portfolio', 'posts_per_page'=>$limit));
    while ($projects->have_posts()) : $projects->the_post();
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'portfolio2', '' );

		if(get_post_meta(get_the_ID(), 'zenite_new', true)=='on'){$new='<div class="new"></div>';}else{$new='';}
		$projects_list .= '<article class="column one-third article">
            <div class="imagen2">'. $new .'<div class="hover"><a href="'. get_permalink() . '"><div class="link spec"></div></a></div><img src="' . $src[0] . '" /></div>
            <span class="hover"></span>
			<div class="lastitle">'.get_the_title().'<span style="float:right; font-size:12px; color:#9a9a9a;">'. strip_tags( get_the_term_list( $wp_query->post->ID, 'portfolio_category', '', ', ', '' ) ) .'</span></div>
    	</article>';
    endwhile;

	$projects_list.= '</div></div></div>';

    return $projects_list;
}


add_shortcode( 'recent_entries_widget', 'zenite_recent_entries_widget' );
function zenite_recent_entries_widget($atts, $content=null) {
    extract( shortcode_atts( array(
        'limit' => '4'
        ), $atts ) );
    $entries = new WP_Query(array('post_type'=>'post', 'posts_per_page' => $limit));
	$first=0;
    while ($entries->have_posts()) : $entries->the_post();
		if($first==0){$first=1;}else{$entries_list .='<div class="separa3"></div>';}
        $entries_list .= '<a href="'. get_permalink() . '"><div class="bloc2">
					<div class="date">' . get_the_time('d') . '<br><span class="month">' . get_the_time('M') . '</span></div>
	                <div class="info">' . get_the_title() . '<br><span class="white">' . substr(get_the_excerpt(), 0,35) . '</span> </div>
					</div></a>';
    endwhile;

	$entries_list .='<div class="separador2"></div>
                    <div class="undertitle">Last Blog <span class="slim"><a title="blog">Entries</a></span></div>';

    return $entries_list;
}

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
?>