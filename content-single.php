<div class="project-single">
  <div class="project-imgs">
    <?php
        $query_images_args = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'image,video',// video files include
            'post_status'    => 'inherit',
            'orderby'        => 'post_date',
            'posts_per_page' =>  30,
        );
        $query_images = new WP_Query( $query_images_args );
        if($query_images->have_posts()) :
            while($query_images->have_posts()) : $query_images->the_post(); ?>
            <?php echo $images = wp_get_attachment_image( $query_images->posts->ID ); ?>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
  </div>
  <article class="project-details">
    <?php
        $query_file_attach = array(
            'post_type'      => 'attachment',
            'post_mime_type' => array('application/psd','application/ai', 'application/eps'),
            'post_status'    => 'inherit',
            'orderby'        => 'post_date',
            'posts_per_page' =>  30,
        );
        $query_files = new WP_Query( $query_file_attach );
        if($query_files->have_posts()) :
            while($query_files->have_posts()) : $query_files->the_post(); ?>
            <?php the_attachment_link($query_files->posts->ID, false); ?>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); wp_reset_querydata(); ?>
    <h3><?php the_title();?></h3>
    <section>
      <h4>Problem</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'problem', true); ?> </p>
    </section>
    <section>
      <h4>Approach</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'approach', true); ?> </p>
    </section>
    <section>
      <h4>Details</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'details', true); ?> </p>
    </section>
  </article>
</div>
