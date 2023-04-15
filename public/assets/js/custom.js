
"use strict";

//Submenu Dropdown Toggle
if ($('.main-header li.dropdown ul').length) {
    $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-right"></span></div>');
}


//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

    $('.mobile-menu .menu-box').mCustomScrollbar();

    var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
    $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
    $('.sticky-header .main-menu').append(mobileMenuContent);

    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
        $(this).toggleClass('open');
        $(this).prev('ul').slideToggle(500);
    });

    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
        $(this).prev('.megamenu').slideToggle(900);
    });

    //Menu Toggle Btn
    $('.mobile-nav-toggler').on('click', function () {
        $('body').addClass('mobile-menu-visible');
    });

    //Menu Toggle Btn
    $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function () {
        $('body').removeClass('mobile-menu-visible');
    });

}


// Scroll to a Specific Div
if ($('.scroll-to-target').length) {
    $(".scroll-to-target").on('click', function () {
        var target = $(this).attr('data-target');
        // animate
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);

    });
}



//Parallax Scene for Icons
if ($('.parallax-scene-1').length) {
    var scene = $('.parallax-scene-1').get(0);
    var parallaxInstance = new Parallax(scene);
}
if ($('.parallax-scene-2').length) {
    var scene = $('.parallax-scene-2').get(0);
    var parallaxInstance = new Parallax(scene);
}
if ($('.parallax-scene-3').length) {
    var scene = $('.parallax-scene-3').get(0);
    var parallaxInstance = new Parallax(scene);
}
if ($('.parallax-scene-4').length) {
    var scene = $('.parallax-scene-4').get(0);
    var parallaxInstance = new Parallax(scene);
}
if ($('.parallax-scene-5').length) {
    var scene = $('.parallax-scene-5').get(0);
    var parallaxInstance = new Parallax(scene);
}



//Update Header Style and Scroll to Top
function headerStyle() {
    if ($('.main-header').length) {
        var windowpos = $(window).scrollTop();
        var siteHeader = $('.main-header');
        var scrollLink = $('.scroll-top');
        if (windowpos >= 350) {
            siteHeader.addClass('fixed-header');
            scrollLink.fadeIn(300);
        } else {
            siteHeader.removeClass('fixed-header');
            scrollLink.fadeOut(300);
        }
    }
}
headerStyle();

// Isotop Layout
function isotopeBlock() {
    if ($(".isotope-block").length) {
        var $grid = $('.isotope-block').isotope();

    }
}

isotopeBlock();



//Bottom Parallax
function bottomParallax() {
    if ($('.bottom-parallax').length) {
        var windowpos = $(window).scrollTop();
        var siteFooter = $('.footer-area').height();
        var sitebodyHeight = $('.boxed_wrapper').height();
        var finalHeight = sitebodyHeight - siteFooter - 1000;
        if (windowpos >= finalHeight) {
            $('body').addClass('parallax-visible');
        } else {
            $('body').removeClass('parallax-visible');
        }
    }
}

function beforeAfterTwentyTwenty() {
    if ($(".before-after-twentytwenty").length) {
        $(".before-after-twentytwenty").each(function () {
            var Self = $(this);
            var objName = Self.attr('id');
            $('#' + objName).twentytwenty();

            // hack for bs tab 
            $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
                var paneTarget = $(e.target).attr('data-target');
                var $thePane = $('.tab-pane' + paneTarget);
                var twentyTwentyContainer = '#' + objName;
                var twentyTwentyHeight = $thePane.find(twentyTwentyContainer).height();
                if (0 === twentyTwentyHeight) {
                    $thePane.find(twentyTwentyContainer).trigger('resize');
                }
            });
        });
    };
}

// ===Project===
function projectMasonaryLayout() {
    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }
    if ($('.post-filter').length) {
        $('.post-filter li').children('.filter-text').on('click', function () {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            $('.post-filter li').removeClass('active');
            Self.parent().addClass('active');
            $('.filter-layout').isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    if ($('.post-filter.has-dynamic-filters-counter').length) {
        // var allItem = $('.single-filter-item').length;
        var activeFilterItem = $('.post-filter.has-dynamic-filters-counter').find('li');
        activeFilterItem.each(function () {
            var filterElement = $(this).data('filter');
            var count = $('.filter-layout').find(filterElement).length;
            $(this).children('.filter-text').append('<span class="count">' + count + '</span>');
        });
    };
}



// ===Image Hover Script===
function onHoverthreeDmovement() {
    var tiltBlock = $('.js-tilt');
    if (tiltBlock.length) {
        $('.js-tilt').tilt({
            maxTilt: 20,
            perspective: 700,
            glare: true,
            maxGlare: 0
        })
    }
}


/////////////////////////////
//Universal Code for All Owl Carousel Sliders
/////////////////////////////

if ($('.theme_carousel').length) {
    $(".theme_carousel").each(function (index) {
        var $owlAttr = {},
            $extraAttr = $(this).data("options");
        $.extend($owlAttr, $extraAttr);

        $(this).owlCarousel($owlAttr);
    });
}


// Main Slider Carousel
if ($('.banner-carousel').length) {
    $('.banner-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        margin: 0,
        dots: true,
        nav: true,
        singleItem: true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 9000,
        navText: ['<span class="icon-right-arrow"></span>', '<span class="icon-right-arrow right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
}



//  Partner Carousel
if ($('.partner-carousel').length) {
    $('.partner-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        stagePadding: 0,
        singleItem: true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 6000,
        navText: ['<span class="flaticon-next left"></span>', '<span class="flaticon-next right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
            1300: {
                items: 5
            }
        }
    });
}



if ($("#testimonials-style1__thumb").length) {
    let testimonialsThumb = new Swiper("#testimonials-style1__thumb", {
        slidesPerView: 3,
        spaceBetween: 10,
        speed: 1400,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        loop: true,
        autoplay: {
            delay: 5000
        }
    });

    let testimonialsCarousel = new Swiper("#testimonials-style1__carousel", {
        observer: true,
        observeParents: true,
        speed: 1400,
        mousewheel: true,
        slidesPerView: 1,
        autoplay: {
            delay: 5000
        },
        thumbs: {
            swiper: testimonialsThumb
        },
        pagination: {
            el: '#testimonials-style1__carousel-pagination',
            type: 'bullets',
            clickable: true
        },
    });
}


//  Testimonial Style2 Carousel
if ($('.testimonial-style2__carousel').length) {
    $('.testimonial-style2__carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        stagePadding: 0,
        singleItem: true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 6000,
        navText: ['<span class="flaticon-next left"></span>', '<span class="flaticon-next right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1300: {
                items: 1
            }
        }
    });
}

// Elements Animation
if ($('.wow').length) {
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false, // trigger animations on mobile devices (default is true)
        live: true // act on asynchronously loaded content (default is true)
    });
    wow.init();
}



// AOS Animation
if ($("[data-aos]").length) {
    AOS.init({
        duration: '1000',
        disable: 'false',
        easing: 'ease',
        mirror: true
    });
}




//Contact Form Validation
if ($("#contact-form").length) {
    $("#contact-form").validate({
        submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            $(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status = 'true') {
                        $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () {
                        $(form_result_div).fadeOut('slow')
                    }, 6000);
                }
            });
        }
    });
}

$('select:not(.ignore)').niceSelect();

// Dom Ready Function
jQuery(document).on('ready', function () {
    (function ($) {
        onHoverthreeDmovement();
        beforeAfterTwentyTwenty();

    })(jQuery);
});



jQuery(window).on('scroll', function () {
    (function ($) {

        headerStyle();
        bottomParallax();


    })(jQuery);
});



// Instance Of Fuction while Window Load event
jQuery(window).on('load', function () {
    (function ($) {
        projectMasonaryLayout();
        isotopeBlock();

    })(jQuery);
});

$('.items').magnificPopup({
       type: 'image',
       delegate: 'a',
       gallery:{
       enabled:true
    }
  });
