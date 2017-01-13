<?php
/**
 * The main template file
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<?php $loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php get_template_part( 'content-project', get_post_format() );?>
			<?php endwhile; wp_reset_query(); ?>

		</main><!-- .site-main -->

<?php get_footer(); ?>
