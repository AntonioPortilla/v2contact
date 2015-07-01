<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to zenite_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'zenite' ); ?></p>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
                      <div class="mod_coment">
                      
                      		<h2>Comments (<?php printf( get_comments_number()); ?>)</h2>
                            
                            <ul class="coment clearfix">
                            
                            	<?php wp_list_comments();?>
                                
<?php /*                            	<li>
                                	<img src="<?php echo get_template_directory_uri()?>/css/img/usuario.jpg" alt="img"/>
                                    <p class="datos">Dave Sliver<span class="fecha"> 24 Dic, 2012 at 6:45 am</span> <span class="reply"><a href="">Reply</a></span></p>
                                    <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. </p>
                                	<div class="sp_puntos"></div>
                                </li>
                                <li class="respuesta">
                                	<img src="css/img/usuario.jpg" alt="img"/>
                                    <p class="datos">Dave Sliver<span class="fecha"> 24 Dic, 2012 at 6:45 am</span> <span class="reply"><a href="">Reply</a></span></p>
                                    <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. </p>
                                	<div class="sp_puntos"></div>
                                </li>
                                <li>
                                	<img src="css/img/usuario.jpg" alt="img"/>
                                    <p class="datos">Dave Sliver<span class="fecha"> 24 Dic, 2012 at 6:45 am</span> <span class="reply"><a href="">Reply</a></span></p>
                                    <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. </p>
                                </li>*/?>
                            </ul>
                            
                            <div class="bottomline"></div>
                            
                            <?php paginate_comments_links(); ?> 
                            
                      </div>      
                                    
<?php /*

			<!-- STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page -->
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'zenite' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'zenite' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'zenite' ) ); ?>
<?php endif; // check for comment navigation ?>

			<ol>
				<?php
					// Loop through and list the comments. Tell wp_list_comments()
					 // to use zenite_comment() to format the comments.
					 // If you want to overload this in a child theme then you can
					 // define zenite_comment() and that will be used instead.
					 // See zenite_comment() in zenite/functions.php for more.
					 
					wp_list_comments( array( 'callback' => 'zenite_comment' ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'zenite' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'zenite' ) ); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	// If there are no comments and comments are closed,
	 // let's leave a little note, shall we?
	 
	if ( ! comments_open() ) :
?>
	<p><?php _e( 'Comments are closed.', 'zenite' ); ?></p>
<?php endif; // end ! comments_open() ?>

*/ ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>