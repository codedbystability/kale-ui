import Chart from 'chart.js';
import { csv } from 'd3';

export function makeChart(res) {
  const dayLabel = res.map(function (d) {
    return d.timestamp;
  });
  const dayTemp = res.map(function (d) {
    return d.high;
  });


  const ctx = document.getElementById('investment-chart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: dayLabel,
      datasets: [
        {
          label: '',
          data: dayTemp,
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
        },
      ],
    },
    options: {
      legend: {
        display: false,
      },
      scales: {
        xAxes: [
          {
            display: false,
          },
        ],
        yAxes: [
          {
            display: false,
          },
        ],
      },
      animation: {
        duration: 2000,
        onProgress: function(animation) {
          document.getElementsByClassName('c-chart')[0].classList.remove('is-loading');
        },
        onComplete: function(animation) {
          // console.log('chart animation finished')
        }
      }
    },
  });
}

export default function investmentDetails() {
  if (document.body.classList.contains('p-investment-details')) {
    const investmentSlug = document.body.getElementsByClassName('investment-slug')[0].innerText;
    document.getElementsByClassName('c-chart')[0].classList.add('is-loading');
    csv('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='+investmentSlug+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv').then((res) => {
      document.getElementsByClassName('c-chart')[0].classList.add('is-loading');
      makeChart(res);
    })

    const chartButton = document.querySelectorAll('.btn-chart-day');
    chartButton.forEach(item => {
      item.addEventListener('click', e => {
        e.preventDefault();
        document.getElementsByClassName('c-chart')[0].classList.add('is-loading');
        chartButton.forEach(item => {
          item.classList.remove('is-selected');
        })
        item.classList.add('is-selected')
        const chartType = item.getAttribute('data-type');
        if(chartType === 'daily') {
          csv('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='+investmentSlug+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv').then((res) => {
            makeChart(res);
          })
        } else if (chartType === 'weekly') {
          csv('https://www.alphavantage.co/query?function=TIME_SERIES_WEEKLY&symbol='+investmentSlug+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv').then((res) => {
            makeChart(res);
          })
        } else if (chartType === 'monthly') {
          csv('https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY&symbol='+investmentSlug+'&apikey=E0TDJFAM60M8Z7UB&datatype=csv').then((res) => {
            makeChart(res);
          })
        }
      });
    });


    // csvParse(
    //   'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=' +
    //     investmentSlug +
    //     '&apikey=E0TDJFAM60M8Z7UB&datatype=csv',
    // ).then((res) => {
    //   makeChart(res, investmentSlug);
    // });
  }
}
