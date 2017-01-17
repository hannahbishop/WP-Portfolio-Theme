<div class="project-single">
  <div class="project-imgs">
    <?php
    $args = array(
      'post_type' => 'attachment',
      'numberposts' => null,
      'post_status' => null,
      'post_parent' => $post->ID
    );
    $attachments = get_posts($args);
    if ($attachments) {
      foreach ($attachments as $attachment) {
      the_attachment_link($attachment->ID, false);
      echo get_attached_file($attachment->ID);
    }
  }?>

  </div>
  <article class="project-details">
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
