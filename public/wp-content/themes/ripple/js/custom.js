/*
 * 
 * @param {type} param
 **/
jQuery(document).ready(function ($) {
    var headerHeight = $('#masthead').outerHeight();

    $(".home .plx-nav.nav").onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        scrollOffset: headerHeight,
    });

    //Custom Scrollbar About Section
    $(".hm-about-contents").mCustomScrollbar({
        theme: "minimal",
        axis: "y" // horizontal scrollbar
    });

    $(".testimonial-slider").owlCarousel({
        nav: true,
        margin: 10,
        items: 1,
        navText: ['', ''],
    });
    $(".partners-logo-container").owlCarousel({
        margin: 10,
        nav: true,
        navText: ['', ''],
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1
            },
            411: {
                items: 2
            },
            435: {
                items: 2
            },
            500: {
                items: 3
            },
            650: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });
    /*position fixed-menu on scroll*/
    var getHeaderHeight = '0';
    var lastScrollPosition = 0;
    $('.site-header').css('top', '-' + (getHeaderHeight) + 'px');

    $(window).scroll(function () {
        var currentScrollPosition = $(window).scrollTop();
        if ($(window).scrollTop() > 2 * ('80')) {
            $('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
            $('.site-header').css('top', 0);
            if (currentScrollPosition < lastScrollPosition) {
                $('.site-header').css('top', '-' + (getHeaderHeight) + 'px');
            }
            lastScrollPosition = currentScrollPosition;
        } else {
            $('body').removeClass('scrollActive').css('padding-top', 0);
        }
        /**/
    });
    $('#masthead').css('top:0px');

    // Wow Init
    new WOW().init();
    var next_sec = $('.home #content').children('section:nth-child(2)').attr('id');
    var slider_next_section = '#' + next_sec;

    $(".slider-down-btn").attr('href', slider_next_section);
    $('.slider-down-btn').localScroll({
        offset: {
            top: -headerHeight
        }
    });

    // Parallax Effect
    $(window).on('load', function () {
        $('#plx_cl_logo_section').parallax('50%', 0.4, true);
        $('#plx_about_section').parallax('50%', 0.4, true);
        $('#plx_portfolio_section').parallax('50%', 0.4, true);
        $('#plx_blog_section').parallax('50%', 0.4, true);
        $('#plx_cta_section').parallax('50%', 0.4, true);
        $('#plx_testimonial_section').parallax('50%', 0.4, true);
        $('#plx_team_section').parallax('50%', 0.4, true);
    });

    /////////////////////////////// Ripple Script //////////////////////////////////////////////////

    $('.progressBar').each(function () {
        var bar = $(this);
        var max = $(this).attr('id');
        var label = $(this).attr('data-label');
        max = max.substring(3);
        bar.waypoint({
            handler: function () {
                $(".percent").animate({
                    'padding-left': label + '%'
                }, "slow");
                var progressBarWidth = max * bar.width() / 100;
                bar.find('div').animate({
                    width: progressBarWidth
                }, 1000).html(max + "%&nbsp;");
            },
            offset: '95%'
        });
    });
    $('.percent-bar').each(function () {
        var bar2 = $(this);
        var idval = this.id;
        var label_val = $(this).attr('percent');
        bar2.waypoint({
            handler: function () {
                $("#" + idval).animate({
                    'padding-left': label_val + '%'
                }, 1000);
            },
            offset: '95%'
        });
    });





    /*** Ripple Scripts **/
    var headerHeight = $('#masthead').outerHeight();
    /** Auto Full Size Main Slider Image **/

    $(".home .plx-nav.nav").onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        scrollOffset: headerHeight,
    });


    $(".main-slider").owlCarousel({
        nav: true,
        navText: [''],
        items: 1,
        loop : true,
        autoplay: true
    });

    //Navigation toggle
    $("#toggle").click(function () {
        $(this).toggleClass("on");
        $("#primary-menu.menu ul").slideToggle();
        $("#site-navigation ul.nav.plx-nav").slideToggle();
        $("ul#primary-menu.menu").slideToggle();
    });

    var $grid = $('.portfolio-postse').imagesLoaded(function () {
        // init Isotope after all images have loaded
        $grid.isotope({
            itemSelector: '.portfolio-post-wrape',
            layoutMode: 'packery',
        });
    });

    $('.portfolio-post-filter').on('click', '.filter', function () {
        $('.portfolio-post-filter .filter').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $('.portfolio-postse').isotope({
            filter: filterValue
        });
    });


    $('.cloader').each(function () {
        var that = $(this);
        var percent = that.attr("data-percentage");
        that.waypoint({
            handler: function (direction) {
                that.ClassyLoader({
                    percentage: percent,
                    diameter: 60,
                    lineWidth: 9,
                    height: 130,
                    width: 130,
                    speed: 10,
                    lineColor: '#019be1',
                    remainingLineColor: '#efefef',
                    fontSize: '20px',
                    fontColor: 'rgba(35,40,45,1)',
                    roundedLine: true,
                    showRemaining: true,
                    animate: true,
                    displayOnLoad: true,
                    start: 'top'
                });
                this.destroy();
            },
            offset: '70%'
        });

    });

    //service section

    $('.service-content').not(":first").hide();
    $('.service-content:first').addClass('enabled');
    //add class to first h3    
    $('.service-image:first').addClass('enabled');
    $('.service-image').click(function () {
        $('.service-image').removeClass('enabled');
        $('.ripple-service-content-wrap .service-content').removeClass('enabled');
        $('.ripple-service-content-wrap .service-content').hide();

        $(this).addClass('enabled');

        var currentID = $(this).attr('data-tab');

        $('.ripple-service-content-wrap .service-content#' + currentID).addClass('enabled');

        $('.ripple-service-content-wrap .service-content#' + currentID).show();
    });


    /**
     * Back to top button
     */
    $('.back-to-top').hide();
    var offset = 250;
    var duration = 300;
    $(window).scroll(function () {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });
    $('.back-to-top').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
});
