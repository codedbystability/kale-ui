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

        <li class="icon"><span class="iconX"><i class="flaticon-connect"></i></span></li>

        <li class="title"><h1 class="titleX">{{$data['SefContent']['Title']}}</h1></li>

        <li class="desc">{{$data['SefContent']['Title2']}}</li>

      </ul>

    </div><!--.pageHeader-->

  </div><!--.container-->

</div><!--.pageHeaderAll-->



<div class="container">

  <div class="fw pageAll">

    <div class="fw page">

      <div class="pageLeft wow fadeInLeft">

        <div class="fw pageLeftBox">



        {!!$data['SefContent']['ShortDesc']!!}





        </div><!--.left-->

      </div><!--.pageLeft-->

      <div class="pageRight wow fadeInRight">

        <div class="fw pageRightBox">

          <div class="fw simpleContentTitle">

            <h3 class="title">{{LangValue('rightmenu_title')}}</h3>

          </div><!--.title-->

          <div class="fw sidebarMenu">

            <nav>

              <ul>

               @foreach($data['staticpageList'] as $row) 

                <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>

                @endforeach                                 

              </ul>

            </nav>

          </div><!--.sidebarMenu-->

          <div class="fw sidebarDemo cover" style="background-image:url({{asset('assets/images/sidebar-demo.png')}})">

            <div class="fw sidebarDemoTitle">

              <span class="title">{{Str::upper(LangValue('subpage_right_form_l1'))}}</span>

              <span class="desc">{{Str::upper(LangValue('register_tab1_h1'))}}</span>

            </div><!--.title-->

            <form id="registerFormDemo" method="POST" action="#">

            <div class="fw sidebarDemoBox">

              <ul>

                <li>

                  <div class="fw homeContactInput smallX BoxTop10">

                    <span class="icon"><i class="flaticon-user-2"></i></span>

                    <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />

                  </div><!--.input-->

                </li>

                <li>

                  <div class="fw homeContactInput smallX BoxTop10">

                    <span class="icon"><i class="flaticon-telephone-1"></i></span>

                    <input  name="phone" type="text" class="contactText" placeholder="{{LangValue('slider_form_phone')}}" />

                  </div><!--.input-->

                </li>

                <li>

                  <div class="fw homeContactInput smallX BoxTop10">

                    <span class="icon"><i class="flaticon-arroba"></i></span>

                    <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />

                  </div><!--.input-->

                </li>

                <li><button type="submit" class="sidebarDemoSubmit smallX">{{Str::upper(LangValue('register_tab1_btn'))}}</button></li>

              </ul>

            </div><!--.box-->

            </form>

          </div><!--.sidebarDemo-->

          <div class="fw sidebarPromosyon">

            <a href="{{LaravelLocalization::localizeURL('/promotions') }}" class="cover" style="background-image:url({{asset('assets/images/promosyon.png')}})">

              <ul class="sul">

                <li class="icon"><i class="flaticon-coin"></i></li>

                <li class="title">EKOLFX</li>

                <li class="desc">{{Str::upper(LangValue('rightmenu_promotions'))}}</li>

              </ul>

            </a>

          </div><!--.sidebarPromosyon-->

          <div class="fw sidebarOtherMenu">

            <div class="fw sidebarOtherMenuTab">

              <ul class="sul">

                <li class="icon"><span class="iconX"><i class="flaticon-pulley-1"></i></span></li>

                <li class="title">{{LangValue('index_c8_sub2_t')}}</li>

                <li class="more"><a href="#">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>

              </ul>

            </div><!--.tab-->

            <div class="fw sidebarOtherMenuTab">

              <ul class="sul">

                <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>

                <li class="title">{{LangValue('index_c8_sub1_t')}}</li>

                <li class="more"><a href="#">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>

              </ul>

            </div><!--.tab-->

            <div class="fw sidebarOtherMenuTab">

              <ul class="sul">

                <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>

                <li class="title">{{LangValue('index_c8_sub3_t')}}</li>

                <li class="more"><a href="#">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>

              </ul>

            </div><!--.tab-->

            <div class="fw sidebarOtherMenuTab">

              <ul class="sul">

                <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>

                <li class="title">{{LangValue('index_c8_sub5_t')}}</li>

                <li class="more"><a href="#">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>

              </ul>

            </div><!--.tab-->

            <div class="fw sidebarOtherMenuTab">

              <ul class="sul">

                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>

                <li class="title">{{LangValue('index_c8_sub7_t')}}</li>

                <li class="more"><a href="#">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>

              </ul>

            </div><!--.tab-->

          </div><!--.sidebarOtherMenu-->

        </div><!--.pageRight-->

      </div><!--.pageRight-->

    </div><!--.page-->

  </div><!--.pageAll-->

</div><!--.container-->



@endsection







@section('footer')



@endsection



