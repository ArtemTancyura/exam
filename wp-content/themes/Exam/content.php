<article class="post col-xs-9 col-sm-9 col-md-9 col-lg-9">

<!--    <div class="author-photo col-xs-1 col-sm-1 col-md-1 col-lg-1"> <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/admin-photo.jpg"/></div>-->

    <h2><?php the_title(); ?></h2>

    <div class="post-info"> <strong><?php echo __('POSTED BY'); ?> <?php the_author();?> <?php the_time('F - d - Y');?></strong></div>

    <?php the_post_thumbnail(); ?>

    <?php the_content('Read More'); ?>
    <ul class="social-posts"> SHARE
            <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class="google"><span class="fa fa-google" aria-hidden="true"></span></a></li>
    </ul>
</article>