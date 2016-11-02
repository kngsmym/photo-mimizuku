<?php
add_filter( 'mimizuku_layout', function( $layout ) {
    return 'one-column-fluid';
    return $layout;
} );

function my_typekit() {
	get_template_part('template-parts/typekit');
}
$myHOST = $_SERVER["HTTP_HOST"];
if($myHOST === '127.0.0.1:8080' || $myHOST === 'localhost:3000'){
}else{
	add_action( 'wp_footer', 'my_typekit' );
}

/**
 * Enqueue scripts and styles.
 */
function child_scripts() {
	wp_enqueue_script( 'child-app-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(), '20161102', true );
}
add_action( 'wp_enqueue_scripts', 'child_scripts' );
