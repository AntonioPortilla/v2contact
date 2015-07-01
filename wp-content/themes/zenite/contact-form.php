<?php
/*
Template Name: Contact Form
*/

if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = $NHP_Options->get('email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		
		$subject = 'From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

}


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
 panControl : false, zoom :<?php $NHP_Options->show('map_zoom'); ?>
};
var wpgmappitymap = new google.maps.Map(document.getElementById('wpgmappitymap'), options);
var point0 = new google.maps.LatLng(<?php $NHP_Options->show('longitude_coord'); ?>,<?php $NHP_Options->show('latitude_coord'); ?>);
var marker0= new google.maps.Marker({
 position : point0,
 map : wpgmappitymap
 });
google.maps.event.addListener(marker0,'click',
 function() {
// var infowindow = new google.maps.InfoWindow({content: '<?php //$NHP_Options->show('marker_info'); ?>'});
// infowindow.open(wpgmappitymap,marker0);
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
      <section class="container content contact">
      
		<div class="info">
            	<h2><?php _e('Contact with us!', 'zenite'); ?></h2>
                <p class="adress"><span><?php $NHP_Options->show('more_info'); ?><br /><?php $NHP_Options->show('more_info2'); ?><br /><?php $NHP_Options->show('more_info3'); ?></span></p>
            	<p class="telf"><span><?php $NHP_Options->show('phone'); ?></span></p>
                <p class="mail"><span><a href="mailto:<?php $NHP_Options->show('email'); ?>"><?php $NHP_Options->show('email'); ?></a></span></p>
        </div>
            <div class="form">
                <form action="" id="contactForm" method="post">
                    <input name="contactName" id="contactName" type="text" value="Name"   onclick="if(this.value=='Name') this.value=''"    onblur="if(this.value=='') this.value='Name'" />
                    			<?php if($nameError != '') { ?>
									<span class="error"><?php echo '<span style="color:#F00;">'.$nameError.'</span>';?></span>
								<?php } ?>
                    <input name="email" id="email"  type="text" value="Email"   onclick="if(this.value=='Email') this.value=''"    onblur="if(this.value=='') this.value='Email'" />
								<?php if($emailError != '') { ?>
									<span class="error"><?php echo '<span style="color:#F00;">'.$emailError.'</span>';?></span>
								<?php } ?>                    
                    <textarea name="comments" id="comments" onclick="if(this.value=='Your comment') this.value=''" onblur="if(this.value=='') this.value='Your comment'">Your comment</textarea>
								<?php if($commentError != '') { ?>
									<span class="error"><?php echo '<span style="color:#F00;">'.$commentError.'</span>';?></span>
								<?php } ?>
                    <input type="submit" value="Submit"/>
                    <input type="hidden" name="submitted" id="submitted" value="true" />
                    
                    <?php if($emailSent == true){echo '<span style="color:#090">The mail has been sent successfully</span>';}?>
                </form>           
            </div>            
     </section>


     <div class="call-shadow-top"></div>
     </div>

  </div>


<?php
get_footer();
?>