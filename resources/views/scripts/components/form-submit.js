/*
* Added value it'll be name
* @value form id
* @value form type
* @value button id
* */
import axios from 'axios';
import Swal from 'sweetalert2';


export function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-654387901/ScNYCOuTgNQBEL3VhLgC',
      'event_callback': callback
  });
  return false;
}


export default function submitForm(formID, formType, buttonID) {
  const formByID = document.getElementById(formID);
  if (formType !== 'contact') {
    const successMsg = formByID.getAttribute('data-submit-msg-success');
    const errorMsg1 = formByID.getAttribute('data-submit-msg-err1');
    const errorMsg2 = formByID.getAttribute('data-submit-msg-err2');
    const formData = new FormData(formByID);

    formData.append("url", window.location.href);
    formData.append("formtype", formType);
    formData.append("kaynak", "web");
    formData.append("contentType", "3");
    formData.append("utm", " ");
    formData.append("ref", " ");

    const button = document.getElementById(buttonID);
    button.disabled = true;
    axios({
      method: 'post',
      url: '/formRegister',
      data: formData,
      mode: 'no-cors',
      headers: {
        'Access-Control-Allow-Origin': '*',
        'Content-Type': 'application/json',
      },
      withCredentials: true,
      credentials: 'same-origin' }
    )
      .then(function (response) {
        if(response.data == 1){
          Swal.fire({
            text: successMsg,
            icon: 'success',
            showCloseButton: true,
          });
          button.disabled = true;
          gtag_report_conversion();
          fbq('track', 'Lead');
          cg_convert('optional comment')
        }
        else if(response.data == 0){
          Swal.fire({
            text: errorMsg1,
            icon: 'error',
            showCloseButton: true,
          });
          button.disabled = false;
        }
        else if(response.data == 2){
          Swal.fire({
            text: errorMsg2,
            icon: 'error',
            showCloseButton: true,
          });
          button.disabled = false;
        }
      })
      .catch(function (error) {
        console.log('e:', error)
        Swal.fire({
          text: errorMsg1,
          icon: 'error',
          showCloseButton: true,
        });
        button.disabled = false;
      })
    return false;
  } else {
    const formByID =  document.querySelector('#contact-form');
    const formContact = new FormData();
    formContact.append("name", formByID.querySelector('.user').value);
    formContact.append("lastname", '');
    formContact.append("phone", formByID.querySelector('.phone').value);
    formContact.append("email", formByID.querySelector('.mail').value);
    formContact.append("sub", formByID.querySelector('.sub').value);
    formContact.append("note", formByID.querySelector('.message').value);

    const button = document.getElementById(buttonID);
    button.disabled = true;
    axios({
      method: 'post',
      url: '/formContact',
      data: formContact,
      mode: 'no-cors',
      headers: {
        'Access-Control-Allow-Origin': '*',
        'Content-Type': 'application/json',
      },
      withCredentials: true,
      credentials: 'same-origin' }
    )
      .then(function (response) {
        if(response.data == 1){
          Swal.fire({
            text: successMsg,
            icon: 'success',
            showCloseButton: true,
          });
          button.disabled = true;
        }
        else if(response.data == 0){
          Swal.fire({
            text: errorMsg1,
            icon: 'error'
          });
          button.disabled = false;
        }
        else if(response.data == 2){
          Swal.fire({
            text: errorMsg2,
            icon: 'error',
            showCloseButton: true,
          });
          button.disabled = false;
        }
      })
      .catch(function (error) {
        console.log('e:', error)
        Swal.fire({
          text: errorMsg1,
          icon: 'error',
          showCloseButton: true,
        });
        button.disabled = false;
      })
    return false;

  }
}
