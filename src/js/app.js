jQuery(function($) {

	$('._p-overlay__trigger').click(function() {
		$('._p-overlay').fadeIn();
	});
	$('._p-overlay__closebtn').click(function() {
		$('._p-overlay').fadeOut();
	});


});
