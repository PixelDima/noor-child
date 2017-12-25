<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 **/
function theme_enqueue_styles() {
	wp_enqueue_style( 'noor-parent-stylesheet', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'noor-parent-stylesheet' ) );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function noor_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'noor', $lang );
}

add_action( 'after_setup_theme', 'noor_lang_setup' );