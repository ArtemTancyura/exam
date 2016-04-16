<?php   get_header();?>

    <div class="site-content clearfix">

    <div class="container">
        <!--main column-->
        <div class="main-column">

            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="./img/banner-img.jpg" />
                    </li>
                    <li>
                        <img src="./img/banner-img.jpg" />
                    </li>
                    <li>
                        <img src="./img/banner-img.jpg" />
                    </li>
                </ul>
            </div>

<!--<!--            about us -->
<!---->
<!--            --><?php //$query = new WP_Query(
//                array(
//                    'post_type' => 'about-us',
//                    'posts_per_page' => 1
//                )
//            );  ?>
<!--            <div class="home-recent-posts clearfix">-->
<!--                --><?php // if ( $query->have_posts() ) {
//                    while ( $query->have_posts() ) {
//                        $query->the_post();
//                        ?>
<!--                        <div class="recent-post-item">-->
<!---->
<!--                            <p class="home-product-title">-->
<!--                                --><?php //echo get_the_title(); ?>
<!--                            </p>-->
<!--                        </div>-->
<!--                    --><?php //}
//                }?>
<!---->
<!--            </div>-->
<!---->
            <div class="container clearfix">
            <div class="about-us col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-2"> About us </h2>
                <h4 class="col-xs-12 col-sm-12 col-md-12 col-lg-2"> Our short story</h4>
                <div class="about-text col-xs-12 col-sm-7 col-md-7 col-lg-8">
                    Lorem ipsum is sumly dummy text of the printing  and typesitting industry.
                    Lorem ipsum has been in industry's standart dummy text ever sinse the 1500s,
                    when an unknown printer took a galley type and scrambled it to make a type specimen book.
                </div>
                <a href=" http://wordpress/about-us/" class="about-button"> read more </a>
            </div>
            </div>

                <div class="our_services">
                    <div class="container ">
                        <h2> Services </h2>
                        <h4>What we are doing</h4>

                        <div class="services_list col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <img alt="1" src="<?php echo get_template_directory_uri(); ?>/img/services-icon-3.png" />
                            <h2> Boosting your business </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</br>
                                elementum augue sed est portitir, ac blandit nisi pousuere.  </p>
                        </div>
                        <div class="services_list col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <img alt="2" src="<?php echo get_template_directory_uri(); ?>/img/services-icon-4.png" />
                            <h2> Online suport </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</br>
                                elementum augue sed est portitir, ac blandit nisi pousuere.  </p>
                        </div>
                        <div class="services_list col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <img alt="3" src="<?php echo get_template_directory_uri(); ?>/img/services-icon-1.png" />
                            <h2> Analyzing business strategy </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</br>
                                elementum augue sed est portitir, ac blandit nisi pousuere.  </p>
                        </div>
                        <div class="services_list col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <img alt="4" src="<?php echo get_template_directory_uri(); ?>/img/services-icon-2.png" />
                            <h2> time managenemt </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</br>
                                elementum augue sed est portitir, ac blandit nisi pousuere.  </p>
                        </div>

                        <a href=" http://wordpress/servises/ " class="about-button"> view more </a>
                    </div>

                </div>
            </div>
            </div>

        <!--main column-->

        </div>
    </div>

<?php get_footer(); ?>