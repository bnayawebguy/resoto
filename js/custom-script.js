jQuery(document).ready(function($){

	var resoto_slider = $('.resoto-slider').owlCarousel({
		items: 1,
		nav: true,
		navText: ['<i class="lni-angle-double-left"></i>', '<i class="lni-angle-double-right"></i>'],
		navElement: 'span',
		loop: true,
		dots: true
	});

	resoto_slider.on('changed.owl.carousel', function(event) {
		var item = event.item.index - 1;     // Position of the current item
		$('.caption-text .subtitle').removeClass('animated fadeInUp');
		$('.caption-text .text').removeClass('animated fadeInUp');
		$('.caption-text .slide-btn').removeClass('animated fadeInUp');
		$('.owl-item').not('.cloned').eq(item).find('.caption-text .subtitle').addClass('animated fadeInUp');
		$('.owl-item').not('.cloned').eq(item).find('.caption-text .text').addClass('animated fadeInUp');
		$('.owl-item').not('.cloned').eq(item).find('.caption-text .slide-btn').addClass('animated fadeInUp');
	});

});