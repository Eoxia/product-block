<?php
/**
 * Plugin Name: WPshop - Product block
 * Plugin URI: https://github.com/Eoxia/product-block
 * Description: WPshop — Gutenberg block for products.
 * Author: eoxia
 * Author URI: https://eoxia.com
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Eoxia
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
