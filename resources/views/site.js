$(".responsiveMenu").click(function () {
    $(".headerMenu").toggleClass('active');
});

$(".homeTabsListOtherButton").click(function () {
    $(this).hide();
    $(this).closest('.homeTabsListBoxDiv').find(".homeTabsListBoxDivCol").show();

});


$(".faqTabTop").click(function () {

    $(this).parent().siblings().find('.faqTabBot').slideUp(400);
    $(this).parent().siblings().removeClass('active');

    $(this).closest('.faqTab').toggleClass('active');
    $(this).next('.faqTabBot').slideToggle(400);

   

});



jQuery('.carousel-inner').find('.item:first').addClass('active');
jQuery('.carousel-inner2').find('.item:first').addClass('active');


wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    mobile: true,
    callback: function (box) {
    }
});
wow.init();

$(window).load(function () {
    $('#preloader').fadeOut('slow', function () { $(this).remove(); });
  
});


//sadece anasayfada çalıştır diğerlerinde fixed otomatik var.
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 67) {
        $(".headerAll").addClass('fixed');
    } else {
        $(".headerAll").removeClass("fixed");
    }
}); //missing );

$(".homeCalcFormSelectBot>ul>li>a").click(function () {
    var nameX = $(this).data("val");
    var nameY = $(this).data("result");
    $(this).closest('.homeCalcFormSelectBot').fadeOut('400');
    $(this).closest('ul').closest('.homeCalcFormSelectBot').prev('.homeCalcFormSelectTop').find('.homeCalcText').val(nameX);
    $(this).closest('ul').closest('.homeCalcFormSelectBot').prev('.homeCalcFormSelectTop').find('.homeCalcText').attr('data-result', nameY);
    hesap();


});

$(".homeCalcFormSelectTop").click(function () {
    $(this).next('.homeCalcFormSelectBot').fadeToggle(400);
});

function hesap() {

    try {
        var teminat = $('#teminat').val();
        if ($('#teminat').val() == '')
            teminat = 0;
        var kaldirac = $('#kaldirac').attr("data-result");
        var kur = $('#kur').val();
        var sonuc = parseInt(teminat) * parseInt(kaldirac) * kur;

        var newR = sonuc.toLocaleString('tr-TR', { style: 'currency', currency: 'USD' });
        $('#kazanc').val(newR.replace('$', ''));
    } catch (error) {
        $('#kazanc').val(0);
    }


}

$('#teminat').on('input', function () {
    hesap();
});

$(function () {
    $("#slider-range-min").slider({
        range: "min",
        value: 0.32,
        min: 0,
        max: 1,
        step: 0.01,
        slide: function (event, ui) {
            $("#kur").val(ui.value);
            hesap();
        }
    });
    $("#kur").val($("#slider-range-min").slider("value"));
    hesap();
});

$(document).ready(function () {

    hesap();

    var scroll = $(window).scrollTop();
    if (scroll >= 67) {
        $(".headerAll").addClass('fixed');
    } else {
        $(".headerAll").removeClass("fixed");
    }


});


function formKontrol() {

    $('#homeSectionRegisterFormBtn').addClass('btn-disabled');
    
    var clearInput = 0;
    $('.homeSectionRegisterForm').find('li').removeClass('active')
    if ($('#form_adsoyad').val() == '') {
        $('#form_adsoyad').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form_email').val() == '') {
        $('#form_email').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form_telefon').val() == '') {
        $('#form_telefon').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form_telefon').val().replace('_', '').replace('-', '').length < 11) {
        $('#form_telefon').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form_email').val().search('@') == -1) {
        $('#form_email').closest('li').addClass('active');
        clearInput = 1;
    }

    if (clearInput == 0) {
        $('#preloader2').show();
        var name = $('#form_adsoyad').val();
        var email = $('#form_email').val();
        var phone = $('#form_telefon').val().replace('_', '').replace('-', '');

        var r = sendPost(name, phone, email, 'sliderform');

        $('#preloader2').fadeOut('slow', function () { $(this).remove(); });

        if (r === '1') {
            $('#form1').hide();
            $('#result1').show();

        }
        else {
            $('#form1').hide();
            $('#result1').hide();
            $('#result1-e').show();
            $('#homeSectionRegisterFormBtn').removeClass('btn-disabled');
        }
    }
    else {
        $('#homeSectionRegisterFormBtn').removeClass('btn-disabled');
    }
}

function resetSlider() {
    $('#form1').show();
    $('#result1').hide();
    $('#result1-e').hide();
}

function formKontrolDiger() {
    var clearInput = 0;
    $('#formKontrolDigerBtn').addClass('btn-disabled');
    
    $('#formKontrolDiger').find('li').removeClass('active')
    if ($('#form2_ad').val() == '') {
        $('#form2_ad').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form2_mail').val() == '') {
        $('#form2_mail').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form2_tel').val() == '') {
        $('#form2_tel').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form2_tel').val().replace('_', '').replace('-', '').length < 11) {
        $('#form2_tel').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form2_mail').val().search('@') == -1) {
        $('#form2_mail').closest('li').addClass('active');
        clearInput = 1;
    }




    if (clearInput == 0) {

        var name = $('#form2_ad').val();
        var email = $('#form2_mail').val();
        var phone = $('#form2_tel').val().replace('_', '').replace('-', '');

        var r = sendPost(name, phone, email, 'siziarayalim');

        if (r === '1') {
            $('#ModalSucc').modal('show');
        }
        else {
            $('#formKontrolDigerBtn').removeClass('btn-disabled');
            $('#ModalErr').modal('show');
        }

    }
    else {
        $('#formKontrolDigerBtn').removeClass('btn-disabled');
    }

}

function formKontrolDigerSon() {
    var clearInput = 0;
    $('#formKontrolDigerSonBtn').addClass('btn-disabled');
    
    $('#formKontrolDigerSon').find('li').removeClass('active')
    if ($('#form3_ad').val() == '') {
        $('#form3_ad').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form3_mail').val() == '') {
        $('#form3_mail').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form3_tel').val() == '') {
        $('#form3_tel').closest('li').addClass('active')
        clearInput = 1;
    }
    if ($('#form3_tel').val().replace('_', '').replace('-', '').length < 11) {
        $('#form3_tel').closest('li').addClass('active');
        clearInput = 1;
    }
    if ($('#form3_mail').val().search('@') == -1) {
        $('#form3_mail').closest('li').addClass('active');
        clearInput = 1;
    }

    if (clearInput == 0) {

        var name = $('#form3_ad').val();
        var email = $('#form3_mail').val();
        var phone = $('#form3_tel').val().replace('_', '').replace('-', '');

        var r = sendPost(name, phone, email, 'formegitim');

        if (r === '1') {
            $('#ModalSucc2').modal('show');
        }
        else {
            $('#ModalErr').modal('show');
            $('#formKontrolDigerSonBtn').removeClass('btn-disabled');
        }

    }
    else {
        $('#formKontrolDigerSonBtn').removeClass('btn-disabled');

    }


}

function sendPost(name, phone, email, formname) {
    r = 0;
    $.ajax({
        async: false,
        type: 'POST',
        url: 'send.php',
        data: {
            'name': name,
            'phone': phone,
            'email': email,
            'formname': formname,
        },
        success: function (data) {
            r = data;
        }
    });

    return r;
}

$(".agor").click(function () {
    $('html, body').animate({ scrollTop: $("#form1").offset().top - 100 }, 600);
});


$(".agor2").click(function () {
    $('html, body').animate({ scrollTop: $("#formKontrolDigerSon").offset().top - 200 }, 600);
});


function gotoHash(hash) {
    topValue = 30;
    if(hash=='Accounts')
    topValue = 170;

     $('html, body').animate({ scrollTop: $("#"+hash).offset().top - topValue }, 600);
}