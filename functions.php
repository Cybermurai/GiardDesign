<?php
/**
 *
 * @package GiardDesign
 */

function giarddesign_theme() {
  // wp_enqueue_style('main_style', get_stylesheet_uri());
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/main.css');
}

add_action( 'wp_enqueue_scripts', 'giarddesign_theme' );