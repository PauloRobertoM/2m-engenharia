(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-empreededorismo').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
})(jQuery, window);