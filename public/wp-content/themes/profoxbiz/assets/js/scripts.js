jQuery(document).ready(function($){
	"use strict";
	// slicknav mobile menu
	$('#primary-menu').slicknav({
		'label' : '',
		allowParentLinks: true,
		prependTo:'.site-header'
	});
// bailboard
$('.bailboard').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	arrows: true,
	fade: true,
	nav: true,
	autoplay: false,
	autoplaySpeed: 10000
});

// equail height
$('.feature-box h3').matchHeight();

// portfolio 
$(window).on('load resize', function(){
	$('.portfolio-lg-thumb').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.portfolio-sm-thumb'
	});

	$('.portfolio-sm-thumb').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.portfolio-lg-thumb',
		dots: true,
		arrows: true,
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 767.98,
			settings: {
				slidesToShow: 2,       
			}
		},
		{
			breakpoint: 575.98,
			settings: {
				slidesToShow: 1,      
			}
		}
		]
	});
});

// team 

$(window).on('load resize', function(){
	$('.team').slick({
		centerMode: true,
		centerPadding: '2.5rem',
		slidesToShow: 4,
		responsive: [
		{
			breakpoint: 767.98,
			settings: {
				slidesToShow: 2,       
			}
		},
		{
			breakpoint: 575.98,
			settings: {
				centerMode: false,
				slidesToShow: 1,     
			}
		}
		]

	});
});

// testimonial 

$(window).on('load resize', function(){
	$('.testimonial-lg-thumb').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots: false,
		adaptiveHeight: true,
		asNavFor: '.testimonial-sm-thumb'
	});

	$('.testimonial-sm-thumb').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.testimonial-lg-thumb',
		dots: false,
		arrows: true,
		centerMode: true,
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 767.98,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1     
			}
		}
		]
	});
});

// Scroll to Top
$(window).scroll(function() {
	if ($(this).scrollTop() >= 50) {       
		$('#scrollToTop').fadeIn(200);    
	} else {
		$('#scrollToTop').fadeOut(200);  
	}
});
$('#scrollToTop').click(function() {      
	$('body,html').animate({
		scrollTop : 0                     
	}, 500);
});

$( ".post" ).has( ".post-thumbnail" ).addClass( "overlay-content" );
});