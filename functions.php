<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles()
{
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    wp_enqueue_style( 'header_style', get_template_directory_uri() . '/assets/styles/main.min.css' );
}

function childhood_scripts()
{
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    // wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/map.js', array(), null, true);

}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );

function filter_nav_menu_link_attributes($atts, $item, $args){
    if ($args->menu === "Main"){
        $atts['class'] = 'header__nav-item';
    
    if ($item->current){
        $atts['class'] .= ' header__nav-item-active';
    }
    // print_r($item); // ID depends on order of menu items. In following case 182 shows the second menu item id
    if($item->ID === 182 && (in_category('soft_toys') || in_category('edu_toys'))){
        $atts['class'] .= ' header__nav-item-active';
    }

};

    return $atts;
}
?>