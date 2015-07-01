// JavaScript Document
/*jQuery(document).ready(function() {

jQuery('#upload_image_button').click(function() {
 formfield = jQuery('#upload_image').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
});

window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#upload_image').val(imgurl);
 tb_remove();
}

});*/


jQuery(document).ready(function() {

	var formfield;

	jQuery('#upload_image_button').click(function() {
		jQuery('html').addClass('Image');
		formfield = jQuery('#upload_image').attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
	});

	// user inserts file into post. only run custom if user started process using the above process
	// window.send_to_editor(html) is how wp would normally handle the received data

	window.original_send_to_editor = window.send_to_editor;
	window.send_to_editor = function(html){

		if (formfield) {
			fileurl = jQuery('img',html).attr('src');
			jQuery('#upload_image').val(fileurl);
			tb_remove();
			jQuery('html').removeClass('Image');
		} else {
			window.original_send_to_editor(html);
		}
	};
	
	jQuery('select').change(function() {
		if(jQuery(this).val()==2){
			jQuery('#tres').hide();
			jQuery('#quatre').hide();
		}
		if(jQuery(this).val()==3){
			jQuery('#tres').show();
			jQuery('#quatre').hide();
		}
		if(jQuery(this).val()==4){
			jQuery('#tres').show();
			jQuery('#quatre').show();
		}
	});

});