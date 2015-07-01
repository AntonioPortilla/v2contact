<?php
/**
 * TwentyTen functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, zenite_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'zenite_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/** Tell WordPress to run zenite_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'zenite_setup' );

if ( ! function_exists( 'zenite_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override zenite_setup() in a child theme, add your own zenite_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function zenite_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'zenite', get_template_directory()  . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory()  . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
/*	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'zenite' ),
	) );*/

	// This theme allows users to set a custom background
	add_theme_support( 'custom-background' );

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to zenite_header_image_width and zenite_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'zenite_header_image_width', 684 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'zenite_header_image_height', 479 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
	
	add_image_size( 'portfolio2', 436, 264, true );
//	add_image_size( 'portfolio3', 272, 162, true );
	add_image_size( 'portfolio3', 400, 238, true );
//	add_image_size( 'portfolio4', 200, 119, true );
	add_image_size( 'portfolio4', 400, 238, true );
	add_image_size( 'portfolioIn', 286, 172, true );
	add_image_size( 'blog', 659, 261, true );
//	add_image_size( 'lastp', 406, 244, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See zenite_admin_header_style(), below.
	add_theme_support( 'custom-header' );




	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'berries' => array(
			'url' => '%s/images/headers/starkers.png',
			'thumbnail_url' => '%s/images/headers/starkers-thumbnail.png',
			/* translators: header image description */
			'description' => __( 'Starkers', 'zenite' )
		)
	) );
}
endif;

if ( ! function_exists( 'zenite_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in zenite_setup().
 *
 * @since Twenty Ten 1.0
 */
function zenite_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/**
 * Makes some changes to the <title> tag, by filtering the output of wp_title().
 *
 * If we have a site description and we're viewing the home page or a blog posts
 * page (when using a static front page), then we will add the site description.
 *
 * If we're viewing a search result, then we're going to recreate the title entirely.
 * We're going to add page numbers to all titles as well, to the middle of a search
 * result title and the end of all other titles.
 *
 * The site title also gets added to all titles.
 *
 * @since Twenty Ten 1.0
 *
 * @param string $title Title generated by wp_title()
 * @param string $separator The separator passed to wp_title(). Twenty Ten uses a
 * 	vertical bar, "|", as a separator in header.php.
 * @return string The new title, ready for the <title> tag.
 */
function zenite_filter_wp_title( $title, $separator ) {
	// Don't affect wp_title() calls in feeds.
	if ( is_feed() )
		return $title;

	// The $paged global variable contains the page number of a listing of posts.
	// The $page global variable contains the page number of a single post that is paged.
	// We'll display whichever one applies, if we're not looking at the first page.
	global $paged, $page;

	if ( is_search() ) {
		// If we're a search, let's start over:
		$title = sprintf( __( 'Search results for sabe %s', 'zenite' ), '"' . get_search_query() . '"' );
		// Add a page number if we're on page 2 or more:
		if ( $paged >= 2 )
			$title .= " $separator " . sprintf( __( 'Page %s', 'zenite' ), $paged );
		// Add the site name to the end:
		$title .= " $separator " . get_bloginfo( 'name', 'display' );
		// We're done. Let's send the new title back to wp_title():
		return $title;
	}

	// Otherwise, let's start by adding the site name to the end:
	$title .= get_bloginfo( 'name', 'display' );

	// If we have a site description and we're on the home/front page, add the description:
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $separator " . $site_description;

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $separator " . sprintf( __( 'Page %s', 'zenite' ), max( $paged, $page ) );

	// Return the new title to wp_title():
	return $title;
}
add_filter( 'wp_title', 'zenite_filter_wp_title', 10, 2 );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * To override this in a child theme, remove the filter and optionally add
 * your own function tied to the wp_page_menu_args filter hook.
 *
 * @since Twenty Ten 1.0
 */
function zenite_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'zenite_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function zenite_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'zenite_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @since Twenty Ten 1.0
 * @return string "Continue Reading" link
 */
function zenite_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Leer más <span class="meta-nav">&rarr;</span>', 'zenite' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and zenite_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function zenite_auto_excerpt_more( $more ) {
	return ' &hellip;' . zenite_continue_reading_link();
}
add_filter( 'excerpt_more', 'zenite_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function zenite_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= zenite_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'zenite_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css.
 *
 * @since Twenty Ten 1.0
 * @return string The gallery style filter, with the styles themselves removed.
 */
function zenite_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'zenite_remove_gallery_css' );

if ( ! function_exists( 'zenite_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own zenite_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function zenite_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'zenite' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'zenite' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'zenite' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'zenite' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'zenite' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'zenite'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override zenite_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function zenite_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'zenite' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'zenite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'zenite' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'zenite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' 			=> 'Contacto Widget Area',
		'id' 			=> 'widget-contacto',
		'description' 	=> 'Widget para formulario de contacto',
		'before_widget' => '<div class="formContact">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 style="display: none;">',
		'after_title' 	=> '</h3>',
		));

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'zenite' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'zenite' ),
		'before_widget' => '<article id="%1$s" class="column one-third article %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<div class="title">',
		'after_title' => '</div><div class="separador left"></div>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'zenite' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'zenite' ),
		'before_widget' => '<article id="%1$s" class="column one-third article %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<div class="title">',
		'after_title' => '</div><div class="separador mid"></div>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'zenite' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'zenite' ),
		'before_widget' => '<article id="%1$s" class="column one-third article %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<div class="title">',
		'after_title' => '</div><div class="separador right"></div>',
	) );

}
/** Register sidebars by running zenite_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'zenite_widgets_init' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * @since Twenty Ten 1.0
 */
function zenite_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'zenite_remove_recent_comments_style' );

if ( ! function_exists( 'zenite_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function zenite_posted_on() {
	printf( __( '<span class="%1$s">Publicado el</span> %2$s <span class="meta-sep">por</span> %3$s', 'zenite' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'zenite' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'zenite_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function zenite_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'zenite' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'zenite' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'zenite' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;


//Menu compatible with mbmenu

class description_walker extends Walker_Nav_Menu
{

	static protected $itemId;

      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           //$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           //$class_names = ' class="'. esc_attr( $class_names ) . '"';
		   
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = esc_attr( $class_names );

//         $output .= $indent . '<li  id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		   if( $depth == 0) {
           $output .= $indent . '<li class="rootVoice {menu: '."'menu_". $item->ID ."'".'} '. $class_names .'">';
		   }else{
           $output .= $indent . "";
		   }


           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
/*
           $prepend = '<strong>';
           $append = '</strong>';*/
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }


		   self::$itemId=$item->ID;


if (!isset($prepend)) $prepend = '';
if (!isset($append)) $append = '';
if (!isset($item_output)) $item_output = '';

            if( $depth == 0) {
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
				$item_output .= $description.$args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
            }
            if( $depth != 0) {
				$item_output .= "<a href='".$item->url."'>".apply_filters( 'the_title', $item->title, $item->ID )."</a>	";
				$item_output .= "<a class='separator'> </a>  ";
            }
			$item->ID;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }

			function start_lvl(&$output, $depth, $args) {
				$style = "";
				$this->hidden = false;
				if($depth == 0) $style = (($this->hidden)?"":"display:none;");

				$output .= "<ul id='menu_".self::$itemId."' class='mbmenu'>";
			}

}

//menus

register_nav_menus(
    array(
        'zenite-menu' => 'Zenite Menu',
        'select-menu' => 'Responsive Menu',
    )
);

//main menu
/*
function wp_nav_menu_zenite_sort( $a, $b ) {
    return $a = $b;
}*/
 
function wp_nav_menu_zenite( $args = array() ) {
     
    $defaults = array(
        'theme_location' => '',
        'menu_class' => 'zenite-menu',
    );
     
    $args = wp_parse_args( $args, $defaults );
      
    if ( ( $menu_locations = get_nav_menu_locations() ) && isset( $menu_locations[ $args['theme_location'] ] ) ) {
        $menu = wp_get_nav_menu_object( $menu_locations[ $args['theme_location'] ] );
          
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
         
        $children = array();
        $parents = array();
         
        foreach ( $menu_items as $id => $data ) {
            if ( empty( $data->menu_item_parent )  ) {
                $top_level[$data->ID] = $data;
            } else {
                $children[$data->menu_item_parent][$data->ID] = $data;
            }
        }
         
        foreach ( $top_level as $id => $data ) {
            foreach ( $children as $parent => $items ) {
                if ( $id == $parent  ) {
                    $menu_item[$id] = array(
                        'parent' => true,
                        'item' => $data,
                        'children' => $items,
                    );
                    $parents[] = $parent;
				}else if(! in_array( $id, $parents )){
				 	$menu_item[$id] = array(
                    'parent' => false,
                    'item' => $data,
					 );
				}
            }
        }

		if(empty($menu_item))
		{
			foreach ( $top_level as $id => $data ) {
				$menu_item[$id] = array(
                        'parent' => true,
                        'item' => $data,
                );
			}
		}

        
//        uksort( $menu_item, 'wp_nav_menu_zenite_sort' );
         
		 echo '<ul class="navegation '.$args['menu_class'].'" id="menu-'.$args['theme_location'].'">';
        ?>
                <?php foreach ( $menu_item as $id => $data ) : ?>
                    <?php if ( $data['parent'] == true ) : ?>
                    
<?php //current menu
	  $link = $_SERVER['REQUEST_URI'];
	  $current='no';

		if(substr($link, -1)=='/'){
			if(substr($link, -5)== substr($data['item']->url, -5)){$current='si';}
		}
		else{
			if(strpos($data['item']->url, $link) !== false){if(substr($link, -5)== substr($data['item']->url, -5)){$current='si';}}
		}	  
		
		foreach ( $data['children'] as $id => $child ) :
			if(strpos($child->url, $link) !== false){
				if(substr($link, -1)=='/'){
					if(substr($link, -5)== substr($child->url, -5)){$current='si';}
				}
				else{
					if(substr($link, -5)== substr($child->url, -5)){$current='si';}
				}
			}
		endforeach;

		if($current=='no'){$class= '';}else{$class = 'current-menu-item';}
?> 
                    
	<li class="rootVoice {menu: 'menu_<?php echo $data['item']->ID ?>'} <?php echo $class;?>" menu="menu_<?php echo $data['item']->ID ?>" style="white-space: nowrap;">
    <!--<span class="navcurrent_left sabe"></span> -->
	<a href="<?php echo $data['item']->url ?>"><?php echo $data['item']->title ?></a>
    <!--<span class="navcurrent_right"></span>-->
    <div class="lineamenu"></div>    
							<ul class="mbmenu" id="menu_<?php echo $data['item']->ID ?>" style="display: none;">
                            <?php foreach ( $data['children'] as $id => $child ) : ?>
								<a href="<?php echo $child->url ?>"><?php echo $child->title ?></a><a class="separator"> </a>  
                            <?php endforeach; ?>
                            </ul>
                            </li>
                    <?php else : ?>
<?php //current menu
	  $link = $_SERVER['REQUEST_URI'];
	  $current='no';
	  
		if(substr($link, -1)=='/'){
			if(substr($link, -5)== substr($data['item']->url, -5)){$current='si';}
		}
		else{
			if(strpos($data['item']->url, $link) !== false){if(substr($link, -5)== substr($data['item']->url, -5)){$current='si';}}
		}	
		if($current=='no'){$class= '';}else{$class = 'current-menu-item';}
?>             
                   
	<li class="rootVoice {menu: 'menu_<?php echo $data['item']->ID ?>'} <?php echo $class;?>" menu="menu_<?php echo $data['item']->ID ?>" style="white-space: nowrap;">
    <span class="navcurrent_left"></span>
	<a href="<?php echo $data['item']->url ?>"><?php echo $data['item']->title ?></a>
    <span class="navcurrent_right"></span>
    <div class="lineamenu"></div></li>                    
                    <?php endif; ?>
                <?php endforeach; ?>
        <?php
		echo '</ul>';
		
    } else {}
}


//menu select

function wp_nav_menu_select( $args = array() ) {
 
    $defaults = array(
        'theme_location' => '',
        'menu_class' => 'select-menu',
    );
 
    $args = wp_parse_args( $args, $defaults );
 
    if ( ( $menu_locations = get_nav_menu_locations() ) && isset( $menu_locations[ $args['theme_location'] ] ) ) {
        $menu = wp_get_nav_menu_object( $menu_locations[ $args['theme_location'] ] );
 
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
		
		
		echo '<select class="navegation_resp">';
		echo '<option value="" selected="selected">Navegar hacia...</option>';
        ?>

                <?php foreach( (array) $menu_items as $key => $menu_item ) : ?>
                    <option value="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></option>
                <?php endforeach; ?>
        <?php
		
		echo '</select>';
    }
 
    else {
		echo '<select class="navegation_resp">';
		echo '<option value="" selected="selected">Menu not found</option>';
		echo '</select>';
    }
 
}