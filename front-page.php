<?php
/**
 * Template file for the temporary landing page
 */

get_header(); ?>

		<main class="site-main">
      <div class="landing-page" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/swing.jpg);">
				<div class="hero">
					<?php get_template_part( 'assets/svg/letterhead.svg' );?>
	        <h1>Hannah Bishop</h1>
	        <ul class="intro-txt">
	          <li><p>Front end designer and developer.</p></li>
	          <li><p>Computer science student at UVic.</p></li>
	          <li><p>Cat owner.</p></li>
	        </ul>
					<div class="cta">
	        	<a class="cta-btn" href="mailto:hbishop@uvic.ca" target="_blank">
							<span class="cta-btn-txt" data-hover="Email me">Email me</span>
						</a>
	        	<a class="txt-link" href="http://hannahbishop.com/wp-content/uploads/resume.pdf" target="_blank">view resume</a>
					</div>
				</div>
	      <div class="contact">
	        <ul class="icon-list">
	          <li><a class="link-icon" href="https://github.com/hannahbishop" title="GitHub" target="_blank">
							<?php get_template_part( 'assets/svg/icon', 'github.svg' );?>
						</a></li>
	          <li><a class="link-icon" href="https://www.instagram.com/littlehannahbee/" title="Instagram" target="_blank">
							<?php get_template_part( 'assets/svg/icon', 'instagram.svg' );?>
						</a></li>
	          </ul>
						<a class="txt-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a>
        </div>
      </div>
		</main>

<?php //get_footer(); ?>
