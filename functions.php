<?php
/**
 * Resoto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Resoto
 */

if ( ! function_exists( 'resoto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function resoto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Resoto, use a find and replace
		 * to change 'resoto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'resoto', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'resoto' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'resoto' ),
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
		add_theme_support( 'custom-background', apply_filters( 'resoto_custom_background_args', array(
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
add_action( 'after_setup_theme', 'resoto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resoto_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'resoto_content_width', 640 );
}
add_action( 'after_setup_theme', 'resoto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function resoto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'resoto' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'resoto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Hotel Search Rooms', 'resoto' ),
		'id'            => 'hb-search-rooms',
		'description'   => esc_html__( 'Add HB Search Room widget here.', 'resoto' ),
		'before_widget' => '<div class="fwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'resoto' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets for the footer 1 area.', 'resoto' ),
		'before_widget' => '<div class="fwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'resoto' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets for the footer 2 area.', 'resoto' ),
		'before_widget' => '<div class="fwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'resoto' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets for the footer 3 area.', 'resoto' ),
		'before_widget' => '<div class="fwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'resoto' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets for the footer 4 area.', 'resoto' ),
		'before_widget' => '<div class="fwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'resoto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function resoto_scripts() {
	wp_enqueue_style( 'resoto-style', get_stylesheet_uri() );

	/** Line Icons **/
	wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/vendors/line-icons/LineIcons.min.css', array(), '20151215' );

	/** Owl Carousel **/
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.css', array(), '20151215' );

	$fonts_url = '';
    
    $playfair = _x( 'on', 'Playfair Display font: on or off', 'resoto' );
    $worksans = _x( 'on', 'Work Sans font: on or off', 'resoto' );
    $montserrat = _x( 'on', 'Montserrat font: on or off', 'resoto' );
    $poppins = _x( 'on', 'Poppins font: on or off', 'resoto' );

    
    if ( 'off' !== $playfair || 'off' !== $worksans || 'off' !== $montserrat || 'off' !== $poppins ) {
		$font_families = array();
		 
		if ( 'off' !== $playfair ) {
			$font_families[] = 'Playfair Display';
		}
		 
		if ( 'off' !== $worksans ) {
			$font_families[] = 'Work Sans';
		}

		if ( 'off' !== $montserrat ) {
			$font_families[] = 'Montserrat:400,500,600,700,800,900';
		}

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,500,600,700,800,900';
		}
		 
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		 
		$google_fonts = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	/** Google Fonts **/
	wp_enqueue_style( 'resoto-googlefonts', $google_fonts );

	wp_enqueue_script( 'resoto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	/** Owl Carousel **/
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '20151215', true );

	/** Custom Script **/
	wp_enqueue_script( 'resoto-custom-script', get_template_directory_uri() . '/js/custom-script.js', '20151215', true );

	wp_enqueue_script( 'resoto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'resoto_scripts' );

/**
 * Enqueue Backend scripts and styles
 */
function resoto_admin_scripts() {
	/** Admin Styles **/
	wp_enqueue_style( 'resoto-admin-styles', get_template_directory_uri() . '/assets/css/admin-styles.css', array(), '20151215' );

	/** Admin Scripts **/
	wp_enqueue_script( 'resoto-admin-script', get_template_directory_uri() . '/js/admin-script.js', '20151215', true );
}
add_action( 'admin_enqueue_scripts', 'resoto_admin_scripts', 10 );

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
 * Kirki Framework
 */
require get_template_directory() . '/inc/kirki/kirki.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/options/theme-options.php';

/** Resoto Functions **/
require get_template_directory() . '/inc/resoto-functions.php';

/** Resoto Metaboxes **/
require get_template_directory() . '/inc/metabox.php';

/** Resoto Breadcrumb **/
require get_template_directory() . '/inc/breadcrumbs.php';

/** Resoto Breadcrumb **/
require get_template_directory() . '/assets/css/dynamic-styles.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function pr($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function vr($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}