<?php
/**
 * wasfa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wasfa
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
function wasfa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wasfa, use a find and replace
		* to change 'wasfa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wasfa', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'القائمة الرئيسية', 'wasfa' ),
            'menu-2' => esc_html__( 'القائمة الجانبية', 'wasfa' ),
            'menu-3' => esc_html__( 'القائمة العلوية', 'wasfa' ),
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
			'wasfa_custom_background_args',
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
add_action( 'after_setup_theme', 'wasfa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wasfa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wasfa_content_width', 640 );
}
add_action( 'after_setup_theme', 'wasfa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wasfa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wasfa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wasfa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wasfa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wasfa_scripts() {
    wp_enqueue_style('bootstrap', get_parent_theme_file_uri() . '/css/bootstrap.min.css', array(),  _S_VERSION);
    wp_enqueue_style('owlcarousel', get_parent_theme_file_uri() . '/css/owl.carousel.css', array(),  _S_VERSION);
    wp_enqueue_style('owltheme', get_parent_theme_file_uri() . '/css/owl.theme.css', array(),  _S_VERSION);

	wp_enqueue_style( 'wasfa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wasfa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wasfa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wasfa_scripts' );

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
/* =========================== كود السلايدر

/* ------ (01) slider -------*/
function custom_post_type() {

 $labels = array(
   'name'                  => __( 'سلايدر', 'niletheme' ), //
	 'singular_name'         => __( 'سلايد', 'niletheme' ),
	 'menu_name'             => __( 'السلايدر', 'niletheme' ),
 );
 $rewrite = array(
	 'slug'                => 'slider',
	 'with_front'          => true,
	 'pages'               => true,
	 'feeds'               => true,
 );
 $args = array(
	 'labels'              => $labels,
	 'supports'              => array( 'title', 'thumbnail' ),
	 'hierarchical'        => false,
	 'public'              => true,
	 'show_ui'             => true,
	 'show_in_menu'        => true,
	 'show_in_nav_menus'   => true,
	 'show_in_admin_bar'   => true,
	 'menu_position'       => 6,
	 'can_export'          => true,
	 'has_archive'         => true,
	 'exclude_from_search' => false,
	 'publicly_queryable'  => true,
	 'rewrite'             => $rewrite,
	 'capability_type'     => 'page',
 );
 register_post_type( 'slider', $args );

}
add_action( 'init', 'custom_post_type', 0 );


