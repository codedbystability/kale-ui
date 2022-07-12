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
      <div class="fw loginPageBotTab singleLoginPageBotTab" style="background:url({{asset('assets/images/login3.png')}}) no-repeat top right">
        <div class="fw loginPageLeft">
          <div class="fw loginPageTitle">
            <ul class="sul">
              <li class="img"><img src="{{asset('assets/images/login-img.png')}}" /></li>
              <li class="title">{{LangValue('usertransfer_h1')}}</li>
              <li class="desc">{{LangValue('usertransfer_h2')}}</li>
            </ul>
          </div><!--.loginPageTitle-->

                <form id="transferForm" method="POST" action="#">
                <div class="fw loginPageForm">
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox orange BoxTop10">
                      <span class="icon"><i class="flaticon-user-2"></i></span>
                      <span class="title">{{Str::upper(LangValue('forms_fullname_span'))}}</span>
                      <input type="text" name="name" class="loginFormText" placeholder="{{LangValue('slider_form_name')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox orange BoxTop10  js-mask-tel ">
                      <span class="icon"><i class="flaticon-telephone-1"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input3-t'))}}</span>
                      <input type="text" id="txtPhone1"  name="phone" class="loginFormText txtPhone" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormTabBox orange BoxTop10">
                      <span class="icon"><i class="flaticon-arroba"></i></span>
                      <span class="title">{{Str::upper(LangValue('index_c10_input4-t'))}}</span>
                      <input type="text"  name="email" class="loginFormText" placeholder="{{LangValue('index_c10_input4-p')}}" />
                    </div><!--.tabBox-->
                  </div><!--.tab-->
                  <div class="fw loginPageFormTab">
                    <div class="fw loginPageFormSubmit">
                    <input type="hidden" name="type" value="transfer">
                    <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                    <button id="transferFormBtn" type="submit" class="simpleButton orangeX  largeX">{{Str::upper(LangValue('usertransfer_btn'))}} <i class="flaticon-arrow-pointing-to-right"></i></button>
                    </div><!--.submit-->
                  </div><!--.tab-->
                </div><!--.loginPageForm-->

        </div><!--.loginPageLeft-->
      </div><!--.tab-->
    </div><!--.loginPageBox-->
  </div><!--.loginPage-->
</div><!--.container-->


<div class="container">
  <div class="fw whyFX">
    <div class="fw whyFXTop wow fadeInUp">
      <ul class="sul">
        <li class="title">{{LangValue('usertransfer_sub_h1')}}</li>
        <li class="desc">{{LangValue('usertransfer_sub_h2')}}</li>
      </ul>
    </div><!--.top-->

    <div class="fw whyFXBox">
      <div class="fw whyFxDiv wow fadeInUp">
        <div class="whyFXFirst">
          <ul class="sul">
            <li class="img"><img src="{{asset('assets/images/fx1.png')}}" /></li>
            <li class="title">{{Str::upper(LangValue('usertransfer_sub_center1'))}}</li>
            <li class="desc">{{Str::upper(LangValue('usertransfer_sub_center2'))}}</li>
          </ul>
        </div><!--.box-->
        <div class="whyFXRow">
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub1_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub1_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-pulley"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub2_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub2_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-investment"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub3_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub3_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-car"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub4_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub4_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-sales"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub5_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub5_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
          <div class="whyFXCol">
            <div class="fw whyFXColBox">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-analytics-1"></i></span></li>
                <li class="title">{{Str::upper(LangValue('usertransfer_sub6_1'))}}<br />{{Str::upper(LangValue('usertransfer_sub6_2'))}}</li>
              </ul>
            </div><!--.box-->
          </div><!--.col-->
        </div><!--.row-->
      </div><!--.div-->
    </div><!--.box-->
    <div class="fw whyFXButton">
      <a href="javascript:void(Tawk_API.toggle())" class="whyFXButtonX"><i class="flaticon-headset"></i>{{LangValue('usertransfer_sub_btn')}}</a>
    </div><!--.button-->
  </div><!--.whyFx-->
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
