/*jslint browser: true, devel: true, node: true, nomen: true, plusplus: true*/
/*global $, jQuery*/

(function () {

  "use strict";

  var $ = require("jquery"),
      debounce = require('debounce'),
      slides = require("./components/slides"),
      slideshow = slides($('#slides'));

  function stopIframe() {

    var iframes = $('iframe').each(function () {

      console.log($(this).parent('.slide').hasClass('shown'));

      if (!$(this).parent('.slide').hasClass('shown')) {
        $(this).attr('src', $(this).attr('src'));
      }

    });

  }


  $(document).ready(function () {

    // Init
    slideshow.setup();

    $(".extended-caption").html($('.slide.shown').data("extended"));

    // Next image
    $(document).on('click', '.next', function (e) {
      debounce(slideshow.next(), 200);
      stopIframe();
      $('.text-container').removeClass('active');
    });

    // Prev. image
    $(document).on('click', '.previous', function (e) {
      debounce(slideshow.previous(), 200);
      stopIframe();
      $('.text-container').removeClass('active');
    });

    // Prev. image
    $(document).on('click', '.about-menu', function (e) {
      $('.text-container').toggleClass('active');
    });

  });

}());
