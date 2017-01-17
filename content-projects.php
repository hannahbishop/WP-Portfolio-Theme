<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<div class="project">
	<div class="project-thumbnail" style="background-image:url(<?php echo $thumb_url ?>)"></div><!---using background image here instead of img to allow for better positioning--->
	<a class="project-info" href="<?php the_permalink();?>" title="<?php the_title();?>">
		<h3><?php the_title();?></h3>
		<?php the_excerpt();?>
	</a>
</div>
