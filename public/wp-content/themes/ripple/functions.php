<?php
/**
 * Ripple functions and definitions
 *
 * @package Ripple
 */
 
 if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ripple_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ripple_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ripple, use a find and replace
	 * to change 'ripple' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ripple', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ripple' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'ripple' ),
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
	add_theme_support( 'custom-background', apply_filters( 'ripple_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

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
	
/** Add Image Sizes **/
add_image_size('ripple-port-thumb',363,272,true);
add_image_size('ripple-slider-image-size', 1349, 670, true);
add_image_size('ripple-port-thumb1', 300, 420, true);
add_image_size('ripple-port-thumb2', 600, 200, true);
add_image_size('ripple-port-thumb3', 300, 200, true);
add_image_size('ripple-team-thumb', 525, 525, true);
add_image_size('ripple-single-image',1150,500,true);
add_image_size('ripple-blog-home',600,400,true);
add_image_size('ripple-service-home',50,40,true);


}
endif; // ripple_setup
add_action( 'after_setup_theme', 'ripple_setup' );

/** Adding Editor Styles **/
function ripple_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'/css/custom-editor-style.css' );
}

add_action( 'admin_init', 'ripple_add_editor_styles' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ripple_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ripple_content_width', 640 );
}
add_action( 'after_setup_theme', 'ripple_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ripple_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ripple' ),
		'id'            => 'ripple-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    /** Footer Social Links Section **/
    register_sidebar( array(
		'name'          => esc_html__( 'Google Map (Home Page)', 'ripple' ),
		'id'            => 'ripple-contact-section-map',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    /** Progress (Home Page)**/
        register_sidebar( array(
    		'name'          => esc_html__( 'Progress (Home Page)', 'ripple' ),
    		'id'            => 'ripple-progress-home-page',
    		'description'   => '',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h1 class="widget-title">',
    		'after_title'   => '</h1>',
    	) );
        
        /** Contact Form (Home Page)**/
        register_sidebar( array(
    		'name'          => esc_html__( 'Contact Section (Home Page)', 'ripple' ),
    		'id'            => 'ripple-contact-us-home-page',
    		'description'   => '',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	) );
        
        /** Contact Form (Home Page)**/
        register_sidebar( array(
    		'name'          => esc_html__( 'About Section (Home Page)', 'ripple' ),
    		'id'            => 'ripple-about-us-home-page',
    		'description'   => '',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h1 class="widget-title">',
    		'after_title'   => '</h1>',
    	) );
        
        /** Footer Bottom Block **/
        register_sidebar( array(
    		'name'          => esc_html__( 'Footer Bottom Block', 'ripple' ),
    		'id'            => 'ripple-footer-bottom',
    		'description'   => '',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h1 class="widget-title">',
    		'after_title'   => '</h1>',
    	) );
        
}
add_action( 'widgets_init', 'ripple_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ripple_scripts() {
    $query_args = array('family' => 'Open+Sans:400italic,600italic,700italic,400,300,600,700|Nunito+Sans:300,400,600,700|Nunito:300,400,600,700|Muli:300,400,600,700|
    	Lato:400italic,600italic,700italic,400,300,600,700|Roboto:400italic,600italic,700italic,400,300,600,700|Poppins|Raleway|Karla|Roboto+Slab|PT+Serif|Montserrat:400italic,600italic,700italic,400,300,600,700');
	wp_enqueue_style('ripple-google-fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"));
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/faw/css/font-awesome.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/js/owl-carousel/owl.carousel.css');
    wp_enqueue_style('mCustomScrollbar',get_template_directory_uri().'/js/custom-scroll/jquery.mCustomScrollbar.css');
    wp_enqueue_style( 'ripple-style', get_stylesheet_uri() );
    wp_enqueue_style( 'ripple-responsive', get_template_directory_uri().'/css/responsive.css');
               
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri(). '/js/owl-carousel/owl.carousel.js', array('jquery') );
    wp_enqueue_script( 'jquery-scrollto', get_template_directory_uri(). '/js/jquery.scrollTo.js', array('jquery') );
    wp_enqueue_script( 'jquery-localscroll', get_template_directory_uri(). '/js/jquery.localScroll.js', array('jquery') );
    wp_enqueue_script( 'jquery-parallax', get_template_directory_uri(). '/js/jquery.parallax.js', array('jquery') );
    wp_enqueue_script( 'jquery-nav', get_template_directory_uri(). '/js/jquery.nav.js', array('jquery') );
    wp_enqueue_script( 'jquery-wow', get_template_directory_uri(). '/js/wow.js',array('jquery'));
    wp_enqueue_script( 'jquery-isotope-pkgd', get_template_directory_uri(). '/js/isotope/isotope.pkgd.js',array('jquery'));
    wp_enqueue_script( 'jquery-packery-mode-pkgd', get_template_directory_uri(). '/js/isotope/packery-mode.pkgd.js',array('jquery'));
    wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri(). '/js/jquery.waypoints.js', array('jquery'));
    wp_enqueue_script( 'jquery-classyloader', get_template_directory_uri(). '/js/Circular-Percentage-Loader/jquery.classyloader.min.js', array('jquery'));
    wp_enqueue_script('jquery-mousewheel',get_template_directory_uri().'/js/jquery-mousewheel/jquery.mousewheel.min.js',array('jquery'));
    wp_enqueue_script('jquery-mCustomScrollbar',get_template_directory_uri().'/js/custom-scroll/jquery.mCustomScrollbar.js',array('jquery', 'jquery-mousewheel'));
    wp_enqueue_script( 'ripple-custom', get_template_directory_uri() . '/js/custom.js', array('jquery','jquery-owl-carousel','jquery-scrollto','jquery-localscroll','jquery-parallax','jquery-nav','jquery-wow','jquery-waypoint','jquery-isotope-pkgd','imagesloaded','jquery-classyloader','jquery-mCustomScrollbar'));   
}
add_action( 'wp_enqueue_scripts', 'ripple_scripts' );

/**
 * Template Tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load One Pager Custom Functions.
 */
require get_template_directory() . '/inc/ripple-functions.php';

/**
 * Load Custom Customizer Functionality
 */
require get_template_directory() . '/inc/admin/ripple-customizer.php';

/**
 * Load Dynamic Styles
 */
require get_template_directory() . '/css/dynamic-styles.php';
 
 /**
 * Load Widgets for the Ripple
 */
 require get_template_directory() . '/inc/widgets/widget-fields.php';
 
 require get_template_directory() . '/inc/widgets/widget-progress-bar.php';
 require get_template_directory() . '/inc/widgets/widgets-contact-info.php';


/** Welcome Page **/
require get_template_directory() . '/welcome/welcome.php';
 
 
/**
 * AccessPress More Themes
 */


// Add specific CSS class by filter
add_filter( 'body_class', 'ripple_add_unique_class_names' );
function ripple_add_unique_class_names( $classes ) {
	global $post;
	$port_cat = get_theme_mod('ripple_portfolio_section_category', 0);

	if(is_single()) {
		$cats = get_the_category($post);
		$cat_arr = array();

		foreach($cats as $cat) :
		    $cat_arr[] = $cat->term_id;
		endforeach;

		if($port_cat != 0 && in_array($port_cat, $cat_arr) ) {
			$classes[] = 'single-pfolio';
		}
	} elseif(is_archive()) {
		$cat = get_query_var('cat');
		if($port_cat != 0 && $cat == $port_cat ){
			$classes[] = 'arch-pfolio';
		}
	}

	return $classes;
}
add_filter( 'body_class', 'ripple_home_header_class' );
function ripple_home_header_class($classes){
    if(is_home() && is_front_page()){
    
            $classes[] = 'latest_post_home';
        }
    return $classes;
}

function ripple_create_nav_notice() {
	echo '<div class="create-menu-notice">';
		echo "<p>";
			printf( '%1$s <a href="%2$s" target="_blank">%3$s</a>.', esc_html__( 'Create Menu by going to Dashboard &gt; Appearance &gt;', 'ripple'), esc_url( admin_url('nav-menus.php') ), esc_html__('Menus', 'ripple') );
		echo "</p>";
	echo '</div>';
}