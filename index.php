<?php
/**
 * The main template file
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="grid">
				<div class="grid-sizer"></div>
				<?php $loop = new WP_Query(
					array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php the_title();?>
					<?php get_template_part( 'content-projects', get_post_format() );?>
				<?php endwhile; wp_reset_query(); ?>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
