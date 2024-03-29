<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="title">',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/* widget for the footer*/
function red_starter_footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'footer-widget',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="title">',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'red_starter_footer_widgets_init' );





/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

function get_external_css(){
	wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.2/css/all.css',false);
}
add_action('wp_enqueue_scripts', 'get_external_css');

/**
 * Enqueue scripts and styles.
 */

add_action('init', 'customs_register_scripts');
function customs_register_scripts() {
	// wp_deregister_script('jQuery');
	// wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js');
	wp_register_script( 'red-starter-js-customs', get_template_directory_uri() . '/build/js/js-customs.min.js', array('jquery'));
}

//Enqueue Scripts
add_action('wp_enqueue_scripts', 'customs_enqueue_scripts');
function customs_enqueue_scripts() {
	// wp_enqueue_script('jQuery');
    wp_enqueue_script('red-starter-js-customs');
}

function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	// wp_deregister_script('jquery');
	// wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
	wp_enqueue_script( 'red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';