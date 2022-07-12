/**
 * KaleFX Create Demo
 *
 */

import inputFilled from '../../scripts/components/input-filled';
//import formValidation from '../../scripts/components/form-validation';

export default function createDemo() {
    const createDemoContainer = document.querySelector('.c-create-demo');
    const createDemoInput = document.querySelectorAll('.create-demo-form-input');

    if(createDemoContainer) {
        inputFilled('.form-input');
    }

    createDemoInput.forEach(function(inputEl){
        inputEl.addEventListener('mouseover click', function() {
            grecaptcha.execute();
            //console.log('sadasdasd')
        })
    })
}
