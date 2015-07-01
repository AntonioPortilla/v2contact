<?php
/*
 *
 * Require the framework class before doing anything else, so we can use the defined urls and dirs
 * Also if running on windows you may have url problems, which can be fixed by defining the framework url first
 *
 */
//define('NHP_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('NHP_Options')){
	require_once( dirname( __FILE__ ) . '/options/options.php' );
}

/*
 * This is the meat of creating the optons page
 *
 * Override some of the default values, uncomment the args and change the values
 * - no $args are required, but there there to be over ridden if needed.
 *
 *
 */

function setup_framework_options(){
$args = array();

//Set it to dev mode to view the class settings/info in the form - default is false
$args['dev_mode'] = false;

//google api key MUST BE DEFINED IF YOU WANT TO USE GOOGLE WEBFONTS
//$args['google_api_key'] = '***';

//Remove the default stylesheet? make sure you enqueue another one all the page will look whack!
//$args['stylesheet_override'] = true;

//Add HTML before the form
$args['intro_text'] = __('<p>Complete theme options</p>', 'nhp-opts');

//Setup custom links in the footer for share icons


//Choose to disable the import/export feature
//$args['show_import_export'] = false;

//Choose a custom option name for your theme options, the default is the theme name in lowercase with spaces replaced by underscores
$args['opt_name'] = 'zenite_options';

//Custom menu icon
//$args['menu_icon'] = '';

//Custom menu title for options page - default is "Options"
$args['menu_title'] = __('Zenite Options', 'nhp-opts');

//Custom Page Title for options page - default is "Options"
$args['page_title'] = __('Zenite Theme Options', 'nhp-opts');

//Custom page slug for options page (wp-admin/themes.php?page=***) - default is "nhp_theme_options"
$args['page_slug'] = 'zenite_options';

//Custom page capability - default is set to "manage_options"
//$args['page_cap'] = 'manage_options';

//page type - "menu" (adds a top menu section) or "submenu" (adds a submenu) - default is set to "menu"
//$args['page_type'] = 'submenu';

//parent menu - default is set to "themes.php" (Appearance)
//the list of available parent menus is available here: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
$args['page_parent'] = 'themes.php';

//custom page location - default 100 - must be unique or will override other items
$args['page_position'] = 27;

//Custom page icon class (used to override the page icon next to heading)
//$args['page_icon'] = 'icon-themes';

//Want to disable the sections showing as a submenu in the admin? uncomment this line
//$args['allow_sub_menu'] = false;




$sections = array();

$sections[] = array(
				'title' => __('General settings', 'nhp-opts'),
				'desc' => __('<p class="description">General theme settings</p>', 'nhp-opts'),
				//all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
				//You dont have to though, leave it blank for default.
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_062_attach.png',
				//Lets leave this as a blank section, no options just some intro text set above.
				'fields' => array(
					array(
						'id' => 'logo', //must be unique
						'type' => 'upload', //builtin fields include:
										  //text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
						'title' => __('Logo', 'nhp-opts'),
						'sub_desc' => __('Upload your own logo', 'nhp-opts'),
						'desc' => __('Upload PNG transparent file', 'nhp-opts'),
						'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/logo_pro.png' //This is a default value, used to set the options on theme activation, and if the user hits the Reset to defaults Button
 						),
					array(
						'id' => 'color', //must be unique
						'type' => 'select', //builtin fields include:
										  //text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
						'title' => __('Color', 'nhp-opts'),
						'sub_desc' => __('Choose your color', 'nhp-opts'),
						'desc' => __('Select the desired color', 'nhp-opts'),
					    'options' => array('blue' => __('Blue', 'nhp-opts'), 'yellow' => __('Yellow', 'nhp-opts'),'red' => __('Red', 'nhp-opts'),'purple' => __('Purple', 'nhp-opts'),'pink' => __('Pink', 'nhp-opts'),'green' => __('Green', 'nhp-opts'),'green2' => __('Teal', 'nhp-opts'),'orange' => __('Orange', 'nhp-opts')),
						'std' => 'blue' //This is a default value, used to set the options on theme activation, and if the user hits the Reset to defaults Button
 						),
					array(
						'id' => 'layout_mode', //must be unique
						'type' => 'select', //builtin fields include:
										  //text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
						'title' => __('Layout mode', 'nhp-opts'),
						'sub_desc' => __('Choose layout mode', 'nhp-opts'),
						'desc' => __('Select desired layout mode', 'nhp-opts'),
					    'options' => array('fluid' => __('Fluid width', 'nhp-opts'), 'boxed' => __('Boxed width', 'nhp-opts')),
						'std' => 'fluid' //This is a default value, used to set the options on theme activation, and if the user hits the Reset to defaults Button
 						),
					array(
						'id' => 'header_mode', //must be unique
						'type' => 'select', //builtin fields include:
										  //text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
						'title' => __('Header mode', 'nhp-opts'),
						'sub_desc' => __('Choose header mode', 'nhp-opts'),
						'desc' => __('Select desired header mode', 'nhp-opts'),
					    'options' => array('header_normal' => __('Normal', 'nhp-opts'), 'header_fixed' => __('Fixed on top', 'nhp-opts')),
						'std' => 'header_normal' //This is a default value, used to set the options on theme activation, and if the user hits the Reset to defaults Button
 						),
					array(
						'id' => 'bgcolor', //must be unique
						'type' => 'upload', //the field type
						'title' => __('Background Image', 'nhp-opts'),
						'sub_desc' => __('Choose background image', 'nhp-opts'),
						'desc' => __('Custom background pattern', 'nhp-opts'),
					    'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/bg.jpg'
						),
					array(
						'id' => 'white', //must be unique
						'type' => 'checkbox', //builtin fields include:
										  //text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
						'title' => __('White header', 'nhp-opts'),
						'sub_desc' => __('Alternative version of black header', 'nhp-opts'),
						'desc' => __('White Header', 'nhp-opts'),
						'std' => '1' //This is a default value, used to set the options on theme activation, and if the user hits the Reset to defaults Button
 						)
					)
				);


$sections[] = array(
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_107_text_resize.png',
				'title' => __('Module 1', 'nhp-opts'),
				'desc' => __('<p class="description">Home module #1</p>', 'nhp-opts'),
				'fields' => array(
					array(
						'id' => 'column1_image',
						'type' => 'upload',
						'title' => __('Column 1 image', 'nhp-opts'),
						'sub_desc' => __('Size: 400x240px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/diamante1.png',
 						),
					array(
						'id' => 'column1_title',
						'type' => 'text',
						'title' => __('Column 1 title', 'nhp-opts'),
						'sub_desc' => __('You decide.', 'nhp-opts'),
						'std' => '<span class="remarcar">Responsive</span> Layout'
						),
					array(
						'id' => 'column1_desc',
						'type' => 'editor',
						'title' => __('Column 1 text', 'nhp-opts'),
						'std' => 'Lorem <span class="remarcar2"><strong>ipsum dolor</strong></span> sit amet, consectetur adipiscing elit. Integer commodo.'
						),
					array(
						'id' => 'column1_link',
						'type' => 'text',
						'title' => __('Column 1 link', 'nhp-opts'),
						'sub_desc' => __('URL', 'nhp-opts'),
						'std' => get_site_url()
						),
					array(
						'id' => 'hover1_title',
						'type' => 'text',
						'title' => __('Rollover title', 'nhp-opts'),
						'std' => 'This theme is fully responsive Tablet and Mobile optimized.'
						),
					array(
						'id' => 'hover1_subtitle',
						'type' => 'text',
						'title' => __('Rollover subtitle', 'nhp-opts'),
						'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
						),
					array(
						'id' => 'hover1_image',
						'type' => 'upload',
						'title' => __('Rollover image', 'nhp-opts'),
						'sub_desc' => __('Size: 133x150px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/iphonehand.jpg',
 						),
					array(
						'id' => 'hover1_icon',
						'type' => 'upload',
						'title' => __('Rollover icon', 'nhp-opts'),
						'sub_desc' => __('Size: 55x55px', 'nhp-opts'),
						'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/success-icon.png',
 						),
					)
				);
$sections[] = array(
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_107_text_resize.png',
				'title' => __('Module 2', 'nhp-opts'),
				'desc' => __('<p class="description">Home module #2</p>', 'nhp-opts'),
				'fields' => array(
					array(
						'id' => 'column2_image',
						'type' => 'upload',
						'title' => __('Column 2 image', 'nhp-opts'),
						'sub_desc' => __('Size: 400x240px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/diamante1.png',
 						),
					array(
						'id' => 'column2_title',
						'type' => 'text',
						'title' => __('Column 2 title', 'nhp-opts'),
						'sub_desc' => __('You decide.', 'nhp-opts'),
						'std' => '<span class="remarcar">Easy</span> Customization'
						),
					array(
						'id' => 'column2_desc',
						'type' => 'editor',
						'title' => __('Column 2 text', 'nhp-opts'),
						'std' => 'Lorem <span class="remarcar2"><strong>ipsum dolor</strong></span> sit amet, consectetur adipiscing elit. Integer commodo.'
						),
					array(
						'id' => 'column2_link',
						'type' => 'text',
						'title' => __('Column 2 link', 'nhp-opts'),
						'sub_desc' => __('URL', 'nhp-opts'),
						'std' => get_site_url()
						),
					array(
						'id' => 'hover2_title',
						'type' => 'text',
						'title' => __('Rollover title', 'nhp-opts'),
						'std' => 'We build cool themes<span class="remercar"> very easy</span> to manage.'
						),
					array(
						'id' => 'hover2_subtitle',
						'type' => 'text',
						'title' => __('Rollover subtitle', 'nhp-opts'),
						'std' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui...'
						),
					array(
						'id' => 'hover2_image',
						'type' => 'upload',
						'title' => __('Rollover image', 'nhp-opts'),
						'sub_desc' => __('Size: 133x150px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/iphonehand.jpg',
 						),
					array(
						'id' => 'hover2_icon',
						'type' => 'upload',
						'title' => __('Rollover icon', 'nhp-opts'),
						'sub_desc' => __('Size: 55x55px', 'nhp-opts'),
						'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/success-icon2.png',
 						),
					)
				);
$sections[] = array(
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_107_text_resize.png',
				'title' => __('Module 3', 'nhp-opts'),
				'desc' => __('<p class="description">Home module #3</p>', 'nhp-opts'),
				'fields' => array(
					array(
						'id' => 'column3_image',
						'type' => 'upload',
						'title' => __('Column 3 image', 'nhp-opts'),
						'sub_desc' => __('Size: 400x240px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/diamante1.png',
 						),
					array(
						'id' => 'column3_title',
						'type' => 'text',
						'title' => __('Column 3 title', 'nhp-opts'),
						'sub_desc' => __('You decide.', 'nhp-opts'),
						'std' => '<span class="remarcar">HTML5</span> and <span class="remarcar">CSS3</span>'
						),
					array(
						'id' => 'column3_desc',
						'type' => 'editor',
						'title' => __('Column 3 text', 'nhp-opts'),
						'std' => 'Lorem <span class="remarcar2"><strong>ipsum dolor</strong></span> sit amet, consectetur adipiscing elit. Integer commodo.'
						),
					array(
						'id' => 'column3_link',
						'type' => 'text',
						'title' => __('Column 3 link', 'nhp-opts'),
						'sub_desc' => __('URL', 'nhp-opts'),
						'std' => get_site_url()
						),
					array(
						'id' => 'hover3_title',
						'type' => 'text',
						'title' => __('Rollover title', 'nhp-opts'),
						'std' => 'Zenite is powered with the new web standards <span class="remercar">HTML5</span> &amp; <span class="remercar">CSS3</span>'
						),
					array(
						'id' => 'hover3_subtitle',
						'type' => 'text',
						'title' => __('Rollover subtitle', 'nhp-opts'),
						'std' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum...'
						),
					array(
						'id' => 'hover3_image',
						'type' => 'upload',
						'title' => __('Rollover image', 'nhp-opts'),
						'sub_desc' => __('Size: 133x150px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/iphonehand.jpg',
 						),
					array(
						'id' => 'hover3_icon',
						'type' => 'upload',
						'title' => __('Rollover icon', 'nhp-opts'),
						'sub_desc' => __('Size: 55x55px', 'nhp-opts'),
						'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/success-icon3.png',
 						),
					)
				);
$sections[] = array(
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_107_text_resize.png',
				'title' => __('Module 4', 'nhp-opts'),
				'desc' => __('<p class="description">Home module #4</p>', 'nhp-opts'),
				'fields' => array(
					array(
						'id' => 'column4_image',
						'type' => 'upload',
						'title' => __('Column 4 image', 'nhp-opts'),
						'sub_desc' => __('Size: 400x240px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/diamante1.png',
 						),
					array(
						'id' => 'column4_title',
						'type' => 'text',
						'title' => __('Column 4 title', 'nhp-opts'),
						'sub_desc' => __('You decide.', 'nhp-opts'),
						'std' => '<span class="remarcar">HTML5</span> and <span class="remarcar">CSS3</span>'
						),
					array(
						'id' => 'column4_desc',
						'type' => 'editor',
						'title' => __('Column 4 text', 'nhp-opts'),
						'std' => 'Lorem <span class="remarcar2"><strong>ipsum dolor</strong></span> sit amet, consectetur adipiscing elit. Integer commodo.'
						),
					array(
						'id' => 'column4_link',
						'type' => 'text',
						'title' => __('Column 4 link', 'nhp-opts'),
						'sub_desc' => __('URL', 'nhp-opts'),
						'std' => get_site_url()
						),
					array(
						'id' => 'hover4_title',
						'type' => 'text',
						'title' => __('Rollover title', 'nhp-opts'),
						'std' => 'Zenite is powered with the new web standards <span class="remercar">HTML5</span> &amp; <span class="remercar">CSS3</span>'
						),
					array(
						'id' => 'hover4_subtitle',
						'type' => 'text',
						'title' => __('Rollover subtitle', 'nhp-opts'),
						'std' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum...'
						),
					array(
						'id' => 'hover4_image',
						'type' => 'upload',
						'title' => __('Rollover image', 'nhp-opts'),
						'sub_desc' => __('Size: 133x150px', 'nhp-opts'),
						'std' => 'http://www.jellythemes.com/themes/zenitewp/wp-content/uploads/iphonehand.jpg',
 						),
					array(
						'id' => 'hover4_icon',
						'type' => 'upload',
						'title' => __('Rollover icon', 'nhp-opts'),
						'sub_desc' => __('Size: 55x55px', 'nhp-opts'),
						'std' => get_site_url() . '/wp-content/themes/Zenite/css/img/success-icon3.png',
 						),
					)
				);
$sections[] = array(
				'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_150_check.png',
				'title' => __('Contact info', 'nhp-opts'),
				'desc' => __('<p class="description">Complete contact info</p>', 'nhp-opts'),
				'fields' => array(
					array(
						'id' => 'email',
						'type' => 'text',
						'title' => 'Contact form e-mail',
						'sub_desc' => 'This is the e-mail where you\'ll receive all the messages from the contact page',
						'std' => get_bloginfo('admin_email')
						),
					array(
						'id' => 'subscribe_email',
						'type' => 'text',
						'title' => 'Subscribe e-mail',
						'sub_desc' => 'This is the e-mail where you\'ll receive all the emails from the subscribe form',
						'std' => get_bloginfo('admin_email')
						),
					array(
						'id' => 'phone',
						'type' => 'text',
						'title' => __('Phone number', 'nhp-opts'),
						'std' => '+1 200 123 456'
						),
					array(
						'id' => 'more_info',
						'type' => 'text',
						'title' => __('Contact Info 1 (Company Name)', 'nhp-opts'),
						'std' => 'Your Company Name'
						),
					array(
						'id' => 'more_info2',
						'type' => 'text',
						'title' => __('Contact Info 2 (Street)', 'nhp-opts'),
						'std' => '12345 Street Zone Manchester'
						),
					array(
						'id' => 'more_info3',
						'type' => 'text',
						'title' => __('Contact Info 3 (Country)', 'nhp-opts'),
						'std' => 'United Kingdom'
						),
					array(
						'id' => 'longitude_coord',
						'type' => 'text',
						'title' => __('Location latitude coordinate', 'nhp-opts'),
						'std' => '41.61759'
						),
					array(
						'id' => 'latitude_coord',
						'type' => 'text',
						'title' => __('Location longitude coordinate', 'nhp-opts'),
						'std' => '0.620015'
						),
					array(
						'id' => 'map_zoom',
						'type' => 'text',
						'title' => __('Map zoom level', 'nhp-opts'),
						'std' => '12'
						),
/*					array(
						'id' => 'marker_info',
						'type' => 'text',
						'title' => __('Map marker info', 'nhp-opts'),
						'std' => 'Here'
						),												*/
					array(
						'id' => 'twitter',
						'type' => 'text',
						'title' => __('Twitter url', 'nhp-opts'),
						'validate' => 'url',
						'std' => 'http://twitter.com'
						),
					array(
						'id' => 'facebook',
						'type' => 'text',
						'title' => __('Facebook url', 'nhp-opts'),
						'validate' => 'url',
						'std' => 'http://facebook.com'
						),
					array(
						'id' => 'tumblr',
						'type' => 'text',
						'title' => __('tumblr url', 'nhp-opts'),
						'std' => 'tumblr'
						),
					array(
						'id' => 'dribble',
						'type' => 'text',
						'title' => __('dribble', 'nhp-opts'),
						'std' => 'dribble'
						),
					array(
						'id' => 'rss',
						'type' => 'text',
						'title' => __('rss', 'nhp-opts'),
						'std' => 'rss'
						),
					array(
						'id' => 'behance',
						'type' => 'text',
						'title' => __('behance', 'nhp-opts'),
						'std' => 'behance'
						),
					array(
						'id' => 'google',
						'type' => 'text',
						'title' => __('google+', 'nhp-opts'),
						'std' => 'google'
						),
					array(
						'id' => 'instagram',
						'type' => 'text',
						'title' => __('instagram', 'nhp-opts'),
						'std' => 'instagram'
						),
					)
				);


	$tabs = array();

	if (function_exists('wp_get_theme')){
		$theme_data = wp_get_theme();
		$theme_uri = $theme_data->get('ThemeURI');
		$description = $theme_data->get('Description');
		$author = $theme_data->get('Author');
		$version = $theme_data->get('Version');
		$tags = $theme_data->get('Tags');
	}else{
		$theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()).'style.css');
		$theme_uri = $theme_data['URI'];
		$description = $theme_data['Description'];
		$author = $theme_data['Author'];
		$version = $theme_data['Version'];
		$tags = $theme_data['Tags'];
	}

	$theme_info = '<div class="nhp-opts-section-desc">';
	$theme_info .= '<p class="nhp-opts-theme-data description theme-uri">'.__('<strong>Theme URL:</strong> ', 'nhp-opts').'<a href="'.$theme_uri.'" target="_blank">'.$theme_uri.'</a></p>';
	$theme_info .= '<p class="nhp-opts-theme-data description theme-author">'.__('<strong>Author:</strong> ', 'nhp-opts').$author.'</p>';
	$theme_info .= '<p class="nhp-opts-theme-data description theme-version">'.__('<strong>Version:</strong> ', 'nhp-opts').$version.'</p>';
	$theme_info .= '<p class="nhp-opts-theme-data description theme-description">'.$description.'</p>';
	$theme_info .= '<p class="nhp-opts-theme-data description theme-tags">'.__('<strong>Tags:</strong> ', 'nhp-opts').implode(', ', $tags).'</p>';
	$theme_info .= '</div>';



	$tabs['theme_info'] = array(
					'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_195_circle_info.png',
					'title' => __('Theme Information', 'nhp-opts'),
					'content' => $theme_info
					);

	if(file_exists(trailingslashit(get_stylesheet_directory()).'README.html')){
		$tabs['theme_docs'] = array(
						'icon' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_071_book.png',
						'title' => __('Documentation', 'nhp-opts')//,
						//'content' => nl2br(file_get_contents(trailingslashit(get_stylesheet_directory()).'README.html'))
						);
	}//if

	global $NHP_Options;
	$NHP_Options = new NHP_Options($sections, $args, $tabs);

}//function
add_action('init', 'setup_framework_options', 0);

/*
 *
 * Custom function for the callback referenced above
 *
 */
function my_custom_field($field, $value){
	print_r($field);
	print_r($value);

}//function

/*
 *
 * Custom function for the callback validation referenced above
 *
 */
function validate_callback_function($field, $value, $existing_value){

	$error = false;
	$value =  'just testing';
	/*
	do your validation

	if(something){
		$value = $value;
	}elseif(somthing else){
		$error = true;
		$value = $existing_value;
		$field['msg'] = 'your custom error message';
	}
	*/

	$return['value'] = $value;
	if($error == true){
		$return['error'] = $field;
	}
	return $return;

}//function
?>