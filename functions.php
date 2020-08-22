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
		// Enable support fgor title tag generator
		add_theme_support( 'title-tag' );

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
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
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
	return 17;
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

// Changing excerpt more
function new_excerpt_more( $more ) {
	return '... <span>Read More</span>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Change search page slug name
if ( !function_exists( 'change_search_slug_name' ) )
{
	function change_search_slug_name()
	{
		if ( is_search() && !empty( $_GET['s'] ) )
		{
			wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
			exit();
		}
	}
	add_action( 'template_redirect', 'change_search_slug_name' );
}

// Pagination setting
// Numbered Pagination
if ( !function_exists( 'page_pagination' ) ) {
	
	function page_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}

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
		'owl.carousel.min' => 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css',
		'owl.theme.min'	   => 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css',
		'aos' 			   => 'https://unpkg.com/aos@2.3.1/dist/aos.css',
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
		'owl.carousel.min' => 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js',
		'aos' => 'https://unpkg.com/aos@2.3.1/dist/aos.js',
		'main' => $base . '/js/main.js'
	);

	foreach ( $arrScripts as $name => $address_url ) {
		wp_enqueue_script( $name, $address_url, null, false, true );
	}

}
add_action( 'wp_enqueue_scripts', 'add_scripts' );