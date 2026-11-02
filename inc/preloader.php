<?php

/**
 * Preloader
 *
 * @author   Bootscore
 * @package  bs Preloader
 * @version  6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Preloader
 *
 * Outputs the theme's template-parts/preloader/preloader.php right after <body>.
 * Override it in the child theme: child-theme/template-parts/preloader/preloader.php
 */
function bs_header_preloader() {
  get_template_part('template-parts/preloader/preloader');
}
add_action('wp_body_open', 'bs_header_preloader', 5);
