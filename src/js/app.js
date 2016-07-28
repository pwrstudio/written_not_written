/*jslint browser: true, devel: true, node: true, nomen: true, plusplus: true*/
/*global $, jQuery*/

(function () {

  "use strict";

  // Require jQuery
  global.$ = require("jquery");

  require("swiper");
  //  require("fullpage.js");

  function setUpGallery() {

    var images = [],
      captions = [],
      imagesCounter = 0,
      i = 0;

    $('.image-list-container').find('img').each(function () {
      images.push($(this).attr("src"));
      captions.push($(this).data("alt"));
    });

    for (i; i < images.length; i += 1) {
      if (i === 0) {
        $(".image-container").append("<img src='" + images[0] + "' class='shown' alt='" + captions[0] + "' >");
      } else {
        $(".image-container").append("<img src='" + images[i] + "' alt='" + captions[i] + "' >");
      }
    }

    $(".caption").html($(".image-container img.shown").first().attr("alt"));

  }

  $(document).ready(function () {

    // Init
    setUpGallery();

    // Next image
    $(document).on('click', '.next', function (e) {

      var currentImage = $(".image-container img.shown");

      currentImage.removeClass("shown");

      if (currentImage.is(':last-child')) {
        $(".image-container img")
          .first()
          .addClass("shown");
      } else {
        currentImage
          .next("img")
          .addClass("shown");
      }

      $(".caption").html($(".image-container img.shown").first().attr("alt"));

      return false;

    });

    // Prev. image
    $(document).on('click', '.previous', function (e) {

      var currentImage = $(".image-container img.shown");

      currentImage.removeClass("shown");

      if (currentImage.is(':first-child')) {
        $(".image-container img").last().addClass("shown");
      } else {
        currentImage.prev("img").addClass("shown");
      }

      $(".caption").html($(".image-container img.shown").first().attr("alt"));

      return false;

    });

  });

}());