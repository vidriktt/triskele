(function($) {
     "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
    
    var audio = new Audio("./audio/101_mu_syda_lyhike.mp3");

    $('#play-pause-button').on("click",function(){
        if($(this).hasClass('fa-play'))
        {
            $(this).removeClass('fa-play');
            $(this).addClass('fa-pause');
            audio.play();
        }
        else
        {
            $(this).removeClass('fa-pause');
            $(this).addClass('fa-play');
            audio.pause();
        }
    });

    audio.onended = function() {
        $("#play-pause-button").removeClass('fa-pause');
        $("#play-pause-button").addClass('fa-play');
    };

})(jQuery); // End of use strict