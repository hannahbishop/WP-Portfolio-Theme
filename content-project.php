<div class="project">
	  <?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
		?>
    <a class="img-link" href="<?php the_permalink();?>" title="<?php the_title();?>">
				<img class="feature-img" src="<?php echo $thumb_url ?>" alt="<?php the_title();?>">
		</a>
		<div class="project-info">
			<h3><?php the_title();?></h3>
			<?php the_excerpt();?>
		</div>
</div>
