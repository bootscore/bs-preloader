jQuery(document).ready(function ($) {

    // Preloader
    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    })
    setTimeout(function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    }, 1500);

    // Preloader fade in on click <a>...</a> for smooth page transition
    $('a:not([href^=\\#]):not([target="_blank"]):not([href^="mailto:"]):not([href="javascript:void(0)"]):not(.add_to_cart_button):not(.blocks-gallery-item a):not(.dropdown-toggle):not([href="javascript:gaOptout()"]):not(.woocommerce-MyAccount-downloads-file)').click(function () {
        $("#preloader").fadeIn('fast');
        $('#preloader').delay(1000).fadeOut('slow');
    });    

});