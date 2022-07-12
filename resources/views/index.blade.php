@extends('app')



@section('seoheader')

@endsection

@section('header')
<title>{{CoInfo('SeoTitle')}}</title>
<meta name="description" content="{{CoInfo('SeoDesc')}}" /> 
@endsection

@section('main')
<div class="fw headerCurrencyAll wow fadeInUp marquee"  >
  <ul id="pnlCurrencyBar">
  

  @foreach($data['topBarData'] as $row)                 
                <li id="barLi_{{$row['SYMBOL']}}">
                <span  class="title">{{$row['SYMBOL']}}</span>
                <span  id="barLiSpan_{{$row['SYMBOL']}}" class='desc @if($row["DIRECTION"] == 0) red @elseif($row["DIRECTION"] == 1) green  @endif'>
                {{$row['BID']}}                   
                </span></li>
  @endforeach  
  
  
 
  </ul>
</div><!--.headerCurrencyAll-->

<div class="fw homeSliderAll">
  <div class="fw homeSlider">
    <div class="item">
      <div class="fw homeSliderItem cover" style="background-image:url({{asset('assets/images/slider4.jpg')}})">
        <div class="container">
          <div class="fw sliderFormAll">
            <div class="fw homePreview">
              <ul>
                <li class="spacingTitle wow zoomIn" data-wow-delay="0.3s">{{Str::upper(LangValue('slider_1_line1'))}}</li>
                <li class="homeSliderTitle wow zoomIn" data-wow-delay="0.6s"><small>{{Str::upper(LangValue('slider_1_line2'))}}</small>{{Str::upper(LangValue('slider_1_line3'))}}</li>
                <li class="desc wow zoomIn" data-wow-delay="0.9s">{{Str::upper(LangValue('slider_1_line4'))}}</li>
                <li class="link twiceLink wow zoomIn" data-wow-delay="1.2s"><a href="{{LaravelLocalization::localizeURL('/demo') }}" class="simpleButton orangeX">{{Str::upper(LangValue('slider_1_button1'))}}<i class="flaticon-window"></i></a><a href="{{LaravelLocalization::localizeURL('/register') }}" class="simpleButton">{{Str::upper(LangValue('slider_1_button2'))}}<i class="flaticon-add"></i></a></li>
              </ul>
            </div><!--.homePreview-->
            <div class="sliderForm">
              <div class="fw sliderFormBox wow fadeIn" data-wow-delay="0.9s">
                <div class="fw sliderFormBoxTitle">
                  <img src="{{asset('assets//images/slider-fox.png')}}" />
                  <span class="title">{{LangValue('slider_form_title')}}</span>
                </div><!--.title-->
                <form id="registerFormDemoSlider" method="POST" action="#">
                <div class="fw sliderFormDiv">
               
                  <ul>
                    <li>
                      <div class="fw homeContactInput BoxTop10">
                        <span class="icon"><i class="flaticon-user-3"></i></span>
                        <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
                      </div><!--.input-->
                    </li>
                    <li>
                      <div class="fw homeContactInput BoxTop10 js-mask-tel ">
                        <span class="icon"><i class="flaticon-telephone-1"></i></span>
                        <input  id="txtPhone1"  name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
                      </div><!--.input-->
                    </li>
                    <li>
                      <div class="fw homeContactInput BoxTop10">
                        <span class="icon"><i class="flaticon-arroba"></i></span>
                        <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
                      </div><!--.input-->
                    </li>
                    <li class="submit">
                    <input type="hidden" name="type" value="demo">
                    <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                      <button id="registerFormDemoSliderBtn" type="submit" class="simpleButton">{{Str::upper(LangValue('slider_form_button_text'))}}<i class="flaticon-arrow-pointing-to-right"></i></button></li>
                  </ul>
               
                </div><!--.sliderFormDiv-->
                </form>
              </div><!--.sliderFormBox-->
            </div><!--.sliderform-->
          </div><!--.sliderFormAll-->
        </div><!--.container-->
        <div class="fw homePreviewAllAfter"></div><!--.after-->
      </div><!--.homeSliderItem-->
    </div><!--.item-->

    <div class="item">
      <div class="fw homeSliderItem cover" style="background-image:url({{asset('assets/images/slider2.jpg')}})">
        <div class="container">
          <div class="fw homePreview">
            <ul>
              <li class="spacingTitle wow zoomIn" data-wow-delay="0.3s">{{Str::upper(LangValue('slider_3_line1'))}}</li>
              <li class="homeSliderLogo wow zoomIn" data-wow-delay="0.6s"><img src="{{asset('assets//images/slider-logo.png')}}" /></li>
              <li class="homeSliderTitle wow zoomIn" data-wow-delay="0.9s">{{Str::upper(LangValue('slider_3_line2'))}}</li>
              <li class="desc wow zoomIn" data-wow-delay="0.9s">{{LangValue('slider_3_line3')}}</li>
              <li class="link twiceLink wow zoomIn" data-wow-delay="1.2s"><a href="{{LaravelLocalization::localizeURL('/demo') }}" class="simpleButton orangeX">{{Str::upper(LangValue('slider_3_button1'))}}<i class="flaticon-window"></i></a><a href="{{LaravelLocalization::localizeURL('/register') }}" class="simpleButton">{{Str::upper(LangValue('slider_3_button2'))}}<i class="flaticon-add"></i></a></li>
              <li class="img wow fadeInUp center" data-wow-delay="1.5s" style="height:339px"><img src="{{asset('assets//images/slider2-img.png')}}" /></li>
            </ul>
          </div><!--.homePreview-->
        </div><!--.container-->
        <div class="fw homePreviewAllAfter"></div><!--.after-->
      </div><!--.homeSliderItem-->
    </div><!--.item-->

    <div class="item">
      <div class="fw homeSliderItem cover" style="background-image:url({{asset('assets/images/slider1.png')}})">
        <div class="container">
          <div class="fw homePreview">
            <ul>
              <li class="discount wow zoomIn" data-wow-delay="0.3s"><span class="discountX blueX">{{Str::upper(LangValue('slider_4_line1'))}}</span></li>
              <li class="title wow zoomIn" data-wow-delay="0.6s"><strong>{{Str::upper(LangValue('slider_4_line2'))}}</strong><br />{{Str::upper(LangValue('slider_4_line3'))}}<img src="{{asset('assets//images/yellow-polygon.png')}}" /></li>
              <li class="desc wow zoomIn" data-wow-delay="0.9s">{{LangValue('slider_4_line4')}}</li>
              <li class="link wow zoomIn" data-wow-delay="1.2s"><a href="{{LaravelLocalization::localizeURL('/promotions') }}" class="simpleButton">{{Str::upper(LangValue('slider_4_button1'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>
              <li class="img wow fadeInUp" data-wow-delay="1.5s"><img src="{{asset('assets//images/slider1-img.png')}}" /></li>
            </ul>
          </div><!--.homePreview-->
        </div><!--.container-->
        <div class="fw homePreviewAllAfter"></div><!--.after-->
      </div><!--.homeSliderItem-->
    </div><!--.item-->

    <div class="item">
      <div class="fw homeSliderItem cover" style="background-image:url({{asset('assets/images/slider5.png')}})">
        <div class="container">
          <div class="fw homePreview">
            <ul>
              <li class="spacingTitle wow zoomIn" data-wow-delay="0.3s">{{Str::upper(LangValue('slider_5_line1'))}}</li>
              <li class="discount wow zoomIn" data-wow-delay="0.3s" style="margin-bottom: 0px;"><span class="discountX blueX" style="font-size: 47px; font-weight: 700">{{Str::upper(LangValue('slider_5_line2'))}}</span></li>
              <li class="homeSliderTitle wow zoomIn" data-wow-delay="0.6s" style="font-weight: 700; ">{{Str::upper(LangValue('slider_5_line3'))}} </li>
              <li class="desc wow zoomIn" data-wow-delay="0.9s">{{LangValue('slider_5_line4')}}</li>
              <li class="img wow fadeInUp" data-wow-delay="1.5s"><img src="{{asset('assets//images/slider5-img.png')}}" /></li>
            </ul>
          </div><!--.homePreview-->
        </div><!--.container-->
        <div class="fw homePreviewAllAfter"></div><!--.after-->
      </div><!--.homeSliderItem-->
    </div><!--.item-->

  </div><!--.homeSlider-->
</div><!--.homeSliderAll-->

<div class="fw demoRegister">
  <div class="container">
    <div class="fw sliderFormBox wow fadeIn" data-wow-delay="0.9s">
      <div class="fw sliderFormBoxTitle">
        <img src="{{asset('assets//images/slider-fox.png')}}" />
        <span class="title">{{LangValue('slider_form_title')}}</span>
      </div><!--.title-->
      <div class="fw sliderFormDiv">
        <form id="registerFormDemo" method="POST" action="#">
        <ul>
          <li>
            <div class="fw homeContactInput BoxTop10">
              <span class="icon"><i class="flaticon-user-3"></i></span>
              <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
            </div><!--.input-->
          </li>
          <li>
            <div class="fw homeContactInput BoxTop10 js-mask-tel">
              <span class="icon"><i class="flaticon-telephone-1"></i></span>
              <input   id="txtPhone2" name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
            </div><!--.input-->
          </li>
          <li>
            <div class="fw homeContactInput BoxTop10">
              <span class="icon"><i class="flaticon-arroba"></i></span>
              <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
            </div><!--.input-->
          </li>
          <li class="submit">
          <input type="hidden" name="type" value="demo">
          <input type="hidden" name="lang" value="{{app()->getLocale()}}">
            <button id="registerFormDemoBtn" type="submit" class="simpleButton">{{Str::upper(LangValue('slider_form_button_text'))}}<i class="flaticon-arrow-pointing-to-right"></i></button></li>
        </ul>
        </form>
      </div><!--.sliderFormDiv-->
    </div><!--.sliderFormBox-->
  </div><!--.container-->
</div><!--.demoRegister-->


<div class="container">
  <div class="fw homePreviewBot blueX">
    <div class="homePreviewBotTab">
      <a href="{{LaravelLocalization::localizeURL('/demo') }}">
        <ul class="sul wow zoomIn">
          <li class="img"><i class="textX blueX flaticon-window"></i></li>
          <li class="title">{{Str::upper(LangValue('slider_sub_1_h1'))}}</li>
          <li class="desc">{{LangValue('slider_sub_1_h2')}}</li>
        </ul>
      </a>
    </div><!--.tab-->
    <div class="homePreviewBotTab">
      <a href="{{LaravelLocalization::localizeURL('/register') }}">
        <ul class="sul wow zoomIn">
          <li class="img"><i class="textX greenX flaticon-user-3"></i></li>
          <li class="title">{{Str::upper(LangValue('slider_sub_2_h1'))}}</li>
          <li class="desc">{{LangValue('slider_sub_2_h2')}}</li>
        </ul>
      </a>
    </div><!--.tab-->
    <div class="homePreviewBotTab">
      <a href="{{LaravelLocalization::localizeURL('/transfer') }}">
        <ul class="sul wow zoomIn">
          <li class="img"><i class="textX orangeX flaticon-arrow"></i></li>
          <li class="title">{{Str::upper(LangValue('slider_sub_3_h1'))}}</li>
          <li class="desc">{{LangValue('slider_sub_3_h2')}}</li>
        </ul>
      </a>
    </div><!--.tab-->
  </div><!--.bot-->
</div><!--.container-->

<div class="container">
  <div class="fw homeInfo">
    <div class="fw simpleTitle wow fadeInUp">
      <ul class="sul">
        <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
        <li class="title">{{LangValue('index_c1_h1')}}</li>
        <li class="desc">{{LangValue('index_c1_h2')}}</li>
      </ul>
    </div><!--.title-->
    <div class="fw homeInfoBox">
      <div class="homeInfoBoxLeft wow fadeInLeft">
        <div class="fw homeInfoBoxLeftDiv">
          <div class="fw simpleContent">
            <h3>{{LangValue('index_c1_h3')}}</h3>
            <p>{!!LangValue('index_c1_p')!!}</p>
         
         </div><!--.content-->
          <div class="fw homeInfoLeftButtons">
            <ul>
            @foreach($data['corperateList'] as $row) 
                <li><a class="simpleButton onlyGray" href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
            @endforeach  
            </ul>
          </div><!--.buttons-->
        </div><!--.div-->
      </div><!--.left-->
      <div class="homeInfoBoxRight wow fadeInRight">
        <div class="fw homeInfoBoxRightDiv">
          <div class="fw homeInfoImg">
            <img src="{{asset('assets//images/home-img.png')}}" />
          </div><!--.img-->
        </div><!--.div-->
      </div><!--.right-->
    </div><!--.box-->
  </div><!--.homeInfo-->
</div><!--.container-->

<div class="fw threeStepsAll cover wow fadeInUp" style="background-image:url({{asset('assets/images/three-steps.png')}})">
  <div class="container">
    <div class="fw threeSteps">
      <div class="fw threeStepsTitle">
        <ul class="sul">
          <li class="title">{{LangValue('index_c2_h1')}}</li>
          <li class="desc">{{LangValue('index_c2_h2')}}</li>
        </ul>
      </div><!--.title-->
      <div class="fw threeStepsBox">
        <div class="fw threeStepTab wow fadeIn">
          <ul class="sul">
            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-user"></i><em class="orangeX">01</em></span></li>
            <li class="title">{{LangValue('index_c2_step1-1')}}</li>
            <li class="desc">{{LangValue('index_c2_step1-2')}}</li>
          </ul>
        </div><!--.tab-->
        <div class="fw threeStepTab wow fadeIn">
          <ul class="sul">
            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-transfer"></i><em class="orangeX">02</em></span></li>
            <li class="title">{{LangValue('index_c2_step2-1')}}</li>
            <li class="desc">{{LangValue('index_c2_step2-2')}}</li>
          </ul>
        </div><!--.tab-->
        <div class="fw threeStepTab wow fadeIn">
          <ul class="sul">
            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-graph"></i><em class="orangeX">03</em></span></li>
            <li class="title">{{LangValue('index_c2_step3-1')}}</li>
            <li class="desc">{{LangValue('index_c2_step3-2')}}</li>
          </ul>
        </div><!--.tab-->
      </div><!--.box-->
    </div><!--.threeSteps-->
  </div><!--.container-->
</div><!--.threeStepsAll-->

<div class="container" >
  <div class="fw homeStats">
    <div class="row">
        <div class="col-sm-12 col-lg-6 wow fadeInLeft">
            <div class="fw homeStatsBox">
              <div class="fw simpleTitle orange">
                <ul class="sul">
                  <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
                  <li class="title">{{LangValue('index_c3_2_h1')}}</li>
                  <li class="desc">{{LangValue('index_c3_2_h2')}}</li>
                </ul>
              </div><!--.title-->
              <div class="fw homeVideos cover" style="background-image:url({{asset('assets/images/video-img.png')}})">
                <div class="fw homeVideosSlider1">
                  <div class="item" >
                      <iframe width="615" height="380" src="https://www.youtube.com/embed/JjvtprwYcAE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div><!--.item-->

                </div><!--.slider-->
              </div><!--.homeVideos-->
    
            </div><!--.homeStatsBox-->
          </div><!--.col-->
      <div class="col-sm-12 col-lg-6 wow fadeInRight">
        <div class="fw homeStatsBox">
          <div class="fw simpleTitle" style="margin-bottom: 0px;padding-bottom: 0px;">
            <ul class="sul">
              <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
            </ul>

        </div><!--.homeStatsBox-->

        <div class="fw homeVideosBot">
            <div class="homeVideosBotRow">
              <div class="homeVideosBotCol">
                <div class="fw homeVideosBotBox">
                  <ul class="sul wow zoomIn delay-1s">
                    <li class="icon"><i class="textX greenX flaticon-open-book"></i></li>
                    <li class="title">{{LangValue('index_c3_2_sub1_t1')}}</li>
                    <li class="desc">{{LangValue('index_c3_2_sub1_t2')}}</li>
                  </ul>
                </div><!--.box-->
              </div><!--.col-->
              <div class="homeVideosBotCol">
                <div class="fw homeVideosBotBox">
                  <ul class="sul wow zoomIn delay-1s">
                    <li class="icon"><i class="textX orangeX flaticon-report"></i></li>
                    <li class="title">{{LangValue('index_c3_2_sub2_t1')}}</li>
                    <li class="desc">{{LangValue('index_c3_2_sub2_t2')}}</li>
                  </ul>
                </div><!--.box-->
              </div><!--.col-->
              <div class="homeVideosBotCol">
                <div class="fw homeVideosBotBox">
                  <ul class="sul wow zoomIn delay-1s">
                    <li class="icon"><i class="textX blueX flaticon-bars"></i></li>
                    <li class="title">{{LangValue('index_c3_2_sub3_t1')}}</li>
                    <li class="desc">{{LangValue('index_c3_2_sub3_t2')}}</li>
                  </ul>
                </div><!--.box-->
              </div><!--.col-->
              <div class="homeVideosBotCol">
                <div class="fw homeVideosBotBox">
                  <ul class="sul wow zoomIn delay-1s">
                    <li class="icon"><i class="textX pinkX flaticon-coin"></i></li>
                    <li class="title">{{LangValue('index_c3_2_sub4_t1')}}</li>
                    <li class="desc">{{LangValue('index_c3_2_sub4_t2')}}</li>
                  </ul>
                </div><!--.box-->
              </div><!--.col-->
            </div><!--.row-->
          </div><!--.bot-->
          
      </div><!--.title-->
      </div><!--.col-->

 

    </div><!--.row-->
  </div><!--.homeStats-->
</div><!--.container-->

<div class="fw homePlatformAll">
  <div class="container">
    <div class="fw homePlatform">
      <div class="row">
        <div class="col-md-12 col-lg-6 wow fadeInLeft">
          <div class="fw homePlatformLeft">
            <div class="fw simpleTitle">
              <ul class="sul">
                <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
                <li class="title">{{LangValue('index_c4_h1')}}</li>
                <li class="desc">{{LangValue('index_c4_h2')}}</li>
              </ul>
            </div><!--.title-->
            <div class="fw mirstMetaMenus">
              <ul role="tablist">
                <li role="presentation" class="active"><a href="{{LaravelLocalization::localizeURL($data['menuplatform']['SeoTags']) }}" role="tab" data-toggle="tab">Metatrader 4</a></li>
              </ul>

            </div><!--.menus-->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="trader1">
                <div class="fw simpleContent align-justify">
                  <h3>{{LangValue('index_c4_t1')}} <a href="{{LaravelLocalization::localizeURL($data['menuplatform']['SeoTags']) }}" class="h3More">{{LangValue('index_c4_tb1')}}</a></h3>
                  <p>{{LangValue('index_c4_p')}}</p>
                </div><!--.content-->
                <div class="fw metaMenus">
                  <ul>
                    <li class="gray"><a target="_blank" href="{{LaravelLocalization::localizeURL('/mt4') }}" class="simpleButton">{{Str::upper(LangValue('index_c4_b1'))}}<i class="flaticon-grid-world"></i></a></li>
                    <li class="blue"><a target="_blank" href="https://download.mql5.com/cdn/web/14092/mt4/ekolglobalmarkets4setup.exe" class="simpleButton">{{Str::upper(LangValue('index_c4_b2'))}}<i class="flaticon-windows-logo-silhouette"></i></a></li>
                    <li class="green"><a target="_blank" href="https://download.mql5.com/cdn/mobile/mt4/android?server=EkolGlobalMarkets-Demo,EkolGlobalMarkets-Real" class="simpleButton">{{Str::upper(LangValue('index_c4_b3'))}}<i class="flaticon-google-play"></i></a></li>
                    <li class="black"><a target="_blank" href="https://download.mql5.com/cdn/mobile/mt4/ios?server=EkolGlobalMarkets-Demo,EkolGlobalMarkets-Real" class="simpleButton">{{Str::upper(LangValue('index_c4_b4'))}}<i class="flaticon-apple"></i></a></li>
                  </ul>
                </div><!--.metaMenus-->
              </div><!--.tabpanel-->
            </div><!--.tabcontent-->

          </div><!--.left-->
        </div><!--.col-->
        <div class="col-md-12 col-lg-6 wow fadeInRight">
          <div class="fw homePlatformRight wow zoomIn delay-1s">
            <img src="{{asset('assets//images/meta.png')}}" />
          </div><!--.right-->
        </div><!--.col-->
      </div><!--.row-->
    </div><!--.homePlatform-->
  </div><!--.container-->
</div><!--.platformAll-->

<div class="fw homeSpreadAll">
  <div class="container">
    <div class="fw homeSpread">
      <div class="fw simpleTitle wow fadeInUp">
        <ul class="sul">
          <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
          <li class="title">{{LangValue('index_livefeed_h1')}}</li>
          <li class="desc">{{LangValue('index_livefeed_h2')}}</li>
          <li class="rightButton"><a href="{{LaravelLocalization::localizeURL('/live') }}" class="simpleButton">{{Str::upper(LangValue('index_livefeed_btn1'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>
        </ul>
      </div><!--.title-->
      <div class="fw homeSpreadBox wow fadeInUp">
      <div class="fw homeStatsTable">
        <div class="fw homeStatsTableTop spreadTable">
          <ul role="tablist">
            @foreach($data['instrumentGroups'] as $index => $rows)
            <li role="presentation" @if($index==0) class="active" @endif><a href="#spread{{$rows['Id']}}" role="tab" data-toggle="tab">{{Str::upper($rows['Title'])}}</a></li>
            @endforeach
          </ul>
        </div>
        <!--.top-->


        <div class="tab-content">
          @foreach($data['swapAllData'] as $index => $rows)

          <div role="tabpanel" class='tab-pane fade @if($index == 0) in active @endif ' id="spread{{$rows['CID']}}">
            <div class="fw homeStatsTableBot">
              <div class="fw simpleStatsTable overflowFirst">
                <div class="fw simpleStatsTableDiv overflowDiv">

                  <ul class="top">
                    @if($data['agent']->isMobile())
                    <li style='width:10%'><span class="title">{{LangValue('swap_table_Symbol')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('index_c3_1_tablehead2')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('spread_table_spread')}}</span></li>
                    <li style='width:15%' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>
                    <li style="width:7%"><span class="title">{{LangValue('index_c3_1_tablehead3')}}</span></li>
                    <li style="width:7%"><span class="title">{{LangValue('index_c3_1_tablehead4')}}</span></li>                                    
                    <li style="width:7%"><span class="title">{{LangValue('index_c3_1_tablehead5')}}</span></li>                  
                    <li style="width:12%"><span class="title">{{LangValue('spread_table_LastUpdate')}}</span></li>
  
                    @else
  
  
                    <li style='width:15%'><span class="title">{{LangValue('swap_table_Symbol')}}</span></li>
                    <li style='width:20%' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('index_c3_1_tablehead2')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('index_c3_1_tablehead3')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('index_c3_1_tablehead4')}}</span></li>                                    
                    <li style="width:10%"><span class="title">{{LangValue('index_c3_1_tablehead5')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('spread_table_spread')}}</span></li>
                    <li style="width:12%"><span class="title">{{LangValue('spread_table_LastUpdate')}}</span></li>
  
  
                    @endif
  
  
  
              
  
  
                    </ul>

                  @foreach(array_slice($rows['SwapData'],0,10) as $subindex => $row)
                  
  
                  <ul class="bot">

                  @if($data['agent']->isMobile())
                  <li class="currency" style='width:10%' ><span class="title liveCurrency" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_BID_{{$row['Symbol']}}">-</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_SPREAD_{{$row['Symbol']}}">-</span></li>                    

                  <li style='width:15%' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>                  
                  <li style="width:7%"><span class="title" id="LiSpan_ASK_{{$row['Symbol']}}">-</span></li>
                  <li style="width:7%"><span class="title" id="LiSpan_LOW_{{$row['Symbol']}}">-</span></li>
                  <li style="width:7%"><span class="title" id="LiSpan_HIGH_{{$row['Symbol']}}">-</span></li>                  
                  <li style="width:12%"><span class="title" id="LiSpan_MODIFY_TIME_{{$row['Symbol']}}">- </span></li>

                  @else
                  <li class="currency" style='width:15%' ><span class="title liveCurrency" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
                  <li style='width:20%' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_BID_{{$row['Symbol']}}">-</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_ASK_{{$row['Symbol']}}">-</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_LOW_{{$row['Symbol']}}">-</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_HIGH_{{$row['Symbol']}}">-</span></li>
                  <li style="width:10%"><span class="title" id="LiSpan_SPREAD_{{$row['Symbol']}}">-</span></li>                    
                  <li style="width:12%"><span class="title" id="LiSpan_MODIFY_TIME_{{$row['Symbol']}}">- </span></li>

                  @endif




                  </ul>

             

                  @endforeach
                  
                </div>
                <!--.div-->
              </div>
              <!--.table-->
            </div>
            <!--.bot-->
          </div>
          @endforeach


        </div>
        <!--.tab-content-->
      </div>
      <!--.table-->
        <div class="fw homeSpreadMore">
          <a href="{{LaravelLocalization::localizeURL('/live') }}" class="homeSpreadButton">{{Str::upper(LangValue('index_livefeed_btn2'))}}</a>
        </div><!--.homeSpreadMore-->
      </div><!--.homeSpreadbox-->
    </div><!--.homeSpread-->
  </div><!--.container-->
</div><!--.homeSpreadAll-->



<div class="fw homeYatirimAll cover" style="background-image:url({{asset('assets/images/home-yatirim.png')}})">
  <div class="container">
    <div class="fw homeYatirim">
      <div class="homeYatirimLeft wow fadeInLeft">
        <div class="fw homeYatirimLeftBox">
          <ul class="sul">
            <li class="title">EKOLFX</li>
            <li class="bigTitle">{{LangValue('index_c7_h1')}}</li>
            <li class="desc">{{LangValue('index_c7_h2')}}</li>
            <li class="link"><a href="#" class="simpleButton">{{Str::upper(LangValue('index_c7_tb1'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>
          </ul>
        </div><!--.box-->
      </div><!--.left-->
      <div class="homeYatirimRight wow fadeInRight">
        <div class="fw homeYatirimRightBox">
          <div class="homeYatirimRow">


          @foreach($data['instrumentsList'] as $srows)  
          <div class="homeYatirimCol">
              <div class="fw homeYatirimTab">
                <ul class="sul wow zoomIn delay-1s">

 
                  @if(strpos($srows['IconHTML'], 'flat')!== false)              
                  <li class="icon"><span class="iconX"><i class="{{$srows['IconHTML']}}"></i></span></li>            
                  @else
                  <li class="img"><img src="{{asset('assets//images/'.$srows['IconHTML'])}}" /></li>              
                  @endif
                  
                  <li class="title">EKOLFX</li>
                  <li class="desc">{{ $srows['Title'] }}</li>
                  <li class="more"><a href="{{LaravelLocalization::localizeURL($srows['SeoTags']) }}" class="moreX">{{Str::upper(LangValue('subpage_instrument_details'))}} </a></li>
                </ul>
              </div><!--.tab-->
            </div><!--.col-->
          @endforeach
          </div><!--.row-->
        </div><!--.rightBox-->
      </div><!--.right-->
    </div><!--.homeYatirim-->
  </div><!--.container-->
</div><!--.homeYatirimAll-->

<div class="container">
  <div class="fw homeAdvantages">
    <div class="fw simpleTitle wow fadeInUp">
      <ul class="sul">
        <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
        <li class="title">{{LangValue('index_c8_h1')}} </li>
        <li class="desc">{{LangValue('index_c8_h2')}}</li>
      </ul>
    </div><!--.title-->
    <div class="fw homeAdvantagesBox wow fadeInUp">
      <div class="homeAdvantagesRow">
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="0.3s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-expand-square"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub1_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub1_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="0.6s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-pulley-1"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub2_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub2_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}L</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="0.9s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub3_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub3_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="1.2s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub4_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub4_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="1.5s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub5_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub5_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="1.8s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-computer"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub6_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub6_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="2.1s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub7_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub7_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
        <div class="homeAdvantagesCol">
          <div class="fw homeAdvantagesDiv wow zoomIn" data-wow-delay="2.4s">
            <ul class="sul">
              <li class="icon"><span class="iconX"><i class="flaticon-wallet"></i></span></li>
              <li class="title">{{LangValue('index_c8_sub8_t')}}</li>
              <li class="desc">{{LangValue('index_c8_sub8_p')}}</li>
              <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="linkX">{{Str::upper(LangValue('index_c8_linebutton'))}}</a></li>
            </ul>
          </div><!--.div-->
        </div><!--.col-->
      </div><!--.row-->
    </div><!--.advantagesbox-->
  </div><!--.homeAdvantages-->
</div><!--.container-->


<div class="fw homeIkiliAll cover" style="background-image:url({{asset('assets/images/ikili-bg.png')}})">
  <div class="container">
    <div class="fw homeIkili">
      <div class="fw homeIkiliTop">
        <div class="homeIkiliTopLeft wow fadeInLeft">
          <img src="{{asset('assets//images/ikili.png')}}" />
        </div><!--.left-->
        <div class="homeIkiliTopRight wow fadeInRight">
          <ul class="sul">
            <li class="title">{{LangValue('index_c9_h1')}}</li>
            <li class="desc">{{LangValue('index_c9_h2')}}</li>
          </ul>
        </div><!--.right-->
      </div><!--.top-->
      <div class="fw homeIkiliTab wow fadeInUp">
        <div class="fw homeIkiliTabTop">
          <ul role="tablist">
            <li role="presentation" class="active"><a href="#ikili1" role="tab" data-toggle="tab">01</a></li>  
          </ul>
        </div><!--.top-->
        <div class="fw homeIkiliTabBot">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="ikili1">
              <div class="fw homeIkiliTabDiv">
                <div class="homeIkiliTabDivLeft">
                  <div class="fw homeIkiliTabDivLeftBox">
                    <div class="fw homeIkiliTabDivLeftBoxTitle">
                      <span class="fw title">{{LangValue('index_c9_t1')}}<br /><strong>{{LangValue('index_c9_t2')}}</strong></span>
                      <a href="#" class="more">{{Str::upper(LangValue('index_c9_tb1'))}}</a>
                    </div><!--.title-->
                    <div class="fw ikiliFeatures">
                      <ul class="sul">
                        <li><i class="flaticon-transfer-1"></i>{{LangValue('index_c9_line1')}}</li>
                        <li><i class="flaticon-new"></i>{{LangValue('index_c9_line2')}}</li>
                        <li><i class="flaticon-star"></i>{{LangValue('index_c9_line3')}}</li>
                        <li><i class="flaticon-file"></i>{{LangValue('index_c9_line4')}}</li>
                        <li><i class="flaticon-bank"></i>{{LangValue('index_c9_line5')}}</li>
                      </ul>
                    </div><!--.features-->
                    <div class="fw ikiliTabFeaturesBot">
                      <a href="#" class="simpleButton">{{Str::upper(LangValue('index_c9_tb2'))}}<i class="flaticon-arrow-pointing-to-right"></i></a>
                    </div><!--.bot-->
                  </div><!--.box-->
                </div><!--.left-->
                <div class="homeIkiliTabDivRight">
                  <div class="fw homeIkiliTabDivRightBox">
                    <img src="{{asset('assets//images/ikili-right.png')}}" />
                  </div><!--.rightbox-->
                </div><!--.right-->
              </div><!--.tabDiv-->
            </div><!--.tabpanel-->
          </div><!--.tabcontent-->
        </div><!--.bot-->
      </div><!--.tab-->
    </div><!--.homeIkili-->
  </div><!--.container-->
</div><!--.homeIkiliAll-->


<div class="fw homeSpreadAll">
  <div class="container">
    <div class="fw homeSpread">
      <div class="fw simpleTitle wow fadeInUp">
        <ul class="sul">
          <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
          <li class="title">{{LangValue('index_swap_h1')}}</li>
          <li class="desc">{{LangValue('index_swap_h2')}}</li>
          <li class="rightButton"><a href="{{LaravelLocalization::localizeURL('/instruments') }}" class="simpleButton">{{Str::upper(LangValue('index_swap_btn1'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>
        </ul>
      </div><!--.title-->
      <div class="fw homeSpreadBox wow fadeInUp">
      <div class="fw homeStatsTable">
        <div class="fw homeStatsTableTop spreadTable">
          <ul role="tablist">
            @foreach($data['instrumentGroups'] as $index => $rows)
            <li role="presentation" @if($index==0) class="active" @endif><a href="#swap{{$rows['Id']}}" role="tab" data-toggle="tab">{{Str::upper($rows['Title'])}}</a></li>
            @endforeach
          </ul>
        </div>
        <!--.top-->


        <div class="tab-content">
          @foreach($data['swapAllData'] as $index => $rows)

          <div role="tabpanel" class='tab-pane fade @if($index == 0) in active @endif ' id="swap{{$rows['CID']}}">
            <div class="fw homeStatsTableBot">
              <div class="fw simpleStatsTable overflowFirst">
                <div class="fw simpleStatsTableDiv overflowDiv">

                  <ul class="top">
                    <li style='width:@if($rows["CID"] == 11) 10% @else 8% @endif'><span class="title">{{LangValue('swap_table_Symbol')}}</span></li>
                    @if($data['agent']->isMobile())
                    <li style="width:11%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapShort1'))}}</small>{{LangValue('swap_table_SwapShort2')}}</span></li>
                    <li style="width:10%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapLong1'))}}</small>{{LangValue('swap_table_SwapLong2')}}</span></li>
                    @endif


                    <li style='width:@if($rows["CID"] == 11) 30% @else 20% @endif' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>
                    <li style="width:9%"><span class="title">{{LangValue('swap_table_Contract')}}</span></li>
                    <li style="width:8%"><span class="title">{{LangValue('swap_table_Tick')}}</span></li>
                    <li style="width:7%"><span class="title">{{LangValue('swap_table_Margin')}}</span></li>
                    @if($rows["CID"] > 11)
                    <li style="width:7%" ><span class="title">{{LangValue('swap_table_Currency')}}</span></li>
                    <li style="width:7%"><span class="title">{{LangValue('swap_table_Exchange')}}</span></li>
                    
                    @endif


                    @if($rows["CID"] < 11) 
                    <li style="width:6%"  class="hasSmall" ><span class="title"><small>{{LangValue('swap_table_Friday1')}}</small>{{LangValue('swap_table_Friday2')}}</span></li>
                    @endif
                    <li style="width:12%"><span class="title">{{LangValue('swap_table_Tradingtime')}}</span></li>

                    @if($rows["CID"] < 11) 
                    <li style="width:6%"  class="hasSmall"><span class="title"><small>{{LangValue('swap_table_Sunday1')}}</small>{{LangValue('swap_table_Sunday2')}}</span></li>
                    @endif
                 


            
                    @if(!$data['agent']->isMobile())
                    <li style="width:10%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapShort1'))}}</small>{{LangValue('swap_table_SwapShort2')}}</span></li>
                    <li style="width:10%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapLong1'))}}</small>{{LangValue('swap_table_SwapLong2')}}</span></li>


                    @endif


                  </ul>

                  @foreach(array_slice($rows['SwapData'],0,10) as $subindex => $row)
                  
     
                  <ul class="bot">
                    <li style='width:@if($rows["CID"] == 11) 10% @else 8% @endif'><span class="title green">{{$row['Symbol']}}</span></li>
                    @if($data['agent']->isMobile())
                    <li style="width:11%"><span class="title">{{$row['SwapShort']}}</span></li>
                    <li style="width:11%"><span class="title">{{$row['SwapLong']}}</span></li>
                    @endif

                    <li style='width:@if($rows["CID"] == 11) 30% @else 20% @endif' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>
                    <li style="width:9%"><span class="title">{{$row['ContractSize']}}</span></li>
                    <li style="width:8%"><span class="title">{{$row['TickSize']}}</span></li>
                    <li style="width:7%"><span class="title">{{$row['Margin']}}</span></li>

                    @if($rows["CID"] > 11)
                    <li style="width:7%"><span class="title">{{$row['Currency']}}</span></li>
                    <li style="width:7%"><span class="title">{{$row['Exchange']}}</span></li>                    
                    @endif

                    @if($rows["CID"] < 11) 
                    <li style="width:6%"><span class="title">{{$row['Friday']}}</span></li>
                    @endif
                    <li style="width:12%"><span class="title">{{$row['Open']}} - {{$row['Close']}} </span></li>
                    @if($rows["CID"] < 11) 
                    <li style="width:6%"><span class="title">{{$row['Sunday']}}</span></li>
                    @endif


                   
                    @if(!$data['agent']->isMobile())
                    <li style="width:10%"><span class="title">{{$row['SwapShort']}}</span></li>
                    <li style="width:10%"><span class="title">{{$row['SwapLong']}}</span></li>
                    @endif



                  </ul>
           

                  @endforeach
                  
                </div>
                <!--.div-->
              </div>
              <!--.table-->
            </div>
            <!--.bot-->
          </div>
          @endforeach


        </div>
        <!--.tab-content-->
      </div>
      <!--.table-->
        <div class="fw homeSpreadMore">
          <a href="{{LaravelLocalization::localizeURL('/instruments') }}" class="homeSpreadButton">{{Str::upper(LangValue('index_swap_btn2'))}}</a>
        </div><!--.homeSpreadMore-->
      </div><!--.homeSpreadbox-->
    </div><!--.homeSpread-->
  </div><!--.container-->
</div><!--.homeSpreadAll-->



<div class="fw threeStepsAll cover wow fadeInUp" style="  background-image:url({{asset('assets/images/three-steps.png')}}); visibility: visible;animation-name: fadeInUp;padding: 50px 0;">
<div class="container">
<div class="fw threeSteps">
<div class="fw threeStepsTitle">
<ul class="sul">
<li class="title">Fiyat Sağlayıcılarımız</li>

</ul>
</div>
<div class="fw footerIcons" style="
    margin-bottom: 0px;
">
<ul>
<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="pepperstone" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/pepperstone.png')}}" style="padding: 29px;"></span></li>


<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="swiss bank" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/swiss.png')}}" style="padding: 30px;"></span></li>

<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="citibank" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/citibank.png')}}" style="padding: 26px; height: 80px;"></span></li>



<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="deutsche bank" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/dbank.png')}}" style="padding: 27px;"></span></li>


<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="commerzbank" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/commerzbank.png')}}" style="padding: 21px; "></span></li>


<li data-toggle="tooltip" data-placement="bottom" title="" class="wow zoomIn" data-wow-delay="0.1s" data-original-title="goldman&sachs" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn; width: auto!important;"><span class="title" style=" width: 195px;"> 
<img src="{{asset('assets/images/goldman.png')}}" style="padding: 24px; height: 80px;"></span></li>




</ul>
</div>
</div>
</div>
</div>


<div class="container">
  <div class="fw homeContact">
    <div class="fw simpleTitle wow fadeInUp">
      <ul class="sul">
        <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
        <li class="title">{{LangValue('index_c10_h1')}}</li>
        <li class="desc">{{LangValue('index_c10_h2')}}</li>
      </ul>
    </div><!--.title-->
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <div class="fw homeContactBox wow fadeInLeft">
          <div class="fw simpleBox">
            <div class="fw simpleBoxTitle">
              <ul class="sul">
                <li class="title">{{LangValue('index_c10-1_t1')}}</li>
                <li class="desc">{{LangValue('index_c10-1_t2')}}</li>
              </ul>
            </div><!--.title-->
            <div class="fw homeContactForm">
              <form id="indexContact" method="POST" action="#">
              <div class="homeContactFormRow">
                <div class="homeContactFormCol">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input1-t'))}}</span>
                    <div class="fw homeContactInput">
                      <span class="icon"><i class="flaticon-user-3"></i></span>
                      <input type="text" name="name" class="contactText" placeholder="{{LangValue('index_c10_input1-p')}}" />
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input2-t'))}}</span>
                    <div class="fw homeContactInput">
                      <span class="icon"><i class="flaticon-user-3"></i></span>
                      <input type="text" name="lastname" class="contactText" placeholder="{{LangValue('index_c10_input2-p')}}" />
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input3-t'))}}</span>
                    <div class="fw homeContactInput js-mask-tel">
                      <span class="icon"><i class="flaticon-telephone-1"></i></span>
                      <input type="text"  id="txtPhone3"  name="phone" class="contactText txtPhone" placeholder="{{LangValue('index_c10_input3-p')}}" />
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input4-t'))}}</span>
                    <div class="fw homeContactInput">
                      <span class="icon"><i class="flaticon-arroba"></i></span>
                      <input name="email" type="text" class="contactText" placeholder="{{LangValue('index_c10_input4-p')}}" />
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol full">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input6-t'))}}</span>
                    <div class="fw homeContactInput">
                      <span class="icon"><i class="flaticon-menu"></i></span>
                      <select name="sub" class="contactSelect">
                        <option>{{LangValue('index_c10_input6-p')}}</option>
                        <option>{{LangValue('index_c10_input6-v1')}}</option>
                        <option>{{LangValue('index_c10_input6-v2')}}</option>
                        <option>{{LangValue('index_c10_input6-v4')}}</option>
                        <option>{{LangValue('index_c10_input6-v5')}}</option>
                      </select>
                      <span class="arrow"><i class="fas fa-chevron-down"></i></span>
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol full">
                  <div class="fw homeContactFormBox BoxTop10">
                    <span class="title">{{Str::upper(LangValue('index_c10_input5-t'))}}</span>
                    <div class="fw homeContactInput">
                      <span class="icon"><i class="flaticon-pencil"></i></span>
                      <textarea name="note" class="contactTextarea" placeholder="{{LangValue('index_c10_input5-p')}}"></textarea>
                    </div><!--.input-->
                  </div><!--.box-->
                </div><!--.col-->
                <div class="homeContactFormCol full">
                  <div class="fw homeContactFormBox submitContactFormBox">
                  <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                  <input type="hidden" name="contentType" value="1" />
                    <button type="submit" class="simpleButton">{{Str::upper(LangValue('index_c10_input-btn'))}} <i id="contactIcon" class="flaticon-arrow-pointing-to-right"></i></button>
                  </div><!--.box-->
                </div><!--.col-->
              </div><!--.row-->
              </form>
            </div><!--.homeContactForm-->
          </div><!--.simplebox-->
        </div><!--.homeContactbox-->
      </div><!--.col-->
      <div class="col-md-12 col-lg-6">
        <div class="fw homeContactBox wow fadeInRight">
          <div class="fw simpleBox orange">
            <div class="fw simpleBoxTitle">
              <ul class="sul">
                <li class="title">{{LangValue('index_c10-2_t1')}}</li>
                <li class="desc">{{LangValue('index_c10-2_t2')}}</li>
              </ul>
            </div><!--.title-->
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
                  <li class="desc">{{CoInfo('Phone')}}</li>
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
            </div><!--.contactDetails-->
          </div><!--.simplebox-->
          <div class="fw simpleBox pink">
            <div class="fw simpleBoxTitle">
              <ul class="sul">
                <li class="title">{{LangValue('index_c10-3_t1')}}</li>
                <li class="desc">{{LangValue('index_c10-3_t2')}}</li>
              </ul>
            </div><!--.title-->
            <div class="fw newsteller">
            <form id="indexBulten" method="POST" action="#">
              <div class="fw newtellerLeft">
                <div class="fw homeContactInput BoxTop10">
                  <span class="icon pinkX"><i class="flaticon-send"></i></span>
                  <input  name="email" type="text" class="contactText" placeholder="{{LangValue('index_c10_3_input_p')}}" />
                  <input type="hidden" name="contentType" value="2" />
                </div><!--.input-->
              </div><!--.left-->
              <div class="newstellerRight">
              <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                <button type="submit" class="simpleButton pinkX">{{Str::upper(LangValue('index_c10_3_input_btn'))}}<i class="flaticon-arrow-pointing-to-right"></i></button>
              </div><!--.right-->
              </form>
            </div><!--.newsteller-->
          </div><!--.simplebox-->
        </div><!--.homeContactbox-->
      </div><!--.col-->
    </div><!--.row-->
  </div><!--.homeContact-->
</div><!--.container-->
@endsection
@section('footer')
<script src="{{ mix('js/index.js') }}"></script>
@endsection