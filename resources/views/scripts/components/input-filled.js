/**
 * When input field has value add class to element
 *
 */

export default function inputFilled($name) {
  // const pullRightElement = document.querySelector('[data-pull-right]');

  [].slice
      .call(document.querySelectorAll($name))
      .forEach(function(inputEl) {
        // in case the input is already filled..
        if (inputEl.value.trim() !== '') {
          inputEl.classList.add('form-input--filled');
        }

        // events:
        inputEl.addEventListener('focus', ev => {
          ev.target.classList.add('form-input--filled');
        });
        inputEl.addEventListener('blur', ev => {
          if (ev.target.value.trim() === '') {
            ev.target.classList.remove('form-input--filled');
          }
        });
      });
}
