jQuery(function($) {

    if (!$('body').hasClass('post-type-archive-job_listing')) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 105) $('#page').addClass('fixed');
            else $('#page').removeClass('fixed');
        });
    }
//
});