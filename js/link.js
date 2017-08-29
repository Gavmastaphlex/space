$(document).ready(function() {


    $(function() {


        $('.hover-link').mouseenter(function() {
            var targID  = $(this).attr("id");
            $('#line-' + targID).stop(true, true).fadeIn('slow');

            $('#project-line-' + targID).mouseleave(function() {
                $('#line-' + targID).fadeOut('slow');
            });  


        });
        

    });


});