<?php
/**
 * aro functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aro
 */

if ( ! function_exists( 'aro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aro_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on aro, use a find and replace
	 * to change 'aro' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'aro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'aro' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aro_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'aro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aro_content_width', 640 );
}
add_action( 'after_setup_theme', 'aro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aro_scripts() {
	
	wp_enqueue_style('aro-reset', get_template_directory_uri() . '/inc/reset.css');
	wp_enqueue_style('aro-bootcss', get_template_directory_uri() . '/inc/bootstrap.min.css');
	wp_enqueue_style( 'aro-style', get_stylesheet_uri() );
	wp_enqueue_style('aro-animate', get_template_directory_uri() . '/inc/animate.css');
	wp_enqueue_style('aro-gfonts','https://fonts.googleapis.com/css?family=Lekton:400,700|Open+Sans:300,400,400i,700,800|Playfair+Display:400,700,900|Quicksand:300,400');
	wp_enqueue_script('aro-jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('aro-bootjs', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('aro-waypoints', get_template_directory_uri() . '/inc/jquery.waypoints.min.js');
	wp_enqueue_script('aro-waypoints-inview', get_template_directory_uri() . '/inc/inview.min.js');
	wp_enqueue_script('aro-stellerjs', get_template_directory_uri() . '/inc/jquery.stellar.min.js');
	wp_enqueue_script( 'aro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'aro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aro_scripts' );


function enqueue_TweenMax() {
  if ( ! is_admin() ) {
    $scriptsrc = get_template_directory_uri() . '/inc/TweenMax.min.js'; 
    wp_register_script( 'TweenMax', $scriptsrc );
    wp_enqueue_script( 'TweenMax' );
  }
}
add_action( 'wp_enqueue_scripts', 'enqueue_TweenMax' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


add_action( 'init', 'create_portfolios' );
function create_portfolios() {
  register_post_type( 'portfolios',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'portfolio item' )
      ),
      'public' => true,
      'hierarchical'       => true,
      'has_archive' => false,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
      'taxonomies' => array('category'),
      'rewrite'            => array( 'slug' => 'portfolio-item' )
    )
  );
}


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}