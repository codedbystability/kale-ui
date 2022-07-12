@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
@endsection

@section('main')
<div class="fw pageHeaderAll cover wow fadeInUp loginPageHeader" style="background-image:url({{asset('assets/images/page-bg.png')}})">

</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw loginPage wow fadeInUp">
    <div class="fw loginPageBox">
      <div class="fw loginPageTop">
        <ul role="tablist">
          <li role="presentation" class="active demo"><a href="#login1" role="tab" data-toggle="tab">{{LangValue('register_tab1')}}</a></li>
          <li role="presentation" class=" gercek"><a href="#login2" role="tab" data-toggle="tab">{{LangValue('register_tab2')}}</a></li>
        </ul>
      </div><!--.top-->
      <div class="fw loginPageBot">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade  in active" id="login1">
            <div class="fw loginPageBotTab" style="background:url({{asset('assets/images/login1.png')}}) no-repeat top right">
              <div class="fw loginPageLeft">
                <div class="fw loginPageTitle">
                  <ul class="sul">
                    <li class="img"><img src="{{asset('assets/images/login-img.png')}}" /></li>
                    <li class="title">{{LangValue('register_tab1_h1')}}</li>
                    <li class="desc">{{LangValue('register_tab1_h2')}}</li>
                  </ul>
                </div><!--.loginPageTitle-->
                <form id="registerFormDemo" method="POST" action="#">
                <div class="fw loginPageForm">
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox BoxTop10">
                      <span class="icon"><i class="flaticon-user-2"></i></span>
                      <span class="title">{{Str::upper(LangValue('forms_fullname_span'))}}</span>
                      <input type="text" name="name" class="loginFormText" placeholder="{{LangValue('slider_form_name')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox green BoxTop10 js-mask-tel">
                      <span class="icon"><i class="flaticon-telephone-1"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input3-t'))}}</span>
                      <input type="text" id="txtPhone2"  name="phone" class="loginFormText txtPhone" placeholder="{{LangValue('index_c10_input3-p')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox BoxTop10">
                      <span class="icon"><i class="flaticon-arroba"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input4-t'))}}</span>
                      <input type="text"  name="email" class="loginFormText" placeholder="{{LangValue('index_c10_input4-p')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageCheckbox">
                      <ul>
                        <li class="loginPageCheckTabbox BoxTop10"><span class="checkbox-icon"><input  type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" /><label for="checkboxG1" class="css-label ckboxR"></label></span><span class="title"><a  href="JavaScript:Void(0);"  onclick="openModelPopup(1)">{{LangValue('register_tab1_agreement1')}}</a></span></li>
                        <li class="loginPageCheckTabbox BoxTop10"><span class="checkbox-icon"><input  type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox" /><label for="checkboxG2" class="css-label ckboxR"></label></span><span class="title"><a  href="JavaScript:Void(0);"  onclick="openModelPopup(2)">{{LangValue('register_tab1_agreement2')}}</a></span></li>
                      </ul>
                    </div><!--.checkbox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormSubmit">
                    <input type="hidden" name="type" value="demo">
                    <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                      <button id="registerFormDemoBtn" type="submit" class="simpleButton largeX">{{Str::upper(LangValue('register_tab1_btn'))}} <i class="flaticon-arrow-pointing-to-right"></i></button>
                    </div><!--.submit-->
                  </div><!--.tab-->
                </div><!--.loginPageForm-->
              </form>
              </div><!--.loginPageLeft-->
            </div><!--.tab-->
          </div><!--.tabpane-->
          <div role="tabpanel" class="tab-pane fade" id="login2">
            <div class="fw loginPageBotTab" style="background:url({{asset('assets/images/login2.png')}}) no-repeat top right">
              <div class="fw loginPageLeft">
                <div class="fw loginPageTitle">
                  <ul class="sul">
                    <li class="img"><img src="{{asset('assets/images/login-img.png')}}" /></li>
                    <li class="title">{{LangValue('register_tab2_h1')}}</li>
                    <li class="desc">{{LangValue('register_tab2_h2')}}</li>
                  </ul>
                </div><!--.loginPageTitle-->
                <form id="registerForm" method="POST" action="#">
                <div class="fw loginPageForm">
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox green BoxTop10">
                      <span class="icon"><i class="flaticon-user-2"></i></span>
                      <span class="title">{{Str::upper(LangValue('forms_fullname_span'))}}</span>
                      <input type="text"  name="name" class="loginFormText" placeholder="{{LangValue('slider_form_name')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox green BoxTop10 js-mask-tel">
                      <span class="icon"><i class="flaticon-telephone-1"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input3-t'))}}</span>
                      <input type="text" id="txtPhone1"  name="phone" class="loginFormText txtPhone" placeholder="{{LangValue('index_c10_input3-p')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox green BoxTop10">
                      <span class="icon"><i class="flaticon-arroba"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input4-t'))}}</span>
                      <input type="text"  name="email" class="loginFormText" placeholder="{{LangValue('index_c10_input4-p')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageCheckbox">
                      <ul>
                        <li class="loginPageCheckTabbox BoxTop10"><span class="checkbox-icon"><input   type="checkbox" name="checkboxG1" id="checkboxG3" class="css-checkbox" /><label for="checkboxG3" class="css-label green ckboxR"></label></span><span class="title"><a href="JavaScript:Void(0);" onclick="openModelPopup(1)">{{LangValue('register_tab2_agreement1')}}</a></span></li>
                        <li class="loginPageCheckTabbox BoxTop10"><span class="checkbox-icon"><input  type="checkbox" name="checkboxG2" id="checkboxG4" class="css-checkbox" /><label for="checkboxG4" class="css-label green ckboxR"></label></span><span class="title"><a href="JavaScript:Void(0);"  onclick="openModelPopup(2)">{{LangValue('register_tab2_agreement2')}}</a></span></li>
                      </ul>
                    </div><!--.checkbox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormSubmit">
                      <input type="hidden" name="type" value="real">
                      <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                      <button type="submit" id="registerFormBtn" class="simpleButton greenX largeX">{{Str::upper(LangValue('register_tab2_btn'))}} <i class="flaticon-arrow-pointing-to-right"></i></button>
                    </div><!--.submit-->
                  </div><!--.tab-->
                </div><!--.loginPageForm-->
                </form>
              </div><!--.loginPageLeft-->
            </div><!--.tab-->
          </div><!--.tabpane-->
        </div><!--.tabcontent-->
      </div><!--.loginPageBot-->
    </div><!--.loginPageBox-->
  </div><!--.loginPage-->
</div><!--.container-->

<div class="container">
  <div class="fw yuksekPromosyonlar wow fadeInUp">
    <ul class="sul">
      <li class="img"><img src="{{asset('assets/images/prom.png')}}" /></li>
      <li class="title">{{LangValue('register_promotion_h1')}}</li>
      <li class="desc">{{LangValue('register_promotion_h2')}}</li>
      <li class="more"><a href="{{LaravelLocalization::localizeURL('/promotions') }}" class="simpleButton orangeX largeX">{{Str::upper(LangValue('register_promotion_btn'))}} <i class="flaticon-arrow-pointing-to-right"></i></a></li>
    </ul>
  </div><!--.yuksekPromosyonlar-->
</div><!--.container-->
@endsection



@section('footer')

<div class="modal fade" id="pnlPopUpagreement1" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog big-modal-dialog" role="document">
    <div class="fw bigModal">
      <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
      <div class="fw bigModalBox">
        <div class="fw simpleTitle bigModalBoxTitle">
          <ul class="sul">
            <li class="title" id="pnlPopUpContent">  {{$data['agreement1']['Title']}}</li>            
          </ul>
        </div><!--.title-->
        <div class="fw bigModalContent" id="pnlPopUpContent">
        {!!$data['agreement1']['ShortDesc']!!}
      </div><!--.content-->
      </div><!--.bigModalBox-->
    </div><!--.bigModal-->
  </div><!--.modal-dialog-->
</div><!--.modal-->


<div class="modal fade" id="pnlPopUpagreement2" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog big-modal-dialog" role="document">
    <div class="fw bigModal">
      <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
      <div class="fw bigModalBox">
        <div class="fw simpleTitle bigModalBoxTitle">
          <ul class="sul">
            <li class="title" id="pnlPopUpContent">  {{$data['agreement2']['Title']}}</li>            
          </ul>
        </div><!--.title-->
        <div class="fw bigModalContent" id="pnlPopUpContent">
        {!!$data['agreement2']['ShortDesc']!!}
      </div><!--.content-->
      </div><!--.bigModalBox-->
    </div><!--.bigModal-->
  </div><!--.modal-dialog-->
</div><!--.modal-->

<script>
  function openModelPopup(ModelNo) {
    if(ModelNo == 1)
    $('#pnlPopUpagreement1').modal('show');
    else
    $('#pnlPopUpagreement2').modal('show');

  }
  </script>

<script src="{{asset('assets/js/jquery.inputmask.js')}}"></script>
 <script src="{{asset('assets/js/jquery.inputmask-multi.js')}}"></script>

<script src="{{asset('assets/js/mask-tel.js')}}"></script>

@endsection

