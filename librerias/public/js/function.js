$('nav').find('.navbar-nav').find('.nav-item').on('click', function(){
    $('nav').find('.navbar-nav').find('.nav-item.active').removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function () {

    $('nav').find('.navbar-nav').find('.nav-item').on('click', function () {

        $('.navbar li').removeClass('active');
        $(this).addClass('active');

        var identifiador = $(this).attr('href');

        $('html,body').animate({
            scrollTop: $(identifiador).position().top
        }, 800);

    });
    
    // Waypoints (punto de paso)
    $('section').waypoint(
        function (direction) {

            var wayID;
            var previous;

            if (direction === 'down') {
                wayID = $(this)[0].element.id;
            } else {
                previous = $(this).prev();
                wayID = $(this)[0].element.id;
            }

            $('.active').removeClass('active');
            $('.navbar a[href="#' + wayID + '"]').parent('li').addClass('active');


        }, { offset: '40%' });

});