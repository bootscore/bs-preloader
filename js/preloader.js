jQuery(document).ready(function ($) {
    
    // Preloader
    $(window).bind('beforeunload',function(){
        $("#preloader").fadeIn('fast');
        $('#status').fadeIn('fast');
    })
    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    })
    setTimeout(function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    }, 1500);

});
