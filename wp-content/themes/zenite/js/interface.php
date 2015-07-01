<?php require_once('config.php');
if ( !is_user_logged_in() || !current_user_can('edit_posts') ) wp_die(__("You are not allowed to be here",'zenite')); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shortcodes</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/shortcodes.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<base target="_self" />
</head>
<body onLoad="tinyMCEPopup.executeOnLoad('init();');document.body.style.display='';" style="display: none" id="link">
<form name="karma_shortcode_form" action="#">
<div style="height:100px;width:250px;margin:0 auto;padding-top:50px;text-align:center;" class="shortcode_wrap">
<div id="shortcode_panel" class="current" style="height:50px;">
<fieldset style="border:0;width:100%;text-align:center;">
<select id="style_shortcode" name="style_shortcode" style="width:250px">
<option value="0">Select a Shortcode...</option>
<option value="0"></option>
<option value="0" style="font-weight:bold;font-style:italic;">---Column Layouts---</option>
<option value="two_columns">2 Columns</option>
<option value="three_columns">3 Columns</option>
<option value="four_columns">4 Columns</option>
<option value="1-3_columns">1/3 Columns</option>
<option value="2-3_columns">2/3 Columns</option>
<option value="1-4_columns">1/4 Columns</option>
<option value="2-4_columns">2/4 Columns</option>
<option value="3-4_columns">3/4 Columns</option>
<option value="0"></option>
<option value="0" style="font-weight:bold;font-style:italic;">---Testimonials---</option>
<option value="testimonials">Testimonials</option>
<option value="multi-test">Multiple Testimonials</option>
<option value="box">Slider Box</option>
<option value="clients">Clients</option>
<option value="0"></option>
<option value="0" style="font-weight:bold;font-style:italic;">---Individual Image Frames---</option>
<option value="image_frame_portrait_large">Full width (portrait fullsize)</option>
<option value="image_frame_full_2col">Full width (one_half)</option>
<option value="0"></option>
<option value="0" style="font-weight:bold;font-style:italic;">---Layout Elements---</option>
<option value="titol">Title</option>
<option value="titol_linea">Title line</option>
<option value="linea">Line</option>
<option value="linea_mobile">Line Mobile</option>
<option value="circle_container">Circle Back Container</option>
<option value="circle_back">Circle Back</option>
<option value="service">Services</option>
<option value="last">Last projects</option>
<option value="slide">Image Slide</option>
<option value="faq">FAQ</option>
<option value="hiring">Hiring Box</option>
<option value="offer">Offer Box</option>
<option value="team">Team</option>
<!--<option value="map">Map</option>-->
<!--<option value="form">Form</option>-->
<option value="pricing">Pricing Table</option>
<option value="expertice">Expertice</option>


</select>
</fieldset>
</div><!-- end shortcode_panel -->
<div style="float:left"><input type="button" id="cancel" name="cancel" value="<?php echo "Close"; ?>" onClick="tinyMCEPopup.close();" /></div>
<div style="float:right"><input type="submit" id="insert" name="insert" value="<?php echo "Insert"; ?>" onClick="embedshortcode();" /></div>
</div><!-- end shortcode_wrap -->
</form>
</body>
</html>