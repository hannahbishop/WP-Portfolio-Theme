        <footer>
            <section class="footer-nav">
                <h4>Hannah Bishop</h4>
                <!--<ul>
                    <li><a class="footer-link" href="#">Projects</a></li>
                    <li><a class="footer-link" href="#">Resume</a></li>
                    <li><a class="footer-link" href="#">About</a></li>
                </ul>-->
                <?php wp_nav_menu( array( 'theme_location' => 'secondary' , 'container' => '' ) ); ?>
            </section>
            <section class="footer-contact">
                <h4>Contact</h4>
                <ul>
                    <li><a class="footer-link" href="#">(250) 889 4187</a></li>
                    <li><a class="footer-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a></li>
                    <li><a class="footer-link" href="#">Git: hannahbishop</a></li>
                </ul>
            </section>
        </footer>
        <?php wp_footer(); ?>
        <!---Scripts @ bottom to reduce load time--->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="https://use.typekit.net/mgj7tll.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script>
          $('.grid').masonry({
            // set itemSelector so .grid-sizer is not used in layout
            itemSelector: '.grid-item',
            // use element for option
            columnWidth: '.grid-sizer',
            percentPosition: true
          })
        </script>
    </body>
</html>
