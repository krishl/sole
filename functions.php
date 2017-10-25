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

// Shortcodes

?>