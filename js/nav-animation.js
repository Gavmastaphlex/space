$(document).ready(function() {

//==========ITEM 1=================

  /*$('#nav1').hover(
  function () {
     $('#test').slideDown(400); 
      });
  }, 
  function () {
     $('#process').slideUp();
  });*/
  
   
	$('#nav1').hover(
		 function () {
		 $('#process').stop(true, true).slideDown(400); 
		 
		 $('#process').animate({
		  width: "18px",
		  height: "299px"
		 });
		 
	  }, 
  	function () {
     $('#process').hide();
  	});
  	
  	
  	
	$('#nav2').hover(
	 function () {
	 $('#people').stop(true, true).slideDown(400); 
	 $('#people').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#people').hide();
  	});


  	
	$('#nav3').hover(
	 function () {
	 $('#residential').stop(true, true).slideDown(400); 
	 $('#residential').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#residential').hide();
  	});

		$('#nav4').hover(
	 function () {
	 $('#commercial').stop(true, true).slideDown(400); 
	 $('#commercial').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#commercial').hide();
  	});

  		$('#nav5').hover(
	 function () {
	 $('#industrial').stop(true, true).slideDown(400); 
	 $('#industrial').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#industrial').hide();
  	});
  	
  	 $('#nav6').hover(
	 function () {
	 $('#interiors').stop(true, true).slideDown(400); 
	 $('#interiors').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#interiors').hide();
  	});
 
 	$('#nav7').hover(
	 function () {
	 $('#faqs').stop(true, true).slideDown(400); 
	 $('#faqs').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#faqs').hide();
  	});
  	
  	 $('#nav8').hover(
	 function () {
	 $('#links').stop(true, true).slideDown(400); 
	 $('#links').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#links').hide();
  	});
  	
  	 $('#nav9').hover(
	 function () {
	 $('#contact').stop(true, true).slideDown(400); 
	 $('#contact').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#contact').hide();
  	});


  	   	 $('#nav10').hover(
	 function () {
	 $('#renovations').stop(true, true).slideDown(400); 
	 $('#renvations').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#renovations').hide();
  	});

  	  $('#nav11').hover(
	 function () {
	 $('#recognition').stop(true, true).slideDown(400); 
	 $('#recognition').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#recognition').hide();
  	});


  	  $('#nav12').hover(
	 function () {
	 $('#facebook').stop(true, true).slideDown(400); 
	 $('#facebook').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#facebook').hide();
  	});


  	  $('#nav13').hover(
	 function () {
	 $('#media').stop(true, true).slideDown(400); 
	 $('#media').animate({
	  width: "18px",
	  border: "1px"
	 });
     }, 
  	function () {
     $('#media').hide();
  	});

});