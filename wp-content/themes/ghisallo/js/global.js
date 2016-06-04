$(function() {
    // Init Foundation
    $(document).foundation();

    $('.multiple-items').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });

    // Init Slick
    $('.slideshow').slick({
        arrows:         false,
        autoplay:       true,
        dots:           true,
        infinite:       true,
        centerMode:     false,
        speed:          500,
        slidesToShow:   5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow:   5,
                    slidesToScroll: 5
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow:   4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow:   3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    // Init Slick
    $('.carousel').slick({
        dots:           true,
        infinite:       true,
        speed:          300,
        slidesToShow:   3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow:   3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow:   2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow:   2,
                    slidesToScroll: 2
                }
            }
        ]
    });
});
