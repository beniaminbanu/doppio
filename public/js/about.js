/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/pages/about.js ***!
  \*************************************/
$(document).ready(function () {
  $('.service').owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    dots: true,
    navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
    responsive: {
      0: {
        items: 1,
        margin: 0
      },
      991: {
        items: 2
      },
      1200: {
        items: 6
      }
    }
  });
  $('.blog').owlCarousel({
    loop: true,
    margin: 20,
    navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
    responsive: {
      0: {
        items: 1,
        nav: true,
        dots: true
      },
      991: {
        items: 2,
        nav: false,
        dots: false
      }
    }
  });
});
/******/ })()
;