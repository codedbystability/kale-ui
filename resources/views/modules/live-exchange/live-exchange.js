/**
 * Live exchange bar
 *
 */
import { getContents } from '../../scripts/Utils/_api.js'



export default function liveExchange() {
    // getContents('POST', 'https://cp.frxcrm.com/api/parite', data => { console.log(data); });
    let formData = new FormData();
formData.append('ownerid', 1);


    fetch('/symboldata', {
        method: 'GET', // or 'PUT',

      //  body: formData
        
    })
        .then((response) => response.json())
        .then((datas) => {
            let output = "";
            datas.forEach(function(data) {
                let pointer = '';
                if(data.BID > data.ASK) {
                    pointer += 'up'
                }else {
                    pointer += 'down'
                }
                output += `
                    <div class="c-live-exchange__item ${pointer}">
                        <div>
                            <span class="type">${data.SYMBOL}</span>
                            <span class="price">${data.BID}</span>
                        </div>
                    </div>
                `;
            });
            output += ''
            document.getElementById("liveExchange").innerHTML = output;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}
