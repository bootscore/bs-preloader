<?php

/**
 * Enqueue styles & scripts
 *
 * @author   Bootscore
 * @package  bs Preloader
 * @version  5.5.2
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Register Styles and Scripts
 */
function bs_preloader_scripts() {

  // Base plugin directory (go up one level from /inc/)
  $plugin_dir = plugin_dir_path( dirname(__FILE__) );
  $plugin_url = plugin_dir_url( dirname(__FILE__) );

  // File paths
  $script_file = $plugin_dir . 'assets/js/preloader.js';
  $style_file  = $plugin_dir . 'assets/css/preloader.css';

  // Timestamps as version numbers
  $script_ver = file_exists($script_file) ? date('YmdHi', filemtime($script_file)) : false;
  $style_ver  = file_exists($style_file) ? date('YmdHi', filemtime($style_file)) : false;

  // Enqueue script
  wp_enqueue_script(
    'preloader-js',
    $plugin_url . 'assets/js/preloader.js',
    ['jquery'],
    $script_ver,
    true
  );

  // Enqueue style
  wp_enqueue_style(
    'preloader-css',
    $plugin_url . 'assets/css/preloader.css',
    [],
    $style_ver
  );
}

add_action('wp_enqueue_scripts', 'bs_preloader_scripts');
