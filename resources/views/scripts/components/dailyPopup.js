
import Swal from 'sweetalert2';


function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname+"="+cvalue+"; "+expires;
}
  
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
      }
  }
  return "";
}
  
export default function  DailyPopUp() {
  const dailyContent = document.querySelector('#daily-modal');
  const dailyContentIsActive = dailyContent.getAttribute('data-active');

  if (dailyContentIsActive === 'true') {
    var getC=getCookie("setdaily");
    if (getC == "") {
          //  $('#popupModel').modal('show');

      console.log(dailyContent.getAttribute('data-active'));

      if(dailyContent) {
        const dailyContentTitle = dailyContent.querySelector('.title').innerHTML;
        const dailyContenContent = dailyContent.querySelector('.content').innerHTML;


        Swal.fire({
          title: dailyContentTitle,
          html: dailyContenContent,
          showCloseButton: true,
          width: '40em',
        });

        setCookie("setdaily", 1, 0.5);
      }
    }
  }
}
