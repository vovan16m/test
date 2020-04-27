<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since   1.0.0
 * @package aa
 */
  
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! function_exists( 'aa_enqueue_styles' ) ) {
    // Add enqueue function to the desired action.
    add_action( 'wp_enqueue_scripts', 'aa_enqueue_styles' );
     
    /**
     * Enqueue Styles.
     *
     * Enqueue parent style and child styles where parent are the dependency
     * for child styles so that parent styles always get enqueued first.
     *
     * @since 1.0.0
     */
    function aa_enqueue_styles() {
        // Parent style variable.
        $parent_style = 'parent-style';
         
        // Enqueue Parent theme's stylesheet.
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
         
        // Enqueue Child theme's stylesheet.
        // Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    }
}

function create_post_type() {
	$labels = array(
	  'name'               => 'Portfolio',  
			'singular_name'      => 'Portfolio', 
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Portfolio',
			'edit_item'          => 'Edit Portfolio',
			'new_item'           => 'New Portfolio',
			'view_item'          => 'View Portfolio',
			'search_items'       => 'Search Portfolio',
			'not_found'          => 'No Portfolio found',
			'not_found_in_trash' => 'No Portfolio found in Trash.',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio'
	  );
	$args = array(
	  'labels' => $labels,
	  'has_archive' => true,
	  'public' => true,
	  'show_in_rest' => true,
	  'menu_icon' => 'dashicons-portfolio',
	  'hierarchical' => false,
	  'menu_position' => 5,
	  'supports' => array(
		'title',
		'editor', 
		'custom-fields', 
		'thumbnail',
		'excerpt'
		),
		'taxonomies' => array( 'portfolio-category' ),
	  );
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'create_post_type' );
  
 
 
/**
 * Custom image size
 */
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() { 
    add_image_size( 'portfolio-thumb', 223, 177, true ); // (cropped)
}

/**
 * Enqueue scripts.
 */
function scripts() {
	wp_enqueue_style( 'owl-css-style', get_theme_file_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'lightbox-css-style', get_theme_file_uri() . '/css/lightbox.min.css' );

	wp_enqueue_script( 'lightbox-js', get_theme_file_uri() . '/js/lightbox.min.js', array(), '1', true );
	wp_enqueue_script( 'owl-carousel', get_theme_file_uri() . '/js/owl.carousel.min.js', array(), '1', true );
	wp_enqueue_script( 'dev-js', get_theme_file_uri() . '/js/dev.js', array(), '2', true );
 
}
add_action( 'wp_enqueue_scripts', 'scripts' );

// Include ACF blocks
require_once('blocks/acf_blocks_enable.php');


function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	echo implode(' ', $words).' ...';
}

/**
 * Add theme option page
 */
if( function_exists('acf_add_options_page') ) { 

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}