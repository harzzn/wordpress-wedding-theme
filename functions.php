<?php

// The Composer autoload includes
require_once get_template_directory() . '/vendor/autoload.php';

// Support for featured images
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'wpwt_register_menus' );

add_action( 'wp_enqueue_scripts', 'wpwt_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wpwt_enqueue_scripts' );

add_action( 'init', 'wpwt_register_venue_post_type' );
add_action( 'init', 'wpwt_register_member_post_type' );

// Register the required plugins for this theme
add_action( 'tgmpa_register', 'wpwt_register_required_plugins' );

/**
 * Register the required plugins for this theme
 */
function wpwt_register_required_plugins() {

	$plugins = array(
		array(
			'name'             => 'Password Protected',
			'slug'             => 'password-protected',
		),
		array(
			'name'             => 'Dynamic Featured Image',
			'slug'             => 'dynamic-featured-image',
		)
	);

	tgmpa( $plugins );
}

function wpwt_register_menus() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'wordpress-wedding-theme' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'wordpress-wedding-theme' ) );
}

function wpwt_enqueue_styles() {
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.theme.default.css', array( 'owl.carousel' ) );
}

function wpwt_enqueue_scripts() {
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/node_modules/owl.carousel/dist/owl.carousel.js', array( 'jquery' ) );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array( 'owl.carousel' ) );
}

/**
 * Custom post types
 */

function wpwt_register_venue_post_type() {

	$labels = array(
		'name'                  => _x( 'Venues', 'Post Type General Name', 'wordpress-wedding-theme' ),
		'singular_name'         => _x( 'Venue', 'Post Type Singular Name', 'wordpress-wedding-theme' ),
		'menu_name'             => __( 'Venues', 'wordpress-wedding-theme' ),
		'name_admin_bar'        => __( 'Venue', 'wordpress-wedding-theme' ),
		'archives'              => __( 'Item Archives', 'wordpress-wedding-theme' ),
		'attributes'            => __( 'Item Attributes', 'wordpress-wedding-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wordpress-wedding-theme' ),
		'all_items'             => __( 'All Items', 'wordpress-wedding-theme' ),
		'add_new_item'          => __( 'Add New Item', 'wordpress-wedding-theme' ),
		'add_new'               => __( 'Add New', 'wordpress-wedding-theme' ),
		'new_item'              => __( 'New Item', 'wordpress-wedding-theme' ),
		'edit_item'             => __( 'Edit Item', 'wordpress-wedding-theme' ),
		'update_item'           => __( 'Update Item', 'wordpress-wedding-theme' ),
		'view_item'             => __( 'View Item', 'wordpress-wedding-theme' ),
		'view_items'            => __( 'View Items', 'wordpress-wedding-theme' ),
		'search_items'          => __( 'Search Item', 'wordpress-wedding-theme' ),
		'not_found'             => __( 'Not found', 'wordpress-wedding-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress-wedding-theme' ),
		'featured_image'        => __( 'Featured Image', 'wordpress-wedding-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'wordpress-wedding-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'wordpress-wedding-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'wordpress-wedding-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'wordpress-wedding-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wordpress-wedding-theme' ),
		'items_list'            => __( 'Items list', 'wordpress-wedding-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'wordpress-wedding-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'wordpress-wedding-theme' ),
	);
	$args = array(
		'label'                 => __( 'Venue', 'wordpress-wedding-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'wpwt_venue', $args );

}

function wpwt_register_member_post_type() {

	$labels = array(
		'name'                  => _x( 'Wedding Party Members', 'Post Type General Name', 'wordpress-wedding-theme' ),
		'singular_name'         => _x( 'Wedding Party Member', 'Post Type Singular Name', 'wordpress-wedding-theme' ),
		'menu_name'             => __( 'Wedding Party Members', 'wordpress-wedding-theme' ),
		'name_admin_bar'        => __( 'Wedding Party Member', 'wordpress-wedding-theme' ),
		'archives'              => __( 'Item Archives', 'wordpress-wedding-theme' ),
		'attributes'            => __( 'Item Attributes', 'wordpress-wedding-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wordpress-wedding-theme' ),
		'all_items'             => __( 'All Items', 'wordpress-wedding-theme' ),
		'add_new_item'          => __( 'Add New Item', 'wordpress-wedding-theme' ),
		'add_new'               => __( 'Add New', 'wordpress-wedding-theme' ),
		'new_item'              => __( 'New Item', 'wordpress-wedding-theme' ),
		'edit_item'             => __( 'Edit Item', 'wordpress-wedding-theme' ),
		'update_item'           => __( 'Update Item', 'wordpress-wedding-theme' ),
		'view_item'             => __( 'View Item', 'wordpress-wedding-theme' ),
		'view_items'            => __( 'View Items', 'wordpress-wedding-theme' ),
		'search_items'          => __( 'Search Item', 'wordpress-wedding-theme' ),
		'not_found'             => __( 'Not found', 'wordpress-wedding-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress-wedding-theme' ),
		'featured_image'        => __( 'Featured Image', 'wordpress-wedding-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'wordpress-wedding-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'wordpress-wedding-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'wordpress-wedding-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'wordpress-wedding-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wordpress-wedding-theme' ),
		'items_list'            => __( 'Items list', 'wordpress-wedding-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'wordpress-wedding-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'wordpress-wedding-theme' ),
	);
	$args = array(
		'label'                 => __( 'Wedding Party Member', 'wordpress-wedding-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'wpwt_member', $args );

}

/**
 * Shortcodes
 */

//[wpwt_rsvp_form]
add_shortcode( 'wpwt_rsvp_form', 'wpwt_rsvp_form_shortcode' );


//[wpwt_rsvp_form]
function wpwt_rsvp_form_shortcode() {
	require_once get_template_directory() . '/template-parts/shortcode-rsvp.php';
	return $shortcode;
}