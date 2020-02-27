<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Set our theme version.
define( 'SMTWENTYNINETEEN_VERSION', '1.0.0' );
// Text Domain for Localization
//define('MY_TEXTDOMAIN', 'my_domain');
load_theme_textdomain( 'smtwentytwenty', get_template_directory() . '/lang' );
require( get_template_directory() . '/includes/sm-require.php' );
require( get_template_directory() . '/includes/customizer.php' );
require( get_template_directory() . '/includes/sidebars.php' );
require( get_template_directory() . '/includes/woocommerce.php' );

//Add menu support and register main menu
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'main_menu' => 'Main Menu'
  		)
  	);
}

/*-------------------------------------------------------------------------------------------------
Register Newest Jquery and Javscript Files
---------------------------------------------------------------------------------------------------*/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {

	$template_url = get_template_directory_uri();
	// jQuery.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'minicss', $template_url . '/plugins/minicss.css' );
	wp_enqueue_script( 'minijs', $template_url . '/plugins/minijs.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'theme-script', $template_url . '/js/main.js', array( 'jquery' ), null, true );

	//Main Style
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
?>
