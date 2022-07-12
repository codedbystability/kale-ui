import Swal from 'sweetalert2';

export default function modals() {

  try {
  const promotionTriggers = document.querySelectorAll('.promotion-trigger');
  const privacyPolicyTrigger = document.querySelector('.privacy-policy-trigger');
  const mainPolicyTrigger = document.querySelector('.main-policy-trigger');

  
  

  promotionTriggers.forEach((promotionTrigger) => {
    promotionTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      const promotionID = promotionTrigger.getAttribute('data-pop-id');
      const promotionContent = document.querySelector('#promotion-modal--'+promotionID);
      const promotionContentTitle = promotionContent.querySelector('.title').innerHTML;
      const promotionContenContent = promotionContent.querySelector('.content').innerHTML;

      Swal.fire({
        title: promotionContentTitle,
        html: promotionContenContent,
        showCloseButton: true,
      });
    });
  });

  privacyPolicyTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    const privacyPolicyContent = document.querySelector('#privacy-policy-modal');
    const privacyPolicyContentTitle = privacyPolicyContent.querySelector('.title').innerHTML;
    const privacyPolicyContenContent = privacyPolicyContent.querySelector('.content').innerHTML;

    Swal.fire({
      title: privacyPolicyContentTitle,
      html: privacyPolicyContenContent,
      showCloseButton: true,
    });
  });

  mainPolicyTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    const mainPolicyContent = document.querySelector('#main-policy-modal');
    const mainPolicyContentTitle = mainPolicyContent.querySelector('.title').innerHTML;
    const mainPolicyContenContent = mainPolicyContent.querySelector('.content').innerHTML;

    Swal.fire({
      title: mainPolicyContentTitle,
      html: mainPolicyContenContent,
      showCloseButton: true,
      width: '40em',
    });
  });

}
catch(err) {
  console.log(err.message);
}

}
