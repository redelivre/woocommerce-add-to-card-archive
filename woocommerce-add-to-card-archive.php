<?php
/**
 *	
 */

class WooCommerceAddToCardArchive {
	public function __construct {
		add_action( 'init', array($this, 'init') );
	}
	public function init() {
		add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11 );
	}
}
