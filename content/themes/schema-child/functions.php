<?php
/**
 * Functions and definitions for the Twenty Twelve child theme Polished.
 * User: Tips and Tricks HQ
 */
function child_enqueue_styles() {
	//Variable for assets url
	$cfct_assets_url = get_stylesheet_directory_uri() . '/assets/';
	wp_enqueue_style( 'main', $cfct_assets_url . 'css/main.css');
	wp_enqueue_script( 'main', $cfct_assets_url . 'js/main.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');
