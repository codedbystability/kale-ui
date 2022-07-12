import axios from 'axios';

export async function getAllParite() {
  return new Promise((resolve, reject) => {

    let formData = new FormData();
    formData.append('ownerid', 1);

    axios(
      {
        method: 'get',
        url: '/symboldata',
        //data:  formData
      },
    )
      .then(
        (res) => {
          if (res.status === 200) {
            resolve(res.data)
          }
        },
        (error) => {
          reject(error)
        }
      )
  })
}

