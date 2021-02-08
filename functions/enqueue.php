<?php 
// Add css and js
function theme_files() {
    // add files
    wp_enqueue_style('main_css', get_template_directory_uri() . '/build/main.css', array(), '01', 'all');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/build/main.js', array(), '01', true);
}
add_action('wp_enqueue_scripts', 'theme_files');
?>