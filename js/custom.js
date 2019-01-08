/*
Theme Name: 
Version: 
Author: 
Author URI: 
Description: 
*/
/*	IE 10 Fix*/

(function ($) {
	'use strict';
	
	jQuery(document).ready(function () {

        //Sticky menu add class
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 150) {
                $(".header").addClass("sticky");
            } else {
                $(".header").removeClass("sticky");
            }
        });

        $(".typed-element").typed({
            stringsElement: $(".typed-strings"),
            typeSpeed: 100,
            loop: true,
            showCursor: true,
            backDelay: 2000,
            fadeOut: true,
            smartBackspace: true,
            cursorChar: "|"
        });

        //Smooth Scroll To Anchor
        $(document).on('click', 'a[href^="#"]', function (event) {
            var top;
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 100
            }, 1000);
            event.preventDefault();
        });



        //Active Menu Item on Page Scroll            
        var sections = $('section')
          , nav = $('header')
          , nav_height = nav.outerHeight();
         
        $(window).on('scroll', function () {
          var cur_pos = $(this).scrollTop();
         
          sections.each(function() {
            var top = $(this).offset().top - 140,
                bottom = top + $(this).outerHeight();
         
            if (cur_pos >= top && cur_pos <= bottom) {
              nav.find('a').removeClass('active');
              sections.removeClass('active');
         
              $(this).addClass('active');
              nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
            }
          });
        });



		// Slider Carousel
		$('.slider_carousel').owlCarousel({
            items: 1,
            loop: true,
            center: true,
            margin: 0,
            padding: 0,
            autoplay: true,
            autoplayTimeout: 3500,
            responsiveClass: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        })
        

		// Testimonial Carousel
		$('.testimonial_carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            center: false,
            responsiveClass: true,
        })

        // Testimonial Carousel 2
        $('.testimonial_carousel2').owlCarousel({
            items: 2,
            loop: true,
            margin: 0,
            autoplay: false,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            center: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        })


        // Mixitup Portfolio
        $('#filters').on( 'click', 'li', function() {
          var filterValue = $( this ).attr('data-filter');
        });
        $('#portfoliolist').mixItUp({
            selectors: {
                target: '.portfolio',
                filter: '.filter' 
            },
            load: {
                filter: '*'  
            }     
        });


        // Popup Video
        $('.fancybox-media').fancybox({
          openEffect  : 'none',
          closeEffect : 'none',
          helpers : {
            media : {}
          }
        });

 	});
	
})(jQuery);
