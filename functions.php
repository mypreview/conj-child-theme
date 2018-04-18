<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// Do not modify or remove comment markers above or below:

if ( !function_exists( 'mypreview_conj_parent_css' ) ) :
    function mypreview_conj_parent_css() {
        wp_enqueue_style( 'mypreview-conj-styles', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'feather' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'mypreview_conj_parent_css', 10 );

// END ENQUEUE PARENT ACTION
