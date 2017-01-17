<div class="project-single">
  <div class="project-imgs">
    <?php the_content();?>
  </div>
  <article class="project-details">
    <header class="project-details-header">
      <h3><?php the_title();?></h3>
      <?php $colour = get_post_meta(get_the_ID(), 'colour', true)?>
      <?php
        $file_array = get_post_meta($post->ID, 'file');
        foreach($file_array as $file) {
          echo '<a class="file-link" href="' . $file . '" style="color: ' . $colour . '">Download Working File</a>';
        } ?>
    </header>
    <section class="project-details-sctn">
      <h4>Problem</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'problem', true); ?> </p>
    </section>
    <section class="project-details-sctn">
      <h4>Approach</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'approach', true); ?> </p>
    </section>
    <section class="project-details-sctn">
      <h4>Details</h4>
      <p><?php echo get_post_meta(get_the_ID(), 'details', true); ?> </p>
    </section>
  </article>
</div>
