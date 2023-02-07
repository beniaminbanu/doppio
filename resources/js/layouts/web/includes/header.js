$(document).ready(function () {

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 40) {
            $("header").addClass("active-header");
            $("header .logo_change").removeClass("green");
        }
        else {
            $("header").removeClass("active-header");
            $("header .logo_change").addClass("green");
        }
    });

    $('.hamburger').on('click', function () {
        $('.menu-hamburger').addClass('menu-hamburger-active');
        $('body').addClass('no-scroll');
    })
    $('.close-menu-hamburger').on('click', function () {
        $('.menu-hamburger').removeClass('menu-hamburger-active');
        $('body').removeClass('no-scroll');
    })

    $('#ro-btn').click(function () {
        $(this).addClass('active-language');
        $('#eng-btn').removeClass('active-language');
    })
    $('#eng-btn').click(function () {
        $(this).addClass('active-language');
        $('#ro-btn').removeClass('active-language');
    })
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".buttonUp").css('display', 'flex');
        }
        else {
            $(".buttonUp").css('display', 'none');
        }
    });
    // $('.elenco-articoli').on('click', 'div', function(e) {
    //     $('.banner-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
    // });

    $('.offer-select').on('click', function () {
        $(this).addClass('active-menu-offer').siblings().removeClass('active-menu-offer');
    })

    $('.first-offer').click(function () {
        $('.first-item').parent().addClass('active');
        $('.first-item').parent().siblings().removeClass('active');
    })

})
