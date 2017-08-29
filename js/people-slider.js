function doAnimation(id) {
    $(id).children('.slideleft').fadeIn(function () {
        $(this).animate({
            marginLeft: '450px'
        }, 700, function () {
            // Animation complete.
        });
    });
    $(id).children('.slideright').fadeIn(function () {
        $(this).animate({
            marginRight: '700px'
        }, 700, function () {
            // Animation complete.
        });
    });
}

function animatePeople(id) {
    // If there are visible people
    if ($('.people:visible').length > 0) {
        // Fade out the visible people and then process the following callback function
        $('.people:visible').fadeOut(function () {
            // Reset the margins
            $('.people').css({
                'margin-left': '',
                'margin-right': ''
            });
            // Do the new animation
            doAnimation(id);
        });
    } else {
        // Do the new animation
        doAnimation(id);
    }
}

$('#nav-button-5').click(function () {
    animatePeople('#people-holder-1');
});
$('#nav-button-6').click(function () {
    animatePeople('#people-holder-2');
});

/*
$('#nav-button-3').click(function () {
    animatePeople('#people-holder-3');
});
$('#nav-button-4').click(function () {
    animatePeople('#people-holder-4');
});
$('#nav-button-5').click(function () {
    animatePeople('#people-holder-4');
});
*/

