<?php
function portfolio_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', 'project' );
}
add_action('after_setup_theme','portfolio_setup');
register_nav_menus( array(
	'primary'       => 'Header Menu',
	'secondary'        => 'Footer Menu',
) );
?>
