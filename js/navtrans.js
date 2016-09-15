$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $('.navbar-fixed-top').addClass('change');
                $('.navbar-brand').addClass('change');
                $('.liens_nav').addClass('change');
                $('.navbar-collapse').addClass('change');
                $('.navbar-header').addClass('change');
            }
            else {
                $(".navbar-fixed-top").removeClass('change');
                $(".navbar-brand").removeClass('change');
                $(".liens_nav").removeClass('change');
                $(".navbar-header").removeClass('change');
            }
        });
    }
});