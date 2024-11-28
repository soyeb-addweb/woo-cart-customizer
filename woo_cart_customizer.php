<?php

/**
 * Plugin Name: Simple Customization of Add to Cart Button
 * Plugin URI: http://www.addwebsolution.com
 * Description: Simple Customization of Add to Cart Button plugin is used for change the cart name, message and notice text and also the button text of product by its type..
 * Version: 3.0
 * Author: AddWeb Solution Pvt. Ltd.
 * Author URI: http://www.addwebsolution.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: woo-cart-customizer
 * Requires Plugins: woocommerce
 */

// If this file is called directly, abort.
if (! defined('ABSPATH')) {
	die;
}

define("ADDWEBWC_PLUGIN_VERSION", 3.0);
define("ADDWEBWC_PLUGIN_DIR", plugin_dir_path(__FILE__));
define("ADDWEBWC_PLUGIN_URL", plugins_url('/', __FILE__));
define("ADDWEBWC_TEXT_DOMAIN", "woo-cart-customizer");

require_once ADDWEBWC_PLUGIN_DIR . '/includes/admin.php';
