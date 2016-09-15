$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $('.navbar-fixed-top').css('opacity', '0.5');
                $('.navbar-fixed-top').css('transition', '0.5s');
                $('.navbar-fixed-top').css('height', '50px');
            }
            else {
                $(".navbar-fixed-top").css('opacity', '1');
                $('.navbar-fixed-top').css('transition', '0.5s');
                $('.navbar-fixed-top').css('height', '5px');
            }
        });
    }
});