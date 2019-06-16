<?php

/**
 * 
 * Composer autoload
 */
require_once( 'vendor/autoload.php' );

/**
 * 
 * Enqueue scripts and styles
 */
require_once( 'includes/assets.php' );

/**
 * 
 * Register theme menus
 */
require_once( 'includes/menus.php' );

/**
 * 
 * ACF Options Page
 */
require_once( 'includes/acf-options.php' );

/**
 * 
 * Add theme support for post thumbnails
 */
add_theme_support( 'post-thumbnails' );
