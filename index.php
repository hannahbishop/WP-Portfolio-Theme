<?php
/**
 * The main template file
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<div class="grid">
				<div class="grid-sizer"></div>
				<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>
				<?php $loop = new WP_Query(
					array( 'post_type' => 'projects', 'posts_per_page' => 10,  'paged' => $paged ) );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="grid-item">
						<?php get_template_part( 'content-project', get_post_format() );?>
					</div>
				<?php endwhile; wp_reset_query(); ?>

				<?php if ($loop->max_num_pages > 1) { ?>
				  <nav class="prev-next-posts">
				    <div class="prev-posts-link">
				      <?php echo get_next_posts_link( 'Older Entries', $loop->max_num_pages ); ?>
				    </div>
				    <div class="next-posts-link">
				      <?php echo get_previous_posts_link( 'Newer Entries' ); ?>
				    </div>
				  </nav>
				<?php } ?>
			</div>

		</main>

<?php get_footer(); ?>
