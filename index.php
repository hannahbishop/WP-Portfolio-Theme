<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			The stuff you want to loop goes in here
			<?php endwhile; wp_reset_query(); ?>
			/*while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;

			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
			*/
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
