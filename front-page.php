<?php
/**
 * Template file for the temporary landing page
 */

get_header(); ?>

		<main class="site-main">
      <div class="landing-page">
        <h1>Hannah Bishop</h1>
        <ul class="intro-txt">
          <li><p>Front end designer and developer.</p></li>
          <li><p>Computer science student at UVic.</p></li>
          <li><p>Cat owner.</p></li>
        </ul>
        <a class="cta" href="#">Email me</a>
        <a class="cta-secondary" href="#">or view my resume</a>
        <div class="contact">
          <ul>
            <li><a href="https://github.com/hannahbishop">
							<?php get_template_part( 'assets/svg/icon', 'github.svg' );?>
						</a></li>
            <li><a href="https://www.instagram.com/littlehannahbee/">
							<?php get_template_part( 'assets/svg/icon', 'instagram.svg' );?>
						</a></li>
          </ul>
        </div>
      </div>
		</main>

<?php //get_footer(); ?>
