<?php 

function enqueue_parent_style(){
    wp_enqueue_style("parent_style",get_template_directory_uri().'/style.css');
}
add_action(wp_enqueue_scripts,enqueue_parent_style)


?>
