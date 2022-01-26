<?php
/**
 * Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/*
 * Add required Includes files.
 */
$includes_files = array(
    'template-tags.php',
	'customizer.php',
    'base-theme-functions.php',
);

foreach($includes_files as $filename){
    require_once 'includes/' . $filename ;
}

/*
 * Add required Class files.
 */
$class_files = array(
	'class-base-theme-acf-eneque.php',	
	'class-base-theme-custom-post-type-module.php',
	'class-base-theme-acf-theme-option.php',
	'class-base-theme-acf-dynamic-gutenberg.php',
);
foreach($class_files as $class_file){
    require_once 'classes/' . $class_file ;
}