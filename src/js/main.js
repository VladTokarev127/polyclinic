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
	})

});