<?php
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary'       => 'Header Menu',
		'secondary'        => 'Footer Menu',
	) );
	remove_filter( 'the_content', 'wpautop' );

	function script_init() {
		if (!is_admin()) {
			//wp_enqueue_script( 'js_check', get_template_directory_uri() . '/js/js_check.js');
			//wp_deregister_script('jquery');
			//wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
			//wp_enqueue_script( 'jquery' );
			/*
			// comment out the next two lines to load the local copy of jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
			wp_enqueue_script( 'masonry' );
			wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), true);
			wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', false, '1.14.2', true );
			wp_enqueue_script( 'ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.js', false, '1.3.0', true );
			wp_enqueue_script( 'ScrollMagicDebug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.debug.js', false, '1.3.0', true );
			wp_enqueue_script( 'ImagesLoaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', true);
			*/
		}
	}
	//add_action('init', 'script_init');

	//enqueue typescript fonts
	function portfolio_typekit() {
    wp_enqueue_script( 'portfolio_typekit', '//use.typekit.net/drz0ojb.js');
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_typekit' );

	function portfolio_typekit_inline() {
  	if ( wp_script_is( 'portfolio_typekit', 'done' ) ) { ?>
  		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<?php }
		}
		add_action( 'wp_head', 'portfolio_typekit_inline' );
?>
