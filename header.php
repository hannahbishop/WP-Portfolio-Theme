<!DOCTYPE html>
<html <?php language_attributes() ?>>

    <head>
        <title>Hannah Bishop</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
        <?php wp_head();?>
    </head>

    <body>
        <header class="site-header">
          <div class="branding">
            <a href="http://hannahbishop.com">
              <h1>Hannah Bishop</h1>
            </a>
          </div>
            <div class="header-links">
              <a href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a>
              <a href="#">Resume</a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => '' , 'menu_class' => 'header-nav') ); ?>
        </header>
