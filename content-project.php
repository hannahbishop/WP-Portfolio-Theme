<div class="project">
	  <?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
		?>
    <a class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo $thumb_url ?>')"></a>
		<h3><?php the_title();?></h3>
		<?php the_excerpt();?>
		<a href="<?php the_permalink(); ?>">Process Details</a>
</div>
