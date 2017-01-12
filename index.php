<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$query = new WP_Query( 'post_type' => 'projects' );
			if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
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
