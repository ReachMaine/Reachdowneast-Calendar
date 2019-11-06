<?php

  require_once(get_stylesheet_directory().'/custom/branding.php');
  require_once(get_stylesheet_directory().'/custom/language.php');
  require_once(get_stylesheet_directory().'/custom/reach_CTAs.php');
  require_once(get_stylesheet_directory().'/custom/oshine.php');
  require_once(get_stylesheet_directory().'/custom/tribe_events.php');

  //enqueue the init script for broadstreet ads
	//wp_enqueue_script( 'broadstreet', '//cdn.broadstreetads.com/init.js');  x'd out zig 5Nov19

  // trying to optimize the admin save of a post by removing the custom fields metabox.
  // Oct 2018
  function remove_cfs() {
   global $post_type;

   if ( is_admin() && post_type_supports( $post_type, 'custom-fields' ) ) {
  	remove_meta_box( 'postcustom', 'tribe_events', 'normal' );
  	}
   }

  add_action( 'add_meta_boxes', 'remove_cfs' );

?>
