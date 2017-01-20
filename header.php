<!DOCTYPE html>
<html>

    <head>
        <title>Hannah Bishop</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
        <script src="https://use.typekit.net/drz0ojb.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <?php wp_head();?>
    </head>

    <body>
        <header class="site-header">
            <a class="branding" href="http://hannahbishop.com">
                <h1>Hannah Bishop</h1>
            </a>
            <div class="header-links">
              <a href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a>
              <a href="#">Resume</a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => '' , 'menu_class' => 'header-nav') ); ?>
        </header>
