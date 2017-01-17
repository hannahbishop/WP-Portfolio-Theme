<?php
/**
 * The main template file
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<div class="grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="grid-item">
						<?php get_template_part( 'content-project', get_post_format() );?>
					</div>
				<?php endwhile; ?>
			</div>

		</main>

<?php get_footer(); ?>
