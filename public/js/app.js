

$(document).ready(function () {
    //Owl
    $('.hero-slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        navText: ['PREV', 'NEXT'],
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                nav: false,
            },
            768: {
                nav: true,
            }
        }
    })

    $('#projects-slider1').owlCarousel({
        loop: true,
        nav: false,
        items: 4,
        dots: false,
        smartSpeed: 600,
        center: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 20,
            },
			992: {
                items: 3,
                margin: 20,
            },
			1200: {
                items: 4,
                margin: 20,
            }
        }
    })
	
	    $('#projects-slider2').owlCarousel({
        loop: true,
        nav: false,
        items: 4,
        dots: true,
        smartSpeed: 600,

        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 20,
            },
			992: {
                items: 3,
                margin: 20,
            },
			1200: {
                items: 4,
                margin: 20,
            }
        }
    })
	
		    $('#projects-slider4').owlCarousel({
        loop: true,
        nav: false,
        items: 4,
        dots: true,
        smartSpeed: 600,

        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 20,
            },
			992: {
                items: 3,
                margin: 20,
            },
			1200: {
                items: 4,
                margin: 20,
            }
        }
    })
	
	$('#projects-slider3').owlCarousel({
        loop: true,
        nav: true,
        items: 4,
        dots: false,
        smartSpeed: 600,
 //navText: ['PREV', 'NEXT'],
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 2,
				 margin: 20,
            },
            768: {
                items: 2,
                margin: 20,
            },
			992: {
                items: 4,
                margin: 20,
            },
			1200: {
                items: 4,
                margin: 20,
            }
        }
    })

    $('.reviews-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        smartSpeed: 900,
        items: 1,
        margin: 24,
        autoplay: true,
        autoplayTimeout: 4000,
    })
});
