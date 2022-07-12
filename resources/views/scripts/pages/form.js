/**
 * Form Page Scripts
 *
 */
import inputFilled from '../components/input-filled';
import formValidation from '../components/form-validation';

export default function formPage() {
  if (document.body.classList.contains('p-form')) {
      inputFilled('.form-input');
      // formValidation();
  }

}
