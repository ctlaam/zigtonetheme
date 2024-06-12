<?php

/**
 * zigtone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zigtone
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_enqueue_styles()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/custom-style.css');
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function zigtone_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on zigtone, use a find and replace
		* to change 'zigtone' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('zigtone', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'zigtone'),
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
			'zigtone_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'zigtone_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zigtone_content_width()
{
	$GLOBALS['content_width'] = apply_filters('zigtone_content_width', 640);
}
add_action('after_setup_theme', 'zigtone_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zigtone_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'zigtone'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'zigtone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'zigtone_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function zigtone_scripts()
{
	wp_enqueue_style('zigtone-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('zigtone-style', 'rtl', 'replace');

	wp_enqueue_script('zigtone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'zigtone_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// wallpaper

function create_wallpaper2_post_type() {
    $labels = array(
        'name'               => __('Wallpapers'),
        'singular_name'      => __('Wallpaper'),
        'menu_name'          => __('Wallpapers'),
        'name_admin_bar'     => __('Wallpaper'),
        'add_new'            => __('Add New'),
        'add_new_item'       => __('Add New Wallpaper'),
        'new_item'           => __('New Wallpaper'),
        'edit_item'          => __('Edit Wallpaper'),
        'view_item'          => __('View Wallpaper'),
        'all_items'          => __('All Wallpapers'),
        'search_items'       => __('Search Wallpapers'),
        'parent_item_colon'  => __('Parent Wallpapers :'),
        'not_found'          => __('No wallpapers found.'),
        'not_found_in_trash' => __('No wallpapers found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'wallpaper' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type('wallpaper', $args);
}
add_action('init', 'create_wallpaper2_post_type');

// Đăng ký Taxonomy
function create_wallpaper_taxonomy() {
    $labels = array(
//        sua het may cai Fondos de Pantalla thanh Wallpaper
        'name' => _x( 'Wallpaper', 'taxonomy general name' ),
        'singular_name' => _x( 'Wallpaper', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Wallpaper' ),
        'all_items' => __( 'All Wallpaper' ),
        'parent_item' => __( 'Parent Wallpaper' ),
        'parent_item_colon' => __( 'Parent Wallpaper:' ),
        'edit_item' => __( 'Edit Wallpaper' ),
        'update_item' => __( 'Update Wallpaper' ),
        'add_new_item' => __( 'Add New Wallpaper' ),
        'new_item_name' => __( 'New Wallpaper Name' ),
        'menu_name' => __( 'Wallpaper' ),
    );

    register_taxonomy('wallpaper',array('wallpaper'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'wallpaper' ),
    ));
}
add_action( 'init', 'create_wallpaper_taxonomy', 0 );
