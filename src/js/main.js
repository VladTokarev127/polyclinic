$(function() {

	if($(window).width() < 992) {
		$('.menu-item-has-children > a').click(function(e) {
			e.preventDefault();
			$(this).next().slideToggle(300);
		})
	} else {
		$('.menu-item-has-children').hover(function() {
			$(this).find('ul').stop().slideDown(300);
		}, function() {
			$(this).find('ul').stop().slideUp(300);
		})
	}

	$('.header__btn').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('is-active');
		$('.header__mobile').slideToggle(300);
		$('body').toggleClass('is-fixed');
	});

	const heroSwiper = new Swiper('.hero__swiper', {
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	const bottomSwiper = new Swiper('.hero__bottom-swiper', {
		slidesPerView: 1,
		spaceBetween: 35,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			565: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},
			1200: {
				slidesPerView: 4,
			}
		}
	});

});