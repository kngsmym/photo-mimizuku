jQuery(function($) {
	var current_scrollY;

	$('._p-overlay__trigger').click(function() {
		$('._p-overlay').fadeIn();
		current_scrollY = $( window ).scrollTop(); 
		$('._l-container').css( {
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		} );
	});
	$('._p-overlay__closebtn').click(function() {
		$('._p-overlay').fadeOut();
		$( '._l-container' ).attr( { style: '' } );
	});


});
