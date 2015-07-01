<?php
/* Define the custom box */

//add_action( 'add_meta_boxes', 'zenite_texto_boton' );

// backwards compatible (before WP 3.0)
add_action( 'admin_init', 'zenite_texto_boton', 1 );
//add_action( 'admin_init', 'zenite_map', 1 );
add_action( 'admin_init', 'zenite_stripe', 1 );
add_action( 'admin_init', 'zenite_port_info', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'zenite_save_postdata');

/* Adds a box to the main column on the Post and Page edit screens */
function zenite_texto_boton() {
    add_meta_box(
        'zenite_sectionid',
        __( 'Title', 'zenite' ),
        'zenite_contingut_texto_boton',
        'post'
    );
    add_meta_box(
        'zenite_sectionid',
        __( 'Title', 'zenite' ),
        'zenite_contingut_texto_boton',
        'page'
    );
}

/* Prints the box content */
function zenite_contingut_texto_boton( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'zenite_noncename' );

  // The actual fields for data entry

  echo '<label for="zenite_new_field">';
       _e("Introduce el texto del titulo:", 'zenite' );
  echo '</label> ';
  echo '<textarea type="text" id="zenite_new_field" name="zenite_new_field" style="width:100%;" />'.get_post_meta($post->ID, 'zenite_new_field', true).'</textarea>';
  echo '<label for="zenite_page_info">';
       _e("Header Title:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_page_info" name="zenite_page_info" value="'.get_post_meta($post->ID, 'zenite_page_info', true).'" style="width:100%;" />';
}

/* White Stripe */

function zenite_stripe() {
    add_meta_box(
        'zenite_stripeid',
        __( 'Page Settings', 'zenite' ),
        'zenite_contingut_stripe',
        'page'
    );
}

function zenite_contingut_stripe( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'zenite_noncename' );

  // The actual fields for data entry
  echo '<label for="zenite_white">';
       _e("Show WhiteStripe?:", 'zenite' );
  echo '</label> ';
  echo '<input type="checkbox" id="zenite_white" name="zenite_white" value="on"';
  if(get_post_meta($post->ID, 'zenite_whitestripe', true)=='on'){echo ' checked="checked"';}
  echo ' /><br><br>';
  echo '<label for="zenite_slider">';
       _e("Slider:", 'zenite' );
  echo '</label> ';
  echo '<select name="zenite_slider" id="zenite_slider"><option value="0">No Slider</option>';

if(class_exists('RevSlider')){
    $slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) {
//		$revolutionslider[$revSlider->getAlias()] = $revSlider->getTitle();
		echo '<option value="'.$revSlider->getAlias().'"';
		if(get_post_meta($post->ID, 'zenite_slider', true)==$revSlider->getAlias()){echo " selected='selected'";}
		echo '>'.$revSlider->getTitle().'</option>';

	}
}
	echo '</select>';

}

function stripeShow($whitestripe,$quin,$part){
	$inici = array();
	$whitestripes = array();
	$next=0;

	do {
		$pos = strpos($whitestripe, '[whitestripe',$next);
		if ($pos !== false) {
			$inici[] = $pos;
			$next=$pos+1;
		}
	} while ($pos !== false);

	$inici[] = strlen($whitestripe);

	$prev = null;
	foreach ($inici as $i){
		if ($prev !== null){
			$whitestripes[] = substr($whitestripe, $prev+13, $i-$prev-14);
		}
		$prev = $i;
	}

	$junt=$whitestripes[$quin];
	$principi = strpos($junt, 'description="');
	$final=strpos($junt, '"]');

	$texte=substr($junt, $final+2, -13);
	$firma=substr($junt, $principi+13, $final-$principi-2);
	$test=substr($whitestripe, 90, 20);


	if($part==0){
		return $texte;
	}
	else{
		return $firma;
	}

}


function zenite_port_info() {
    add_meta_box(
        'zenite_authorid',
        __( 'Info', 'zenite' ),
        'zenite_contingut_info',
        'portfolio'
    );
}

function zenite_contingut_info( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'zenite_noncename' );
  echo '<label for="zenite_client">';
       _e("Client:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_client" name="zenite_client" value="'.get_post_meta($post->ID, 'zenite_client', true).'" style="width:100%;" />';

  echo '<label for="zenite_author">';
       _e("Author:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_author" name="zenite_author" value="'.get_post_meta($post->ID, 'zenite_author', true).'" style="width:100%;" />';
  echo '<label for="zenite_web">';
       _e("Website:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_web" name="zenite_web" value="'.get_post_meta($post->ID, 'zenite_web', true).'" style="width:100%;" />';

  echo '<br><br><label for="zenite_new">';
       _e("New label:", 'zenite' );
  echo '</label> ';
  echo '<input type="checkbox" id="zenite_new" name="zenite_new" value="on"';
  if(get_post_meta($post->ID, 'zenite_new', true)=='on'){echo ' checked="checked"';}
  echo ' />';

}

function zenite_map() {
    add_meta_box(
        'zenite_map_id',
        __( 'Map', 'zenite' ),
        'zenite_contingut_map',
        'page'
    );
}
function zenite_contingut_map( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'zenite_noncename' );
  echo '<label for="zenite_latitude">';
       _e("Latitude:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_latitude" name="zenite_latitude" value="'.get_post_meta($post->ID, 'zenite_latitude', true).'" style="width:100%;" />';

  echo '<label for="zenite_longitude">';
       _e("Longitude:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_longitude" name="zenite_longitude" value="'.get_post_meta($post->ID, 'zenite_longitude', true).'" style="width:100%;" />';
  echo '<label for="zenite_zoom">';
       _e("Zoom:", 'zenite' );
  echo '</label> ';
  echo '<input type="text" id="zenite_zoom" name="zenite_zoom" value="'.get_post_meta($post->ID, 'zenite_zoom', true).'" />';

}

/* When the post is saved, saves our custom data */
function zenite_save_postdata( $post_id ) {
  // verify if this is an auto save routine.
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
      return;

  // Check permissions
  if ( isset($_POST['post_type'])) {
	  if ( 'page' == $_POST['post_type'] )
	  {
	    if ( !current_user_can( 'edit_page', $post_id ) )
	        return;
	  }
	  else
	  {
	    if ( !current_user_can( 'edit_post', $post_id ) )
	        return;
	  }
  }
  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times


  if ( isset($_POST['zenite_noncename'])) {
	  if ( !wp_verify_nonce( $_POST['zenite_noncename'], plugin_basename( __FILE__ ) ) )
		  return;
  }

	  // OK, we're authenticated: we need to find and save the data

  if ( isset($_POST['zenite_new_field'])) {
	  $mydata = $_POST['zenite_new_field'];
  }else{$mydata ='';}
  if ( isset($_POST['zenite_white'])) {
	  $mydatatestimonial = $_POST['zenite_white'];
  }else{$mydatatestimonial ='';}
  if ( isset($_POST['zenite_slider'])) {
	  $mydataslider = $_POST['zenite_slider'];
  }else{$mydataslider ='';}
  if ( isset($_POST['zenite_page_info'])) {
	  $mydatapage = $_POST['zenite_page_info'];
  }else{$mydatapage ='';}

	  

	  // Do something with $mydata
	  // probably using add_post_meta(), update_post_meta(), or
	  // a custom table (see Further Reading section below)

		if(get_post_meta($post_id, 'zenite_new_field') == "")
		add_post_meta($post_id, 'zenite_new_field', $mydata, true);
		elseif($mydata != get_post_meta($post_id, 'zenite_new_field', true))
		update_post_meta($post_id, 'zenite_new_field', $mydata);
		elseif($mydata == "")
		delete_post_meta($post_id, 'zenite_new_field', get_post_meta($post_id, 'zenite_new_field', true));

		//page info
		if(get_post_meta($post_id, 'zenite_page_info') == "")
		add_post_meta($post_id, 'zenite_page_info', $mydatapage, true);
		elseif($mydatapage != get_post_meta($post_id, 'zenite_page_info', true))
		update_post_meta($post_id, 'zenite_page_info', $mydatapage);
		elseif($mydatapage == "")
		delete_post_meta($post_id, 'zenite_page_info', get_post_meta($post_id, 'zenite_page_info', true));


		//stripe
		if(get_post_meta($post_id, 'zenite_whitestripe') == "")
		add_post_meta($post_id, 'zenite_whitestripe', $mydatatestimonial, true);
		elseif($mydatatestimonial != get_post_meta($post_id, 'zenite_whitestripe', true))
		update_post_meta($post_id, 'zenite_whitestripe', $mydatatestimonial);
		elseif($mydatatestimonial == 'off')
		delete_post_meta($post_id, 'zenite_whitestripe', get_post_meta($post_id, 'zenite_whitestripe', true));


		//slider
		if(get_post_meta($post_id, 'zenite_slider') == "")
		add_post_meta($post_id, 'zenite_slider', $mydataslider, true);
		elseif($mydataslider != get_post_meta($post_id, 'zenite_slider', true))
		update_post_meta($post_id, 'zenite_slider', $mydataslider);
		elseif($mydataslider == '0')
		delete_post_meta($post_id, 'zenite_slider', get_post_meta($post_id, 'zenite_slider', true));

		//portfolio info
		
  if ( isset($_POST['zenite_client'])) {

		if(get_post_meta($post_id, 'zenite_client') == "")
		add_post_meta($post_id, 'zenite_client', $_POST['zenite_client'], true);
		elseif($_POST['zenite_client'] != get_post_meta($post_id, 'zenite_client', true))
		update_post_meta($post_id, 'zenite_client', $_POST['zenite_client']);
		elseif($_POST['zenite_client'] == "")
		delete_post_meta($post_id, 'zenite_client', get_post_meta($post_id, 'zenite_client', true));
  }
  if ( isset($_POST['zenite_author'])) {
		if(get_post_meta($post_id, 'zenite_author') == "")
		add_post_meta($post_id, 'zenite_author', $_POST['zenite_author'], true);
		elseif($_POST['zenite_author'] != get_post_meta($post_id, 'zenite_author', true))
		update_post_meta($post_id, 'zenite_author', $_POST['zenite_author']);
		elseif($_POST['zenite_author'] == "")
		delete_post_meta($post_id, 'zenite_author', get_post_meta($post_id, 'zenite_author', true));
  }
  if ( isset($_POST['zenite_web'])) {
		if(get_post_meta($post_id, 'zenite_web') == "")
		add_post_meta($post_id, 'zenite_web', $_POST['zenite_web'], true);
		elseif($_POST['zenite_web'] != get_post_meta($post_id, 'zenite_web', true))
		update_post_meta($post_id, 'zenite_web', $_POST['zenite_web']);
		elseif($_POST['zenite_web'] == "")
		delete_post_meta($post_id, 'zenite_web', get_post_meta($post_id, 'zenite_web', true));
  }
  if ( isset($_POST['zenite_new'])) {
		if(get_post_meta($post_id, 'zenite_new') == "")
		add_post_meta($post_id, 'zenite_new', $_POST['zenite_new'], true);
		elseif($_POST['zenite_new'] != get_post_meta($post_id, 'zenite_new', true))
		update_post_meta($post_id, 'zenite_new', $_POST['zenite_new']);
		elseif($_POST['zenite_new'] == "0")
		delete_post_meta($post_id, 'zenite_new', get_post_meta($post_id, 'zenite_new', true));
  }
  
		//map
/*		if(get_post_meta($post_id, 'zenite_latitude') == "")
		add_post_meta($post_id, 'zenite_latitude', $_POST['zenite_latitude'], true);
		elseif($_POST['zenite_latitude'] != get_post_meta($post_id, 'zenite_latitude', true))
		update_post_meta($post_id, 'zenite_latitude', $_POST['zenite_latitude']);
		elseif($_POST['zenite_latitude'] == "")
		delete_post_meta($post_id, 'zenite_latitude', get_post_meta($post_id, 'zenite_latitude', true));

		if(get_post_meta($post_id, 'zenite_longitude') == "")
		add_post_meta($post_id, 'zenite_longitude', $_POST['zenite_longitude'], true);
		elseif(isset($_POST['zenite_longitude']) &&  $_POST['zenite_longitude'] != get_post_meta($post_id, 'zenite_longitude', true))
		update_post_meta($post_id, 'zenite_longitude', $_POST['zenite_longitude']);
		elseif(isset($_POST['zenite_longitude']) &&  $_POST['zenite_longitude'] == "")
		delete_post_meta($post_id, 'zenite_longitude', get_post_meta($post_id, 'zenite_longitude', true));

		if(get_post_meta($post_id, 'zenite_zoom') == "")
		add_post_meta($post_id, 'zenite_zoom', $_POST['zenite_zoom'], true);
		elseif(isset($_POST['zenite_zoom']) &&  $_POST['zenite_zoom'] != get_post_meta($post_id, 'zenite_zoom', true))
		update_post_meta($post_id, 'zenite_zoom', $_POST['zenite_zoom']);
		elseif(isset($_POST['zenite_zoom']) && $_POST['zenite_zoom'] == "")
		delete_post_meta($post_id, 'zenite_zoom', get_post_meta($post_id, 'zenite_zoom', true));*/
}

?>