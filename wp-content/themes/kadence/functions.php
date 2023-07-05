<?php
/**
 * Kadence functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kadence
 */

define( 'KADENCE_VERSION', '1.1.40' );
define( 'KADENCE_MINIMUM_WP_VERSION', '5.4' );
define( 'KADENCE_MINIMUM_PHP_VERSION', '7.2' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KADENCE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KADENCE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Kadence\kadence' );








/* Custom Post Type Start */
function create_posttype()
{
	register_post_type(
		'News',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('news'),
				'singular_name' => __('News')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'news'),
		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
/* Custom Post Type End */	


/*Custom Post type start*/
function cw_post_type_news()
{
	$supports = array(
		'title',
		// post title
		'editor',
		// post content
		'author',
		// post author
		
	);
	$labels = array(
		'name' => _x('news', 'plural'),
		'singular_name' => _x('news', 'singular'),
		'menu_name' => _x('news', 'admin menu'),
		'name_admin_bar' => _x('news', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New news'),
		'new_item' => __('New news'),
		'edit_item' => __('Edit news'),
		'view_item' => __('View news'),
		'all_items' => __('All news'),
		'search_items' => __('Search news'),
		'not_found' => __('No news found.'),
	);
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'news'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	register_post_type('news', $args);
}
add_action('init', 'cw_post_type_news');
/*Custom Post type end*/
