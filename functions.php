<?php
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
	'primary'       => 'Header Menu',
	'secondary'        => 'Footer Menu',
) );
add_post_type_support( 'project', 'post-formats' );
?>
