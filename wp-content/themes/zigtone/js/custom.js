(function ($) {
    $(document).ready(function () {
        const sideBar = $('.sidebar-icon')
        console.log("sideBar:", sideBar)
        $('.sidebar-icon').click(()=>{
            $('.list-menus-drop').slideToggle();
        })
    });
}(jQuery));