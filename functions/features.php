<?php 
function theme_features() {
    register_nav_menu('header_menu', 'Header menu');
    register_nav_menu('footer_menu', 'Footer menu');
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'theme_features');

?>