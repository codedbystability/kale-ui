/**
 * Carousel
 * https://flickity.metafizzy.co/
 */

import Flickity from 'flickity';

export default function customizedAnalysis() {
  const carousel = document.querySelector('[data-js="customized-analysis"]');
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
        arrowShape:
          'M87.1217297 41.823083H38.7998982c-3.7461633 0-5.6193021-4.5576503-2.9434549-7.2386479l20.3365763-20.3753305c3.210948-3.2171515 3.210948-8.57907816 0-11.79624102-3.2110624-3.21715144-8.5627569-3.21715144-11.7738194 0L2.40827281 44.2358894c-3.21103041 3.2171514-3.21103041 8.5791467 0 11.7962981L43.8840995 97.5870793C45.4895162 99.1957693 47.6302627 100 49.7708947 100c2.1407465 0 4.2813785-.8042307 5.8869097-2.4129207 3.2110625-3.2171514 3.2110625-8.5790324 0-11.7961839L35.8564433 65.6836418c-2.6758472-2.6809976-.8027084-7.2386478 2.9434549-7.2386478h48.8569322c4.8165937 0 8.8303646-4.2894591 8.2951494-9.1151863-.5351008-4.2895733-4.5489861-7.5067247-8.8302501-7.5067247z',
      }).resize();
    };

    carouselInit();
  }
}
