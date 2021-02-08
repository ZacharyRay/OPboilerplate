<?php 
if(class_exists('WooCommerce')) {
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action ( 'after_setup_theme', 'woocommerce_add_woocommerce_support' );
    // Remove WooCommerce styles
        // add_filter( 'woocommerce_enqueue_styles', '__return_false' );
        
    // Remove WooCommerce Shop Title
        // add_filter( 'woocommerce_show_page_title', '__return_false' );

    // Add Gallery Support
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
}  
?>