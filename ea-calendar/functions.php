<?php
/* mods
*  6nov15 zig - add filter for tribe_get_cost.
*/
	$cwk_thumbimg = array(200, 999); // size of featured image in archive/category blog
	$cwk_postimg = array(200, 999); // size of featured image on single post.
	add_image_size( 'cwk-slider', 1420, 447, true ); // Slider

	add_action('after_setup_theme', ea_setup);

	if ( function_exists('register_sidebar') ){
		// Banner Ad
		 register_sidebar(array(
			'name' => 'Top Banner ',
			'id' => 'topbanner',
			'description' => 'Widget for the banner ad.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3><div class="tx-div small"></div>',
		));
	} //function_exists('register_sidebar')
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	*
	*/
	function ea_setup() {
		/* add favicons for admin */
		add_action('login_head', 'add_favicon');
		add_action('admin_head', 'add_favicon');
	 /* do stuff ehre. */
	}

	function add_favicon() {
	  	$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	}

	//enqueue the init script for broadstreet.
	// zig 1Feb18
	wp_enqueue_script( 'broadstreet', '//cdn.broadstreetads.com/init.js');

require_once(get_stylesheet_directory().'/custom/tribe_events.php');
require_once(get_stylesheet_directory().'/custom/language.php');

?>
