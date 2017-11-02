<?php

// Setup

// Includes

// Hooks
add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . date( 'Y' ); ?>
	</div>
	<?php
}

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 17 );
add_action( 'woocommerce_before_single_product', 'open_individual_product', 5 );
add_action( 'woocommerce_after_single_product_summary', 'close_individual_product', 10 );

function open_individual_product() {
	?>
	<div class="individual_product">
	<?php
}

function close_individual_product() {
	?>
	</div>
	<?php
}


// Shortcodes

?>