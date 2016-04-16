
    <footer class="site-footer">

        <div class="container clearfix">

        <div class="footer-logo clearfix col-xs-5 col-sm-3 col-md-2 col-lg-2">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
            2015 @ LAWYER</a>
            <ul class="social">
                <li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
        <nav class="footer-nav clearfix col-xs-5 col-sm-3 col-md-2 col-lg-2">
            <?php

            $args = array(
                'theme_location' => 'footer'
            );

            ?>

            <?php wp_nav_menu(array( 'theme_location' => 'footer', 'items_wrap' => '<h2 id="item-id" class="footer-menu-title"> NAVIGATION </h2><ul>%3$s</ul>' )); ?>
        </nav>

        <form action="" class="contact-form-page"><h2> QUICK CONTACT US</h2>
            <input type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-2 form-control" placeholder="Name *">
            <input type="email" class="col-xs-12 col-sm-12 col-md-12 col-lg-2 form-control" placeholder="Email *">
            <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-4 form-control" rows="4" cols="50"> Comment *</textarea>

            <button type="submit" data-text="SUBMIT" class="button button-default" id="submit"><span> SUBMIT NOW </span></button>
        </form>

        </div>

    </footer>

<?php wp_footer(); ?>

</body>
</html>