<?php
/*Plugin Name: bs Preloader
Plugin URI: https://bootscore.me/documentation/plugins/bs-preloader/
Description: Plugin adds a preloader to Bootscore theme.
Version: 6.0.0
Tested up to: 7.1
Requires at least: 7.0
Requires PHP: 8.1
Author: Bootscore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Load required files
 */
require_once plugin_dir_path(__FILE__) . 'inc/preloader.php';
require_once plugin_dir_path(__FILE__) . 'inc/enqueue.php';
require_once plugin_dir_path(__FILE__) . 'inc/updater-config.php';
