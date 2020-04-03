/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function() {

	wp.customize.bind( 'ready', function() {

		// Only show the hex value control when there's a custom color chosen.
		wp.customize( 'header_background_color', function( setting ) {
			wp.customize.control( 'header_color', function( control ) {
				var visibility = function() {
					if ( 'custom' === setting.get() ) {
						control.container.slideDown( 180 );
					} else {
						control.container.slideUp( 180 );
					}
				};

				visibility();
				setting.bind( visibility );
			});
		});
	});

})( jQuery );
