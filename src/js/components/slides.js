/*jslint browser: true, devel: true, node: true, nomen: true, plusplus: true*/
/*global $, jQuery*/

"use strict";

var $ = require("jquery");

function slides(context) {

  return {
    loop: {},
    currentSlide: {},
    slideContainer: context.children('.slides-container'),
    setup: function setup() {
      
      this.currentSlide = this.slideContainer.children('.shown');
      
      $(".caption").html(this.currentSlide.data("caption"));
      $('#index').html(this.currentSlide.index() + 1);
      $('#total').text(this.slideContainer.children().length);

    },
    next: function next() {
      
      console.log(this.currentSlide);

      $(this.currentSlide).removeClass("shown");

      if (this.currentSlide.is(':last-child')) {
        this.slideContainer
          .find('.slide')
          .first()
          .addClass("shown");
      } else {
        this.currentSlide
          .next(".slide")
          .addClass("shown");
      }

      this.currentSlide = this.slideContainer.children('.shown');

      $(".caption").html(this.currentSlide.data("caption"));
      $('#index').html(this.currentSlide.index() + 1);
      $(".extended-caption").html(this.currentSlide.data("extended"));     
      if(this.currentSlide.data("pdf")) {
        $(".extended-caption").html('<a href="'+ this.currentSlide.data("pdf") + '" target=_blank download>download pdf</a>');  
      }

    },
    previous: function previous() {
      
      console.log(this.currentSlide);

      $(this.currentSlide).removeClass("shown");

      if (this.currentSlide.is(':first-child')) {
        this.slideContainer
          .find('.slide')
          .last()
          .addClass("shown");
      } else {
        this.currentSlide
          .prev(".slide")
          .addClass("shown");
      }

      this.currentSlide = this.slideContainer.children('.shown');

      $(".caption").html(this.currentSlide.data("caption"));
      $('#index').html(this.currentSlide.index() + 1);
      $(".extended-caption").html(this.currentSlide.data("extended"));     
      if(this.currentSlide.data("pdf")) {
        $(".extended-caption").html('<a href="'+ this.currentSlide.data("pdf") + '" target=_blank download>download pdf</a>');  
      }
    }
  };

}

module.exports = slides;