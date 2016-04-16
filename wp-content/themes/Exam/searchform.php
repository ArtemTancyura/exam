<form class="searchform" method="get" action="<?php bloginfo( 'url' ); ?>">
    <input class="search" name="s" onclick="this.value=''" type="text" placeholder="search" tabindex="1" />.
    <button type="submit" data-text="" class="button button-search" id="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/search_icon.png"></button>
</form>