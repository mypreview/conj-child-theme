<?php
/**
 * CONJ automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.min.css file.
 *
 * Uncomment the line below if you'd like to disable the CONJ Core CSS.
 *
 * If you don't plan to dequeue the CONJ Core CSS you can remove the subsequent line and as well
 * as the conj_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'conj_child_theme_dequeue_style', 999 );

/**
 * Dequeue the CONJ Parent theme core CSS
 */
function conj_child_theme_dequeue_style() {
    wp_dequeue_style( 'conj-styles' );
    wp_dequeue_style( 'conj-bbpress-styles' );
    wp_dequeue_style( 'conj-woocommerce-styles' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
