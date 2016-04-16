<?php   get_header();?>

    <div class="site-content clearfix">

    <div class="container">
        <!--main column-->
        <div class="main-column col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h2 class="news-page"> Blog page </h2>
            <h4>  Our Featured Post </h4>
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                    <?php get_template_part( 'content' ); ?>

                <?php endwhile;
            else:
                echo '<p>No content found</p>';
            endif;?>


        </div>
        <!--main column-->

        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>

    </div>

    <div class="pagin">
        <?php wp_beginner_numeric_posts_nav(); ?>
    </div>

<?php get_footer(); ?>