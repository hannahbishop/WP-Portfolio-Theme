<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->