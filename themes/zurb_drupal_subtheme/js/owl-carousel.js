/**
 *  Create the splitter, set the viewport size, and set the position of the scrollbar to the first item.
 */
(function($){
  "use strict";

  var clips = $('.node--type-tricks .field-node--field-clips .field-item');
  var moreTricks = $('.more-tricks .carousel');

  Drupal.behaviors.owlCarousel = {
  attach: function(context) {
    clips.owlCarousel({
      margin: 10,
      nav: true,
      autoplay: false,
      lazyLoad : true,
      loop: true,
      dots: true,
      responsive:{
        0:{
          items: 1
        },
        640:{
          items: 2
        }
      }
    });
    moreTricks.owlCarousel({
      margin: 10,
      nav: true,
      autoplay: false,
      loop: true,
      dots: false,
      responsive:{
        0:{
          items: 2
        },
        640:{
          items: 3
        },
        992:{
          items: 4
        }
      }
    });
  }
};
})(jQuery);