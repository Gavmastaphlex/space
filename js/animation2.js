$(document).ready(function(){
        
      setTimeout(function(){  
         	$('#logo1').fadeIn(3000);
        },500);
     
     setTimeout(function(){  
        $('#home').animate({
         	opacity: 1.0
         	}, 10000)
         }, 2000);
         
          setTimeout(function(){  
         	$('#logo2').fadeIn(2000);
        },2000);
          
         setTimeout(function(){  
         	$('#logo3').fadeIn(2000);
        	},3000);
        	
        setTimeout(function(){    
    	$('#logo3').animate({
			zoom: 1
		}, 1750 );
        }, 7500);
        
        setTimeout(function(){  
         	$('#logo1, #logo2').fadeOut(500);
        	},6000);
        	
        setTimeout(function(){  
        $('#home').animate({
         	zoom: 1
         	}, 5000)
         }, 11000);
         
         setTimeout(function(){    
    	$('#logo3').animate({
		  width: "653px",
		  height: "134px",
		   left: 300
		}, 5000 );
        }, 11000);
        
        setTimeout(function(){    
    	$('#navigation').show();
        }, 20000);
}); //closes the document.ready
