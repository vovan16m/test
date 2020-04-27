<?php

/**
 * ACF Gutenberg Block "Slider"
 */
if (!function_exists('register_acf_block_slider')) {

	function register_acf_block_slider()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_slider',
				'title' => __('Slider'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'slides',
				'keywords' => array('slides'),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_slider')) {
	add_action('acf/init', 'register_acf_block_slider');
}

/**
 * ACF Gutenberg Block "About"
 */
if (!function_exists('register_acf_block_about')) {

	function register_acf_block_about()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_about',
				'title' => __('About'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'welcome-write-blog',
				'keywords' => array('about', 'inems'),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_about')) {
	add_action('acf/init', 'register_acf_block_about');
}

/**
 * ACF Gutenberg Block "Search"
 */
if (!function_exists('register_acf_block_search')) {

	function register_acf_block_search()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_search',
				'title' => __('Search'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'search',
				'keywords' => array('search'),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_search')) {
	add_action('acf/init', 'register_acf_block_search');
}

/**
 * ACF Gutenberg Block "Portfolio"
 */
if (!function_exists('register_acf_block_portfolio')) {

	function register_acf_block_portfolio()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_portfolio',
				'title' => __('Portfolio'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'portfolio',
				'keywords' => array('Portfolio', 'items'),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_portfolio')) {
	add_action('acf/init', 'register_acf_block_portfolio');
}

/**
 * ACF Gutenberg Block "What is Lorem Ipsum?"
 */
if (!function_exists('register_acf_block_lorem_ipsum')) {

	function register_acf_block_lorem_ipsum()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_lorem_ipsum',
				'title' => __('What is Lorem Ipsum?'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'text',
				'keywords' => array('text' ),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_lorem_ipsum')) {
	add_action('acf/init', 'register_acf_block_lorem_ipsum');
}

/**
 * ACF Gutenberg Block "Latest News"
 */
if (!function_exists('register_acf_block_latest_news')) {

	function register_acf_block_latest_news()
	{

		acf_register_block_type(
			array(
				'name' => 'acf_block_latest_news',
				'title' => __('Latest News'),
				'description' => __(''),
				'render_callback' => 'test_acf_blocks_render_callback',
				'category' => 'common',
				'icon' => 'format-aside',
				'keywords' => array('news', 'posts'),
				'mode' => 'edit',
			)
		);

	}

}

if (function_exists('register_acf_block_latest_news')) {
	add_action('acf/init', 'register_acf_block_latest_news');
}


/**
 * Enable ACF Blocks render function
 */
if (!function_exists('test_acf_blocks_render_callback')) {

	function test_acf_blocks_render_callback($block)
	{

		$slug = str_replace('acf/', '', $block['name']);
		$slug = str_replace('acf-block-', '', $slug);

		if (file_exists(get_theme_file_path("/blocks/acf-block-{$slug}.php"))) {
			include(get_theme_file_path("/blocks/acf-block-{$slug}.php"));
		}

	}

}

/**
 * Get unique block ID
 */
if (!function_exists('test_get_unique_block_id')) {

	function test_get_unique_block_id($text)
	{

		$block_unique_ID = ($text) ? mb_strtolower(preg_replace( '~[^0-9A-Za-z]+~', '_', strip_tags($text))) : time();
		$block_unique_ID = ($block_unique_ID) ? $block_unique_ID : time();

		return $block_unique_ID;

	}

}
