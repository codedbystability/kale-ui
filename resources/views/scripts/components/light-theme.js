/**
 * Light Theme Options
 *
 */

export default function lightTheme() {

    if (document.body.classList.contains('light-theme')) {
        const mainWrapper = document.querySelector('.main-wrapper');
        const navbar = document.querySelector('.c-navbar');
        let mql = window.matchMedia('(max-width: 1023px)');

        if(!mql.matches){
            mainWrapper.style.marginTop= '-' + navbar.clientHeight + 'px';
        }
    }

}
