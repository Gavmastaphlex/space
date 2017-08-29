$("#project-nav a, #project-nav-interiors a, #project-nav-renovations a").click(function(ev) {

	 ev.preventDefault();
	 
	 var $self=$(this);
	 

	$(".project-1").animate( {"top": "+=-500px"}, 1200, function() { document.location = $self.attr('href'); } );
	$(".project-2").animate( {"top": "+=-500px"}, 1400, function() { document.location = $self.attr('href'); } );
	$(".project-3").animate( {"top": "+=-500px"}, 1000, function() { document.location = $self.attr('href'); } );
	$(".project-4").animate( {"top": "+=-500px"}, 1200, function() { document.location = $self.attr('href'); } );
	$(".project-5").animate( {"top": "+=-500px"}, 1400, function() { document.location = $self.attr('href'); } );
	$(".project-6").animate( {"top": "+=-500px"}, 1000, function() { document.location = $self.attr('href'); } );
	$("#project-logo").animate( {"top": "+=-500px"}, 1200, function() { document.location = $self.attr('href'); } );
});

function showComplete(){
	 
}

