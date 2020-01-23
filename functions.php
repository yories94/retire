<?php
/**
 * Retire functions and definitions
 *
 * @package retire
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* 
 * Theme Setup
 */

// Check if the function 'happylife_theme' is available.
if ( ! function_exists( 'happylife_theme_setup' ) ) {
	
	function happylife_theme_setup() {

		// Register all navigation menus for theme.
		register_nav_menus( array(
			'header_menu' => esc_html__( 'Primary', 'happylife' ),
			'happylife_event' => esc_html__( 'Footer Column One', 'happylife' ),
			'happylife_blog'  => esc_html__( 'Footer Column Two', 'happylife' )
		) );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

	}

}
// Hook the function 'happy_life' for theme
add_action( 'after_setup_theme', 'happylife_theme_setup' );

// Check if the function 'register_widgets' is available
if ( ! function_exists( 'register_widgets' ) ) {

	function register_widgets() {
		register_sidebar( array(
			'name' 			=> __( 'Main Sidebar', 'wpb' ),
			'id'   			=> 'blog_sidebar',
			'description'   => __( 'Sidebar untuk halaman blog', 'wbp' ),
			'before_widget' => '<div class="widgt-padding widgt">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );

		register_sidebar( array(
			'name' 			=> __( 'Social Media', 'wpbs' ),
			'id'   			=> 'footer_social_media',
			'description'   => __( 'Bagian kolom footer untuk social media', 'wpbs' ),
			'before_widget' => '<div class="widgt-padding widgt">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
	}
}
add_action( 'widgets_init', 'register_widgets' );

// Filter to exclude pages from Wordpress search result
function filter_search( $query ) {
	if ( $query->is_search ) {
		$query->set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'filter_search' );

/* 
 * Blog and Article Settings
 */

// Changing excerpt length
function new_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

// Changing excerpt more
function new_excerpt_more( $more ) {
	
	// return '...';

	return '&hellip; <a href="' . get_the_permalink() . '" 
			class="btn btn-primary btn-lg btn-center">Read More</a>';

}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Adding dynamic meta description function
function add_dynamic_meta_desc() {

	global $post;

	// Return the excerpt() if it exists other truncate
	if ( ! empty( $post->post_excerpt ) ) {
		$content = $post->post_excerpt;
	} else if ( ! empty( $post->post_content ) ) {
		$content = wp_trim_words( $post->post_content, 40, '...' );
	} else {
		return;
	}

	?>
	<meta name="description" content="<?php echo esc_attr( strip_tags( stripslashes( $content ) ) ); ?>" />
	<?php
}

// Add post type support
add_post_type_support( 'page', 'excerpt' );

/* 
 * Adding all stylesheets and scripts for theme
 */

// Add stylesheet function
function add_stylesheets() {

	$base = get_template_directory_uri();

	$arrStyles = array(
		'normalize.min'    => $base . '/css/normalize.min.css',
		'bootstrap.min'    => $base . '/css/bootstrap.min.css',
		'font-awesome.min' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
		'animate.min'      => $base . '/css/animate.min.css',
		'icofont.min'	   => $base . '/css/icofont.min.css',
		'style'			   => $base . '/style.css'
	);

	foreach ( $arrStyles as $name => $address_url ) {
		wp_enqueue_style( $name, $address_url, null, false );
	}

}
add_action( 'wp_enqueue_scripts', 'add_stylesheets' );

// Add script function
function add_scripts() {

	$base = get_template_directory_uri();

	$arrScripts = array(
		'modernizr' => $base . '/js/vendor/modernizr-2.8.3.min.js',
		'jquery' => $base . '/js/vendor/jquery-1.12.4.min.js',
		'bootstrap.min' => $base . '/js/vendor/bootstrap.min.js',
		
		'main' => $base . '/js/main.js'
	);

	foreach ( $arrScripts as $name => $address_url ) {
		wp_enqueue_script( $name, $address_url, null, false, true );
	}

}
add_action( 'wp_enqueue_scripts', 'add_scripts' );