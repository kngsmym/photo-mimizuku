<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

if ( ! has_nav_menu( 'global-nav' ) ) {
	return;
}
?>
<nav class="_p-global-nav" role="navigation">
	<?php
	wp_nav_menu( [
		'theme_location' => 'global-nav',
		'container'      => false,
		'menu_class'     => '_c-menu _c-menu--bar _c-menu--auto',
		'depth'          => 0,
	] );
	?>
</nav>
