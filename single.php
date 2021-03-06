<?php /** * The template for displaying all single posts and attachments * * @package WordPress * @subpackage Twenty_Fifteen * @since Twenty Fifteen 1.0 */
get_header(); ?>


    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
      <?php endwhile; ?>

    </main><!-- .site-main -->



<!-- .content-area -->

<?php get_footer(); ?>
