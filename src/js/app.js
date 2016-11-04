jQuery(function($) {
	var current_scrollY;

	$(document).on('click', '._p-overlay__trigger', function(){
		$('._p-overlay').fadeIn();
		current_scrollY = $( window ).scrollTop(); 
		$('._l-container').css( {
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		});
	});
	$(document).on('click', '._p-overlay__closebtn', function(){
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
    	$('#pjax-container .inner img').bind("load", function(){  
	    	$('#pjax-container .inner').css('display','none');
	    	$('#pjax-container .inner').fadeIn();
	    });  
	});


});


