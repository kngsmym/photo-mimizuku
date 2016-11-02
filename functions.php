<?php
add_filter( 'mimizuku_layout', function( $layout ) {
    return 'one-column-fluid';
    return $layout;
} );

/**
 * Enqueue scripts and styles.
 */
function child_scripts() {
	wp_enqueue_script( 'child-app-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(), '20161102', true );
}
add_action( 'wp_enqueue_scripts', 'child_scripts' );
