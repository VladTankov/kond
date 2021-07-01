$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top -200;
        $('body,html').animate({scrollTop: top}, 800);
    });
});