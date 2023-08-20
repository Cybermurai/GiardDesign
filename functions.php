<?php
/**
 * @package GiardDesign
 */
function giarddesign_theme() {
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/main.css');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/mainjs.js');
}
add_action( 'wp_enqueue_scripts', 'giarddesign_theme' );


if ( ! function_exists( 'gd_register_nav_menu' ) ) {

	function gd_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'GiardDesign' ),
        'footer_menu' => __( 'Footer Menu', 'GiardDesign' )
		));
	}
	add_action( 'after_setup_theme', 'gd_register_nav_menu', 0 );
}


