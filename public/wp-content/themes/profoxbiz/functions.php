<?php
/**
 * profoxbiz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package profoxbiz
 */

if ( ! function_exists( 'profoxbiz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function profoxbiz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on profoxbiz, use a find and replace
		 * to change 'profoxbiz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'profoxbiz', get_template_directory() . '/languages' );

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
		add_theme_support('responsive-embeds');
		add_theme_support('wp-block-styles');
		add_theme_support('align-wide');
		add_theme_support( 'customize-selective-refresh-widgets  ' );
		add_theme_support( 'editor-styles' );

		// To use additional css
		add_editor_style( 'assets/css/editor-style.css' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'profoxbiz' ),
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
		add_theme_support( 'custom-background', apply_filters( 'profoxbiz_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'profoxbiz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function profoxbiz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'profoxbiz_content_width', 640 );
}
add_action( 'after_setup_theme', 'profoxbiz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function profoxbiz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'profoxbiz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'profoxbiz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget One', 'profoxbiz' ),
		'id'            => 'footer-one',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Two', 'profoxbiz' ),
		'id'            => 'footer-two',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Three', 'profoxbiz' ),
		'id'            => 'footer-three',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'profoxbiz_widgets_init' );

/**
 * Excerpt Limit Begin
 */


function profoxbiz_excerpt_length( $length ) {
	return 10;
}

function profoxbiz_read_more_filters() {
	if ( is_home() || is_front_page() || is_category() || is_tag() || is_author() || is_date() ) {
		add_filter( 'excerpt_length', 'profoxbiz_excerpt_length', 999 );
	}
}
add_action( 'wp', 'profoxbiz_read_more_filters' );

/**
 * Enqueue scripts and styles.
 */

function profoxbiz_scripts() {
	wp_enqueue_style( 'profoxbiz-style', get_stylesheet_uri() );
	wp_enqueue_style( 'profoxbiz-style', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Poppins:400,500,600,700,800,900&display=swap' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/vendors/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/vendors/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/vendors/slick/slick-theme.css' );
	wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/assets/vendors/slicknav/slicknav.min.css' );
	wp_enqueue_style( 'profoxbiz-main-style-css', get_template_directory_uri() . '/assets/css/style.css' );

	include(get_template_directory().'/inc/customizers/inline-css.php');

	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/vendors/modernizr/modernizr.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/vendors/slick/slick.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'match-height-js', get_template_directory_uri() . '/assets/vendors/match-height/jquery.matchHeight-min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/vendors/slicknav/jquery.slicknav.min.js', array('jquery'), '1', true );
	wp_enqueue_script( 'profoxbiz-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1', true );
	wp_enqueue_script( 'profoxbiz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1', true );
	wp_enqueue_script( 'profoxbiz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'profoxbiz_scripts' );

function profoxbiz_block_editor_google_fonts(){
	wp_enqueue_style( 'profoxbiz_block_editor_google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Poppins:400,500,600,700,800,900&display=swap' );
}
add_action( 'enqueue_block_editor_assets', 'profoxbiz_block_editor_google_fonts' );




$main_content_class = 'col-sm-12 col-md-7 col-lg-8 col-xl-9';
$sidebar_content = 'col-sm-12 col-md-5 col-lg-4 col-xl-3';
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	$main_content_class = 'col-sm-12 col-md-12 col-lg-12 col-xl-12';
	$sidebar_content = 'col-sm-12 col-md-5 col-lg-4 col-xl-3';

}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Custom hook.
 */
require get_template_directory() . '/inc/hooks/hooks.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}