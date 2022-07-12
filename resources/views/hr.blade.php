@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
@endsection

@section('main')

<div class="fw pageHeaderAll cover wow fadeInUp" style="background-image:url({{asset('assets/images/page-bg.png')}})">
  <div class="container">
    <div class="fw pageHeader">
      <ul class="sul">
        <li class="icon"><span class="iconX"><i class="flaticon-email"></i></span></li>
        <li class="title"><h1 class="titleX">İnsan Kaynakları</h1></li>
        <li class="desc">Siz de EkolFx ailesine katılarak finans piyasalarında güçlü bir kariyere başlangıç yapabilirsiniz.</li>
      </ul>
    </div><!--.pageHeader-->
  </div><!--.container-->
</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw pageAll">
    <div class="fw page contactPage">
      <div class="pageLeft wow fadeInLeft contactPageLeft">
        <div class="fw pageLeftBox">

        <div class="fw simpleContentTitle">
            <h3 class="title">İş Başvuru Formu</h3>
          </div><!--.title-->
          <div class="fw homeContactForm contactPageForm">
          <form id="indexContact" method="POST" action="#">
            <div class="homeContactFormRow">
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-user-3"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input1-t'))}}</span>
                  <input  name="name"  type="text" class="loginFormText white" placeholder="{{LangValue('index_c10_input1-p')}}" />
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-user-3"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input2-t'))}}</span>
                  <input  name="lastname"  type="text" class="loginFormText white" placeholder="{{LangValue('index_c10_input2-p')}}" />
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-telephone-1"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input3-t'))}}</span>
                  <input  name="phone" type="text" class="loginFormText white" placeholder="{{LangValue('index_c10_input3-p')}}" />
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-arroba"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input4-t'))}}</span>
                  <input  name="email" type="text" class="loginFormText white" placeholder="{{LangValue('index_c10_input4-p')}}" />
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full" style="display:none">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-menu"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input6-t'))}}</span>
                  <select name="sub" class="loginFormSelect white">
                  <option>İnsan Kaynakları</option>
                  
                  </select>
                  <span class="arrow"><i class="fas fa-chevron-down"></i></span>
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-pencil"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input5-t'))}}</span>
                  <textarea  name="note" class="loginFormTextarea white" placeholder="Lütfen kendinizden kısaca bahsediniz"></textarea>
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw homeContactFormBox submitContactFormBox">
                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                  <button type="submit"  class="simpleButton largeX" style="width:100%; max-width:100%">{{Str::upper(LangValue('index_c10_input-btn'))}}<i id="contactIcon" class="flaticon-arrow-pointing-to-right"></i></button>
                  <input type="hidden" name="contentType" value="4" />
                </div><!--.box-->
              </div><!--.col-->
            </div><!--.row-->
          </form>
          </div><!--.homeContactForm-->

          

        </div><!--.left-->

      </div><!--.pageLeft-->
      <div class="pageRight wow fadeInRight contactPageRight">
        <div class="fw pageRightBox">



        <div class="fw simpleContentTitle">
            <h2 class="title">Bizimle Çalışın</h2>
          </div><!--.title-->
          <div class="fw simpleContent">
            <p>
                Ekol Global Markets çalışanları; <br>  <br> Eğitim, bilgi, yetenek ve becerileri ölçüsünde kariyer planlarına uygun pozisyonlarda azimli ve disiplinli çalışmanın ödüllendirildiği <br> bir sistemde hep bir adım ileri gitmenin yüksek motivasyonu ile çalışmanın mutluluğunu yaşarlar.
                <br> <br> <br>
                Ekol Global Markets’in her çalışanı Ekol ailesinin önemli bir üyesidir. Siz de EkolFx ailesine katılarak finans piyasalarında güçlü bir kariyere başlangıç yapabilirsiniz.            
        </p>
        
        </div><!--.content-->




        </div><!--.pageRight-->
      </div><!--.pageRight-->
    </div><!--.page-->
  </div><!--.pageAll-->
</div><!--.container-->


@endsection



@section('footer')

@endsection

