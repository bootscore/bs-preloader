jQuery(document).ready(function ($) {

  // Exclude links to fade-in
  let ignore_onbeforeunload = false;
  $('a[href^=mailto], a[href^=tel], a[data-fade="false"], .woocommerce-MyAccount-downloads-file').on('click', function () {
    ignore_onbeforeunload = true;
  });

  // Preloader
  $(window).bind('beforeunload', function () {
    if (!ignore_onbeforeunload) {
      $("#preloader").fadeIn('fast');
      $('#status').fadeIn('fast');
    }
    ignore_onbeforeunload = false;
  })
  $(window).on('load', function () {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
  })
  setTimeout(function () {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
  }, 1500);
  
  // Prevents preloader stucking by press the browser back/forward buttons
  window.onpagehide = function () {
    $('#status').fadeOut('fast');
    $('#preloader').delay(350).fadeOut('slow');
  };

});
