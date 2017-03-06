(function( $ ) {
	'use strict';

	$( function() {

		$( '.owl-carousel' ).owlCarousel({
			items: 1,
			singleItem: true,
			loop: true,
			autoplay: true,
			autoplayTimeout: 8000,
			animateOut: 'fadeOut'
		});

		$( '.js-rsvp-avec-toggle' ).change( function() {
			$( '.js-rsvp-avec-info' ).toggleClass( 'hidden' );
		});

		$( '.js-rsvp-joining-toggle' ).change( function() {
			$( '.js-rsvp-joining-info' ).toggleClass( 'hidden' );
		});

	});
})( jQuery );