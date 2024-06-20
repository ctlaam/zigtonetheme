jQuery(document).ready(function ($) {
    var audio = null;

    $('.icon-play').each(function () {
        var audioUrl = $(this).data('link');
        var audioElement = new Audio(audioUrl);

        audioElement.addEventListener('loadedmetadata', function () {
            var duration = audioElement.duration;
            var minutes = Math.floor(duration / 60);
            var seconds = Math.floor(duration % 60).toString().padStart(2, '0');
            $(this).closest('.details').find('.duration').text(`${minutes}:${seconds}`);
        }.bind(this));
    });


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
    $(document).on('click', '.download-button', function() {
        $('#wait-for').html('Wait until <span id="countdown">3s</span> has elapsed');
        $('#wait-for').removeClass('d-none');
        $('.download-box').addClass('d-none');
        var timeleft = 2;
        var downloadTimer = setInterval(function() {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                $('#wait-for').html('');
                $('.download-box').removeClass('d-none');
                $('#wait-for').addClass('d-none');
            } else {
                document.getElementById("wait-for").innerHTML = 'Wait until <span id="countdown">' + timeleft + 's</span> has elapsed';
            }
            timeleft -= 1;
        }, 1000);
    });

    $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
        $(this).one("touchmove", function(event){
            var xMove = event.originalEvent.touches[0].pageX;
            if( Math.floor(xClick - xMove) > 5 ){
                $(this).carousel('next');
            }
            else if( Math.floor(xClick - xMove) < -5 ){
                $(this).carousel('prev');
            }
        });
        $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
        });
    });

    $(document).on('click', '.w-wallpaper', function () {
        var $jq = jQuery.noConflict();
        let title = $(this).data('title');
        let file = $(this).data('file');
        let fileIOS = $(this).data('file-ios');
        let carouselInner = $(this).data('carousel');
        $('#w-wallpaper-detail-title').html(title);
        $('.w-wallpaper-download').attr('href', file);
        $('.w-wallpaper-download-ios').attr('href', fileIOS);
        $('.carousel-inner').html(carouselInner);
        $jq('#w-wallpaper-detail').modal('toggle');
    });

    $('.carousel').on('slide.bs.carousel', function (event) {
        let currentIndex = $(event.relatedTarget).index();
        let linkDownload = $('.carousel-item').eq(currentIndex).data('file');
        let linkDownloadIOS = $('.carousel-item').eq(currentIndex).data('file-ios');
        $('.w-wallpaper-download').attr('href', linkDownload);
        $('.w-wallpaper-download-ios').attr('href', linkDownloadIOS);
    });
});