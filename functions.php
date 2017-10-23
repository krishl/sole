<?php
add_action( 'wp_enqueue_scripts', 'sole_dequeue_styles', 999 );
function sole_dequeue_styles() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}
?>