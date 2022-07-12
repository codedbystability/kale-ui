/**
 * trading Hours Pages Scripts
 *
 */
export function toDate(dStr,format) {
  var now = new Date();
  if (format == "hh:mm") {
    now.setHours(dStr.substr(0,dStr.indexOf(":")));
    now.setMinutes(dStr.substr(dStr.indexOf(":")+1));
    now.setSeconds(0);
    return now;
  }else
    return "Invalid Format";
}

export function f() {

}

export default function tradingHoursPage() {
  const bodyClassList = document.body.classList;
  if (bodyClassList.contains('p-trading-hours')) {
    const tradingHoursTable = document.body.querySelector('[trading-hours]');
    const tradingHoursTableBody = tradingHoursTable.querySelector('tbody')
    const changeTime = document.body.querySelector('[change-time]');

    fetch('https://api.kalefxapi.com/api/getSwapdataAll/tr', {
      method: 'GET',
    })
        .then((response) => response.json())
        .then((datas) => {


          
          datas.Data.forEach(function(data) {


            if(data.CID == 7) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable">
                      <h5>Döviz Pariteleri</h5>
                    </td>
                    <td class="searchable">
                      <span class="font-weight-bold">Hepsi</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday}" hour>${resultSunday}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen}" hour>${resultOpen}</label> - <label data-time="${resultClose}" hour>${resultClose}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday}" hour>${resultFriday}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 8) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);
              const row2 = data.SwapData.filter(number => number.Sunday===resultSunday[1]);

              const row1Names =   row1.map(name => ' ' + name.Symbol);
              const row2Names =   row2.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="2">
                      <h3>Metaller</h3>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold"
                        >${row2Names}</span
                      >
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[1]}" hour>${resultSunday[1]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[1]}" hour>${resultOpen[1]}</label> - <label data-time="${resultClose[1]}" hour>${resultClose[1]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[1]}" hour>${resultFriday[1]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 9) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });


              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);
              const row2 = data.SwapData.filter(number => number.Sunday===resultSunday[1]);
              const row3 = data.SwapData.filter(number => number.Sunday===resultSunday[2]);
              const row4 = data.SwapData.filter(number => number.Sunday===resultSunday[3]);

              const row1Names =   row1.map(name => ' ' + name.Symbol);
              const row2Names =   row2.map(name => ' ' + name.Symbol);
              const row3Names =   row3.map(name => ' ' + name.Symbol);
              const row4Names =   row4.map(name => ' ' + name.Symbol);
              //
              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="4">
                      <h3>Borsa Endeksleri</h3>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold"
                        >${row2Names}</span
                      >
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label hour>${resultSunday[1]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label hour>${resultOpen[1]}</label> - <label hour>${resultClose[1]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label hour>${resultFriday[1]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold"
                        >${row3Names}</span
                      >
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label hour>${resultSunday[2]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label hour>${resultOpen[2]}</label> - <label hour>${resultClose[2]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label hour>${resultFriday[2]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold"
                        >${row4Names}</span
                      >
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label hour>${resultSunday[3]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label hour>${resultOpen[3]}</label> - <label hour>${resultClose[3]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label hour>${resultFriday[3]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 10) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);
              const row2 = data.SwapData.filter(number => number.Sunday===resultSunday[1]);

              const row1Names =   row1.map(name => ' ' + name.Symbol);
              const row2Names =   row2.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="2">
                      <h3>Emtialar</h3>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold"
                        >${row2Names}</span
                      >
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[1]}" hour>${resultSunday[1]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[1]}" hour>${resultOpen[1]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 11) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);

              const row1Names =  row1.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="1">
                      <h5>ABD Borsası</h5>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="0${resultOpen[0]}:00" hour>0${resultOpen[0]}:00</label> - <label data-time="${resultClose[0]}:00" hour>${resultClose[0]}:00</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 12) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });


              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);

              const row1Names =  row1.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="1">
                      <h5>Avrupa Borsası</h5>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 13) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });


              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);

              const row1Names =  row1.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="1">
                      <h5>Rusya Borsası</h5>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 14) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              const row1 = data.SwapData.filter(number => number.Sunday===resultSunday[0]);
              const row2 = data.SwapData.filter(number => number.Sunday===resultSunday[1]);
              const row3 = data.SwapData.filter(number => number.Sunday===resultSunday[2]);

              const row1Names =  row1.map(name => ' ' + name.Symbol);
              const row2Names =  row2.map(name => ' ' + name.Symbol);
              const row3Names =  row3.map(name => ' ' + name.Symbol);

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable vertical-top" rowspan="3">
                      <h5>Asya Borsası</h5>
                    </td>
                    <td class="searchable is-wrapable">
                      <span class="font-weight-bold">${row1Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[0]}" hour>${resultSunday[0]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[0]}" hour>${resultOpen[0]}</label> - <label data-time="${resultClose[0]}" hour>${resultClose[0]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[0]}" hour>${resultFriday[0]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold">${row2Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[1]}" hour>${resultSunday[1]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[1]}" hour>${resultOpen[1]}</label> - <label data-time="${resultClose[1]}" hour>${resultClose[1]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[1]}" hour>${resultFriday[1]}</label></span>
                    </td>
                  </tr>
              `;
              output += `
                  <tr>
                    <td class="searchable is-wrapable is-not-rounded">
                      <span class="font-weight-bold">${row3Names}</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday[2]}" hour>${resultSunday[2]}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen[2]}" hour>${resultOpen[2]}</label> - <label data-time="${resultClose[1]}" hour>${resultClose[1]}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday[1]}" hour>${resultFriday[1]}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            } else if(data.CID == 15) {
              const resultSunday = data.SwapData.map(a => a.Sunday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultOpen = data.SwapData.map(a => a.Open).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultClose = data.SwapData.map(a => a.Close).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });
              const resultFriday = data.SwapData.map(a => a.Friday).filter(function(item, pos, self) {
                return self.indexOf(item) == pos;
              });

              let output = '';
              output += `
                  <tr>
                    <td class="name searchable">
                      <h5>Kripto Paralar</h5>
                    </td>
                    <td class="searchable">
                      <span class="font-weight-bold">Hepsi</span>
                    </td>
                    <td>
                      <span class="font-weight-bold week-open-hours"><label data-time="${resultSunday}" hour>${resultSunday}</label></span>
                    </td>
                    <td>
                      <span class="font-weight-bold weekday-trading-hours"><label data-time="${resultOpen}" hour>${resultOpen}</label> - <label data-time="${resultClose}" hour>${resultClose}</label></span>
                    </td>
                    <td class="is-mob-hidden">
                      <span class="font-weight-bold week-close-hours"><label data-time="${resultFriday}" hour>${resultFriday}</label></span>
                    </td>
                  </tr>
              `;

              tradingHoursTableBody.innerHTML = tradingHoursTableBody.innerHTML + output;
            }


          });
        })
        .then(() => {
          changeTime.addEventListener('change', () => {
            const hours = document.body.querySelectorAll('[hour]');
            hours.forEach(hour => {
              const hourST = toDate(hour.dataset.time,"hh:mm")
              // hour.setHours( hour.getHours() + changeTime.value );
              const newhourST = new Date(hourST);
              const changeValue = parseInt(changeTime.value);
              newhourST.setHours(newhourST.getHours() + changeValue);
              hour.innerText = newhourST.getHours() + ':' + newhourST.getMinutes();
            });
          });
        })
        .catch((error) => {
          console.error('Error:', error);
        });
  }
}
