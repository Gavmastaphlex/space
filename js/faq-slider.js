$(document).ready(function() {

	$('a.panel').click(function () {

		$('a.faq-active').addClass('faq-inactive').removeClass('faq-active');
		$(this).addClass('faq-active').removeClass('faq-inactive');
		
		current = $(this);
		
		$('#wrapper').scrollTo($(this).attr('href'), 800);		
		
		return false;
	});

	$(window).resize(function () {
		resizePanel();
	});
	
});

function resizePanel() {
 
    //get the browser width and height
    width = $(window).width();
    height = $(window).height();
 
    //get the mask height: height * total of items
    mask_height = height * $('.item').length;
         
    //set the dimension     
    $('#wrapper, .item').css({width: width, height: height});
    $('#mask').css({width: width, height: mask_height});
 
    //if the item is displayed incorrectly, set it to the corrent pos
    $('#wrapper').scrollTo($('a.selected').attr('href'), 0);
         
}
