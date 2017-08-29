$(document).ready(function(){


function checkIE(){
    var agent = navigator.userAgent;
    var reg = /MSIE\s?(\d+)(?:\.(\d+))?/i;
    var matches = agent.match(reg);

    if (matches != null) {
        return true;
    } else {
    	return false;
    }

}

var ie = checkIE();


if (ie) {

		setTimeout(function(){    
    	$('#navigation').fadeIn(800);
        }, 0);
      
 
    	$('#home-image').css({
    		height: '1093px',
			width: '2200px',
			zoom: 1,
			opacity: 1
		});

  
    	$('#home-logo').css({
			opacity: 1,
			zoom: 1,
			height: '141px',
			width: '745px'
		});

} else {

	setTimeout(function(){    
    	$('#navigation').fadeIn(800);
        }, 4000);
      

		setTimeout(function(){    
    	$('#home-image').animate({
    		height: '1093px',
			width: '2200px',
			zoom: 1,
			opacity: 1
		}, 3000 );
        }, 600);

        setTimeout(function(){    
    	$('#home-logo').animate({
			opacity: 1,
			zoom: 1,
			height: '141px',
			width: '745px'
		}, 3000 );
        }, 590);

}


		
       
}); 