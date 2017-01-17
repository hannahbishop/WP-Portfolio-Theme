<!DOCTYPE html>
<html>

    <head>
        <title>Hannah Bishop</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
        <script src="https://use.typekit.net/mgj7tll.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <?php wp_head();?>
    </head>

    <body>
        <header class="site-header">
            <a class="branding" href="http://hannahbishop.com">
                <h1>Hannah Bishop</h1>
                <p class="branding-subtitle">Comp Sci Student in Victoria BC</p>
            </a>
            <span class="header-contact">
              <a class="contact-link" href="tel:1-250-889-4187">(250) 889 4187</a>
              <mark>/</mark>
              <a class="contact-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a>
            </span>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => '' , 'menu_class' => 'header-nav') ); ?>
        </header>
