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


//arrow WP REST API for logged in user
/*add_filter( 'rest_authentication_errors', function( $result ) {
 if ( ! empty( $result ) ) {
 return $result;
 }
 if ( ! is_user_logged_in() ) {
 return new WP_Error( 'restx_logged_out', 'Sorry, you must be logged in to make a request.', array( 'status' => 401 ) );
 }
 return $result;
});
*/