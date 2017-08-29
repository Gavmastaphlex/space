$(document).ready(function() { 

	var isiPad = navigator.userAgent.match(/iPad/i) != null;

	if(isiPad) {
		$('#quicklink').remove();
		$('#home-quicklink').remove();

		$('#home-logo').css({
    	 top: '150px',
    	 left: '120px'
		});

		$('#navigation').css({
    	 top: '305px',
    	 left: '106px'
		});

	}


});

