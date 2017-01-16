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
        <header>
            <a class="branding" href="<?php home_url(); ?>">
                <h1>Hannah Bishop</h1>
                <h2>Comp Sci Student in Victoria BC</h2>
            </a>
            <h3 class="header-contact">(250) 889 4187<mark>/</mark><a class="contact-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a></h3>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => '' , 'menu_class' => 'header-nav') ); ?>
        </header>
