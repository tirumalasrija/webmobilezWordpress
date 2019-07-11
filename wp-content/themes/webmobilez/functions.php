<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */



if ( ! function_exists( 'webmobilez_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webmobilez_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'webmobilez' to the name of your theme in all the template files.
		 */
	

		
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'webmobilez' ),
				'footer' => __( 'Footer Menu', 'webmobilez' ),
				'social' => __( 'Social Links Menu', 'webmobilez' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
	


		
	
	}
endif;
add_action( 'after_setup_theme', 'webmobilez_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webmobilez_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'webmobilez' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'webmobilez' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'webmobilez_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function webmobilez_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'webmobilez_content_width', 640 );
}
add_action( 'after_setup_theme', 'webmobilez_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */


/**
 * Enqueue supplemental block editor styles.
 */


/**
 * Display custom color CSS in customizer and on frontend.
 */

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Technologies', 'Post Type General Name', 'webmobilez' ),
        'singular_name'       => _x( 'Technology', 'Post Type Singular Name', 'webmobilez' ),
        'menu_name'           => __( 'Technologies', 'webmobilez' ),
        'parent_item_colon'   => __( 'Parent Technology', 'webmobilez' ),
        'all_items'           => __( 'All Technologies', 'webmobilez' ),
        'view_item'           => __( 'View Technology', 'webmobilez' ),
        'add_new_item'        => __( 'Add New Technology', 'webmobilez' ),
        'add_new'             => __( 'Add New', 'webmobilez' ),
        'edit_item'           => __( 'Edit Technology', 'webmobilez' ),
        'update_item'         => __( 'Update Technology', 'webmobilez' ),
        'search_items'        => __( 'Search Technology', 'webmobilez' ),
        'not_found'           => __( 'Not Found', 'webmobilez' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'webmobilez' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Technologies', 'webmobilez' ),
        'description'         => __( 'Technology news and reviews', 'webmobilez' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'tech-category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'technologies', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
function tr_create_my_taxonomy() {

    register_taxonomy(
        'tech-category',
        'technologies',
        array(
            'label' => __( 'Category Type' ),
            'rewrite' => array( 'slug' => 'tech-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );