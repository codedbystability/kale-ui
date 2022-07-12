<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('seoheader')



  <link href="{{mix('css/all.css')}}" rel="stylesheet">
  <link href="{{mix('fonts/all.css')}}" rel="stylesheet">
  <link defer href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">

  @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
  <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
  @endif

  <meta name="google-site-verification" content="iULlXqOhrDkK2cPWm7EXGSgmqpIxkbCLk4nruMsyi9I" />
  @yield('header')

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141698917-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141698917-1');
gtag('config', 'AW-783640146');4
</script>

</head>

<body>
  <header>
    <div id="preloader">
      <div class="lds-dual-ring"></div>
    </div>
    <div class="fw headerAll nav-down">
      <div class="fw headerTopAll">
        <div class="container">
          <div class="fw headerTop">
            <div class="headerTopLeft">
              <div class="headerTopLang">

                <a href="#"><img src="{{asset('assets/images/flags/'.app()->getLocale().'.png')}}" /></a>
                <ul>


                  @foreach($data['langlist'] as $row)
                  <li>
                    <a href="/{{str_replace('tr','',$row['ShortDesc']) }}">
                    <div class="flags{{$row['ShortDesc']}}"></div>
                    <span class="title">{{ $row['Title'] }}</span>
                    </a>
                  </li>

                  </a>
                  @endforeach


                </ul>
              </div>
              <!--.headerTopLang-->
              <div class="headerTopLeftMenu">
                <ul>
                  <li><a href="javascript:void(Tawk_API.toggle())"><i class="flaticon-headset"></i>{{Str::upper(LangValue('canli_destek'))}}</a></li>
                  <li><a href="#"><i class="flaticon-telephone"></i>{{CoInfo('Phone')}} </a></li>
                  <li><a href="{{LaravelLocalization::localizeURL('/callme') }}"><i class="flaticon-call-center-worker-with-headset"></i>{{Str::upper(LangValue('biz_sizi_arayalim'))}}</a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=0035796769805" target="_blank"><i class="flaticon-whatsapp-logo"></i>WHATSAPP</a></li>
                </ul>
              </div>
              <!--.headerTopLeftMenu-->
            </div>
            <!--.headertopLeft-->
            <div class="headerTopRight">
              <ul>
                <li>
                <li><a href="{{LaravelLocalization::localizeURL('/login') }}"><i class="flaticon-user-3 textX blueX"></i>{{Str::upper(LangValue('giris_yap'))}}</a></li>
                <li><a href="{{LaravelLocalization::localizeURL('/register') }}"><i class="flaticon-add textX greenX"></i>{{Str::upper(LangValue('hesap_ac'))}}</a></li>
                <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}"><i class="flaticon-arrow textX orangeX"></i>{{Str::upper(LangValue('hesap_tasi'))}}</a></li>
                <li class="headerTrader"><a target="_blank" href="{{LaravelLocalization::localizeURL('/mt4') }}"><img src="{{asset('assets/images/top-right-logo.png')}}" />{{Str::upper(LangValue('web_trader'))}}</a></li>
              </ul>
            </div>
            <!--.headerTopRight-->
          </div>
          <!--.headerTop-->
        </div>
        <!--.container-->
      </div>
      <!--.headerTopAll-->
      <div class="fw headerBotAll">
        <div class="container">
          <div class="fw headerBot">
            <div class="logo">
              <a href="{{LaravelLocalization::localizeURL('/') }}"><img src="{{asset('assets/images/logo.png')}}" />
                <span class="slogan">{{CoInfo('LogoTitle')}}</span>
              </a>
            </div>
            <!--.logo-->
            <span class="responsiveMenu" style="z-index:123"><i class="fas fa-bars"></i></span>
            <div class="headerMenu">
              <nav>
                <ul>

                <li class="has-small-menu"><a href="#">{{$data['menucorporate']['Title']}}</a>
      <div class="fw subMenu smallMenu">
        <div class="fw smallMenuBox">
          <ul>
          @foreach($data['corperateList'] as $row)
          @if($row['Id'] != 19)
           <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
          @endif
          @endforeach

          </ul>
        </div>
        <!--.smallMenuBox-->
      </div>
      <!--.smallMenu-->
    </li>
                  
                  
                  <li><a href="#">{{LangValue('menu_yatirim_araclari')}}</a>
                    <div class="fw subMenu">
                      <div class="fw subMenuBox">
                        <div class="container">
                          <div class="fw subMenuBoxDiv">
                            <div class="subMenuBoxLeft">
                              <div class="fw subMenuBoxLeftDiv">
                                <ul class="sul">
                                  <li class="icon"><span class="iconX"><i class="flaticon-investment"></i></span></li>
                                  <li class="title">{{LangValue('menu_yatirim_araclari')}}</li>
                                  <li class="desc">{{LangValue('subpage_instrument_h2')}}</li>
                                  <li class="more"><a href="{{LaravelLocalization::localizeURL('/instruments') }}" class="simpleButton" id="simpleButtonMega">{{Str::upper(LangValue('menu_swap_orani'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                  <li class="more" style="margin-top:5px;"><a href="{{LaravelLocalization::localizeURL('/live') }}" class="simpleButton" id="simpleButtonMega">{{Str::upper(LangValue('livefeed_title'))}}<i class="flaticon-arrow-pointing-to-right"></i></a></li>

                                </ul>
                              </div>
                              <!--.div-->
                            </div>
                            <!--.left-->
                            <div class="subMenuBoxRight">
                              <div class="fw subMenuBoxRightDiv">
                                <div class="subMenuRow">
                                  @foreach($data['instrumentsList'] as $rows)

                                  @if($rows['Id'] < 12) <div class="subMenuCol">
                                    <div class="fw subMenuColBox">
                                      <div class="fw subMenuBoxTitle">
                                        <span class="title">{{ $rows['Title'] }}</span>
                                      </div>
                                      <!--.title-->
                                      <div class="fw subMenuList">
                                        <ul>
                                          @foreach($rows['SubContent'] as $row)
                                          <li><a href="{{LaravelLocalization::localizeURL($rows['SeoTags']) }}">{{ $row['Title'] }} </a></li>
                                          @endforeach
                                        </ul>
                                      </div>
                                      <!--.list-->
                                      <div class="fw subMenuListOther">
                                        <a href="{{LaravelLocalization::localizeURL($rows['SeoTags']) }}" class="subMenuListOtherButton">{{Str::upper(LangValue('subpage_instrument_details'))}}</a>
                                      </div>
                                      <!--.other-->
                                    </div>
                                    <!--.subMenuColBox-->
                                </div>
                                <!--.col-->
                                @endif
                                @if($rows['Id'] == 12)


                                <div class="subMenuCol">
                                  <div class="fw subMenuColBox">
                                    <div class="fw subMenuBoxTitle">
                                      <span class="title">{{LangValue('menu_borsa')}}</span>
                                    </div>
                                    <!--.title-->
                                    <div class="fw subMenuList">
                                      <ul>
                                        @foreach($data['instrumentsList'] as $srows)
                                        @if($srows['Id'] >= 12 && $srows['Id'] <= 15) <li><a href="{{LaravelLocalization::localizeURL($srows['SeoTags']) }}">{{ $srows['Title'] }}</a>
                  </li>
                  @endif
                  @endforeach
                </ul>
            </div>
            <!--.list-->
          </div>
          <!--.subMenuColBox-->
        </div>
        <!--.col-->



        @endif
        @endforeach




      </div>
      <!--.row-->
    </div>
    <!--.div-->
    </div>
    <!--.right-->
    </div>
    <!--.div-->
    </div>
    <!--.container-->
    </div>
    <!--.subMenuBox-->
    </div>
    <!--.subMenu-->
    </li>
    <li class="has-small-menu"><a href="#">{{LangValue('menu_hesap_islem')}}</a>
      <div class="fw subMenu smallMenu">
        <div class="fw smallMenuBox">
          <ul>
            <li><a href="{{LaravelLocalization::localizeURL('/demo') }}">{{LangValue('menu_demo_hesap')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/register') }}">{{LangValue('menu_gercek_hesap')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}">{{LangValue('menu_hesap_tasi')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/accounts') }}">{{LangValue('menu_hesap_turu')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/spread') }}">{{LangValue('usertransfer_sub5_2')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/instruments') }}">{{LangValue('menu_swap_orani')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/hours') }}">{{LangValue('hours_h1')}}</a></li>
            <li><a href="{{LaravelLocalization::localizeURL('/live') }}">{{LangValue('livefeed_title')}}</a></li>
          </ul>
        </div>
        <!--.smallMenuBox-->
      </div>
      <!--.smallMenu-->
    </li>
    <li><a href="{{LaravelLocalization::localizeURL($data['menuplatform']['SeoTags']) }}">{{LangValue('menu_platformlar')}}</a></li>
    <li><a href="{{LaravelLocalization::localizeURL($data['menuinfobank']['SeoTags']) }}">{{LangValue('menu_bilgi_bankasi')}}</a></li>
    <li><a href="{{LaravelLocalization::localizeURL('/promotions') }}">{{LangValue('menu_promosyon')}}</a></li>
    <li><a href="{{LaravelLocalization::localizeURL($data['menucontact']['SeoTags']) }}">{{$data['menucontact']['Title']}}</a></li>
    </ul>
    </nav>
    </div>
    <!--.headerMenu-->
    </div>
    <!--.headerBot-->
    </div>
    <!--.container-->
    </div>
    <!--.botall-->
    </div>
    <!--.headerAll-->
  </header>

  <div class="newMobile">
    <div class="fw newMobileBox">
      <div class="newMobileClose"><i class="flaticon-close"></i></div>
      <div class="fw newMobileHeader">
        <ul>
          <li class="blue"><a href="{{LaravelLocalization::localizeURL('/login') }}"><span class="icon"><i class="flaticon-user-3"></i></span><span class="title">{{Str::upper(LangValue('giris_yap'))}}</span></a></li>
          <li class="pink"><a href="{{LaravelLocalization::localizeURL('/demo') }}"><span class="icon"><i class="flaticon-window"></i></span><span class="title">{{Str::upper(LangValue('menu_demo_hesap'))}}</span></a></li>
          <li class="green"><a href="{{LaravelLocalization::localizeURL('/register') }}"><span class="icon"><i class="flaticon-add"></i></span><span class="title">{{Str::upper(LangValue('menu_gercek_hesap'))}}</span></a></li>
          <li class="orange"><a href="{{LaravelLocalization::localizeURL('/transfer') }}"><span class="icon"><i class="flaticon-arrow"></i></span><span class="title">{{Str::upper(LangValue('menu_hesap_tasi'))}}</span></a></li>
        </ul>
      </div>
      <!--.newMobileHeader-->
      <div class="fw newMobileMenu">
        <nav>
          <ul>
            <li><a href="{{LaravelLocalization::localizeURL($data['menucorporate']['SeoTags']) }}">{{$data['menucorporate']['Title']}}</a></li>
            <li><a href="#">{{LangValue('menu_yatirim_araclari')}} <i class="fas fa-chevron-down"></i></a>
              <ul>
                @foreach($data['instrumentsList'] as $rows)

                @if($rows['Id'] < 12) <li><a href="{{LaravelLocalization::localizeURL($rows['SeoTags']) }}">{{$rows['Title']}}</a>
            </li>
            @endif
            @if($rows['Id'] == 12)
            <li><a href="{{LaravelLocalization::localizeURL($rows['SeoTags']) }}">{{LangValue('menu_borsa')}}</a></li>
            @endif
            @endforeach
          </ul>
          </li>

          <li><a href="#">{{LangValue('menu_hesap_islem')}} <i class="fas fa-chevron-down"></i></a>
            <ul>
              <li><a href="{{LaravelLocalization::localizeURL('/demo') }}">{{LangValue('menu_demo_hesap')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/register') }}">{{LangValue('menu_gercek_hesap')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}">{{LangValue('menu_hesap_tasi')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/accounts') }}">{{LangValue('menu_hesap_turu')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/spread') }}">{{LangValue('usertransfer_sub5_2')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/instruments') }}">{{LangValue('menu_swap_orani')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/hours') }}">{{LangValue('hours_h1')}}</a></li>
              <li><a href="{{LaravelLocalization::localizeURL('/live') }}">{{LangValue('livefeed_title')}}</a></li>
            </ul>
          </li>
          <li><a href="{{LaravelLocalization::localizeURL($data['menuplatform']['SeoTags']) }}">{{LangValue('menu_platformlar')}}</a></li>
          <li><a href="{{LaravelLocalization::localizeURL($data['menuinfobank']['SeoTags']) }}">{{LangValue('menu_bilgi_bankasi')}}</a></li>
          <li><a href="{{LaravelLocalization::localizeURL('/promotions') }}">{{LangValue('menu_promosyon')}}</a></li>
          <li><a href="{{LaravelLocalization::localizeURL($data['menucontact']['SeoTags']) }}">{{$data['menucontact']['Title']}}</a></li>

          </ul>
        </nav>
      </div>
      <!--.menu-->
      <div class="fw newMobileButtons">
        <ul>
          <li><a href="#"><i class="flaticon-headset"></i>{{Str::upper(LangValue('canli_destek'))}}</a></li>
          <li><a href="#"><i class="flaticon-telephone"></i>{{CoInfo('Phone')}} </a></li>
        </ul>
      </div>
      <!--.buttons-->
    </div>
    <!--.newMobileBox-->
  </div>
  <!--.newMobile-->




  @yield('main')


  <footer>
    <div class="fw footerAll cover" style="background-image:url({{asset('assets/images/footer-bg.png')}})">
      <div class="fw footerTopAll wow fadeInUp">
        <div class="container">
          <div class="fw footerTop">
            <div class="footerQr">
            <a href="https://ifmrrc.com/index.php?page=ekol_global_markets_ltd" target="_blank"> <img src="{{asset('assets/images/qr3.png')}}" /></a>
            </div>
            <!--.qr-->
            <div class="footerLogo">
              <img src="{{asset('assets/images/footer-logo.png')}}" /><br /><span class="title">{!!CoInfo('Desc1')!!}</span>
            </div>
            <!--.footerLogo-->
            <div class="footerTopMenu">
              <ul>
                <li><a href="javascript:void(Tawk_API.toggle())"><i class="flaticon-headset"></i>{{LangValue('canli_destek')}}</a></li>
                <li><a href="#"><i class="flaticon-telephone"></i>{{CoInfo('Phone')}}</a></li>
                <li><a href="{{LaravelLocalization::localizeURL('/callme') }}"><i class="flaticon-call-center-worker-with-headset"></i>{{LangValue('biz_sizi_arayalim')}}</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=0035796769805"><i class="flaticon-whatsapp-logo"></i>Whatsapp</a></li>
              </ul>
            </div>
            <!--.footerTopMenu-->
          </div>
          <!--.footerTop-->
        </div>
        <!--.container-->
      </div>
      <!--.footerTopAll-->
      <div class="container">
        <div class="fw footerMenus wow fadeInUp">
          <div class="footerMenuRow">
            <div class="footerMenuCol">
              <div class="fw footerMenuBox">
                <div class="fw footerMenuTitle">
                  <span class="title">EkolFX</span>
                </div>
                <!--.title-->
                <div class="fw footerMenuNav">
                  <ul>
                    @foreach($data['corperateList'] as $row)
                    <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <!--.nav-->
              </div>
              <!--.menuBox-->
            </div>
            <!--.col-->
            <div class="footerMenuCol">
              <div class="fw footerMenuBox">
                <div class="fw footerMenuTitle">
                  <span class="title">{{LangValue('menu_yatirim_araclari')}} </span>
                </div>
                <!--.title-->
                <div class="fw footerMenuNav">
                  <ul>
                    @foreach($data['instrumentsList'] as $row)
                    <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                    @endforeach

                  </ul>
                </div>
                <!--.nav-->
              </div>
              <!--.menuBox-->
            </div>
            <!--.col-->
            <div class="footerMenuCol">
              <div class="fw footerMenuBox">
                <div class="fw footerMenuTitle">
                  <span class="title">{{LangValue('menu_hesap_islem')}}</span>
                </div>
                <!--.title-->
                <div class="fw footerMenuNav">
                  <ul>
                    <li><a href="{{LaravelLocalization::localizeURL('/demo') }}">{{LangValue('menu_demo_hesap')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/register') }}">{{LangValue('menu_gercek_hesap')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}">{{LangValue('menu_hesap_tasi')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/accounts') }}">{{LangValue('menu_hesap_turu')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/spread') }}">{{LangValue('usertransfer_sub5_2')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/instruments') }}">{{LangValue('menu_swap_orani')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/hours') }}">{{LangValue('hours_h1')}}</a></li>
                    <li><a href="{{LaravelLocalization::localizeURL('/live') }}">{{LangValue('livefeed_title')}}</a></li>
                  </ul>
                </div>
                <!--.nav-->
              </div>
              <!--.menuBox-->
            </div>
            <!--.col-->
            <div class="footerMenuCol">
              <div class="fw footerMenuBox">
                <div class="fw footerMenuTitle">
                  <span class="title">{{LangValue('menu_platformlar')}}</span>
                </div>
                <!--.title-->
                <div class="fw footerMenuNav">
                  <ul>
                    @foreach($data['platformsList'] as $row)
                    <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <!--.nav-->
              </div>
              <!--.menuBox-->
            </div>
            <!--.col-->
            <div class="footerMenuCol">
              <div class="fw footerMenuBox">
                <div class="fw footerMenuTitle">
                  <span class="title">{{LangValue('menu_bilgi_bankasi')}}</span>
                </div>
                <!--.title-->
                <div class="fw footerMenuNav">
                  <ul>
                    @foreach($data['infobankList'] as $row)
                    <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <!--.nav-->
              </div>
              <!--.menuBox-->
            </div>
            <!--.col-->
          </div>
          <!--.row-->
        </div>
        <!--.footerMenus-->
      </div>
      <!--.container-->
      <div class="fw footerRiskAll wow fadeInUp">
        <div class="container">

        <div class="fw footerRisk" style=" margin-bottom:35px; " >
            <i class="flaticon-info onlyBlue" style="background-image: linear-gradient(90deg,#0096ec 0,#118ed6 100%)!important;" ></i>
            <span class="title">

            @if(app()->getLocale() == 'tr')
            Bu sitede yer alan tüm içerik ve hizmetler telif haklarına tabidir ve tüm hakları "Ekol Global Markets Limited" firmasına aittir. İşbu web sitesinin herhangi içeriğinin kullanımı "Ekol Global Markets Limited" firmasının resmi temsilcisi tarafından onaylanmalı ve orijinal kaynağa ilgili internet bağlantısını içermelidir. Herhangi “Çevrimiçi - brokerlik” veya “Çevrimiçi - Forex” tipi üçüncü taraf şirketler işbu web sitesinde yer alan içeriği ve "Ekol Global Markets Limited" firmasına ait değiştirilmiş yazıları kullanma hakkına sahip değildir. İhlal halinde bu şahıslar fikri mülkiyetin korunması kanunu kapsamında yargılanacaktır.
            <br /><br />
            Ekol Global Markets Limited - IFMRRC tarafından denetlenmektedir (Lisans numarası <a href="https://ifmrrc.com/index.php?page=ekol_global_markets_ltd" target="_blank"> TSRF RU 0395 AA V0136 </a> )
            <br />
            Bu web sitesindeki tüm aracılık faaliyetleri Ekol Global Markets Limited tarafından sağlanmaktadır. Almanya, ABD'de yaşayanlar için hizmet mevcut değildir.
            @else
            All materials and services provided on this site are subject to copyright and belong to "Ekol Global Markets Limited". Any use of materials of this website must be approved by an official representative of "Ekol Global Markets Limited", and contain a link to the original resource. Any third-party companies of "Online broker" or "Online trading" type, do not have the right to use materials of this website as well as any distorted writing of "Ekol Global Markets Limited". In case of violation, they will be prosecuted in accordance with legislation of the intellectual property protection.
            <br /><br />
            Ekol Global Markets Limited is regulated by IFMRRC (License number <a href="https://ifmrrc.com/index.php?page=ekol_global_markets_ltd" target="_blank"> TSRF RU 0395 AA V0136 </a> )
            <br />
            All brokerage activity on this website provided by Ekol Global Markets Limited. Services are not available to the residents of Germany and ABD.
            @endif
            </span>
          </div>

          <div class="fw footerRisk">
            <i class="flaticon-exclamation"></i>
            <span class="title">{{LangValue('footer_line1')}}<br />{{LangValue('footer_line2')}}</span>
          </div>
          <!--.footerRisk-->
        </div>
        <!--.container-->
      </div>
      <!--.riskAll-->
      <div class="container">
        <div class="fw footerOtherMenu wow fadeInUp">
          <ul>
            @foreach($data['staticpageList'] as $row)
            <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
            @endforeach
          </ul>
        </div>
        <!--.footerOtherMenu-->
        <div class="fw footerIcons">
          <ul>
            <li data-toggle="tooltip" data-placement="bottom" title="Havale/Eft" class="wow zoomIn" data-wow-delay="0.1s"><span class="title"> <div class="footer_logof1"></div></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Papara" class="wow zoomIn" data-wow-delay="0.2s"><span class="title"><div class="footer_logof2"></div></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="CepBank" class="wow zoomIn" data-wow-delay="0.3s"><span class="title"><div class="footer_logof3"></div></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Western Union" class="wow zoomIn" data-wow-delay="0.4s"><span class="title"><div class="footer_logof4"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Kredi Kartı" class="wow zoomIn" data-wow-delay="0.5s"><span class="title"><div class="footer_logof5"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Payoneer" class="wow zoomIn" data-wow-delay="0.6s"><span class="title"><div class="footer_logof6"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="CPGCode" class="wow zoomIn" data-wow-delay="0.7s"><span class="title"><div class="footer_logof7"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Neteller" class="wow zoomIn" data-wow-delay="0.8s"><span class="title"><div class="footer_logof8"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Skrill" class="wow zoomIn" data-wow-delay="0.9s"><span class="title"><div class="footer_logof9"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="WebMoney" class="wow zoomIn" data-wow-delay="1.0s"><span class="title"><div class="footer_logof10"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Payeer" class="wow zoomIn" data-wow-delay="1.1s"><span class="title"><div class="footer_logof11"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="UldPay" class="wow zoomIn" data-wow-delay="1.2s"><span class="title"><div class="footer_logof12"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Bitcoin" class="wow zoomIn" data-wow-delay="1.3s"><span class="title"><div class="footer_logof13"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="RocketPay" class="wow zoomIn" data-wow-delay="1.4s"><span class="title"><div class="footer_logof14"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Etherium" class="wow zoomIn" data-wow-delay="1.5s"><span class="title"><div class="footer_logof15"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Litecoin" class="wow zoomIn" data-wow-delay="1.6s"><span class="title"><div class="footer_logof16"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="BitMoney" class="wow zoomIn" data-wow-delay="1.7s"><span class="title"><div class="footer_logof17"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Ascoin" class="wow zoomIn" data-wow-delay="1.8s"><span class="title"><div class="footer_logof18"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Redcoin" class="wow zoomIn" data-wow-delay="1.9s"><span class="title"><div class="footer_logof19"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Dashcoin" class="wow zoomIn" data-wow-delay="2.0s"><span class="title"><div class="footer_logof20"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Dogecoin" class="wow zoomIn" data-wow-delay="2.1s"><span class="title"><div class="footer_logof21">></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="İcoin" class="wow zoomIn" data-wow-delay="2.2s"><span class="title"><div class="footer_logof22"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Unkcoin" class="wow zoomIn" data-wow-delay="2.3s"><span class="title"><div class="footer_logof23"></span></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Zcash" class="wow zoomIn" data-wow-delay="2.4s"><span class="title"><div class="footer_logof24"></span></li>
          </ul>
        </div>
        <!--.icons-->
        <div class="fw footerSocial">
          <ul>
            <li class="wow zoomIn facebook" data-wow-delay="0.3s"><a target="_blank" href="{{CoInfo('Facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
            <li class="wow zoomIn instagram" data-wow-delay="0.6s"><a target="_blank" href="{{CoInfo('Instagram')}}"><i class="fab fa-instagram"></i></a></li>
            <li class="wow zoomIn twitter" data-wow-delay="0.9s"><a target="_blank" href="{{CoInfo('Twitter')}}"><i class="fab fa-twitter"></i></a></li>
            <li class="wow zoomIn youtube" data-wow-delay="1.2s"><a target="_blank" href="{{CoInfo('Youtube')}}"><i class="fab fa-youtube"></i></a></li>
            <li class="wow zoomIn goTop" data-wow-delay="1.5s"><a id="goTop" href="javascript:void(0)"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
          </ul>
        </div>
        <!--.footerSocial-->
        <div class="fw footerCopyright wow fadeInUp">
          <span class="title">Copyright 2019 - {{CoInfo('Name')}} </span>
        </div>
        <!--.footerCopyright-->
      </div>
      <!--.container-->
    </div>
    <!--.footerAll-->

    <div class="fw fixedFooterMenu">
      <ul>
        <li><a href="{{LaravelLocalization::localizeURL('/login') }}"><span class="icon"><i class="flaticon-user-3 textX blueX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu1')), 1)!!}</span></a></li>
        <li><a href="{{LaravelLocalization::localizeURL('/demo') }}"><span class="icon"><i class="flaticon-window textX pinkX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu2')), 1)!!}</span></a></li>
        <li><a href="{{LaravelLocalization::localizeURL('/register') }}"><span class="icon"><i class="flaticon-add textX greenX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu3')), 1)!!}</span></a></li>
        <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}"><span class="icon"><i class="flaticon-arrow textX orangeX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu4')), 1)!!}</span></a></li>
        <li><a href="#"><span class="icon"><i class="flaticon-headset textX blueX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('canli_destek')), 1)!!} </span></a></li>
      </ul>
    </div>
    <!--.fixedFooterMenuAll-->
  </footer>

  <div class="fixedModal" id="pnlAlertSuccess" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon green"><i class="flaticon-check-mark-button"></i></span>
        <span class="title">
          {{LangValue('forms_return_success')}}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>
    <!--.fixedModalBox-->
  </div>
  <!--.fixedModal-->


  <div class="fixedModal" id="pnlAlertSuccessReal" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon green"><i class="flaticon-check-mark-button"></i></span>
        <span class="title">
          {{LangValue('forms_return_custom3')}}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>
    <!--.fixedModalBox-->
  </div>
  <!--.fixedModal-->

  
  <div class="fixedModal" id="pnlAlertSuccessDemo" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon green"><i class="flaticon-check-mark-button"></i></span>
        <span class="title">
          {{LangValue('forms_return_custom4')}}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>
    <!--.fixedModalBox-->
  </div>
  <!--.fixedModal-->

  <div class="fixedModal" id="pnlAlertSuccessTransfer" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon green"><i class="flaticon-check-mark-button"></i></span>
        <span class="title">
          {{LangValue('forms_return_custom5')}}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>
    <!--.fixedModalBox-->
  </div>
  <!--.fixedModal-->
  <div class="fixedModal" id="pnlAlertError" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon red"><i class="flaticon-cancel"></i></span>
        <span class="title">
          {{LangValue('forms_return_error')}}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>

  </div>
  <!--.fixedModal-->


  <!--.fixedModal-->

  <div class="fixedModal" id="pnlAlertError2" style="display:none;">
    <div class="fw fixedModalBox dark">
      <div class="fw fixedModalDiv">
        <span class="icon red"><i class="flaticon-cancel"></i></span>
        <span class="title">
          {!!str_replace("#A2","</a>",str_replace("#A1","<a style='color: #f93365;' target='_blank' href='https://cp.frxcrm.com/lostpassword'>",LangValue('forms_return_custom2')))!!}
        </span>
        <span class="fixedModalClose"><i class="flaticon-close"></i></span>
      </div>
      <!--.div-->
    </div>

  </div>
  <!--.fixedModal-->



<!-- Modal -->
<div class="modal fade" id="popupModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog small-modal-dialog" role="document" style="  margin-top: 75px;">
        <div class="fw smallModal">
            <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
            <div class="fw smallModalTop">
                <ul class="sul">
                <li class="icon"><i class="flaticon-info onlyBlue"></i></li>
                    <li class="title"> Değerli yatırımcılarımızın dikkatine.  </li>
                    <li class="desc">
       
                 
                    07.04.2020 Salı günü 18.00 dan sonra Petrol de kaldıraç oranımız 1:25 olacaktır. Marjin durumunuz ile ilgili yatırım uzmanlarımızdan destek alabilirsiniz. 
                    <br> <br>
                    Ayrıca Petrol işlemlerinde net lot hacmi 10 lot olarak sınırlanmıştır. 

  
                   <br><br>

                  
                  </li>
                </ul>
            </div>


            <!--.smallModal-->
        </div>



        <!--.modal-dialog-->
    </div>
    <!--.modal-->

</div>


    <script src="{{ mix('js/first.js') }}"></script>
    <script src="{{ mix('js/second.js') }}"></script>

    <script type="text/javascript" defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/localization/messages_{{ app()->getLocale() }}.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">




$(window).load(function(){
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function() {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b49beac6d961556373dbb51/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
      })();
});

    </script>
    <!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Analytics -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54668500, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54668500" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '649764549126920');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=649764549126920&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    @yield('footer')

    <script>
      $(window).on('load', function() {
  
       showOnceInADay();
    
       });
      </script>

   

</body>

</html>