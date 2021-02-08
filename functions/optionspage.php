<?php 
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page_header_footer = acf_add_options_page(array(
            'page_title'    => __('Misc'),
            'menu_title'    => __('Misc'),
            'menu_slug'     => 'misc',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
};
?>