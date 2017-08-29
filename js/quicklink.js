$(document).ready(function() { 

	var height = $(window).height();
	//var adjHeight = height * 1.1;
	  $('.page-container').height(height);

	$(window).resize(function() {

	  var height = $(window).height();
	  //var adjHeight = height * 1.1;
	  $('.page-container').height(height);

	  });


});

