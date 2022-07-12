/*
 * @title App
 * @description Application entry point
 */

// import Flickity from 'flickity';
import 'flickity/css/flickity.css';

// Polyfills
import 'Utils/_matches.polyfill.js';
import 'Utils/_closest.polyfill.js';
import { getAllParite } from "Utils/getAllParite";
// Misc
// Use log() instead of console.log()
// const log = console.log.bind(console);
import 'easy-toggle-state';
//import 'chart.js';

import Swal from 'sweetalert2'


// Modules
import homeSlider from 'Modules/home-slider/home-slider';
import navbar from 'Modules/navbar/navbar';
import searchOverlay from 'Modules/search-overlay/search-overlay';
import homeProductProperties from 'Modules/home-product-properties/home-product-properties';
import priceBoxes from 'Modules/price-boxes/price-boxes';
import mostUsers from 'Modules/most-users/most-users';
import investmentTable from 'Modules/investment-table/investment-table';
import customizedAnalysis from 'Modules/customized-analysis/customized-analysis';
import createDemo from 'Modules/create-demo/create-demo';
import liveExchange from 'Modules/live-exchange/live-exchange';

// Components
import collapse from 'Components/collapse.js';
import smoothScroll from 'Components/smooth-scroll';
import toggleElement from 'Components/toggle-element';
import lightTheme from 'Components/light-theme';
import pullRight from 'Components/pull-right';
import tooltip from 'Components/tooltip';
import modals from 'Components/modals';
import DailyPopUp from 'Components/dailyPopup';
import formValidation from 'Components/form-validation';

// Pages
import homePage from 'Pages/home';
import formPage from 'Pages/form';
import dataBankPage from 'Pages/data-bank';
import tradingHoursPage from 'Pages/trading-hours';
import economicCalendarPage from 'Pages/economic-calendar';
import investmentDetails from 'Pages/investment-details';

document.addEventListener('DOMContentLoaded', function() {

  // Components
  collapse();
  smoothScroll();
  toggleElement();
  lightTheme();
  document.querySelectorAll('[data-pull-right]').forEach(item => {
    pullRight(item, 'init');
  });
  tooltip();
  modals();
  formValidation();
  //DailyPopUp();

  // Modules
  homeSlider();
  navbar();
  searchOverlay();
  homeProductProperties();
  priceBoxes();
  mostUsers();
  investmentTable();
  customizedAnalysis();
  createDemo();
  liveExchange();

  // Pages
  homePage();
  formPage();
  dataBankPage();
  tradingHoursPage();
  economicCalendarPage();
  investmentDetails();

});
window.addEventListener('resize', function() {
  document.querySelectorAll('[data-pull-right]').forEach(item => {
    pullRight(item, 'init');
  });
});
