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
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'webmobilez' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'webmobilez' ),
        'menu_name'           => __( 'Projects', 'webmobilez' ),
        'parent_item_colon'   => __( 'Parent Project', 'webmobilez' ),
        'all_items'           => __( 'All Projects', 'webmobilez' ),
        'view_item'           => __( 'View Project', 'webmobilez' ),
        'add_new_item'        => __( 'Add New Project', 'webmobilez' ),
        'add_new'             => __( 'Add New', 'webmobilez' ),
        'edit_item'           => __( 'Edit Project', 'webmobilez' ),
        'update_item'         => __( 'Update Project', 'webmobilez' ),
        'search_items'        => __( 'Search Project', 'webmobilez' ),
        'not_found'           => __( 'Not Found', 'webmobilez' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'webmobilez' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Projects', 'webmobilez' ),
        'description'         => __( 'Project news and reviews', 'webmobilez' ),
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
         
       
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Projects', $args );
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testmonials', 'Post Type General Name', 'webmobilez' ),
        'singular_name'       => _x( 'Testmonial', 'Post Type Singular Name', 'webmobilez' ),
        'menu_name'           => __( 'Testmonials', 'webmobilez' ),
        'parent_item_colon'   => __( 'Parent Testmonial', 'webmobilez' ),
        'all_items'           => __( 'All Testmonials', 'webmobilez' ),
        'view_item'           => __( 'View Testmonial', 'webmobilez' ),
        'add_new_item'        => __( 'Add New Testmonial', 'webmobilez' ),
        'add_new'             => __( 'Add New', 'webmobilez' ),
        'edit_item'           => __( 'Edit Testmonial', 'webmobilez' ),
        'update_item'         => __( 'Update Testmonial', 'webmobilez' ),
        'search_items'        => __( 'Search Testmonial', 'webmobilez' ),
        'not_found'           => __( 'Not Found', 'webmobilez' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'webmobilez' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Testmonials', 'webmobilez' ),
        'description'         => __( 'Testmonial news and reviews', 'webmobilez' ),
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
         
       
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testmonials', $args );
    
$labels = array(
		'name'                  => _x( 'Subscribes', 'Subscribe General Name', 'webmobilez' ),
		'singular_name'         => _x( 'Subscribe', 'Subscribe Singular Name', 'webmobilez' ),
		'menu_name'             => __( 'Subscribes', 'webmobilez' ),
		'name_admin_bar'        => __( 'Subscribe', 'webmobilez' ),
		'archives'              => __( 'Item Archives', 'webmobilez' ),
		'attributes'            => __( 'Item Attributes', 'webmobilez' ),
		'parent_item_colon'     => __( 'Parent Item:', 'webmobilez' ),
		'all_items'             => __( 'All Items', 'webmobilez' ),
		'add_new_item'          => __( 'Add New Item', 'webmobilez' ),
		'add_new'               => __( 'Add New', 'webmobilez' ),
		'new_item'              => __( 'New Item', 'webmobilez' ),
		'edit_item'             => __( 'Edit Item', 'webmobilez' ),
		'update_item'           => __( 'Update Item', 'webmobilez' ),
		'view_item'             => __( 'View Item', 'webmobilez' ),
		'view_items'            => __( 'View Items', 'webmobilez' ),
		'search_items'          => __( 'Search Item', 'webmobilez' ),
		'not_found'             => __( 'Not found', 'webmobilez' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'webmobilez' ),
		'featured_image'        => __( 'Featured Image', 'webmobilez' ),
		'set_featured_image'    => __( 'Set featured image', 'webmobilez' ),
		'remove_featured_image' => __( 'Remove featured image', 'webmobilez' ),
		'use_featured_image'    => __( 'Use as featured image', 'webmobilez' ),
		'insert_into_item'      => __( 'Insert into item', 'webmobilez' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'webmobilez' ),
		'items_list'            => __( 'Items list', 'webmobilez' ),
		'items_list_navigation' => __( 'Items list navigation', 'webmobilez' ),
		'filter_items_list'     => __( 'Filter items list', 'webmobilez' ),
	);
	$args = array(
		'label'                 => __( 'Subscribe', 'webmobilez' ),
		'description'           => __( 'Subscribe Description', 'webmobilez' ),
		'labels'                => $labels,
	
		'taxonomies'            => array( 'category', 'post_tag' ),
		'show_in_rest' => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
	'hierarchical'          => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Subscribe', $args );
	$labels = array(
		'name'                  => _x( 'Jobs', 'Job General Name', 'webmobilez' ),
		'singular_name'         => _x( 'Job', 'Job Singular Name', 'webmobilez' ),
		'menu_name'             => __( 'Jobs', 'webmobilez' ),
		'name_admin_bar'        => __( 'Job', 'webmobilez' ),
		'archives'              => __( 'Item Archives', 'webmobilez' ),
		'attributes'            => __( 'Item Attributes', 'webmobilez' ),
		'parent_item_colon'     => __( 'Parent Item:', 'webmobilez' ),
		'all_items'             => __( 'All Items', 'webmobilez' ),
		'add_new_item'          => __( 'Add New Item', 'webmobilez' ),
		'add_new'               => __( 'Add New', 'webmobilez' ),
		'new_item'              => __( 'New Item', 'webmobilez' ),
		'edit_item'             => __( 'Edit Item', 'webmobilez' ),
		'update_item'           => __( 'Update Item', 'webmobilez' ),
		'view_item'             => __( 'View Item', 'webmobilez' ),
		'view_items'            => __( 'View Items', 'webmobilez' ),
		'search_items'          => __( 'Search Item', 'webmobilez' ),
		'not_found'             => __( 'Not found', 'webmobilez' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'webmobilez' ),
		'featured_image'        => __( 'Featured Image', 'webmobilez' ),
		'set_featured_image'    => __( 'Set featured image', 'webmobilez' ),
		'remove_featured_image' => __( 'Remove featured image', 'webmobilez' ),
		'use_featured_image'    => __( 'Use as featured image', 'webmobilez' ),
		'insert_into_item'      => __( 'Insert into item', 'webmobilez' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'webmobilez' ),
		'items_list'            => __( 'Items list', 'webmobilez' ),
		'items_list_navigation' => __( 'Items list navigation', 'webmobilez' ),
		'filter_items_list'     => __( 'Filter items list', 'webmobilez' ),
	);
	$args = array(
		'label'                 => __( 'Job', 'webmobilez' ),
		'description'           => __( 'Job Description', 'webmobilez' ),
		'labels'                => $labels,
	
		'taxonomies'            => array( 'category', 'post_tag' ),
		'show_in_rest' => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
	'hierarchical'          => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Job', $args );
 
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
set_post_thumbnail_size( 50, 50 );
function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );
function cf7_add_post_id(){
    
    global $post;
    return $post->post_title ;
}

add_shortcode('CF7_ADD_POST_ID', 'cf7_add_post_id');
function wpb_widgets_init() {

register_sidebar( array(
    'name' => __( 'Footer1', 'wpb' ),
    'id' => 'sidebar-1',
     'description' => __( 'Appears on the static front page template', 'wpb' ),
    'before_widget' => '<div class="f_widget about-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="f-title f_600 b_color f_size_18 mb_40">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' =>__( 'Footer2', 'wpb'),
    'id' => 'sidebar-2',
    'description' => __( 'Appears on the static front page template', 'wpb' ),
    'before_widget' => '<div class="f_widget company_widget">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
) );
register_sidebar( array(
    'name' =>__( 'Footer3', 'wpb'),
    'id' => 'sidebar-3',
    'description' => __( 'Appears on the static front page template', 'wpb' ),
    'before_widget' => '<div class="f_widget about-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="f-title f_600 b_color f_size_18 mb_40">',
    'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
