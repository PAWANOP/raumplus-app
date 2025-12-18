// Projects Carousel                                                                                                                                                                                                                                                                                                                                                                                                                   
$(document).ready(function() {
    var owl = $('#projectCarousel').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    }).data('owl.carousel');
    }); 


    // Awards Carousel
    $(document).ready(function() {
    // try {
    //     var owlAwards = $('#awardCarousel').owlCarousel({
    //         loop: true,
    //         margin: 5,
    //         nav: true, // Enable manual navigation with prev/next buttons
    //         dots: true, // Enable manual navigation with dots
    //         autoplay: true, // Enable auto-scrolling
    //         autoplayTimeout: 3000, // Auto-scroll every 3 seconds
    //         autoplayHoverPause: true, // Pause on hover
    //         responsive: {
    //             0: {
    //                 items: 1
    //             },
    //             600: {
    //                 items: 1
    //             },
    //             1000: {
    //                 items: 1
    //             }
    //         }
    //     }).data('owl.carousel');
    //     console.log('Awards Carousel initialized successfully');
    // } catch (error) {
    //     console.error('Error initializing Awards Carousel:', error);
    // }

    $('#awardCarousel').owlCarousel({
        loop: true,
        margin: 5,
        nav: true, // Enable manual navigation with prev/next buttons
        dots: true, // Enable manual navigation with dots
        autoplay: true, // Enable auto-scrolling
          navText: ['<div class="prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>', 
                  '<div class="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>'],
        autoplayTimeout: 3000, // Auto-scroll every 3 seconds
        autoplayHoverPause: true, // Pause on hover
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.sliderBox').owlCarousel({
        loop: true,
        margin: 5,
        nav: true, // Enable manual navigation with prev/next buttons
        dots: true, // Enable manual navigation with dots
        autoplay: true, // Enable auto-scrolling
          navText: ['<div class="prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>', 
                  '<div class="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    


    $('#testimonials_owl').owlCarousel({
        loop: true,
        margin: 25,
        nav: true, // Enable manual navigation with prev/next buttons
        dots: true, // Enable manual navigation with dots
        autoplay: true, // Enable auto-scrolling
        navText: ['<div class="prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>', 
        '<div class="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></div>'],
        autoplayTimeout: 3000, // Auto-scroll every 3 seconds
        autoplayHoverPause: true, // Pause on hover
    });
}); 


$(window).on("scroll", function() {
    var b = $(window).scrollTop();
    if (b > 80) {
        $("nav.navbar.navbar-expand-lg").addClass("scroll")
    } else {
        $("nav.navbar.navbar-expand-lg").removeClass("scroll")
    }
});