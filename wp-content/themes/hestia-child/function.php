<?php   
function wp_child_theme(){
    wp_enqueue_style('parent_style', get_template_directory_uri().'/style.css');

    wp_enqueue_style('style_style', get_stylesheet_directory_uri().'/style.css');

    wp_enqueue_style('inner_style', get_stylesheet_directory_uri().'/inner.css');

    wp_enqueue_script('custom_style', get_stylesheet_directory_uri().'custom.css');

}
add action('wp_enqueue_scripts','enqueue_parent_styles')

?>
