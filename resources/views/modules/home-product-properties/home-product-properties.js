/**
 * Carousel
 * https://flickity.metafizzy.co/
 */

import  Flickity from 'flickity';
import Chart from 'chart.js';
import { csv } from 'd3';

export function makeChart(res, symbol) {
  const dayLabel = res.map(function (d) {
    return d.timestamp
  });
  const dayTemp = res.map(function (d) {
    return d.high
  });

  const ctx = document.getElementById("product-chart--"+symbol).getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: dayLabel,
      datasets: [
        {
          // label: 'This week',
          data: dayTemp,
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
        }
      ]
    },
    options: {
      elements: {
        point:{
          radius: 0
        }
      },
      legend: {
        display: false,
      },
      tooltop: {
        enabled: false
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      },
    }
  });
}

export function UpdateSpreadData() {
  let formData = new FormData();
  formData.append('ownerid', 1);
  fetch('/spreadData', {
    method: 'GET', // or 'PUT'
   // body: formData
  })
    .then((response) => response.json())
    .then((datas) => {
      const $lines = "";
    
      datas.forEach(function(data) {
        const $row = data;
       
        if(
          $row.SYMBOL === 'TSLA' || $row.SYMBOL === 'GOOGL' || $row.SYMBOL === 'NFLX' || $row.SYMBOL === 'BTCUSD' || $row.SYMBOL === 'EURUSD' || $row.SYMBOL === 'USDTRY'
        ) {


          if($row.SYMBOL === 'BTCUSD') {
            csv('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='+$row.SYMBOL+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv')
              .then((res) => {
                makeChart(res, 'BTCUSD')
              });
          } else if($row.SYMBOL === 'EURUSD' ) {
            csv('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='+$row.SYMBOL+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv')
              .then((res) => {
                makeChart(res, 'EURUSD')
              });
          } else if($row.SYMBOL === 'USDTRY') {
            csv('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='+$row.SYMBOL+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv')
              .then((res) => {
                makeChart(res, 'USDTRY')
              });
          }

          const $class = "red-skin" ;
          const $class2 = "red-skin" ;

          if($row.DIRECTION == 1) {
            const $class = "green-skin" ;
            const $class2 = "green-skin";
          }

          const newsymbol = $row.SYMBOL.replace('&','');
          const newsymbolBid = "LiSpan_BID_" + $row.SYMBOL;
          const newsymbolAsk = "LiSpan_ASK_" + $row.SYMBOL;
          const newsymbolAsk1 = "LiSpan_ASK1_" + $row.SYMBOL;
          const newsymbolSpread = "LiSpan_SPREAD_" + $row.SYMBOL;
          const newsymbolIcon = "LiSpan_Icon_" + $row.SYMBOL;

        
     
        

          document.getElementById(newsymbolBid).innerHTML = $row.BID;
          document.getElementById(newsymbolAsk).innerHTML = $row.ASK;

          if(document.getElementById(newsymbolAsk1) !== null)
          {
            document.getElementById(newsymbolAsk1).innerHTML = $row.ASK;
          }
          if ($row.SPREAD == 0) {
            const bid = parseFloat($row.BID.replace(".","").replace(",","."));
            const ask = parseFloat($row.ASK.replace(".","").replace(",","."));
            const spread =(ask-bid).toFixed(6);

            document.getElementById(newsymbolSpread).innerHTML = spread;
          } else {
            document.getElementById(newsymbolSpread).innerHTML = $row.SPREAD;
            // $("#LiSpan_SPREAD_" + newsymbol).html($row['SPREAD']);
          }

         document.getElementById(newsymbolIcon).classList.remove('green-skin');
          document.getElementById(newsymbolIcon).classList.remove('red-skin');
          document.getElementById(newsymbolIcon).classList.add($class);
        }
      });

    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

export function carouselInit() {
  carousel.classList.remove('is-hidden');
  carousel.offsetHeight;
  new Flickity(carousel, {
    // options
    cellAlign: 'left',
    wrapAround: true,
    pageDots: false,
    arrowShape: 'M87.1217297 41.823083H38.7998982c-3.7461633 0-5.6193021-4.5576503-2.9434549-7.2386479l20.3365763-20.3753305c3.210948-3.2171515 3.210948-8.57907816 0-11.79624102-3.2110624-3.21715144-8.5627569-3.21715144-11.7738194 0L2.40827281 44.2358894c-3.21103041 3.2171514-3.21103041 8.5791467 0 11.7962981L43.8840995 97.5870793C45.4895162 99.1957693 47.6302627 100 49.7708947 100c2.1407465 0 4.2813785-.8042307 5.8869097-2.4129207 3.2110625-3.2171514 3.2110625-8.5790324 0-11.7961839L35.8564433 65.6836418c-2.6758472-2.6809976-.8027084-7.2386478 2.9434549-7.2386478h48.8569322c4.8165937 0 8.8303646-4.2894591 8.2951494-9.1151863-.5351008-4.2895733-4.5489861-7.5067247-8.8302501-7.5067247z',
  });
}

export default function homeProductProperties() {
  const homeProductProperties = document.querySelector('[data-js="home-product-properties"]');
  // When Carousel exists
  if (homeProductProperties) {
    // carouselInit();
    UpdateSpreadData();
  }
}
