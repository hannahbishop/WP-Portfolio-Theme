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
            <span class="intro-txt">
                <h1>Hannah Bishop</h1>
                <h2>Comp Sci Student in Victoria BC</h2>
            </span>
            <h3 class="header-contact">(250) 889 4187<mark>/</mark><a class="contact-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a></h3>
            <!--<nav>
                <ul>
                    <li><a class="nav-link" href="#">Projects</a></li>
                    <li><a class="nav-link" href="#">Resume</a></li>
                    <li><a class="nav-link" href="#">About</a></li>
                </ul>
            </nav>-->
            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => '') ); ?>
        </header>
        <div class="container">
