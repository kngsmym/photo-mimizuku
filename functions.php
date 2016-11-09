<?php
add_filter( 'mimizuku_layout', function( $layout ) {
    return 'one-column-fluid';
    return $layout;
} );

/**
 * Enqueue scripts and styles.
 */
function child_scripts() {

	wp_enqueue_script( 'child-jqeasing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'child-pjax', get_stylesheet_directory_uri() . '/assets/js/jquery.pjax.js', array(), '20160817', true );
	wp_enqueue_script( 'child-app-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(), '20161102', true );

}
add_action( 'wp_enqueue_scripts', 'child_scripts' );

//srcset off
add_filter( 'wp_calculate_image_srcset', '__return_false' );

function overlay_grid() {
	get_template_part('template-parts/overlay-grid');
}
add_action( 'wp_footer', 'overlay_grid' );