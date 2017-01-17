<?php /** * The template for displaying all single posts and attachments * * @package WordPress * @subpackage Twenty_Fifteen * @since Twenty Fifteen 1.0 */
get_header(); ?>


    <main id="main" class="site-main" role="main">

        <?php $loop = new WP_Query(
					array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php the_title();?>
          <?php the_content();?>
          <?php echo get_post_meta( get_the_ID(), 'test', true );?>
				<?php endwhile; wp_reset_query(); ?>

    </main><!-- .site-main -->



<!-- .content-area -->

<?php get_footer(); ?>
