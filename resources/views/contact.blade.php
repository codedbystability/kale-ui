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
        <li class="title"><h1 class="titleX">{{LangValue('subpage_contact_h1')}}</h1></li>
        <li class="desc">{{LangValue('subpage_contact_h2')}}</li>
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
            <h2 class="title">{{LangValue('contact_h1')}}</h2>
          </div><!--.title-->
          <div class="fw simpleContent">
            <p>{{LangValue('contact_h2')}}</p>
          </div><!--.content-->
          <div class="fw simpleContentTitle orange-border">
            <h2 class="title">{{LangValue('index_c10-2_t1')}}</h2>
          </div><!--.title-->
          <div class="fw workTab">
          <div class="fw contactDetails">
              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-user-3"></i></li>
                  <li class="title">{{Str::upper(LangValue('index_c10-2_info1'))}}</li>
                  <li class="desc">{{CoInfo('Name')}}</li>
                </ul>
              </div><!--.tab-->
              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-arroba"></i></li>
                  <li class="title">{{Str::upper(LangValue('index_c10-2_info2'))}}</li>
                  <li class="desc">{{CoInfo('Mail')}}</li>
                </ul>
              </div><!--.tab-->
              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-telephone"></i></li>
                  <li class="title">{{Str::upper(LangValue('index_c10-2_info3'))}}</li>
                  <li class="desc">{{CoInfo('Phone')}} /  +44 203 239 54 50</li>
                </ul>
              </div><!--.tab-->
              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-whatsapp-logo"></i></li>
                  <li class="title">{{Str::upper(LangValue('index_c10-2_info4'))}}</li>
                  <li class="desc">{{CoInfo('Whatsapp')}}</li>
                </ul>
              </div><!--.tab-->



              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-share"></i></li>
                  <li class="title">{{Str::upper(LangValue('index_c10-2_info5'))}}</li>
                  <li class="social">
                    <a href="{{CoInfo('Facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{CoInfo('Instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="{{CoInfo('Twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="{{CoInfo('Youtube')}}" target="_blank"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div><!--.tab-->

              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-grid-world"></i></li>
                  <li class="title">{{Str::upper(LangValue('adress_title-1'))}}</li>
                  <li class="desc" style="font-size: 16px;" >{{CoInfo('Adress')}}</li>
                </ul>
              </div><!--.tab-->

              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-grid-world"></i></li>
                  <li class="title">{{Str::upper(LangValue('adress_title-2'))}}</li>
                  <li class="desc"  style="font-size: 16px;" >{{CoInfo('Adress2')}}</li>
                </ul>
              </div><!--.tab-->

              <div class="fw contactDetailsTab">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-grid-world"></i></li>
                  <li class="title">{{Str::upper(LangValue('adress_title-3'))}}</li>
                  <li class="desc" style="font-size: 16px;" >{{CoInfo('Adress3')}}
                  </li>
                </ul>
              </div><!--.tab-->



            </div><!--.contactDetails-->
          </div><!--.workTab-->
        </div><!--.left-->
      </div><!--.pageLeft-->
      <div class="pageRight wow fadeInRight contactPageRight">
        <div class="fw pageRightBox">
          <div class="fw simpleContentTitle">
            <h3 class="title">{{LangValue('index_c10-1_t1')}}</h3>
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
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-menu"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input6-t'))}}</span>
                  <select name="sub" class="loginFormSelect white">
                  <option>{{LangValue('index_c10_input6-p')}}</option>
                  <option>{{LangValue('index_c10_input6-v1')}}</option>
                  <option>{{LangValue('index_c10_input6-v2')}}</option>
                  <option>{{LangValue('index_c10_input6-v4')}}</option>
                  <option>{{LangValue('index_c10_input6-v5')}}</option>
                  
                  </select>
                  <span class="arrow"><i class="fas fa-chevron-down"></i></span>
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw loginPageFormTabBox BoxTop10">
                  <span class="icon"><i class="flaticon-pencil"></i></span>
                  <span class="title">{{Str::upper(LangValue('index_c10_input5-t'))}}</span>
                  <textarea  name="note" class="loginFormTextarea white" placeholder="{{LangValue('index_c10_input5-p')}}"></textarea>
                </div><!--.tabBox-->
              </div><!--.col-->
              <div class="homeContactFormCol full">
                <div class="fw homeContactFormBox submitContactFormBox">
                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                  <button type="submit"  class="simpleButton largeX" style="width:100%; max-width:100%">{{Str::upper(LangValue('index_c10_input-btn'))}}<i id="contactIcon" class="flaticon-arrow-pointing-to-right"></i></button>
                
                </div><!--.box-->
              </div><!--.col-->
            </div><!--.row-->
          </form>

          </div><!--.homeContactForm-->
        </div><!--.pageRight-->
      </div><!--.pageRight-->
    </div><!--.page-->
  </div><!--.pageAll-->
</div><!--.container-->


@endsection



@section('footer')

@endsection

