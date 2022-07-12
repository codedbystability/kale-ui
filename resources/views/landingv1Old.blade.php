<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ekol FX - Hemen öğrenmek için gerçek özelliklerde, demo forex hesabı oluşturun</title>
	
    <meta name="description" content="Sizlerde Ekol FX ayrıcalıklarından sizlerde faydalanın. Ücretsiz demo forex hesabı oluşturarak, gerçek platformda 0 risk ile işlem yapın ! Tek tuş ile gerçek özelliklerde deneme forex hesabı açabilirsiniz." />
   <meta name="keywords" content="forex hesap aç, forex kayıt, forex borsası, ekolfx, yurtdışı forex, en iyi forex, en güvenilir forex, forex demo hesabı, ücretsiz forex hesabı, limitsiz forex hesabı">

    <link href="{{mix('css/landing.css')}}" rel="stylesheet">
    <link href="{{mix('fonts/all.css')}}" rel="stylesheet">
    <link defer href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">

    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
    @endif
    <meta name="google-site-verification" content="c_WDaatzncePL8-Wpy7xvghLZoolFxIwiCCSDaE9EoE" />
    @yield('header')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141698917-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

 gtag('config', 'UA-141698917-1');
gtag('config', 'AW-783640146');
</script>

</head>

<body>
    <header>
        <div id="preloader">
            <div class="lds-dual-ring"></div>
        </div>
        <div class="fw headerAll nav-down">
            <div class="fw headerTopAll">


            </div>
            <!--.headerTopAll-->
            <div class="fw headerBotAll">
                <div class="container">
                    <div class="fw headerBot">
                        <div class="logo">
                            <a href="{{LaravelLocalization::localizeURL('/landingv1') }}"><img style=" width: 166px" src="{{asset('assets/images/logolnd.png')}}" />

                            </a>
                        </div>
                        <!--.logo-->

                        <!--.headerTopLang-->
                        <div class="headerTopLeftMenu">
                            <ul>

                                <li><a href="tel:+9{{CoInfo('Phone')}}"><i class="flaticon-telephone"></i>{{CoInfo('Phone')}} </a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=0035796769805" target="_blank"><i class="flaticon-whatsapp-logo"></i>WHATSAPP</a></li>
                                <li><a onclick="gotoCallme()" href="JavaScript:Void(0);"><i class="flaticon-call-center-worker-with-headset"></i>{{Str::upper(LangValue('biz_sizi_arayalim'))}}</a></li>
                                
                            </ul>
                        </div>
                        <!--.headerTopLeftMenu-->
                        <div class="headerMenu">
                            <!--.headertopLeft-->
                            <div class="headerTopLeftMenu">
                                <ul>
                                    <li>
                                    <li><a class="simpleButtonLnd" href="{{LaravelLocalization::localizeURL('/login') }}"><i class="flaticon-user-3 textX lndWhiteIcon"></i>{{Str::upper(LangValue('giris_yap'))}}</a></li>
                                    <li><a class="simpleButtonLnd greenX " href="{{LaravelLocalization::localizeURL('/register') }}"><i class="flaticon-add textX  lndWhiteIcon"></i>{{Str::upper(LangValue('hesap_ac'))}}</a></li>
                                    <li><a class="simpleButtonLnd orangeX" href="{{LaravelLocalization::localizeURL('/transfer') }}"><i class="flaticon-arrow textX lndWhiteIcon"></i>{{Str::upper(LangValue('hesap_tasi'))}}</a></li>
                                </ul>
                            </div>
                            <!--.headerTopRight-->


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







    <div class="fw headerCurrencyAll wow fadeInUp marquee">
        <ul id="pnlCurrencyBar">


            @foreach($data['topBarData'] as $row)
            <li id="barLi_{{$row['SYMBOL']}}">
                <span class="title">{{$row['SYMBOL']}}</span>
                <span id="barLiSpan_{{$row['SYMBOL']}}" class='desc @if($row["DIRECTION"] == 0) red @elseif($row["DIRECTION"] == 1) green  @endif'>
                    {{$row['BID']}}
                </span></li>
            @endforeach



        </ul>
    </div>
    <!--.headerCurrencyAll-->

    <div class="fw homeSliderAll">
        <div class="item">
            <div class="fw homeSliderItem cover" style="background-image:url({{asset('assets/images/slider4.png')}})">
                <div class="container">
                    <div class="fw sliderFormAll">
                        <div class="fw homePreview">
                            <ul>
                                <li class="spacingTitle wow zoomIn" data-wow-delay="0.1s">ÜCRETSİZ FOREX HESABI OLUŞTURUN</li>
                                <li class="homeSliderTitle wow zoomIn" data-wow-delay="0.1s"><small>DENEME FOREX HESABINIZ</small> HAZIR !</li>
                                <li class="desc wow zoomIn" data-wow-delay="0.1s">10.000 USD SANAL PARA ILE GERÇEK HESAPTAN FARKSIZ, YATIRIM DENEYİMİ YAŞAYIN!</li>
                                <li class="link twiceLink wow zoomIn" data-wow-delay="0.1s"><a onclick="gotoFormM()" href="JavaScript:Void(0);" class="simpleButton orangeX">GERÇEK FOREX HESABI OLUŞTUR<i class="flaticon-window"></i></a><a onclick="gotoCallme()" href="JavaScript:Void(0);" class="simpleButton">BİZ SİZİ ARAYALIM<i class="flaticon-add"></i></a></li>
                            </ul>
                        </div>
                        <!--.homePreview-->
                        <div class="sliderForm">
                            <div class="fw sliderFormBox wow fadeIn" data-wow-delay="0.2s">
                                <div class="fw sliderFormBoxTitle">
                                    <img src="{{asset('assets//images/slider-fox.png')}}" />
                                    <span class="title">{{LangValue('slider_form_title')}}</span>
                                </div>
                                <!--.title-->
                                <form id="registerFormDemoSlider" method="POST" action="#">
                                    <div class="fw sliderFormDiv">

                                        <ul>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10">
                                                    <span class="icon"><i class="flaticon-user-3"></i></span>
                                                    <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10 js-mask-tel ">
                                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                                    <input id="txtPhone1" name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10">
                                                    <span class="icon"><i class="flaticon-arroba"></i></span>
                                                    <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li class="submit">
                                                <input type="hidden" name="type" value="demo">
                                                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                                                <button id="registerFormDemoSliderBtn" type="submit" class="simpleButton">{{Str::upper(LangValue('slider_form_button_text'))}}<i class="flaticon-arrow-pointing-to-right"></i></button></li>
                                        </ul>

                                    </div>
                                    <!--.sliderFormDiv-->
                                </form>
                            </div>
                            <!--.sliderFormBox-->
                        </div>
                        <!--.sliderform-->
                    </div>
                    <!--.sliderFormAll-->
                </div>
                <!--.container-->
                <div class="fw homePreviewAllAfter"></div>
                <!--.after-->
            </div>
            <!--.homeSliderItem-->
        </div>
    </div>
    <!--.homeSliderAll-->

    <div class="fw demoRegister">
        <div class="container">
            <div class="fw sliderFormBox wow fadeIn" data-wow-delay="0.3s">
                <div class="fw sliderFormBoxTitle">
                    <img src="{{asset('assets//images/slider-fox.png')}}" />
                    <span class="title">{{LangValue('slider_form_title')}}</span>
                </div>
                <!--.title-->
                <div class="fw sliderFormDiv">
                    <form id="registerFormDemo" method="POST" action="#">
                        <ul>
                            <li>
                                <div class="fw homeContactInput BoxTop10">
                                    <span class="icon"><i class="flaticon-user-3"></i></span>
                                    <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
                                </div>
                                <!--.input-->
                            </li>
                            <li>
                                <div class="fw homeContactInput BoxTop10 js-mask-tel">
                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                    <input id="txtPhone2" name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
                                </div>
                                <!--.input-->
                            </li>
                            <li>
                                <div class="fw homeContactInput BoxTop10">
                                    <span class="icon"><i class="flaticon-arroba"></i></span>
                                    <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
                                </div>
                                <!--.input-->
                            </li>
                            <li class="submit">
                                <input type="hidden" name="type" value="demo">
                                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                                <button id="registerFormDemoBtn" type="submit" class="simpleButton">{{Str::upper(LangValue('slider_form_button_text'))}}<i class="flaticon-arrow-pointing-to-right"></i></button></li>
                        </ul>
                    </form>
                </div>
                <!--.sliderFormDiv-->
            </div>
            <!--.sliderFormBox-->
        </div>
        <!--.container-->
    </div>
    <!--.demoRegister-->


    <div class="container">
        <div class="fw homePreviewBot blueX">
            <div class="homePreviewBotTab">
                <a href="/demo">
                    <ul class="sul">
                        <li class="img"><i class="textX blueX flaticon-window"></i></li>
                        <li class="title">DEMO FOREX HESAP AÇ!</li>
                        <li class="desc">Gerçek Forex piyasa koşullarında yatırım yapmadan demo işlem yapma imkanı</li>
                    </ul>
                </a>
            </div>
            <!--.tab-->
            <div class="homePreviewBotTab">
                <a href="/register">
                    <ul class="sul">
                        <li class="img"><i class="textX greenX flaticon-user-3"></i></li>
                        <li class="title">GERÇEK FOREX HESAP AÇIN!</li>
                        <li class="desc">EKOL Forex'in rekabetçi spread oranları ve hızlı işlem özelliği ile güvenle işlem yapın!</li>
                    </ul>
                </a>
            </div>
            <!--.tab-->
            <div class="homePreviewBotTab">
                <a href="/transfer">
                    <ul class="sul">
                        <li class="img"><i class="textX orangeX flaticon-arrow"></i></li>
                        <li class="title">FOREX HESABINIZI TAŞIYIN!</li>
                        <li class="desc">Forex hesabınızı Dünya&#039;da lider aracı kurum olan EKOL Forex'e taşıyarak ayrıcalıklardan yararlanın!</li>
                    </ul>
                </a>
            </div>
            <!--.tab-->
        </div>
        <!--.bot-->
    </div>
    <!--.container-->

    <div class="container">
        <div class="fw promotion">
            <div class="promotionRow">



                <div class="promotionCol">
                    <div class="fw promotionBox">
                        <a href="JavaScript:Void(0);" onclick="openModelPopup('pnlPop23')" class="cover" style="background-image:url(/assets/images/p1.png)">
                            <ul class="sul">
                                <li class="discount">%40</li>
                                <li class="title">YATIRIM BONUSU</li>

                            </ul>
                        </a>
                    </div>
                    <!--.box-->
                </div>
                <!--.col-->



                <div class="promotionCol">
                    <div class="fw promotionBox ">
                        <a href="JavaScript:Void(0);" onclick="openModelPopup('pnlPop30')" class="cover" style="background-image:url(/assets/images/p2.png)">
                            <ul class="sul">
                                <li class="discount">%20</li>
                                <li class="title">REFERANS BONUSU</li>

                            </ul>
                        </a>
                    </div>
                    <!--.box-->
                </div>
                <!--.col-->



                <div class="promotionCol">
                    <div class="fw promotionBox">
                        <a href="JavaScript:Void(0);" onclick="openModelPopup('pnlPop32')" class="cover" style="background-image:url(/images/p3.png)">
                            <ul class="sul">
                                <li class="discount">%25 </li>
                                <li class="title">HESAP TAŞIMA BONUSU</li>

                            </ul>
                        </a>
                    </div>
                    <!--.box-->
                </div>
                <!--.col-->






                <div class="modal fade" id="pnlPop23" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog big-modal-dialog" role="document">
                        <div class="fw bigModal">
                            <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
                            <div class="fw bigModalBox">
                                <div class="fw simpleTitle bigModalBoxTitle">
                                    <ul class="sul">
                                        <li class="title" id="pnlPopUpContent"> Her Yatırımınıza %40 Bonus!</li>
                                    </ul>
                                </div>
                                <!--.title-->
                                <div class="fw bigModalContent" id="pnlPopUpContent">
                                    <div class="fw bigModalContent">
                                        <h5>"Her Yatırımınıza %40 Bonus" Promosyon Şartları</h5>
                                        <p>Dünya çapında Ekol Global Markets iştiraklerinden herhangi birinden hesabı olan tüm yatırımcılar bu promosyondan faydalanabilir.</p>
                                        <ul>
                                            <li>Ekol FX&rsquo;te gerçek forex hesaba sahip olduktan sonra her yatırımınızda geçerlidir.</li>
                                            <li>Kazanılan bonus miktarı yapılacak forex işlemlerinde marjin seviyesini yükseltmek için takviye görevi görür, çekilemez. Fakat bonus kullanılarak elde edilen kâr çekilebilir. Bonus alındıktan sonra stop out olunması durumunda, yatırımcının stop out olduktan sonra hesabında kalan meblağ almış olduğu bonus miktarı veya daha azı kadar ise, hesabında kalan meblağ almış olduğu bonusa eşdeğer sayılacağı için bu miktar için çekim talebinde bulunulamaz. Örneğin; 1.000 $ yatırıp %40 Yatırım Bonusu ile 400 $ Yatırım Bonusu almış olan bir yatırımcı stop out olması durumunda, hesabında 400 $ veya daha düşük bir miktar kaldığında, bu meblağ yatırımcının hesabından düşülür.</li>
                                            <li>Forex Promosyona katılım için Ekol FX web sitesinden Canlı Destek Hattı ile iletişime geçilmesi yeterlidir.</li>
                                            <li>Ekol FX, bu promosyonun kurallarını değiştirme veya promosyonu tamamen iptal etme hakkına sahiptir. Herhangi bir promosyonun güncel kurallarını takip etme yükümlülüğü yatırımcının kendisine aittir.</li>
                                            <li>Ekol FX&rsquo;te Promosyonların tamamı sistem tarafından otomatik olarak hesaplanmaktadır ve manuel işlem yapılmamaktadır.Bundan dolayı yanlışlık yaşanması söz konusu değildir.</li>
                                        </ul>
                                        <h5>Promosyonu nasıl alabilirim?</h5>
                                        <p>Gerçek forex hesap sahibi olduktan sonra, Eğer şartları karşılıyorsanız müşteri panelinden yatırım yaparken almak istediğiniz bonuslar tarafınıza onaya sunulacaktır. Müşteri panelinden seçerek otomatik olarak bonusunuzun tanımlanmasını sağlayabilirsiniz.</p>
                                    </div>
                                </div>
                                <!--.content-->
                            </div>
                            <!--.bigModalBox-->
                        </div>
                        <!--.bigModal-->
                    </div>
                    <!--.modal-dialog-->
                </div>
                <!--.modal-->


                <div class="modal fade" id="pnlPop30" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog big-modal-dialog" role="document">
                        <div class="fw bigModal">
                            <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
                            <div class="fw bigModalBox">
                                <div class="fw simpleTitle bigModalBoxTitle">
                                    <ul class="sul">
                                        <li class="title" id="pnlPopUpContent"> %20 Referans Bonusu</li>
                                    </ul>
                                </div>
                                <!--.title-->
                                <div class="fw bigModalContent" id="pnlPopUpContent">
                                    <div class="fw bigModalContent">
                                        <h5>"%20 Referans Bonusu" Promosyon şartları nelerdir?</h5>
                                        <p>Dünya çapında Ekol Global Markets iştiraklerinden herhangi birinden hesabı olan tüm yatırımcılar bu promosyondan faydalanabilir.</p>
                                        
                                        <ul>
                                            <li>Forex Referans promosyonundan yararlanabilmek için öncelikle aktif bir Ekol Forex yatırımcısı olmak gerekmektedir.</li>
                                            <li>Her üye bu promosyondan sınırsız sayıda faydalanabilir. Yani istediği kadar arkadaşını Ekol FX üyesi yaparak hepsinin ilk yatırımından %20&rsquo;ye varan bonusuna hak kazanır. Referans oldukları da kendi ilk yatırımlarından %40 Hoşgeldin Bonusu&rsquo;ndan yararlanır.</li>
                                            <li>İki tarafın da promosyondan faydalanabilmesi için, getirilen arkadaşların Ekol FX&rsquo;te açacakları hesabı ilk olarak minimum tutarda fonlanmaları gerekmektedir.</li>
                                            <li>Kazanılan bonus miktarı yapılacak forex işlemlerinde marjin seviyesini yükseltmek için takviye görevi görür, çekilemez. Fakat bonus kullanılarak elde edilen kâr çekilebilir. Bonus alındıktan sonra stop out olunması durumunda, yatırımcının stop out olduktan sonra hesabında kalan meblağ almış olduğu bonus miktarı veya daha azı kadar ise, hesabında kalan meblağ almış olduğu bonusa eşdeğer sayılacağı için bu miktar için çekim talebinde bulunulamaz. Örneğin; 1.000 $ yatırıp %40 Hoşgeldin Bonusu ile 400 $ Hoşgeldin Bonusu almış olan bir yatırımcı stop out olması durumunda, hesabında 400 $ veya daha düşük bir miktar kaldığında, bu meblağ yatırımcının hesabından düşülür.</li>
                                            <li>Promosyona katılım için Canlı Destek Hattı veya İletişim formları iletişime geçilmesi yeterlidir.</li>
                                            <li>Kullanıcının kural dışı faaliyetlerde bulunduğu ya da hile yaptığı tespit edilir ise hiçbir mazeret belirtilmeden Ekol FX hesabı askıya alınacaktır. Gerekli görüldüğü takdirde hesabı kapatılacaktır.</li>
                                            <li>Ekol FX, bu promosyonun kurallarını değiştirme veya promosyonu tamamen iptal etme hakkına sahiptir. Herhangi bir promosyonun güncel kurallarını takip etme yükümlülüğü yatırımcının kendisine aittir.</li>
                                        </ul>
                                        <h5>Promosyonu nasıl alabilirim?</h5>
                                        <p>Gerçek forex hesap sahibi olduktan sonra, Eğer şartları karşılıyorsanız müşteri panelinden yatırım yaparken almak istediğiniz bonuslar tarafınıza onaya sunulacaktır. Müşteri panelinden seçerek otomatik olarak bonusunuzun tanımlanmasını sağlayabilirsiniz.</p>
                                    </div>
                                </div>
                                <!--.content-->
                            </div>
                            <!--.bigModalBox-->
                        </div>
                        <!--.bigModal-->
                    </div>
                    <!--.modal-dialog-->
                </div>
                <!--.modal-->


                <div class="modal fade" id="pnlPop32" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog big-modal-dialog" role="document">
                        <div class="fw bigModal">
                            <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
                            <div class="fw bigModalBox">
                                <div class="fw simpleTitle bigModalBoxTitle">
                                    <ul class="sul">
                                        <li class="title" id="pnlPopUpContent"> %25 Hesap Taşıma Bonusu!</li>
                                    </ul>
                                </div>
                                <!--.title-->
                                <div class="fw bigModalContent" id="pnlPopUpContent">
                                    <div class="fw bigModalContent">
                                        <h5>"%25 Hesap Taşıma Bonusu" Promosyon şartları nelerdir?</h5>
                                        <p>Dünya çapında Ekol Global Markets iştiraklerinden herhangi birinden hesabı olan tüm yatırımcılar bu promosyondan faydalanabilir.</p>
                                       
                                        <ul>
                                            <li>Forex Hesap Taşıma Bonusu, farklı bir aracı kurumdan Ekol FX&rsquo;e taşınacak olan aktif forex hesabındaki varlık (equity) miktarının %35&rsquo;i kadar olup, hesabını Ekol FX&rsquo;e taşıyan her yatırımcı bu promosyondan yalnızca 1 kez faydalanabilir.</li>
                                            <li>Promosyona katılım için Ekol Forex web sitesinden Canlı Destek Hattı ile iletişime geçilmesi yeterlidir.</li>
                                            <li>Ekol FX, bu promosyonun kurallarını değiştirme veya promosyonu tamamen iptal etme hakkına sahiptir. Herhangi bir promosyonun güncel kurallarını takip etme yükümlülüğü yatırımcının kendisine aittir.</li>
                                            <li>Kullanıcının kural dışı faaliyetlerde bulunduğu ya da hileye başvurduğu tespit edilir ise hiçbir mazeret belirtilmeden forex hesabı kapatılacaktır.</li>
                                            <li>Ekol FX&rsquo;te Promosyonların tamamı sistem tarafından otomatik olarak hesaplanmaktadır ve manuel işlem yapılmamaktadır.Bundan dolayı yanlışlık yaşanması söz konusu değildir.</li>
                                        </ul>
                                        <h5>Promosyonu nasıl alabilirim?</h5>
                                        <p>Gerçek hesap sahibi olduktan sonra, Eğer şartları karşılıyorsanız müşteri panelinden yatırım yaparken almak istediğiniz bonuslar tarafınıza onaya sunulacaktır. Müşteri panelinden seçerek otomatik olarak bonusunuzun tanımlanmasını sağlayabilirsiniz.</p>
                                    </div>
                                </div>
                                <!--.content-->
                            </div>
                            <!--.bigModalBox-->
                        </div>
                        <!--.bigModal-->
                    </div>
                    <!--.modal-dialog-->
                </div>
                <!--.modal-->


            </div>
            <!--.row-->
        </div>
        <!--.promotion-->
    </div>

    <div class="fw threeStepsAll cover " style="background-image:url({{asset('assets/images/three-steps.png')}})">
        <div class="container">
            <div class="fw threeSteps">
                <div class="fw threeStepsTitle">
                    <ul class="sul">
                        <li class="title">3 Adımda Yatırıma Başlayın!</li>
                        <li class="desc">3 Basit adım ile gerçek foreks hesap sahibi olabilir ve yatırım işlemlerine başlayabilirsiniz!</li>
                    </ul>
                </div>
                <!--.title-->
                <div class="fw threeStepsBox">
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-user"></i><em class="orangeX">01</em></span></li>
                            <li class="title">Gerçek Forex Hesap Oluşturun!</li>
                            <li class="desc">Hemen 2 dakikanınızı ayırarak gerçek hesap oluşturun ve size özel olarak atanacak olan müşteri temsilcisi sizi arasın!</li>
                        </ul>
                    </div>
                    <!--.tab-->
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-transfer"></i><em class="orangeX">02</em></span></li>
                            <li class="title">Hesabınıza Para Yatırın!</li>
                            <li class="desc">70 Ödeme yöntemimizden birini kullanarak kolayca <b>forex yatırımı</b> yapabilirsiniz!</li>
                        </ul>
                    </div>
                    <!--.tab-->
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-graph"></i><em class="orangeX">03</em></span></li>
                            <li class="title">Yatırım Yapmaya Başlayın!</li>
                            <li class="desc">Her gün 35 dilde yayınlanan analizlerimizi, istatistklerimizi ve Size özel olarak atanan yatırım uzmanınınızın dediklerini inceleyerek forex yatırımınıza başlayın!</li>
                        </ul>
                    </div>
                    <!--.tab-->
                </div>
                <!--.box-->
            </div>
            <!--.threeSteps-->
        </div>
        <!--.container-->
    </div>
    <!--.threeStepsAll-->


    <div class="fw homeYatirimAll cover" style="background-image:url({{asset('assets/images/home-yatirim.png')}})">
        <div class="container">
            <div class="fw homeYatirim">
                <div class="homeYatirimLeft">
                    <div class="fw homeYatirimLeftBox">
                        <ul class="sul">
                            <li class="title">EKOLFX</li>
                            <li class="bigTitle">Yatırım Çeşitliliği</li>
                            <li class="desc">Forex, Spot Metaller, Endeksler, Spot Emtialar, Kripto Para Birimleri, ABD Hisseleri, AB Hisseleri, ASYA Hisseleri ve RUSYA hisseleri yatırımları ile kazanç sağlayın!</li>
                        </ul>
                    </div>
                    <!--.box-->
                </div>
                <!--.left-->
                <div class="homeYatirimRight ">
                    <div class="fw homeYatirimRightBox">
                        <div class="homeYatirimRow">


                            @foreach($data['instrumentsList'] as $srows)
                            <div class="homeYatirimCol">
                                <div class="fw homeYatirimTab">
                                    <ul class="sul ">


                                        @if(strpos($srows['IconHTML'], 'flat')!== false)
                                        <li class="icon"><span class="iconX"><i class="{{$srows['IconHTML']}}"></i></span></li>
                                        @else
                                        <li class="img"><img src="{{asset('assets//images/'.$srows['IconHTML'])}}" /></li>
                                        @endif

                                        <li class="title">EKOLFX</li>
                                        <li class="desc">{{ $srows['Title'] }}</li>
                                        <li class="more"><a href="{{LaravelLocalization::localizeURL($srows['SeoTags']) }}" class="moreX">{{Str::upper(LangValue('subpage_instrument_details'))}} </a></li>
                                    </ul>
                                </div>
                                <!--.tab-->
                            </div>
                            <!--.col-->
                            @endforeach
                        </div>
                        <!--.row-->
                    </div>
                    <!--.rightBox-->
                </div>
                <!--.right-->
            </div>
            <!--.homeYatirim-->
        </div>
        <!--.container-->
    </div>
    <!--.homeYatirimAll-->



    <div class="container">
        <div class="fw homeAdvantages">
            <div class="fw simpleTitle ">
                <ul class="sul">
                    <li class="subTitle"><span class="subTitleX">EKOL<strong>Forex</strong></span></li>
                    <li class="title">EKOLFX Avantajları! </li>
                    <li class="desc">EKOLFX&#039;i tercih etmeniz için çok neden var.</li>
                </ul>
            </div>
            <!--.title-->
            <div class="fw homeAdvantagesBox ">
                <div class="homeAdvantagesRow">
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv ">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-expand-square"></i></span></li>
                                <li class="title">
                                    Çift Yönlü Yatırım<br>
                                    <span class="desc">Forex'te Sadece yükseliş hareketlerinden değil, Düşüş hareketlerinden de kazanç elde edebilirsiniz.</span></li>

                                </li>

                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv ">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-pulley-1"></i></span></li>
                                <li class="title">Kaldıraç İşlemleri <br>
                                    <span class="desc">Yüksek kaldıraç fırsatlarından yararlanarak paranızın katlarına göre işlem yapabilirsiniz.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>
                                <li class="title">Zengin Hesap Çeşitleri<br>
                                    <span class="desc">Her yatırımcıya özel forex hesap çeşitleriyle yatırım miktarınıza uygun avantajlardan yararlanabilirsiniz.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv ">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>
                                <li class="title">Ücretsiz Forex Eğitimi<br>
                                    <span class="desc">Uzman eğitmenlerimiz tarafından hazırlanan eğitimlerle forex piyasasına tam donanımlı bir şekilde giriş yapın.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>
                                <li class="title">Uzman Analizleri<br>
                                    <span class="desc">Uzman analistlerimiz tarafından 35 dilde hazırlanan forex analizleri ile güncel piyasa gelişmelerinden haberdar olun.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-computer"></i></span></li>
                                <li class="title">Ücretsiz Sinyaller<br>
                                    <span class="desc">Uzman analistlerimizin hazırladığı başarı oranı %85 olan <b>forex sinyalleri</b> ile yatırımlarınıza yön verin.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
                                <li class="title">Yüksek Bonuslar<br>
                                    <span class="desc">EKOLFX&#039;in birbirinden farklı ve yüksek bonusları ile Forex&#039;te kazanmak çok daha kolay.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-wallet"></i></span></li>
                                <li class="title">7/24 Yatırım/Çekim işlemleri!<br>
                                    <span class="desc">EKOLFX en hızlı yatırım alan ve hafta sonuda dahil olmak üzere her ülkede 7/24 en hızlı çekim gönderen tek firmadır.</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                </div>
                <!--.row-->
            </div>
            <!--.advantagesbox-->
        </div>
        <!--.homeAdvantages-->
    </div>
    <!--.container-->



    <div class="fw callMe" id="callmeDiv">
        <div class="container">
            <div class="fw callMeBox">
                <form id="CallmeForm" method="POST" action="#">
                    <div class="callMeRow">
                        <div class="callMeCol first">
                            <div class="fw callMeBox">
                                <div class="fw callMeTitle">
                                    <ul class="sul">
                                        <li class="icon"><i class="flaticon-headset"></i></li>
                                        <li class="title">{{Str::upper(LangValue('subpage_topform_t1'))}}</li>
                                        <li class="desc">{{Str::upper(LangValue('subpage_topform_t2'))}}</li>
                                    </ul>
                                </div>
                                <!--.title-->
                            </div>
                            <!--.callMeBox-->
                        </div>
                        <!--.col-->
                        <div class="callMeCol">
                            <div class="fw callMeBox">
                                <div class="fw homeContactInput smallX BoxTop10">
                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                    <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
                                </div>
                                <!--.input-->
                            </div>
                            <!--.callMeBox-->
                        </div>
                        <!--.col-->
                        <div class="callMeCol">
                            <div class="fw callMeBox">
                                <div class="fw homeContactInput smallX BoxTop10  js-mask-tel">
                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                    <input id="txtPhone3" name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
                                </div>
                                <!--.input-->
                            </div>
                            <!--.callMeBox-->
                        </div>
                        <!--.col-->
                        <div class="callMeCol">
                            <div class="fw callMeBox">
                                <div class="fw homeContactInput smallX BoxTop10">
                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                    <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
                                    <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                                    <input type="hidden" name="contentType" value="3" />
                                </div>
                                <!--.input-->
                            </div>
                            <!--.callMeBox-->
                        </div>
                        <!--.col-->
                        <div class="callMeCol">
                            <div class="fw callMeBox">
                                <button id="CallmeFormBtn" type="submit" class="sidebarDemoSubmit smallX">{{Str::upper(LangValue('subpage_topform_btn'))}}</button>
                            </div>
                            <!--.callMeBox-->
                        </div>
                        <!--.col-->
                    </div>
                    <!--.row-->
                </form>
            </div>
            <!--.callMeBox-->
        </div>
    </div>
    <!--.callMe-->



    <div class="container">
        <div class="fw homeInfo">
            <!--.title-->
            <div class="fw homeInfoBox">
                <div class="homeInfoBoxLeft ">
                    <div class="fw homeInfoBoxLeftDiv">
                        <div class="fw simpleContent">
                            <h3>{{LangValue('index_c1_h3')}}</h3>
                            <p>{!!LangValue('index_c1_p')!!}</p>

                        </div>
                        <!--.content-->
                        <div class="fw homeInfoLeftButtons">
                            <ul>
                                @foreach($data['corperateList'] as $row)
                                <li><a class="simpleButton onlyGray" href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--.buttons-->
                    </div>
                    <!--.div-->
                </div>
                <!--.left-->
                <div class="homeInfoBoxRight">
                    <div class="fw homeInfoBoxRightDiv">
                        <div class="fw homeInfoImg">
                            <img src="{{asset('assets//images/home-img.png')}}" />
                        </div>
                        <!--.img-->
                    </div>
                    <!--.div-->
                </div>
                <!--.right-->
            </div>
            <!--.box-->
        </div>
        <!--.homeInfo-->
    </div>
    <!--.container-->





    <div class="fw homePlatformAll">
        <div class="container">
            <div class="fw homePlatform">
                <div class="row">
                    <div class="col-md-12 col-lg-6 ">
                        <div class="fw homePlatformLeft">
                            <div class="fw simpleTitle">
                                <ul class="sul">
                                    <li class="subTitle"><span class="subTitleX">EKOL<strong>FX</strong></span></li>
                                    <li class="title">{{LangValue('index_c4_h1')}}</li>
                                    <li class="desc">{{LangValue('index_c4_h2')}}</li>
                                </ul>
                            </div>
                            <!--.title-->
                            <!--.menus-->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="trader1">
                                    <div class="fw simpleContent align-justify">
                                        <h3>{{LangValue('index_c4_t1')}} <a href="{{LaravelLocalization::localizeURL($data['menuplatform']['SeoTags']) }}" class="h3More">{{LangValue('index_c4_tb1')}}</a></h3>
                                        <p>{{LangValue('index_c4_p')}}</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.tabpanel-->
                            </div>
                            <!--.tabcontent-->

                        </div>
                        <!--.left-->
                    </div>
                    <!--.col-->
                    <div class="col-md-12 col-lg-6">
                        <div class="fw homePlatformRight">
                            <div class="fw simpleTitle" style="padding-bottom: 0px;">
                                <ul class="sul">
                                    <li class="subTitle"><span class="subTitleX">SIKÇA SORULARN <strong> SORULAR</strong></span></li>
                                </ul>

                            </div>
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Canlı forex hesabımı nasıl açabilirim?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <div class="fw faqListTabContent" style="display: none;">
                                    <div class="fw simpleContent">
                                        <p>Gerçek forex hesap aç formumuzu doldurarak müşteri temsilcilerimizin sizi aramasını sağlayabilir ya da canlı desteğe bağlanarak hesabınızı açabilirsiniz.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Demo forex hesabımı nasıl açabilirim?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent" style="display: none;">
                                    <div class="fw simpleContent">
                                        <p>Demo forex hesap aç formumuzu doldurarak müşteri temsilcilerimizin sizi aramasını sağlayabilir ya da canlı desteğe bağlanarak hesabınızı açabilirsiniz.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Hesabımı EkolFX'e taşımak istiyorum. Bunu nasıl yaparım?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>Forex Hesap taşıma formumuzu doldurarak müşteri temsilcilerimizin sizi aramasını sağlayabilir ya da canlı desteğe bağlanarak hesabınızı açabilirsiniz.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Nasıl Para Yatırma İşlemi Yapabilirim?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>Forex hesabınıza 70+ yatırım yöntemi ile para yatırma işlemi gerçekleştirebilirsiniz.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Para Çekme İşlemini Nasıl Yaparım?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>Müşteri panelinden kolayca çekim talebi verebilirsiniz.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">Hangi Platformlar Üzerinde İşlem Yapabilirim?</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>Ekol Forex web sitesi tüm platformlara uyumludur. Size uygun olan platform ile işlemlerimize başlayabilirsiniz.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <!--.tab-->
                        </div>
                        <!--.right-->
                    </div>
                    <!--.col-->
                </div>
                <!--.row-->
            </div>
            <!--.homePlatform-->
        </div>
        <!--.container-->
    </div>
    <!--.platformAll-->



    <footer>
        <div class="fw footerAll cover" style="background-image:url({{asset('assets/images/footer-bg.png')}})">
            <div class="fw footerTopAll ">
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

                        <div class=" footerSocial">
                            <ul>
                                <li class="wow zoomIn facebook" data-wow-delay="0.1s"><a target="_blank" style="width:auto; padding:0px 20px;" href="/"><i style=" font-size: 13px;" class="fas fa-link"></i>
                                        <span style="font-size: 11px;font-weight: 600; margin:10px;"> ANA SİTEYE GİT</span> <i class="fas fa-arrow-right" style=" font-size: 10px;"></i> </a></li>

                                <li class="wow zoomIn facebook" data-wow-delay="0.1s"><a target="_blank" href="{{CoInfo('Facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="wow zoomIn instagram" data-wow-delay="0.1s"><a target="_blank" href="{{CoInfo('Instagram')}}"><i class="fab fa-instagram"></i></a></li>
                                <li class="wow zoomIn twitter" data-wow-delay="0.2s"><a target="_blank" href="{{CoInfo('Twitter')}}"><i class="fab fa-twitter"></i></a></li>
                                <li class="wow zoomIn youtube" data-wow-delay="0.2s"><a target="_blank" href="{{CoInfo('Youtube')}}"><i class="fab fa-youtube"></i></a></li>
                                <li class="wow zoomIn goTop" data-wow-delay="0.3s"><a id="goTop" href="javascript:void(0)"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
                            </ul>
                        </div>


                    </div>
                    <!--.footerTop-->
                </div>
                <!--.container-->
            </div>
            <!--.footerTopAll-->

            <!--.container-->
            <div class="fw footerRiskAll ">
                <div class="container">

                    <div class="fw footerTopMenu">
                        <ul>



                            <li><a href="tel:+9{{CoInfo('Phone')}}"><i class="flaticon-telephone"></i><span>{{CoInfo('Phone')}}</span></a></li>
                            <li><a onclick="gotoCallme()" href="JavaScript:Void(0);"><i class="flaticon-call-center-worker-with-headset"></i><span>{{LangValue('biz_sizi_arayalim')}}</span></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=0035796769805"><i class="flaticon-whatsapp-logo"></i><span>Whatsapp</span></a></li>

                            <li><a onclick="gotoForm()" href="JavaScript:Void(0);"><i class="flaticon-headset"></i><span>Forex'e Kayıt Olun</span></a></li>

                        </ul>
                    </div>
                    <!--.footerTopMenu-->

                    <div class="fw footerRisk" style=" margin-bottom:35px; ">
                        <i class="flaticon-info onlyBlue" style="background-image: linear-gradient(90deg,#0096ec 0,#118ed6 100%)!important;"></i>
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
            <div class="fw footerIcons">

                <ul>
                    <li data-toggle="tooltip" data-placement="bottom" title="Havale/Eft" class="wow zoomIn" data-wow-delay="0.1s"><span class="title">
                            <div class="footer_logof1"></div>
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Papara" class="wow zoomIn" data-wow-delay="0.1s"><span class="title">
                            <div class="footer_logof2"></div>
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="CepBank" class="wow zoomIn" data-wow-delay="0.1s"><span class="title">
                            <div class="footer_logof3"></div>
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Western Union" class="wow zoomIn" data-wow-delay="0.2s"><span class="title">
                            <div class="footer_logof4">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Kredi Kartı" class="wow zoomIn" data-wow-delay="0.2s"><span class="title">
                            <div class="footer_logof5">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Payoneer" class="wow zoomIn" data-wow-delay="0.2s"><span class="title">
                            <div class="footer_logof6">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="CPGCode" class="wow zoomIn" data-wow-delay="0.3s"><span class="title">
                            <div class="footer_logof7">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Neteller" class="wow zoomIn" data-wow-delay="0.3"><span class="title">
                            <div class="footer_logof8">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Skrill" class="wow zoomIn" data-wow-delay="0.3s"><span class="title">
                            <div class="footer_logof9">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="WebMoney" class="wow zoomIn" data-wow-delay="0.4s"><span class="title">
                            <div class="footer_logof10">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Payeer" class="wow zoomIn" data-wow-delay="0.4s"><span class="title">
                            <div class="footer_logof11">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="UldPay" class="wow zoomIn" data-wow-delay="0.4s"><span class="title">
                            <div class="footer_logof12">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Bitcoin" class="wow zoomIn" data-wow-delay="0.5s"><span class="title">
                            <div class="footer_logof13">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="RocketPay" class="wow zoomIn" data-wow-delay="0.5s"><span class="title">
                            <div class="footer_logof14">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Etherium" class="wow zoomIn" data-wow-delay="0.5s"><span class="title">
                            <div class="footer_logof15">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Litecoin" class="wow zoomIn" data-wow-delay="0.6s"><span class="title">
                            <div class="footer_logof16">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="BitMoney" class="wow zoomIn" data-wow-delay="0.6s"><span class="title">
                            <div class="footer_logof17">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Ascoin" class="wow zoomIn" data-wow-delay="0.6"><span class="title">
                            <div class="footer_logof18">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Redcoin" class="wow zoomIn" data-wow-delay="0.7s"><span class="title">
                            <div class="footer_logof19">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Dashcoin" class="wow zoomIn" data-wow-delay="0.7s"><span class="title">
                            <div class="footer_logof20">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Dogecoin" class="wow zoomIn" data-wow-delay="0.8s"><span class="title">
                            <div class="footer_logof21">>
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="İcoin" class="wow zoomIn" data-wow-delay="0.8s"><span class="title">
                            <div class="footer_logof22">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Unkcoin" class="wow zoomIn" data-wow-delay="0.8s"><span class="title">
                            <div class="footer_logof23">
                        </span></li>
                    <li data-toggle="tooltip" data-placement="bottom" title="Zcash" class="wow zoomIn" data-wow-delay="0.8s"><span class="title">
                            <div class="footer_logof24">
                        </span></li>
                </ul>
            </div>
            <!--.icons-->
            </div>
            <!--.footerSocial-->
            <div class="fw footerCopyright wow fadeInUp">
                <span class="title">Copyright 2019 - {{CoInfo('Name')}} Forex Hesap Aç V1</span>
            </div>
            <!--.footerCopyright-->
        </div>
        <!--.container-->
        </div>
        <!--.footerAll-->

        <div class="fw fixedFooterMenu">
            <ul>



                <li><a href="{{LaravelLocalization::localizeURL('/login') }}"><span class="icon"><i class="flaticon-user-3 textX blueX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu1')), 1)!!}</span></a></li>
                <li><a onclick="gotoFormM()" href="JavaScript:Void(0);"><span class="icon"><i class="flaticon-window textX pinkX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu2')), 1)!!}</span></a></li>
                <li><a href="{{LaravelLocalization::localizeURL('/register') }}"><span class="icon"><i class="flaticon-add textX greenX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu3')), 1)!!}</span></a></li>
                <li><a href="{{LaravelLocalization::localizeURL('/transfer') }}"><span class="icon"><i class="flaticon-arrow textX orangeX"></i></span><span class="title">{!!preg_replace('/ /', "<br />", Str::upper(LangValue('footer_mobile_menu4')), 1)!!}</span></a></li>
                <li><a onclick="gotoCallme()" href="JavaScript:Void(0);"><span class="icon"><i class="flaticon-headset textX blueX"></i></span><span class="title">Sizi <br />Arayalım</span></a></li>
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

    <script src="{{ mix('js/first2.js') }}"></script>
    <script src="{{ mix('js/second2.js') }}"></script>

    <script type="text/javascript" defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/localization/messages_{{ app()->getLocale() }}.js"></script>


    <script src="{{ mix('js/index2.js') }}"></script>


    <script>
        function openModelPopup(ModelNo) {


            $('#' + ModelNo).modal('show');

        }

        function gotoCallme() {
            $('html,body').animate({
                scrollTop: $('#callmeDiv').offset().top - 120
            }, 500);
        }

        function gotoForm() {
            $('html,body').animate({
                scrollTop: $('.homeSliderAll').offset().top - 120
            }, 500);
        }

        function gotoFormM() {
            $('html,body').animate({
                scrollTop: $('#registerFormDemo').offset().top - 250
            }, 500);
        }
    </script>

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

</body>

</html>