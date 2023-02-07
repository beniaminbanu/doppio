//Social-media
$(document).ready(function () {
    $('.social-media-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
        responsive: {
            0: {
                items: 2,
                nav: true,
                dots: true
            },
            991: {
                items: 5,
                nav: false,
                dots: false
            }
        }
    })

    //Subscribe
    $('#email-input').keyup(function () {
        if ($(this).val()) {
            $(".subscribe").addClass('active-subscribe');
        } else {
            $(".subscribe").removeClass('active-subscribe');
        }
    })
    $('#email-input').click(function () {
        $(this).parent().addClass('active-input');
    })
    $('footer').mouseover(function () {
        if (!$('#email-input').val()) {
            $('#email-input').parent().removeClass('active-input');
        }
    })
    $('#social-media').mouseover(function () {
        if (!$('#email-input').val()) {
            $('#email-input').parent().removeClass('active-input');
        }
    })
    //Partners
    $('.partners-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
        responsive: {
            0: {
                items: 1
            }
        }
    })
    $(' .custom_header .header .logo_brand .see').on('click', function () {
        $(".free-option").slideToggle();
        $(".arrow").toggleClass('rotate');
    })
});

