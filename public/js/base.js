/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/pages/base.js ***!
  \************************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//Social-media
$(document).ready(function () {
  var _$$owlCarousel;

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
  }); //Subscribe

  $('#email-input').keyup(function () {
    if ($(this).val()) {
      $(".subscribe").addClass('active-subscribe');
    } else {
      $(".subscribe").removeClass('active-subscribe');
    }
  });
  $('#email-input').click(function () {
    $(this).parent().addClass('active-input');
  });
  $('footer').mouseover(function () {
    if (!$('#email-input').val()) {
      $('#email-input').parent().removeClass('active-input');
    }
  });
  $('#social-media').mouseover(function () {
    if (!$('#email-input').val()) {
      $('#email-input').parent().removeClass('active-input');
    }
  }); //Partners

  $('.partners-carousel').owlCarousel((_$$owlCarousel = {
    loop: true,
    margin: 10,
    nav: true
  }, _defineProperty(_$$owlCarousel, "nav", true), _defineProperty(_$$owlCarousel, "autoplay", true), _defineProperty(_$$owlCarousel, "autoplayTimeout", 10000), _defineProperty(_$$owlCarousel, "autoplayHoverPause", true), _defineProperty(_$$owlCarousel, "navText", ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"]), _defineProperty(_$$owlCarousel, "responsive", {
    0: {
      items: 1
    }
  }), _$$owlCarousel));
  $(' .custom_header .header .logo_brand .see').on('click', function () {
    $(".free-option").slideToggle();
    $(".arrow").toggleClass('rotate');
  });
});
/******/ })()
;