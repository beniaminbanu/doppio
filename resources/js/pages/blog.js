$(document).ready(function () {

    $('.blog-article').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
        dots: true,
        items: 1,

    })
    $('.top_slider').owlCarousel({
        loop:true,
        nav:true,
        autoWidth: true,
        navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
        responsive: {
            0: {
                items: 2,
                dots: true,
                autoHeight: true,
                margin: 20,
            },
            991: {
                items: 3,
                dots: true,
                margin: 20,

            },
            1200: {
                items: 4,
                dots: false,
                autoHeight: false,
                margin: 25,
            }
        }

    })
});
