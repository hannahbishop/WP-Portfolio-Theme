        <footer>
            <section class="footer-nav">
                <p class="footer-ctg">Hannah Bishop</p>
                <!--<ul>
                    <li><a class="footer-link" href="#">Projects</a></li>
                    <li><a class="footer-link" href="#">Resume</a></li>
                    <li><a class="footer-link" href="#">About</a></li>
                </ul>-->
                <?php wp_nav_menu( array( 'theme_location' => 'secondary' , 'container' => '' ) ); ?>
            </section>
            <section class="footer-contact">
                <p class="footer-ctg">Contact</p>
                <ul>
                    <li><a class="footer-link" href="tel:1-250-889-4187">(250) 889 4187</a></li>
                    <li><a class="footer-link" href="mailto:hbishop@uvic.ca">hbishop@uvic.ca</a></li>
                    <li><a class="footer-link" href="https://github.com/hannahbishop"><img src="<?php bloginfo('template_directory');?>/assets/img/GitHub-Mark-32px.png" alt="GitHub Mark"></a></li>
                </ul>
            </section>
            <script language="javascript" type="text/javascript">
    // This line tells the script to run after the page is loaded,
    // As well as allows you to use the `$` function within the script
    jQuery(function($) {
        $('#masonry-list').masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: 'true'
        });
    });
</script>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
