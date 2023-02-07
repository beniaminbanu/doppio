/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/pages/menu.js ***!
  \************************************/
$(document).ready(function () {
  $('.menu_slider').owlCarousel({
    loop: false,
    margin: 40,
    nav: false,
    autoWidth: true,
    // autoHeight: true,
    dots: false,
    responsive: {
      0: {
        items: 2,
        center: true,
        loop: true,
        margin: 20
      },
      1200: {
        items: 5
      }
    }
  });

  if ($(window).width() >= 1200) {
    $('.menu_slider .owl-item').on('click', function (event) {
      var slider = $(this);
      $('.menu_slider .owl-item').removeClass('activ');
      slider.addClass('activ');
    });
  }
});
/******/ })()
;