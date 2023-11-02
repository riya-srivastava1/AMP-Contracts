$(document).ready(function () {
    let owl = $('.owl-carousel.main');
    owl.owlCarousel({

        autoplay: true,
        autoplayTimeout: 2500,
        autoWidth: false,
        autoplayHoverPause: true,
        margin: 36,
        loop: true,
        dots: true,
        touchDrag: true,
        mouseDrag: true,

        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2,

            },
            768: {
                items: 2,

            },
            992: {
                items: 3,


            }
        },

    });


    $(".next").click(function () {
        owl.trigger("next.owl.carousel");
    });
    $(".prev").click(function () {
        owl.trigger("prev.owl.carousel");
    });


    $('.owl-dots').insertBefore($('.controls .owl-control.next'));
});


