<?php

function theme_assets() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/main.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );
