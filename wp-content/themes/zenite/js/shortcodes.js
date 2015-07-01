function embedshortcode() {
	
	var shortcodetext;
	var style = document.getElementById('shortcode_panel');
	

	if (style.className.indexOf('current') !== -1) {
		var selected_shortcode = document.getElementById('style_shortcode').value;
		
		
		
// -----------------------------
// SHORTCODES
// -----------------------------
if (selected_shortcode === 'two_columns'){
	shortcodetext = "[one_half] [/one_half][one_half] [/one_half]";	
}

if (selected_shortcode === 'three_columns'){
	shortcodetext = "[one_third] [/one_third][one_third] [/one_third][one_third] [/one_third]";	
}

if (selected_shortcode === 'four_columns'){
	shortcodetext = "[one_fourth] [/one_fourth][one_fourth] [/one_fourth][one_fourth] [/one_fourth][one_fourth] [/one_fourth]";	
}

if (selected_shortcode === '1-3_columns'){
	shortcodetext = "[1_3] [/1_3]";	
}
if (selected_shortcode === '2-3_columns'){
	shortcodetext = "[2_3] [/2_3]";	
}
if (selected_shortcode === '1-4_columns'){
	shortcodetext = "[1_4] [/1_4]";	
}
if (selected_shortcode === '2-4_columns'){
	shortcodetext = "[2_4] [/2_4]";	
}
if (selected_shortcode === '3-4_columns'){
	shortcodetext = "[3_4] [/3_4]";	
}


if (selected_shortcode === 'testimonials'){
	shortcodetext = '[testimonials title=""][testimonial name="" surname="" from=""][/testimonial][/testimonials]';	
}
if (selected_shortcode === 'multi-test'){
	shortcodetext = '[multi_test title=""][mtest name="" from=""][/mtest][/multi_test]';	
}

if (selected_shortcode === 'box'){
	shortcodetext = "[box title=''][section][item title='' icon=''][/item][item title='' icon=''][/item][/section][/box]";	
}

if (selected_shortcode === 'clients'){
	shortcodetext = "[clients title=''][client][/client][/clients]";	
}

if (selected_shortcode === 'linea'){
	shortcodetext = "[linea]";	
}

if (selected_shortcode === 'linea_mobile'){
	shortcodetext = "[linea_mobile]";	
}

if (selected_shortcode === 'titol'){
	shortcodetext = "[title] [/title]";	
}

if (selected_shortcode === 'titol_linea'){
	shortcodetext = '[titol_linea subtitle=""] [/titol_linea]';	
}

if (selected_shortcode === 'circle_container'){
	shortcodetext = "[circle_container] [/circle_container]";	
}

if (selected_shortcode === 'circle_back'){
	shortcodetext = "[circle_back image='' title='Design' info='Lorem ipsum'] [/circle_back]";	
}

if (selected_shortcode === 'service'){
	shortcodetext = "[services][service title='' image='' 3cols='yes'] [/service][/services]";
}

if (selected_shortcode === 'last'){
	shortcodetext = "[last_projects title='LAST' subtitle='PROJECTS']";
}

if (selected_shortcode === 'slide'){
	shortcodetext = "[slide_images title='' description=''][slide_img][/slide_img][/slide_images]";
}

if (selected_shortcode === 'faq'){
	shortcodetext = '[faq question=""] [/faq]';
}

if (selected_shortcode === 'hiring'){
	shortcodetext = '[hiring title="" link=""] [/hiring]';
}

if (selected_shortcode === 'offer'){
	shortcodetext = '[offer title="" link=""] [/offer]';
}

if (selected_shortcode === 'team'){
	shortcodetext = "[team name='' link='' twitter='' fb='' digg='' vimeo='' youtube='' skype='' image=''] [/team]";	
}

if (selected_shortcode === 'form'){
	shortcodetext = "[form info='' phone='' mail='']";	
}

if (selected_shortcode === 'pricing'){
	shortcodetext = '[pricing-table]<br>[plan name="" link="http://www.google.es" linkname="" price="" per="" type="" regular=""]<li>Item 1</li>[/plan]<br>[plan name="" link="http://www.google.es" linkname="" price="" per="" type=""]<li>Item 1</li>[/plan]<br>[/pricing-table]';
}

if (selected_shortcode === 'expertice'){
	shortcodetext = "[expertice][element][/element][diagram title='' yellow='' pink='' green='' red=''][/expertice]";	
}

if ( selected_shortcode === 0 ){tinyMCEPopup.close();}}
if(window.tinyMCE) {
window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, shortcodetext);
tinyMCEPopup.editor.execCommand('mceRepaint');
tinyMCEPopup.close();
}return;
}