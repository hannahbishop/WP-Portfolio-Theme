<?php /** * The template for displaying all single posts and attachments * * @package WordPress * @subpackage Twenty_Fifteen * @since Twenty Fifteen 1.0 */
get_header(); ?>


    <main id="main" class="site-main" role="main">

        <?php the_title()?>
        <?php the_content()?>
        <?php echo get_post_meta( get_the_ID(), 'test', true );?>

    </main><!-- .site-main -->



<!-- .content-area -->

<?php get_footer(); ?>
