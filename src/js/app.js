/*jslint browser: true, devel: true, node: true, nomen: true, plusplus: true*/
/*global $, jQuery*/

(function () {

  "use strict";

  var $             = require("jquery"),
      debounce      = require('debounce'),
      slides        = require("./components/slides"),
      slideshow     = slides($('#slides'));

  $(document).ready(function () {

    // Init
    slideshow.setup();

    // Next image
    $(document).on('click', '.next', function (e) {
      debounce(slideshow.next(), 200);
    });

    // Prev. image
    $(document).on('click', '.previous', function (e) {
      debounce(slideshow.previous(), 200);
    });

  });

}());