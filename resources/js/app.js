$(document).ready(function () {
    //* Activer l'overlay du login quand on clique sur le bouton *//
    let LoginButton = $('#loginButton');
    let Overlay = $('.overlay');
    let Body = $('body');
    let FormLogin = $('.login-form');

    LoginButton.on("click", function (e) {
        if (!Overlay.hasClass("active")) {
            Overlay.addClass("active");
            Body.css("overflow", "hidden");
        }
    });

    FormLogin.on("click", function (e) {
        e.stopPropagation();
    });

    Overlay.on("click", function (e) {
        e.stopPropagation();
        $(this).removeClass('active');
        Body.css("overflow", "auto");
    });
});