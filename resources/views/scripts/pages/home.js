/**
 * Home Page Scripts
 *
 */

import Flickity from 'flickity';
// import pullRight from 'Components/pull-right';

export default function homePage() {
  if (document.body.classList.contains('p-home-page')) {
    const sectionInvestmentDiversity = document.querySelector('.s-investment-diversity');
    if(sectionInvestmentDiversity) {
      const carousel = sectionInvestmentDiversity.querySelector('.carousel');
      const carouselLanding = sectionInvestmentDiversity.querySelector('.carousel-landing');
      const sectionInvestmentDiversityNav = sectionInvestmentDiversity.querySelector('.s-investment-diversity__nav');
      const sectionInvestmentDiversityNavLink = sectionInvestmentDiversityNav.querySelectorAll('a');
      if (carousel) {
        const flkty = new Flickity(carousel, {
          cellAlign: 'left',
          wrapAround: true,
          contain: false,
          prevNextButtons: false,
          pageDots: false,
        });

        // for (var i = 0, len = sectionInvestmentDiversityNavLink.length; i < len; i++) {
        //   sectionInvestmentDiversityNavLink[i]
        //   if(i == 0) {
        //     sectionInvestmentDiversityNavLink[0].click();
        //   }
        //   sectionInvestmentDiversityNavLink[i].addEventListener('click', (e) => {
        //     sectionInvestmentDiversityNavLink[i].classList.add('is-active');
        //     flkty.select( i, false, true );
        //     e.preventDefault();
        //   });
        // }

        sectionInvestmentDiversityNavLink.forEach((link, index) => {
          link.classList.remove('is-active');
          if(index == 0) {
            link.classList.add('is-active');
          }
          link.addEventListener('click', (e) => {
            const text = document.querySelector('.s-investment-diversity__text');
            const linkText = link.dataset.content;
            text.innerHTML = linkText;
            for (var i = 0, len = sectionInvestmentDiversityNavLink.length; i < len; i++){
              sectionInvestmentDiversityNavLink[i].classList.remove('is-active');
            }
            link.classList.add('is-active');
            flkty.select( index, false, true );
            e.preventDefault();
          });
        });

        flkty.on( 'change', function( index ) {
          sectionInvestmentDiversityNavLink[index].click();
        });
      }

      if(carouselLanding) {
        const flktyLanding = new Flickity(carouselLanding, {
          cellAlign: 'left',
          wrapAround: true,
          contain: false,
          prevNextButtons: true,
          pageDots: false,
          arrowShape: 'M1.54667 5.33997h4.22171c.3273 0 .49094.39885.25716.63347L4.24881 7.75653c-.28054.28154-.28054.75077 0 1.03231.28053.28154.7481.28154 1.02863 0L8.9478 5.12882c.28054-.28154.28054-.75078 0-1.03232L5.3242.459935C5.18393.319165 4.99691.24878 4.80988.24878c-.18702 0-.37405.070385-.51432.211155-.28053.281541-.28053.750775 0 1.032315l1.72998 1.75963c.23378.23462.07014.63347-.25716.63347H1.49991c-.4208 0-.771474.37538-.724718.79769.046757.37539.397428.65693.771478.65693z'
        });
      }
    }

  }
}
