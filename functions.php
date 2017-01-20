<?php
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary'       => 'Header Menu',
		'secondary'        => 'Footer Menu',
	) );
	remove_filter( 'the_content', 'wpautop' );

	//http://www.ericmmartin.com/5-tips-for-using-jquery-with-wordpress/
	function script_init() {
		if (!is_admin()) {
			// comment out the next two lines to load the local copy of jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'script_init');

	//enqueue typescript fonts
	//https://gist.github.com/robneu/6400399
	add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_scripts' );
	function portfolio_enqueue_scripts() {
		wp_enqueue_script( 'typekit', '//use.typekit.net/drz0ojb.js', array(), '1.0.0', );
	}
	add_action( 'wp_head', 'portfolio_typekit_inline' );
	function portfolio_typekit_inline() {
		if ( wp_script_is( 'typekit', 'enqueued' ) ) {
			echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
		}
	}
?>
