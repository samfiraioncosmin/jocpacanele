<?php
/**
 * Functions and definitions for the Twenty Twelve child theme Polished.
 * User: Tips and Tricks HQ
 

function eurocraft_enqueue_styles() {

	

	//Variable for assets url
	$cfct_assets_url = get_stylesheet_directory_uri() . '/assets/';
	$parent_style = 'parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main', $cfct_assets_url . 'css/main.css');
	wp_enqueue_script( 'main', $cfct_assets_url . 'js/main.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'eurocraft_enqueue_styles');*/
