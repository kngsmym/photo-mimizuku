jQuery(function($) {
	var current_scrollY;

	$(document).on('click', '._p-overlay__trigger', function(e){
		e.preventDefault();
		$('._p-overlay').fadeIn();
		current_scrollY = $( window ).scrollTop(); 
		$('._l-container').css( {
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		});
	});
	$(document).on('click', '._p-overlay__closebtn', function(e){
		e.preventDefault();
		$('._p-overlay').fadeOut();
		$( '._l-container' ).attr( { style: '' } );
	});

//pjax

    $.pjax({
        area : '#pjax-container',
        link : 'a.pjax-trigger'
    });
    $(document).bind('pjax:fetch', function() {
    	$('#pjax-container .inner').fadeOut();
	});
    $(document).bind('pjax:render', function() {
    	$('#pjax-container .inner').css('opacity','0');
    	$('#pjax-container .inner img').bind("load", function(){
	    	$('#pjax-container .inner').fadeTo("normal", 1);
	    });  
	});


});



//		$('._p-tags__item').each(function(){
//			$(this).removeClass('_p-tags__item--active');
//		});