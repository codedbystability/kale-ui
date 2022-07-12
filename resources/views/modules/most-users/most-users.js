/**
 * Carousel
 * https://flickity.metafizzy.co/
 */

import Flickity from 'flickity';

export default function mostUsers() {
  const carousel = document.querySelector('[data-js="most-users"]');
  // When Carousel exists
  if (carousel) {
    // Flickity - fade in for no FOUC, vanilla JS
    // https://codepen.io/desandro/pen/JGoGpm
    var carouselInit = function() {
      carousel.classList.remove('is-hidden');
      carousel.offsetHeight;
      new Flickity(carousel, {
        // options
        cellAlign: 'left',
        wrapAround: true,
        pageDots: false,
        contain: true,
        prevNextButtons: false,
      });
    };

    carouselInit();
  }
}
