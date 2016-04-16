<?php

function exam_scripts(){
//    Main styles
    wp_enqueue_style('style', get_stylesheet_uri());

//    defolt styles
    wp_enqueue_style('main-style', get_stylesheet_uri().'css/main.css');

//    Include jQuery
    wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery-2.2.2.min.js',true);

//    Bootstrap grid
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');

//    Animete css
    wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.css');

//    FlexSlider Styles
    wp_enqueue_style('flexslider-style', get_template_directory_uri().'/css/flexslider.css');

//    Include jQuery
    wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery.js', true);
//    Include Custom JS
    wp_enqueue_script('custom-js',get_template_directory_uri(). '/js/custom.js', array('jquery'), true);

//    FlexSlider JS
    wp_enqueue_script('flexslider-js',get_template_directory_uri(). '/js/flexslider.js', array('jquery'), true);

    //    font Awesome
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

}

add_action('wp_enqueue_scripts', 'exam_scripts');

// Theme setup
function exam_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
// Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, array( 'center', 'center'));
    add_image_size('banner-image',320 , 240, array('center', 'center'));

}

add_action('after_setup_theme', 'exam_setup');
function extra_setup() {
    register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'lesson21' ));
}
add_action( 'after_setup_theme', 'extra_setup' );

function set_container_class ($args) {
    $args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}
add_filter ('wp_nav_menu_args', 'set_container_class');

//social links
function exam_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'progect_social_links' , array(
        'title'      => __( 'Social Links', 'progect-icons' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'social_links_google' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_google', array(
        'label'        => __( 'Google', 'progect-icons' ),
        'section'    => 'progect_social_links',
        'settings'   => 'social_links_google',
    ) ) );

    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebook', 'progect-icons' ),
        'section'    => 'progect_social_links',
        'settings'   => 'social_links_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'progect-icons' ),
        'section'    => 'progect_social_links',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_instagram' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_instagram', array(
        'label'        => __( 'Instagram', 'progect-icons' ),
        'section'    => 'progect_social_links',
        'settings'   => 'social_links_instagram',
    ) ) );
}
add_action( 'customize_register', 'exam_customize_register' );

//pagination
function wp_beginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */

    if( $wp_query->max_num_pages <= 1 )

        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */

    if ( $paged >= 1 )

        $links[] = $paged;

    /** Add the pages around the current page to the array */

    if ( $paged >= 3 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;

    }

    if ( ( $paged + 2 ) <= $max ) {

        $links[] = $paged + 2;

        $links[] = $paged + 1;

    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    // if ( get_previous_posts_link() )
    //    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )

            echo '<li>…</li>';

    }

    /** Link to current page, plus 2 pages in either direction if necessary */

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

    }

    /** Link to last page, plus ellipses if necessary */

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";


        $class = $paged == $max ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

    }
    /** Next Post Link */
    //if ( get_next_posts_link() )
    //     printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";

}

//Add our widgets location
function ourWidgetsInits(){
    register_sidebar( array(
        'name' => 'search',
        'id' => 'search-form',
        'before_widget' => '<div class="search-form">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="search-form-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'category',
        'id' => 'category',
        'before_widget' => '<div class="category-products">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="category-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'recent-news',
        'id' => 'recent_news',
        'before_widget' => '<div class="recent-news-products">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="recent-news-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar( array(
        'name' => 'tags',
        'id' => 'tags',
        'before_widget' => '<div class="tags-products">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="tags-title">',
        'after_title'   => '</h1>',
    ));

}
add_action('widgets_init','ourWidgetsInits');


