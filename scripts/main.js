(function( $ ) {
	'use strict';

	$( function() {

		$('.owl-carousel').owlCarousel({
			items: 1,
			singleItem: true,
			loop: true,
			autoplay: true,
			autoplayTimeout: 8000,
			animateOut: 'fadeOut'
		});

	});
})( jQuery );