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
        <li class="icon"><span class="iconX"><i class="flaticon-computer"></i></span></li>
        <li class="title"><h1 class="titleX">{{LangValue('subpage_platform_h1')}} </h1></li>
            <li class="desc">{{LangValue('subpage_platform_h2')}}</li>
      </ul>
    </div><!--.pageHeader-->
  </div><!--.container-->
</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw pageAll">
    <div class="fw page full">
      <div class="fw platform">
        <div class="fw platformTop">
          <ul role="tablist">
            <li role="presentation" class="active"><a href="#platform1" role="tab" data-toggle="tab">{{$data['SefContent']['Title']}}</a></li>
          </ul>
        </div><!--.top-->
        <div class="fw platformBot">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="platform1">
              <div class="fw platformBotBox">
                <div class="fw platformTitle">
                  <h1 class="title">{{$data['SefContent']['Title']}}</h1>
                </div><!--.title-->
                {!!$data['SefContent']['ShortDesc']!!}
                <div class="fw metaMenus bigX">
                  <ul>
                  <li class="gray"><a target="_blank" href="{{LaravelLocalization::localizeURL('/mt4') }}" class="simpleButton">{{Str::upper(LangValue('index_c4_b1'))}}<i class="flaticon-grid-world"></i></a></li>
                    <li class="blue"><a target="_blank" href="https://download.mql5.com/cdn/web/14092/mt4/ekolglobalmarkets4setup.exe" class="simpleButton">{{Str::upper(LangValue('index_c4_b2'))}}<i class="flaticon-windows-logo-silhouette"></i></a></li>
                    <li class="green"><a target="_blank" href="https://download.mql5.com/cdn/mobile/mt4/android?server=EkolGlobalMarkets-Demo,EkolGlobalMarkets-Real" class="simpleButton">{{Str::upper(LangValue('index_c4_b3'))}}<i class="flaticon-google-play"></i></a></li>
                    <li class="black"><a target="_blank" href="https://download.mql5.com/cdn/mobile/mt4/ios?server=EkolGlobalMarkets-Demo,EkolGlobalMarkets-Real" class="simpleButton">{{Str::upper(LangValue('index_c4_b4'))}}<i class="flaticon-apple"></i></a></li>
                  </ul>
                </div><!--.metaMenus-->
                {!!$data['SefContent']['LongDesc']!!}
              </div><!--.platformBotBox-->
            </div><!--.tabpanel-->
          </div><!--.tabcontent-->
        </div><!--.bot-->
      </div><!--.platform-->
    </div><!--.page-->
  </div><!--.pageAll-->
</div><!--.container-->


@endsection



@section('footer')

@endsection

