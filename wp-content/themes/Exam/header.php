<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- site-header -->
    <header class="site-header clearfix">

        <!--container-->
        <div class="container clearfix">
            <!-- Site logo-->
            <div class="site-logo col-xs-6 col-sm-6 col-md-2 col-lg-2 clearfix">
                <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Site-logo"> </a>
            </div>
            <!--Site logo-->

            <!-- hd-telephone -->
            <div class="hd-telephone col-xs-12 col-sm-6 col-md-2 col-lg-2 clearfix">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone_icon.png" alt="telephone">
                <span class="number"> +9978 8856 999 </span>
            </div>
            <!-- hd-search -->

            <div class="gamburger clearfix " onclick="showmenu()"></div>
            <nav class="site-nav col-xs-7 col-sm-7 col-md-7 col-lg-7 clearfix">

                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                ?>

                <?php wp_nav_menu($args); ?>

            </nav>

        </div><!--container-->

    </header>
<!-- site-header -->
