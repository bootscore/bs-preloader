<?php

/**
 * Preloader template.
 *
 * This template can be overriden by copying this file to your-theme/bs-preloader/preloader.php
 *
 * @author   Bootscore
 * @package  bs Preloader
 * @version  5.4.0
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div id="preloader" class="bg-body align-items-center justify-content-center position-fixed top-0 end-0 bottom-0 start-0 zi-1070">
  <div id="status" class="<?= apply_filters('bootscore/class/preloader_spinner', 'spinner-border text-primary'); ?>" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
