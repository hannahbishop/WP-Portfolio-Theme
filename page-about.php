<?php
/**
 * Template file for the 'about' page
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">
			<img class="bio-img" src="<?php bloginfo('template_directory');?>/assets/img/bio-img.png" alt="Photo of Hannah Bishop" />
			<div class="about">
				<h2 class="title">Hi, I'm Hannah</h2>
				<p class="bio">I'm a front-end developing, UI/UX designing, cat-owning computer science student that never stops learning or creating.</p>
				<ul class="bullet-list">
					<li class="bullet-pt"><p>I create delightful, intuitive experiences by designing with users in mind.</p></li>
					<li class="bullet-pt"><p>I prioritize usability, accessibility, and responsiveness.</p></li>
					<li class="bullet-pt"><p>I love creating animations and graphics to improve user experience.</p></li>
				</ul>
				<a class="resume-dwnld" href=http://hannahbishop.com/wp-content/uploads/2017/02/resume.txt>Resume</a>
				<ul class="skills">
					<li class="skill-rating html">
						<p class="skill-label">HTML</p>
						<div class="scale"></div>
					</li>
					<li class="skill-rating css">
						<p class="skill-label">CSS</p>
						<div class="scale"></div>
					</li>
					<li class="skill-rating js">
						<p class="skill-label">JavaScript</p>
						<div class="scale"></div>
					</li>
					<li class="skill-rating php">
						<p class="skill-label">PHP</p>
						<div class="scale"></div>
					</li>
				</ul>
				<ul>
					<li class="about-detail">
						<img class="icon" />
						<p class="about-detail">Victoria, BC</p>
					</li>
					<li class="about-detail">
						<a href="https://github.com/hannahbishop">
							<img class="icon" />
							<p class="about-detail">hannahbishop</p>
						</a>
					</li>
					<li class="about-detail">
						<a href="mailto:hbishop@uvic.ca">
							<img class="icon" />
							<p class="about-detail">hbishop@uvic.ca</p>
						</a>
					</li>
				</ul>
			</div>
		</main>

<?php //get_footer(); ?>
