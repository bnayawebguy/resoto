jQuery(document).ready(function($){

	/** Wow & Animate js **/
	new WOW().init();

	/** Resoto Main Slider **/
	var resoto_slider = $('.resoto-slider').owlCarousel({
		items: 1,
		nav: true,
		navText: ['<i class="lni-angle-double-left"></i>', '<i class="lni-angle-double-right"></i>'],
		navElement: 'span',
		loop: true,
		dots: true
	});

	resoto_slider.on('changed.owl.carousel', function(event) {
		var item = event.item.index - 2;     // Position of the current item
		$('.caption-text *').removeClass('animated fadeInUp');
		$('.owl-item').not('.cloned').eq(item).find('.caption-text *').addClass('animated fadeInUp');
	});

	/** Search Popup **/
	$('.resoto-search > span').on('click', function(e) {
		e.preventDefault();
		console.log('alkjflksdjfasdfa');

		$(this).next('.resoto-search-form').addClass('active');
	});

	$('.resoto-search-form span').on('click', function(e) {
		e.preventDefault();

		$(this).parents('.resoto-search-form').removeClass('active');
	});

	/** Cart Remove item **/
	$('.hb_mini_cart_remove').on('click', function() {
		var cart_qty = $(this).parents('.resoto-hotelcart').find('i.resoto-cart-qty');
		var qty = cart_qty.text();
		qty = parseInt(qty);
		qty -= 1;
		cart_qty.text(qty);
	});

});