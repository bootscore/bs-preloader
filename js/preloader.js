jQuery(document).ready(function ($) {

    // Preloader
    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        })
    })
    setTimeout(function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        })
    }, 1500);

    /*
    // Preloader fade in on click <a>...</a> (idea to create smooth page transitions in future)
    $('a:not([href^=\\#]):not([target="_blank"]):not([href^="mailto:"]):not([href="javascript:void(0)"]):not(.add_to_cart_button):not(.blocks-gallery-item a)').click(function () {
        $("#preloader").fadeIn('fast');
        //$('#status').fadeIn('slow');
        $('#preloader').delay(350).fadeOut('slow');
    });
    */

});
