<?php 
function reficio_script_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('customjs', get_template_directory_uri()."/js/reficio.js",array(),"1.0.0", true);
    wp_enqueue_style( 'prefix-font-awesome', 'netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '4.1.0');

}

add_action("wp_enqueue_scripts", "reficio_script_enqueue");

function reficio_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Header Navigation');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('init','reficio_theme_setup');


