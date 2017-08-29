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
        $('#home, #logo3').hide();
         },10000);
         
         setTimeout(function(){  
        $('#home-background-fadein').show();
         },10000);
         
         setTimeout(function(){    
    	$('#home-background-fadein').animate({
			zoom: 1
		}, 1750 );
        }, 12000);
		
        
        setTimeout(function(){    
    	$('#navigation').show();
        }, 18000);
}); //closes the document.ready
