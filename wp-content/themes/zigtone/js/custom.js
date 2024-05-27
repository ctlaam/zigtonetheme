(function ($) {
    $(document).ready(function () {
        $('.play-music').click(function () {
            console.log("vaoo dayy")
            $(this).hide();
            $('.spin-loading').show()
        })
    });
}(jQuery));
