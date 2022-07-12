import Flickity from "flickity";
import Litepicker from 'litepicker';
import { getAllParite } from "Utils/getAllParite";
import { getAllSwap } from "Utils/getAllSwap";


/**
 * Investment Table
 *
 */


export async function getSwap(contentID) {
  let swaps = await getAllSwap();
  let returnedObject = {};
  const id = parseInt(contentID);

  swaps.filter((swap) => {
    if (swap.CID === id) {
      returnedObject = swap.SwapData
    } else {
      return '';
    }
  });

  return returnedObject;
}

export function tableContentProcessingFeature(contentDatas) {
  let output = '';
  contentDatas.forEach(data => {
    output += `
      <tr>
        <td class="name with-icon searchable">
            <strong>${data.Symbol}</strong>
        </td>
        <td class="searchable">
            <span class="font-weight-bold">${data.Value}</span>
        </td>
        <td>
            <span class="font-weight-bold">${data.ContractSize}</span>
        </td>
        <td>
            <span class="font-weight-bold">${data.TickSize}</span>
        </td>
        <td  class="is-mob-hidden">
            <span class="font-weight-bold">${data.Margin}</span>
        </td>
        <td class="is-mob-hidden">
            <span class="font-weight-bold">${data.SwapShort}</span>
        </td>
        <td class="is-mob-hidden">
            <span class="font-weight-bold">${data.SwapLong}</span>
        </td>
        <td class="is-mob-hidden">
            <span class="font-weight-bold">0</span>
        </td>
      </tr>
    `;
  });
  return output;
}

export async function tableContentLiveFlow(contentDatas) {
  let output = '';
  let parites = await getAllParite();

  for (const data of contentDatas) {
    let buy = '';
    let sell = '';
    let low = '';
    let high = '';
    let spread = '';
    let direction = '';

    parites.filter((parite) => {
      if (parite.SYMBOL === data.Symbol) {
        buy = parite.BID;
        sell = parite.ASK;
        low = parite.LOW;
        high = parite.HIGH;
        spread = parite.SPREAD;
        direction = parite.DIRECTION > 0 ? 'text-success' : 'text-error';
      } else {
        return '';
      }
    });

    output += `
      <tr>
        <td class="name with-icon searchable">
          <span><strong>${data.Symbol}</strong></span>
        </td>
        <td class="searchable">
          <span class="font-weight-bold">${data.Value}</span>
        </td>
        <td>
          <span class="font-weight-bold ${direction}">${buy}</span>
        </td>
        <td><span class="font-weight-bold ${direction}">${sell}</span></td>
        <td class="is-mob-hidden"><span class="font-weight-bold">${low}</span></td>
        <td class="is-mob-hidden"><span class="font-weight-bold">${high}</span></td>
        <td class="is-mob-hidden"><span class="font-weight-bold">${spread}</span></td>
      </tr>
    `;
  }
  return output;
}

export async function tableInvesment(contentDatas) {
  let output = '';
  let parites = await getAllParite();

  for (const data of contentDatas) {
    let buy = '';
    let sell = '';
    let direction = '';

    parites.filter((parite) => {
      if (parite.SYMBOL === data.Symbol) {
        buy = parite.BID;
        sell = parite.ASK;
        direction = parite.DIRECTION > 0 ? 'text-success' : 'text-error';
      } else {
        return '';
      }
    });

    output += `
      <tr>
        <td class="name with-icon searchable">
          <span><strong>${data.Symbol}</strong></span>
        </td>
        <td class="searchable">
          <strong>${data.Value}</strong>
        </td>
        <td><span class="font-weight-bold ${direction}">${buy}</span></td>
        <td><span class="font-weight-bold ${direction}">${sell}</span></td>
      </tr>
    `;
  }
  return output;
}

export default function investmentTable() {
  const investmentTable = document.querySelector('[data-investment-table]');
  const investmentTableSearchInput = document.querySelector('[data-investment-table-search]');
  const economicCalenderDateCarousel = document.querySelector('[data-js="economic-calendar"]');
  const datepicker = document.querySelector('[data-datepicker]');

  const tabButtons = document.querySelectorAll(".btn-tab");
  const firstTabButton = tabButtons[0];
  const firstTabButtonTarget = firstTabButton ? firstTabButton.getAttribute('data-toggle-target') : '';
  const firstTabButtonTargetReplace = firstTabButton ? firstTabButtonTarget.replace (/#/g, "") : '';
  const firstContainer = firstTabButton ? document.getElementById(firstTabButtonTargetReplace) : '';
  const firstTable = firstTabButton ? firstContainer.querySelector('table') : '';

  const spreadTable = document.querySelector('[spread-table]');
  const processingFeatureTables = document.querySelector('[processing-features]');
  const liveFlowTables = document.querySelector('[live-flow]');
  const investmentTables = document.querySelector('[investment-table]');

  // When Economic Calendar exists
  if (economicCalenderDateCarousel) {
    var carouselInit = function () {
      economicCalenderDateCarousel.classList.remove('is-hidden');
      economicCalenderDateCarousel.offsetHeight;
      new Flickity( economicCalenderDateCarousel, {
        // options
        cellAlign: 'left',
        contain: true,
        pageDots: false,
        arrowShape: 'M87.1217297 41.823083H38.7998982c-3.7461633 0-5.6193021-4.5576503-2.9434549-7.2386479l20.3365763-20.3753305c3.210948-3.2171515 3.210948-8.57907816 0-11.79624102-3.2110624-3.21715144-8.5627569-3.21715144-11.7738194 0L2.40827281 44.2358894c-3.21103041 3.2171514-3.21103041 8.5791467 0 11.7962981L43.8840995 97.5870793C45.4895162 99.1957693 47.6302627 100 49.7708947 100c2.1407465 0 4.2813785-.8042307 5.8869097-2.4129207 3.2110625-3.2171514 3.2110625-8.5790324 0-11.7961839L35.8564433 65.6836418c-2.6758472-2.6809976-.8027084-7.2386478 2.9434549-7.2386478h48.8569322c4.8165937 0 8.8303646-4.2894591 8.2951494-9.1151863-.5351008-4.2895733-4.5489861-7.5067247-8.8302501-7.5067247z',
      } );
    };

    carouselInit();
  }

  if(datepicker){
    let startDate = new Date();
    let endDate = new Date();
    endDate.setDate(endDate.getDate() + 7);
    const picker = new Litepicker({
      element: datepicker,
      singleMode: false,
      format: 'D MMM, YYYY',
      lang: 'tr-TR',
      autoApply: true,
      startDate: startDate,
      endDate: endDate,
    });
  }

  if (investmentTable) {
    if (investmentTableSearchInput) {
      investmentTableSearchInput.addEventListener('keyup', function() {
        const filter = investmentTableSearchInput.value.toUpperCase();

        searchFilters(investmentTable, filter);
      });
    }

    var searchFilters = function(table, filter) {
      // console.log('table', table.getElementsByTagName('tbody')[0]);
      // console.log('filter', filter);
      const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
      let hiddenRows = 0;

      for (let rowIndex = 0; rowIndex < rows.length; rowIndex++) {
        let show = false;
        const columns = rows[rowIndex].getElementsByTagName('td');

        for (let columnIndex = 0; columnIndex < columns.length; columnIndex++) {
          const innerTables = columns[columnIndex].getElementsByTagName('table');

          if (innerTables.length) {
            for (let tableIndex = 0; tableIndex < innerTables.length; tableIndex++) {
              if (!searchFilters(innerTables[tableIndex], filter)) {
                show = true;
              }
            }
          } else {
            let txtValue = columns[columnIndex].textContent || columns[columnIndex].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              show = true;
            }
          }
        }

        if (show) {
          rows[rowIndex].style.display = '';
          for (let columnIndex = 0; columnIndex < columns.length; columnIndex++) {
            const innerTables = columns[columnIndex].getElementsByTagName('table');
            if (innerTables.length) {
              for (let tableIndex = 0; tableIndex < innerTables.length; tableIndex++) {
                showData(innerTables[tableIndex]);
              }
            }
          }
        } else {
          rows[rowIndex].style.display = 'none';
          hiddenRows++;
        }
      }
      return hiddenRows == rows.length;
    };

    var showData = function(table) {
      const rows = table.getElementsByTagName('tr');
      for (let rowIndex = 0; rowIndex < rows.length; rowIndex++) {
        rows[rowIndex].style.display = '';
      }
    };
  }
  if(spreadTable){
    const spreadTableBody = spreadTable.querySelector('tbody');

    fetch('https://ekolfx58.com/spreadgroupData/1', {
      method: 'GET',
      mode: 'no-cors'
    })
        .then((response) => response.json())
        .then((datas) => {
          let output = "";
          datas.forEach(function(data) {
            console.log(data)
            output += `
                    <div class="c-live-exchange__item">
                        <div>
                            <span class="type">${data.SYMBOL}</span>
                            <span class="price">${data.BID}</span>
                        </div>
                    </div>
                `;
          });
          console.log(datas);
          output += '';
          document.getElementById("liveExchange").innerHTML = output;
        })
        .catch((error) => {
          console.error('Error:', error);
        });
  }
  if(processingFeatureTables){
    firstContainer.classList.add('is-loading');
    getSwap(firstTabButton.getAttribute('data-content-id')).then((res) => {
      // document.getElementById(firstTabButtonTargetReplace).querySelector('table').querySelector('tbody').innerHTML = tableContentProcessingFeature(res);
      firstTable.querySelector('tbody').innerHTML = tableContentProcessingFeature(res);
      firstContainer.classList.remove('is-loading');
    });

    tabButtons.forEach(button => {
      const buttonTarget = button.getAttribute('data-toggle-target');
      const buttonTargetReplace = buttonTarget.replace (/#/g, "");
      const container = document.getElementById(buttonTargetReplace);
      const table = container.querySelector('table');

      button.addEventListener("click", (event) => {
        container .classList.add('is-loading');
        getSwap(button.getAttribute('data-content-id')).then((res) => {
          // document.getElementById(buttonTargetReplace).querySelector('table').querySelector('tbody').innerHTML = tableContentProcessingFeature(res);
          table.querySelector('tbody').innerHTML = tableContentProcessingFeature(res);
          container.classList.remove('is-loading');
        });
      }, false);
    });
  }
  if(liveFlowTables) {
    firstContainer.classList.add('is-loading');
    getSwap(firstTabButton.getAttribute('data-content-id')).then((res) => {
      tableContentLiveFlow(res).then((res) => {
        firstTable.querySelector('tbody').innerHTML = res;
        firstContainer.classList.remove('is-loading');
      });
    });

    tabButtons.forEach(button => {
      const buttonTarget = button.getAttribute('data-toggle-target');
      const buttonTargetReplace = buttonTarget.replace (/#/g, "");
      const container = document.getElementById(buttonTargetReplace);
      const table = container.querySelector('table');

      button.addEventListener("click", (event) => {
        container.classList.add('is-loading');
        getSwap(button.getAttribute('data-content-id')).then((res) => {
          tableContentLiveFlow(res).then((res) => {
            table.querySelector('tbody').innerHTML = res;
            container.classList.remove('is-loading');
          });
        });
      }, false);
    });
  }

  if(investmentTables) {
    const CID = investmentCID ? investmentCID : 8;
      getSwap(CID).then((res) => {
        tableInvesment(res).then((res) => {
          investmentTables.querySelector('tbody').innerHTML = res;
        });
    });
  }
}



