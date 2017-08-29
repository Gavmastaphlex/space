$(document).ready(function() {

		
   
	$('.project-menu-item').hover(

		 function () {

		var targID  = $(this).attr("id");
		var pictureID = $('#' + targID + '-pic');
		 
		 pictureID.stop(true, true).fadeIn(700);
		 
	  }, 
  	function () {
  		var targID  = $(this).attr("id");
		var pictureID = $('#' + targID + '-pic');
     pictureID.fadeOut(700);
  	});
  	



});

