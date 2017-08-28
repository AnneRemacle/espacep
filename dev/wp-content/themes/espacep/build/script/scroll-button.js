$(document).ready(function() {
    var button = $(".scroll__button");
    $(window).scroll(function() {

        var scrollTop = $(window).scrollTop();

        if (scrollTop >= 800 ) {
            button.addClass("button-visible");
        } else {
            button.removeClass("button-visible");
        }

    });

    $('.scroll__top').click(function() {
        $('html, body').animate({scrollTop: $("#top").offset().top
    },700);
        return false;
    });
});
