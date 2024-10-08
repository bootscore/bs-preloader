<?php

/**
 * Preloader template.
 *
 * This template can be overriden by copying this file to your-theme/bs-preloader/preloader.php
 *
 * @author   Bootscore
 * @package  bs Preloader
 * @version  5.5.0
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div id="preloader" class="<?= apply_filters('bootscore/class/preloader/bg', 'bg-body align-items-center justify-content-center position-fixed top-0 end-0 bottom-0 start-0 zi-1070'); ?>">
  <div id="status" class="<?= apply_filters('bootscore/class/preloader/spinner', 'spinner-border text-primary'); ?>" role="status">
    <?php do_action( 'bootscore_preloader_status' ); ?>
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
