'use strict';

$(document).ready(function () {
  /* -----------------------------------------------------------
    Off canvas menu
  ----------------------------------------------------------- */
  $(function () {
    if (!$('.offcanvas').length) return;

    $('.offcanvas .main-nav-style > ul ul').each(function () {
      $(this).before('<span class="btn-plus"></span>');
    });

    $('body').append($('<div />').addClass('toggle-offcanvas offcanvas-overlay'));

    $('.toggle-offcanvas').off('dbclick').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();

      if (!$('body').hasClass('has-offcanvas')) {
        $('html').css('overflow', 'hidden');
        $('body').addClass('has-offcanvas offcanvas-show');
      } else {
        $('body').removeClass('offcanvas-show');
        setTimeout(function () {
          $('body').removeClass('has-offcanvas');
          $('html').css('overflow', '');
        }, 200);
      }
    });

    $(document.body).off('click').on('click', '.offcanvas .btn-plus', function () {
      $(this).toggleClass('active');
      $(this).siblings('ul').slideToggle();
    });
  });

  /* -----------------------------------------------------------
    .go-to-top-js
  ----------------------------------------------------------- */
  $(function () {
    if (!$('.go-to-top-js').length) return;

    $(document.body).on('click', '.go-to-top-js', function (e) {
      e.preventDefault();
      e.stopPropagation();

      $('html, body').animate({
        scrollTop: 0
      }, 500);

      return false;
    });
  });

  /* -----------------------------------------------------------
    .travel-sports-slider-js
  ----------------------------------------------------------- */
  $(function () {
    if (!$('.travel-sports-slider-js').length) {
      return;
    }

    $('.travel-sports-slider-js').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      speed: 600,
      autoplaySpeed: 6000,
      autoplay: false,
      infinite: true,
      swipe: true,
      fade: false,
      dots: true,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 768,
        settings: 'unslick'
      }]
    });
  });

  /* -----------------------------------------------------------
    .con-video-slider-js
  ----------------------------------------------------------- */
  $(function () {
    if (!$('.con-video-slider-js').length) {
      return;
    }

    $('.con-video-slider-js').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      speed: 600,
      autoplaySpeed: 6000,
      autoplay: false,
      infinite: true,
      swipe: true,
      fade: false,
      dots: true,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true
        }
      }]
    });
  });
});