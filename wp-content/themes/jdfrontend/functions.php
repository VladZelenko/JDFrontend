<?php
/**
 * JDFrontend functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JDFrontend
 */

if ( ! function_exists( 'jdfrontend_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jdfrontend_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on JDFrontend, use a find and replace
	 * to change 'jdfrontend' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jdfrontend', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Header menu', 'jdfrontend' ),
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
	add_theme_support( 'custom-background', apply_filters( 'jdfrontend_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'jdfrontend_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jdfrontend_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jdfrontend_content_width', 640 );
}
add_action( 'after_setup_theme', 'jdfrontend_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jdfrontend_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jdfrontend' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jdfrontend' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'jdfrontend_widgets_init' );

register_sidebar( array(
	'name' => __( 'Header widget area', 'jdfrontend' ),
	'id' => 'sidebar-header-1',
	'description' => __( 'Header widget area', 'jdfrontend' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );

register_sidebar( array(
	'name' => __( 'Footer widget area 1', 'jdfrontend' ),
	'id' => 'sidebar-footer-1',
	'description' => __( 'Footer widget area 1', 'jdfrontend' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );

register_sidebar( array(
	'name' => __( 'Footer widget area 2', 'jdfrontend' ),
	'id' => 'sidebar-footer-2',
	'description' => __( 'Footer widget area 2', 'jdfrontend' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );

register_sidebar( array(
	'name' => __( 'Footer widget area 3', 'jdfrontend' ),
	'id' => 'sidebar-footer-3',
	'description' => __( 'Footer widget area 3', 'jdfrontend' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );

//Page home - contact
function contacts_post_type() {
	$args = array(
		'label' => 'Home contact',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'home-contact'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',)
		);
	register_post_type( 'home-contact', $args );
}
add_action( 'init', 'contacts_post_type' );

//about me
function about_post_type() {
	$args = array(
		'label' => 'About me',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'about-me'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',)
		);
	register_post_type( 'about-me', $args );
}
add_action( 'init', 'about_post_type' );

//My education - about page
function education_post_type() {
	$args = array(
		'label' => 'My education',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'education'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',)
		);
	register_post_type( 'education', $args );
}
add_action( 'init', 'education_post_type' );

//My skills custom post type on abaut page
function skills_post_type() {
	$args = array(
		'label' => 'My skills',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'skills'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',)
		);
	register_post_type( 'skills', $args );
}
add_action( 'init', 'skills_post_type' );

add_filter('excerpt_more', function($more) {
	return '';
});
/**
 * Enqueue scripts and styles.
 */
function jdfrontend_scripts() {
	wp_enqueue_style( 'jdfrontend-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jq', get_template_directory_uri() . '/libs/jquery/dist/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . 'libs/isotope/dist/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jdfrontend-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js', array(), '20151215', true );

	wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', 'jquery', false);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
	wp_enqueue_script('moreload', get_template_directory_uri() . '/js/moreload.js', 'jquery', false);

	wp_enqueue_script( 'jdfrontend-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'jdfrontend_scripts' );

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
