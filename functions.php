<?php
/**
 * CEMB Showcase Series functions and definitions
 *
 * @package CEMB Showcase Series
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'showcase_series_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function showcase_series_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CEMB Showcase Series, use a find and replace
	 * to change 'showcase-series' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'showcase-series', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'showcase-series' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );


	/*$bg_defaults['default-color'] 			= '222222';
	$bg_defaults['default-image'] 			= '';
	$bg_defaults['wp-head-callback'] 		= '_custom_background_cb';
	$bg_defaults['admin-head-callback'] 	= '';
	$bg_defaults['admin-preview-callback'] 	= '';

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'showcase_series_custom_background_args', $bg_defaults ) );
*/
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // showcase_series_setup
add_action( 'after_setup_theme', 'showcase_series_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function showcase_series_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'showcase-series' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'showcase_series_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function showcase_series_scripts() {
	wp_enqueue_style( 'showcase-series-style', get_stylesheet_uri() );

	wp_enqueue_script( 'showcase-series-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'showcase-series-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'showcase_series_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/*function change_custom_background_cb() {

	$page = get_page_by_title ( 'Welcome' );

	if ( has_post_thumbnail( $page->ID ) ) {

		$background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );

	} else {

		$background = get_background_image();

	}

    $color = get_background_color();
 
    if ( !$background && !$color ) { return; }
 
    $style = ( $color ? "background-color: #$color;" : '' );
 
    if ( $background ) {

        $image 		= " background-image: url('$background');";
        $repeat 	= " background-repeat: no-repeat;";
        $position 	= " background-position: top center;";
        $attachment = " background-attachment: fixed;";
        $style 		.= $image . $repeat . $position . $attachment;
    
    }
?>
<style type="text/css">
body.custom-background { <?php echo trim( $style ); ?> }
</style>
<?php
}*/

add_theme_support( 'custom-background' );



/**
 * Social Menus
 */
add_action( 'init', 'my_register_nav_menus' );

function my_register_nav_menus() {

	register_nav_menu( 'social', __( 'Social', 'showcase-series' ) );

}




/**
 * Customize footer
 */
function custom_footer_left() {

	get_template_part( 'menu', 'social' );

} // End of careers_credits()
add_action( 'footer_left', 'custom_footer_left' );

function custom_site_info() {

	printf( __( '<div class="copyright">All content &copy %1$s <a href="%2$s" title="Login">Belmont University</a> - All Rights Reserved<br />Mike Curb College of Entertainment and Music Business</div>', 'showcase-series' ), date( 'Y' ), get_admin_url() );

} // End of careers_credits()
add_action( 'site_info', 'custom_site_info' );

function slushman_credits() {

	printf( __( '<a href="http://%1$s.com" class="%1$s" rel="designer" >%2$s</a>', 'showcase-series' ), 'slushman', 'Slushman' );

} // End of careers_credits()
add_action( 'site_credits', 'slushman_credits' );