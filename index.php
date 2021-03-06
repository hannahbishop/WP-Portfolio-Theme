<?php
/**
 * The main template file
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
				<div class="grid-sizer"></div>
				<?php $loop = new WP_Query(
					array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="grid-item">
						<?php get_template_part( 'content-project', get_post_format() );?>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>

		</main>

<?php //get_footer(); ?>
