<?php
/**
 * smart-frame functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package smart-frame
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function smart_frame_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on smart-frame, use a find and replace
		* to change 'smart-frame' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'smart-frame', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'smart-frame' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'smart_frame_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'smart_frame_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smart_frame_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smart_frame_content_width', 640 );
}
add_action( 'after_setup_theme', 'smart_frame_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smart_frame_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'smart-frame' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'smart-frame' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'smart_frame_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smart_frame_scripts() {
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), 2.0, false);
    wp_enqueue_script('tailwind-plugins', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp', array(), 2.0, false);

	wp_enqueue_style( 'smart-frame-style', get_stylesheet_uri() . '?n=2', array(), _S_VERSION );
	wp_style_add_data( 'smart-frame-style', 'rtl', 'replace' );

    wp_enqueue_script('smart-frame-main', get_template_directory_uri() . '/js/main.js?n=2', array(), 2.0, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smart_frame_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Add slider post type
function smart_frame_add_slider_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Realizacje'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-format-gallery'
    );

    register_post_type("Slider", $args);
}

add_action("init", "smart_frame_add_slider_post_type");

// Add slider post type
function smart_frame_add_stoiska_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Stoiska'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 31,
        'menu_icon'            => 'dashicons-welcome-view-site'
    );

    register_post_type("stoiska", $args);
}

add_action("init", "smart_frame_add_stoiska_post_type");

// Add slider post type
function smart_frame_add_ramy_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Ramy'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 41,
        'menu_icon'            => 'dashicons-button'
    );

    register_post_type("ramy", $args);
}

add_action("init", "smart_frame_add_ramy_post_type");


// Add slider post type
function smart_frame_add_montaz_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Kroki montażu'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 32,
        'menu_icon'            => 'dashicons-image-rotate-left'
    );

    register_post_type("Montaz", $args);
}

add_action("init", "smart_frame_add_montaz_post_type");

// Add slider post type
function smart_frame_add_cechy_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Cechy'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 32,
        'menu_icon'            => 'dashicons-ellipsis'
    );

    register_post_type("Cechy", $args);
}

add_action("init", "smart_frame_add_cechy_post_type");

// Add slider post type
function smart_frame_add_profile_post_type() {
    $supports = array(
        'title',
        'editor',
        'date'
    );

    $labels = array(
        'name' => 'Profile'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => '' ),
        'has_archive'          => true,
        'menu_position'        => 43,
        'menu_icon'            => 'dashicons-editor-underline'
    );

    register_post_type("Profile", $args);
}

add_action("init", "smart_frame_add_profile_post_type");