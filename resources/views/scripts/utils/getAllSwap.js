import axios from 'axios';

export function getAllSwap() {
  const $lang = document.documentElement.getAttribute('lang')

  return new Promise((resolve, reject) => {
    axios(
      {
        method: 'GET',
        url: 'https://api.kalefxapi.com/api/getSwapdataAll/' + $lang
      },
    )
      .then(
        (res) => {
          if (res.data.IsSuccess) {
            resolve(res.data.Data)
          }
        },
        (error) => {
          reject(error)
        }
      )
  })
}
