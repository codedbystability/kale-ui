/**
 * When phone input focus show country select and call lib phonenumber
 *
 */

import allCountries from './all-countries'
import submitForm from './form-submit'
import { parsePhoneNumberFromString } from 'libphonenumber-js'

export function getCountry() {
    return fetch('https://ip2c.org/s')
        .then(response => response.text())
        .then((response) => {
            const result = (response || '').toString();

            if (!result || result[0] !== '1') {
                throw new Error('unable to fetch the country');
            }

            return result.substr(2, 2);
        });
}

export function getCurrentCountry(start) {
    return allCountries.filter(function(e){
        return e.iso2.startsWith(start);
    })
}

// https://stackoverflow.com/questions/469357/html-text-input-allow-only-numeric-input
export function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    });
}

export function formPassed(form) {
  console.log('form', form);
}

export default function formValidation() {
    const phoneInput = document.querySelector('input[type=tel]');
    if(phoneInput) {
        getCountry().then( response => {
            const currentCountry = getCurrentCountry(response);

            setInputFilter(phoneInput, (value) => {
                return /^\d*$/.test(value);
            });

            if(currentCountry){
                phoneInput.addEventListener('focus', (e) => {
                    if(phoneInput.value == ''){
                        phoneInput.value = currentCountry[0].dialCode;
                    }
                });
            }
        });
    }

    const validations = {
        required: function(value){
            const valueString = value.value;
            return valueString !== '';
        },
        requiredCheck: function(value){
            const valueChecked = value.checked;
            return valueChecked == true;
        },
        name: function(value){
            const valueString = value.value;
            return valueString.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/g);
        },
        phone: function(value){
            const valueString = value.value;
            const phoneNumberInput = parsePhoneNumberFromString('+' + valueString);
            return phoneNumberInput.isValid() == true;
        },
        email: function(value){
            const valueString = value.value;
            return valueString.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
        }
    }

    const form = document.querySelector('form');

    if(form) {
        const inputsArr = form.querySelectorAll('input');
        const errorBoxContainer = form.querySelector('p');

        form.addEventListener('submit', function(e){
            var i = 0;
            while (i < inputsArr.length) {
                var attr = inputsArr[i].getAttribute('data-validation'),
                    rules = attr ? attr.split(' ') : '',
                    parent = inputsArr[i].parentElement,
                    j = 0;
                while (j < rules.length) {
                    if(!validations[rules[j]](inputsArr[i])) {
                        e.preventDefault();
                        parent.classList.add('error');
                        inputsArr[i].focus();
                        if(errorBoxContainer) {
                            const errorBox = errorBoxContainer.querySelector('span');
                            if(errorBox) {
                                errorBox.classList.add('is-error');
                                if (rules[j] == 'required' || rules[j] == 'requiredCheck'){
                                    errorBox.innerText = 'Bu alan boş bırakılamaz.';
                                } else if(rules[j] == 'name') {
                                    errorBox.innerText = 'Lütfen geçerli bir ad soyad yazınız!';
                                } else if(rules[j] == 'phone') {
                                    errorBox.innerText = 'Lütfen geçerli bir telefon numarası yazınız!';
                                } else if(rules[j] == 'email') {
                                    errorBox.innerText = 'Lütfen geçerli bir e-posta adresi yazınız!';
                                }
                            }
                        }
                        return false;
                    }else {
                        parent.classList.remove('error');
                    }
                    parent.classList.remove('error');
                    j++;
                }
                i++;
            }
        
            e.preventDefault();
            parent.classList.remove('error');
            // console.log('form', form.getAttribute('data-form-type'))
            submitForm(form.id, form.getAttribute('data-form-type'), form.querySelector('.btn').id);
        }, false);

        // for (let i = 0; i < inputsArr.length; i++) {
        //     inputsArr[i].addEventListener("blur", function() {
        //         var attr = inputsArr[i].getAttribute('data-validation'),
        //             rules = attr ? attr.split(' ') : '',
        //             parent = inputsArr[i].parentElement,
        //             j = 0;
        //         while (j < rules.length) {
        //             const errorBox = errorBoxContainer.querySelector('span');
        //             if(!validations[rules[j]](inputsArr[i])) {
        //                 parent.classList.add('error');
        //                 if(errorBox) {
        //                     errorBox.classList.add('is-error');
        //                     if (rules[j] == 'required' || rules[j] == 'requiredCheck'){
        //                         errorBox.innerText = 'Bu alan boş bırakılamaz.';
        //                     } else if(rules[j] == 'name') {
        //                         errorBox.innerText = 'Lütfen geçerli bir ad soyad yazınız!';
        //                     } else if(rules[j] == 'phone') {
        //                         errorBox.innerText = 'Lütfen geçerli bir telefon numarası yazınız!';
        //                     } else if(rules[j] == 'email') {
        //                         errorBox.innerText = 'Lütfen geçerli bir e-posta adresi yazınız!';
        //                     }
        //                 }
        //                 return false;
        //             }else {
        //                 parent.classList.remove('error');
        //                 errorBox.classList.remove('is-error');
        //             }
        //             j++;
        //         }
        //     });
        // }
    }
}



