$(document).ready(function(){
        
      setTimeout(function(){  
         	$('#home-logo').fadeIn(3000);
        },500);
     
     setTimeout(function(){  
        $('#home-image').fadeIn(6000)
         },550);
            
        setTimeout(function(){  
         	$('#logo2').fadeIn(2000);
        },2000);
          
         setTimeout(function(){  
         	$('#logo3').fadeIn(2000);
        	},3000);
        	              
        setTimeout(function(){  
         $("#nav1").slideToggle(function() {
          $(this).animate({ 'top': '600' }, 500);
		  },500);
		  });
        
}); //closes the document.ready
