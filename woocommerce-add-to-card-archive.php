<?php
/*
 * @package           RedeLivre
 * @author            Jacson Passold
 * @copyright         2021 Rede Livre
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:		  WooCommerce Add to Card on Archives
 * Plugin URI:        https://github.com/redelivre/woocommerce-add-to-card-archive
 * Description:		  Adds default WooCommerce "add to card" buttons template around product on archives pages.
 * Version:           0.0.1
 * Requires at least: 4.7.5
 * Requires PHP:      7.0
 * Author: 			  Jacson Passold
 * Author URI:        https://github.com/jacsonp
 * Text Domain:       wp-woo-add-to-card-archive
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

class WooCommerceAddToCardArchive {
	/**
	 * Static self contained instance
	 * @var WooCommerceAddToCardArchive
	 */
	private static $instance = null;
	
	/**
	 * Create and get a instance or get already created instance to avoid WordPress hooks problems
	 * @return WooCommerceAddToCardArchive
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		
		return self::$instance;
	}
	
	public function __construct() {
		add_action( 'init', array($this, 'init') );
	}
	
	/**
	 * WordPress added init hook
	 */
	public function init() {
		add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11 );
	}
}

WooCommerceAddToCardArchive::get_instance();
