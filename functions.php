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
