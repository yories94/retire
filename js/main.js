(function ($) {
    "use strict";
    
    /* Preloader Js
    ===================*/
    $(window).on("load", function () {
        $('.preloader').fadeOut(1000);
    });

    // Activate carousel for display categories carousel
    $(".slider").owlCarousel({
        items: 3,
        autoPlay: 4000,
        responsive: true,
        itemsMobile: [479, 2],
        itemsTablet: [768, 3],
        itemsDesktopSmall: [991, 4]
    });
    
})(jQuery);