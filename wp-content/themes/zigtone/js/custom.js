jQuery(document).ready(function ($) {
    var audio = null;

    $('.icon-play').click(function () {
        if ($(this).hasClass('fa-play-circle')) {
            if (!audio) {
                audio = new Audio($(this).data('link'));
                audio.play();
            } else {
                audio.pause();
                audio = new Audio($(this).data('link'));
                audio.play();
                $('.fa-pause-circle').removeClass('fa-pause-circle').addClass('fa-play-circle');
            }
            $(this).removeClass('fa-play-circle').addClass('fa-pause-circle');
        } else {
            $(this).removeClass('fa-pause-circle').addClass('fa-play-circle');
            if (audio) {
                audio.pause();
            }
        }
    });
});