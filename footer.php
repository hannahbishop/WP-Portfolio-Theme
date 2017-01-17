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
                    <li><a class="footer-link" href="#"><img src="assets/img/GitHub-Mark-32px.png">hannahbishop</a></li>
                </ul>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
