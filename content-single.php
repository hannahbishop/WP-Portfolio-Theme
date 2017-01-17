<div class="project-single">
  <div class="project-imgs">
    <?php the_content();?>
  </div>
  <article class="project-details">
    <h3><?php the_title();?></h3>
    <section>
      <h4>Problem</h4>
      <p><?php get_post_meta(get_the_ID(), 'problem'); ?> </p>
    </section>
    <section>
      <h4>Approach</h4>
      <p><?php get_post_meta(get_the_ID(), 'approach'); ?> </p>
    </section>
    <section>
      <h4>Details</h4>
      <p><?php get_post_meta(get_the_ID(), 'details'); ?> </p>
    </section>
  </article>
</div>
