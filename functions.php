<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Assign the "Conj Child" info to constants.
$conj_child_theme = wp_get_theme( 'conj' );
define( 'CONJ_CHILD_THEME_VERSION', $conj_child_theme->get( 'Version' ) );

// BEGIN ENQUEUE PARENT ACTION
// Do not modify or remove comment markers above or below:
if ( ! function_exists( 'conj_child_parent_css' ) ) :
    function conj_child_parent_css() {

    	$suffix 			= 	( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) 				? 	'' 					: 	'.min';
    	$version 			= 	( defined( 'CONJ_THEME_VERSION' ) && CONJ_THEME_VERSION )   ?   CONJ_THEME_VERSION  :   CONJ_CHILD_THEME_VERSION;
    	$stylesheet_deps 	=  	apply_filters( 'conj_vendor_stylesheet_deps', array( 'feather', 'socicon', 'cookieBubble', 'css-devices', 'js-offcanvas', 'slinky', 'iziToast', 'flickity' ) );

        wp_enqueue_style( 'conj-styles', trailingslashit( get_template_directory_uri() ) . 'style' . $suffix . '.css', $stylesheet_deps, $version );

    }
endif;

add_action( 'wp_enqueue_scripts', 'conj_child_parent_css', 10 );

// Add support for "CONJ PowerPack" plugin.
add_filter( 'conj_powerpack_plugin_supported', '__return_true', -1 );

// END ENQUEUE PARENT ACTION