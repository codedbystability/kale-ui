<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ekol FX - إنشاء حساب فوركس تجريبي مع ميزات حقيقية للتعلم على الفور</title>
	
    <meta name="description" content="استفد من امتيازات Ekol FX. قم بإنشاء حساب فوركس تجريبي مجاني وتداول مع 0 مخاطر على النظام الأساسي الحقيقي! يمكنك فتح حساب فوركس تجريبي بميزات حقيقية بلمسة زر واحدة." />
   <meta name="keywords" content="فتح حساب فوركس ، حساب فوركس ، تسجيل فوركس ، تبادل فوركس ، ekolfx ، الخارج فوركس ، أفضل فوركس ، استثمار فوركس ، ما هو الفوركس ، فوركس الأكثر موثوقية ، حساب فوركس التجريبي ، حساب فوركس مجاني ، حساب فوركس غير محدود">

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
                                <li><a onclick="gotoCallme()" href="JavaScript:Void(0);"><i class="flaticon-call-center-worker-with-headset"></i>سوف نتصل بك</a></li>
                                
                            </ul>
                        </div>
                        <!--.headerTopLeftMenu-->
                        <div class="headerMenu">
                            <!--.headertopLeft-->
                            <div class="headerTopLeftMenu">
                                <ul>
                                    <li>
                                    <li><a class="simpleButtonLnd" href="{{LaravelLocalization::localizeURL('/login') }}"><i class="flaticon-user-3 textX lndWhiteIcon"></i>تسجيل الدخول</a></li>
                                    <li><a class="simpleButtonLnd greenX " href="{{LaravelLocalization::localizeURL('/register') }}"><i class="flaticon-add textX  lndWhiteIcon"></i>انشاء حساب</a></li>
                                    <li><a class="simpleButtonLnd orangeX" href="{{LaravelLocalization::localizeURL('/transfer') }}"><i class="flaticon-arrow textX lndWhiteIcon"></i>نقل الحساب</a></li>
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
                                <li class="spacingTitle wow zoomIn" data-wow-delay="0.1s">أنشئ حساب فوركس مجاني</li>
                                <li class="homeSliderTitle wow zoomIn" data-wow-delay="0.1s"><small>ك التجريبي في فوركس جاهز</small> حساب</li>
                                <li class="desc wow zoomIn" data-wow-delay="0.1s">10،000USD تجربة استثمار لا مثيل لها من حساب حقيقي مع الأموال الافتراضية.</li>
                                <li class="link twiceLink wow zoomIn" data-wow-delay="0.1s"><a onclick="gotoFormM()" href="JavaScript:Void(0);" class="simpleButton orangeX">إنشاء حساب فوركس حقيقي<i class="flaticon-window"></i></a><a onclick="gotoCallme()" href="JavaScript:Void(0);" class="simpleButton">سوف نتصل بك<i class="flaticon-add"></i></a></li>
                            </ul>
                        </div>
                        <!--.homePreview-->
                        <div class="sliderForm">
                            <div class="fw sliderFormBox wow fadeIn" data-wow-delay="0.2s" style="background: #fff url(../images/slider-fx-before2.png) no-repeat top left;">
                                <div class="fw sliderFormBoxTitle">
                                    <img src="{{asset('assets//images/slider-fox.png')}}" />
                                    <span class="title">! افتح حساب تجريبي</span>
                                </div>
                                <!--.title-->
                                <form id="registerFormDemoSlider" method="POST" action="#">
                                    <div class="fw sliderFormDiv">

                                        <ul>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10">
                                                    <span class="icon"><i class="flaticon-user-3"></i></span>
                                                    <input name="name" type="text" class="contactText" placeholder="الاسم واللقب" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10 js-mask-tel ">
                                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                                    <input id="txtPhone1" name="phone" type="text" class="contactText txtPhone" placeholder="هاتف" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li>
                                                <div class="fw homeContactInput BoxTop10">
                                                    <span class="icon"><i class="flaticon-arroba"></i></span>
                                                    <input name="email" type="text" class="contactText" placeholder="بريد إلكتروني" />
                                                </div>
                                                <!--.input-->
                                            </li>
                                            <li class="submit">
                                                <input type="hidden" name="type" value="demo">
                                                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                                                <button id="registerFormDemoSliderBtn" type="submit" class="simpleButton">افتح حساب تجريبي<i class="flaticon-arrow-pointing-to-right"></i></button></li>
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
                                    <input name="name" type="text" class="contactText" placeholder="الاسم واللقب" />
                                </div>
                                <!--.input-->
                            </li>
                            <li>
                                <div class="fw homeContactInput BoxTop10 js-mask-tel">
                                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                                    <input id="txtPhone2" name="phone" type="text" class="contactText txtPhone" placeholder="هاتف" />
                                </div>
                                <!--.input-->
                            </li>
                            <li>
                                <div class="fw homeContactInput BoxTop10">
                                    <span class="icon"><i class="flaticon-arroba"></i></span>
                                    <input name="email" type="text" class="contactText" placeholder="بريد إلكتروني" />
                                </div>
                                <!--.input-->
                            </li>
                            <li class="submit">
                                <input type="hidden" name="type" value="demo">
                                <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                                <button id="registerFormDemoBtn" type="submit" class="simpleButton">افتح حساب تجريبي<i class="flaticon-arrow-pointing-to-right"></i></button></li>
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
                        <li class="title">فتح حساب فوركس تجريبي! </li>
                        <li class="desc">القدرة على التداول باستخدام حساب فوركس تجريبي دون الاستثمار في ظروف سوق الفوركس الحقيقية</li>
                    </ul>
                </a>
            </div>
            <!--.tab-->
            <div class="homePreviewBotTab">
                <a href="/register">
                    <ul class="sul">
                        <li class="img"><i class="textX greenX flaticon-user-3"></i></li>
                        <li class="title">!افتح حساب فوركس حقيقي</li>
                        <li class="desc">تداول بثقة مع معدلات فروق الأسعار التنافسية لـ EKOL وميزة التداول السريعة!</li>
                    </ul>
                </a>
            </div>
            <!--.tab-->
            <div class="homePreviewBotTab">
                <a href="/transfer">
                    <ul class="sul">
                        <li class="img"><i class="textX orangeX flaticon-arrow"></i></li>
                        <li class="title">! نقل حساب فوركس الخاص بك</li>
                        <li class="desc">استفد من الامتيازات عن طريق نقل حساب فوركس الخاص بك إلى EKOL Forex ، بيت السمسرة الرائد في العالم!</li>
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
                                <li class="title"> منحة الاستثمار</li>

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
                                <li class="title">مكافأة المرجعية</li>

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
                                <li class="title">مكافأة حساب النقل</li>

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
                                        <h5>"مكافأة 40 ٪ على كل استثمار" "الشروط الترويجية</h5>
                                        <p>يمكن لجميع المستثمرين الذين لديهم حسابات من أي من فروع Ekol Global Markets في جميع أنحاء العالم الاستفادة من هذا العرض الترويجي.</p>
                                        <ul>
                                            <li>بمجرد أن يكون لديك حساب فوركس حقيقي في Ekol FX ، يكون ساريًا في كل مرة تستثمر فيها.</li>
                                            <li>يخدم مبلغ المكافأة التي تم ربحها كتعزيز لرفع مستوى الهامش في معاملات الفوركس ، ولا يمكن سحبه. ومع ذلك ، يمكن سحب الأرباح التي تحققت باستخدام المكافأة. في حالة التوقف بعد استلام المكافأة ، لا يمكن للمستثمر المطالبة بالسحب لهذا المبلغ لأن المبلغ المتبقي في الحساب بعد التوقف أقل من أو يساوي المكافأة المستلمة في الحساب. مثلا في حالة توقف المستثمر الذي استثمر 1000 دولار وحصل على 40٪ منحة الاستثمار و 400 دولار منحة الاستثمار ، وتبقى 400 دولار أو أقل في حسابه ، يتم خصم المبلغ من حساب المستثمر.</li>
                                            <li>للمشاركة في عرض فوركس ، يكفي الاتصال بخط الدعم المباشر على موقع Ekol FX.</li>
                                            <li>تحتفظ Ekol FX بالحق في تغيير قواعد هذا العرض الترويجي أو إلغاء الترويج بالكامل. يقع على عاتق المستثمر الالتزام باتباع القواعد الحالية لأي عرض ترويجي.</li>
                                            <li>في Ekol FX ، يتم حساب جميع العروض الترويجية تلقائيًا بواسطة النظام ولا يوجد تشغيل يدوي ، لذلك لا يوجد خطأ.</li>
                                        </ul>
                                        <h5>كيف يمكنني الحصول على الترقية؟</h5>
                                        <p>بمجرد أن يكون لديك حساب فوركس حقيقي ، سيتم تقديم المكافآت التي ترغب في تلقيها عند الاستثمار من لوحة العملاء إليك إذا استوفيت المتطلبات. يمكنك تحديد مكافأتك تلقائيًا من لوحة العملاء.</p>
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
                                        <li class="title" id="pnlPopUpContent">20 ٪ مكافأة المرجعية</li>
                                    </ul>
                                </div>
                                <!--.title-->
                                <div class="fw bigModalContent" id="pnlPopUpContent">
                                    <div class="fw bigModalContent">
                                        <h5>مكافأة 20 ٪ للتزكية "" ما هي شروط الترقية؟</h5>
                                        <p>يمكن لجميع المستثمرين الذين لديهم حسابات من أي من فروع Ekol Global Markets في جميع أنحاء العالم الاستفادة من هذا العرض الترويجي.</p>
                                        
                                        <ul>
                                            <li>للاستفادة من عرض فوركس للتزكية ، يجب أن تصبح أولاً مستثمرًا نشطًا في Ekol Forex.</li>
                                            <li>يمكن لكل عضو الاستفادة من عدد غير محدود من العروض الترويجية. بمعنى آخر ، من خلال تكوين أكبر عدد ممكن من الأصدقاء كأعضاء Ekol FX ، يحق لهم الحصول على مكافأة تصل إلى 20٪ من استثماراتهم الأولية. كما أنهم يستفيدون من مكافأة الترحيب بنسبة 40٪ من استثماراتهم الأولية.</li>
                                            <li>لكي يستفيد كلا الطرفين من العرض الترويجي ، يجب عليهما أولاً تمويل الحساب الذي سيفتحه في Ekol FX بأقل مبلغ ممكن.</li>
                                            <li>يخدم مبلغ المكافأة التي تم ربحها كتعزيز لرفع مستوى الهامش في معاملات الفوركس ، ولا يمكن سحبه. ومع ذلك ، يمكن سحب الأرباح التي تحققت باستخدام المكافأة. في حالة التوقف بعد استلام المكافأة ، لا يمكن للمستثمر المطالبة بالسحب لهذا المبلغ لأن المبلغ المتبقي في الحساب بعد التوقف أقل من أو يساوي المكافأة المستلمة في الحساب. مثلا سيتم خصم المستثمر الذي استثمر 1000 دولار وحصل على 40٪ مكافأة ترحيبية ومكافأة ترحيب بقيمة 400 دولار من حساب المستثمر إذا ظل مبلغ 400 دولار أو أقل في حسابه.</li>
                                            <li>للمشاركة في العرض الترويجي ، يكفي الاتصال بخط الدعم المباشر أو نماذج الاتصال.</li>
                                            <li>إذا تقرر أن المستخدم متورط في أنشطة غير قانونية أو غش ، فسيتم تعليق حساب Ekol FX دون أي عذر. إذا لزم الأمر ، سيتم إغلاق الحساب.</li>
                                            <li>Ekol FX لها الحق في تغيير قواعد هذا العرض أو إلغاء الترويج بالكامل. الالتزام باتباع القواعد الحالية لأي عرض ترويجي يقع على عاتق المستثمر.</li>
                                        </ul>
                                        <h5>كيف يمكنني الحصول على الترقية؟</h5>
                                        <p>بمجرد أن يكون لديك حساب فوركس حقيقي ، إذا كنت تفي بالمتطلبات ، سيتم تقديم المكافآت التي ترغب في تلقيها عند الاستثمار من لوحة العملاء للموافقة عليها.</p>
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
                                        <li class="title" id="pnlPopUpContent"> 25 ٪ مكافأة حساب النقل</li>
                                    </ul>
                                </div>
                                <!--.title-->
                                <div class="fw bigModalContent" id="pnlPopUpContent">
                                    <div class="fw bigModalContent">
                                        <h5>"مكافأة التعامل مع الحساب بنسبة 25٪" "ما هي المصطلحات الترويجية؟</h5>
                                        <p>يمكن لجميع المستثمرين الذين لديهم حساب من أي من فروع Ekol Global Markets في جميع أنحاء العالم الاستفادة من هذا العرض الترويجي.</p>
                                       
                                        <ul>
                                            <li>تمثل مكافأة تحويل حساب فوركس 35 ٪ من مبلغ الأسهم في حساب الفوركس النشط الذي سيتم تحويله من دار وساطة مختلفة إلى Ekol FX ، ويمكن لكل مستثمر يحضر حسابه إلى Ekol FX الاستفادة من هذا العرض مرة واحدة فقط.</li>
                                            <li>للمشاركة في العرض الترويجي ، يكفي الاتصال بخط الدعم المباشر على موقع Ekol Forex.</li>
                                            <li>تحتفظ Ekol FX بالحق في تغيير قواعد هذا العرض الترويجي أو إلغاء الترويج بالكامل. يقع الالتزام باتباع القواعد الحالية لأي ترويج على عاتق المستثمر.</li>
                                            <li>إذا تقرر أن المستخدم متورط في أنشطة غير قانونية أو قدم طلبًا للاحتيال ، فسيتم إغلاق حساب الفوركس دون أي عذر.li>
                                            <li>"يتم حساب جميع العروض الترويجية في Ekol FX تلقائيًا بواسطة النظام ولا يوجد تشغيل يدوي.  لذلك ، ليس هناك خطأ."</li>
                                        </ul>
                                        <h5>كيف يمكنني الحصول على الترقية؟</h5>
                                        <p>بمجرد أن يكون لديك حساب حقيقي ، إذا كنت تفي بالمتطلبات ، سيتم تقديم المكافآت التي ترغب في تلقيها عند الاستثمار من لوحة العملاء للموافقة عليها.</p>
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
                        <li class="title">ابدأ التداول في 3 خطوات!</li>
                        <li class="desc">من خلال 3 خطوات بسيطة ، يمكنك الحصول على حساب فوركس حقيقي وبدء التداول!</li>
                    </ul>
                </div>
                <!--.title-->
                <div class="fw threeStepsBox">
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-user"></i><em class="orangeX">01</em></span></li>
                            <li class="title">أنشئ حساب فوركس حقيقي!</li>
                            <li class="desc">أنشئ حساب فوركس مجاني في دقيقتين واطلب منك مندوب خدمة العملاء!</li>
                        </ul>
                    </div>
                    <!--.tab-->
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-transfer"></i><em class="orangeX">02</em></span></li>
                            <li class="title">! إيداع الأموال في حسابك</li>
                            <li class="desc">يمكنك بسهولة تداول الفوركس باستخدام واحدة من 70 وسيلة دفع لدينا! 24/7 Deposit - Ekol Forex هي المؤسسة الوحيدة التي يمكنك الانسحاب منها.</li>
                        </ul>
                    </div>
                    <!--.tab-->
                    <div class="fw threeStepTab wow fadeIn">
                        <ul class="sul">
                            <li class="icon"><span class="iconX wow zoomIn delay-1s"><i class="blueX textX flaticon-graph"></i><em class="orangeX">03</em></span></li>
                            <li class="title">ابدأ الاستثمار!</li>
                            <li class="desc">ابدأ تداول الفوركس عن طريق مراجعة التحليل اليومي والإحصائيات وتحليل خبير الاستثمار بـ 35 لغة!</li>
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
                            <li class="title">EKOL GLOBAL MARKETS</li>
                            <li class="bigTitle">تنوع الاستثمار</li>
                            <li class="desc">! ابدأ في إنشاء حسابات فوركس حقيقية باستخدام Spot Metals والمؤشرات والسلع الفورية والعملات المشفرة والأسهم الأمريكية وأسهم الاتحاد الأوروبي والأسهم الآسيوية وأسهم روسيا</li>
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
                                    <ul class="sul">


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
                    <li class="title">! مزايا EKOL FX </li>
                    <li class="desc">هناك العديد من الأسباب التي تجعلك تختار EKOLFX.</li>
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
                                    الاستثمار ثنائي الاتجاه<br>
                                    <span class="desc">يمكنك كسب الربح ليس فقط من الاتجاه الصعودي ولكن أيضًا من الاتجاه الهبوطي.</span></li>

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
                                <li class="title">الرافعة المالية المعاملات<br>
                                    <span class="desc">.يمكنك الاستفادة من فرص الرافعة المالية العالية وفقًا لمضاعفات أموالك</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>
                                <li class="title">أنواع الحسابات الغنية<br>
                                    <span class="desc">.يمكنك الاستفادة من المزايا المناسبة لمبلغ الاستثمار الخاص بك مع مجموعة متنوعة من حسابات الفوركس الخاصة بكل مستثمر</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv ">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>
                                <li class="title">تدريب فوركس مجاني<br>
                                    <span class="desc">.أدخل سوق الفوركس مجهزًا بالكامل بالتدريبات التي أعدها مدربوننا الخبراء</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>
                                <li class="title">تحليل الخبراء<br>
                                    <span class="desc">كن على دراية بتطورات السوق الحالية من خلال تحليل الفوركس الذي تم إعداده بـ 35 لغة من قبل المحللين الخبراء</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-computer"></i></span></li>
                                <li class="title">إشارات مجانية<br>
                                    <span class="desc">.قم بتوجيه استثماراتك باستخدام إشارات فوركس بمعدل نجاح بلغ 85٪ تم إعداده بواسطة محللي الخبراء لدينا</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
                                <li class="title">مكافآت عالية<br>
                                    <span class="desc">.مع مكافآت EKOLFX المختلفة والعالية ، أصبح الفوز في الفوركس أسهل كثيرًا</span></li>
                            </ul>
                        </div>
                        <!--.div-->
                    </div>
                    <!--.col-->
                    <div class="homeAdvantagesCol">
                        <div class="fw homeAdvantagesDiv">
                            <ul class="sul">
                                <li class="icon"><span class="iconX"><i class="flaticon-wallet"></i></span></li>
                                <li class="title">! 7/24 معاملات الاستثمار / السحب<br>
                                    <span class="desc">.EKOLFX هي الشركة الوحيدة التي تتلقى أسرع استثمار وترسل أسرع اللقطات على مدار 24/7 في كل بلد ، بما في ذلك عطلة نهاية الأسبوع</span></li>
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
                                        <li class="title">لم تجد الاجابة التي كنت تبحث عنها؟</li>
                                        <li class="desc">سوف نتصل بك؟</li>
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
                                    <li class="subTitle"><span class="subTitleX">أسئلة متكررة</span></li>
                                </ul>

                            </div>
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">كيف يمكنني فتح حساب فوركس مباشر؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <div class="fw faqListTabContent" style="display: none;">
                                    <div class="fw simpleContent">
                                        <p>.يمكنك أن تطلب من ممثلي عملائنا الاتصال بك عن طريق ملء نموذج "فتح حساب فوركس حقيقي" أو الاتصال بالدعم المباشر لفتح حسابك</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">كيف يمكنني فتح حساب فوركس تجريبي؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent" style="display: none;">
                                    <div class="fw simpleContent">
                                        <p>يمكنك ملء نموذج حساب فوركس التجريبي الخاص بنا لجعل ممثلي عملائنا يتصلون بك أو الاتصال بالدعم المباشر لفتح حسابك.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">أريد نقل حسابي إلى EkolFX. كيف أفعل ذلك؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p></p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">كيف يمكنني عمل إيداع؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>يمكنك إيداع 24/7 في EKOL Forex باستخدام أكثر من 70 طريقة دفع.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">كيف يمكنني سحب المال؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>تجربة تجربة الانسحاب 24/7 في Ekol Fx. يمكنك بسهولة تقديم طلب سحب من لوحة العملاء بلمسة زر واحدة.</p>
                                    </div>
                                    <!--.content-->
                                </div>
                                <!--.content-->
                            </div>
                            <!--.tab-->
                            <div class="fw faqListTab">
                                <div class="fw faqListTabTitle"><span class="icon"><i class="flaticon-question"></i></span> <span class="title">ما المنصات التي يمكنني التداول عليها؟</span> <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span></div>
                                <!--.faqListTabTitle-->
                                <div class="fw faqListTabContent">
                                    <div class="fw simpleContent">
                                        <p>.موقع Ekol Forex متوافق مع جميع المنصات. يمكنك بدء معاملاتنا مباشرة من جهاز الكمبيوتر أو الجهاز اللوحي أو تطبيق الهاتف المحمول</p>
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
                                        <span style="font-size: 11px;font-weight: 600; margin:10px;"> إذهب إلى الصفحة الرئيسية للموقع</span> <i class="fas fa-arrow-right" style=" font-size: 10px;"></i> </a></li>

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
                            <li><a onclick="gotoCallme()" href="JavaScript:Void(0);"><i class="flaticon-call-center-worker-with-headset"></i><span>سوف نتصل بك</span></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=0035796769805"><i class="flaticon-whatsapp-logo"></i><span>Whatsapp</span></a></li>

                            <li><a onclick="gotoForm()" href="JavaScript:Void(0);"><i class="flaticon-headset"></i><span>اشترك في الفوركس</span></a></li>

                        </ul>
                    </div>
                    <!--.footerTopMenu-->

                    <div class="fw footerRisk" style=" margin-bottom:35px; ">
                        <i class="flaticon-info onlyBlue" style="background-image: linear-gradient(90deg,#0096ec 0,#118ed6 100%)!important;"></i>
                        <span class="title">

                            @if(app()->getLocale() == 'tr')
                            جميع المحتويات والخدمات على هذا الموقع تخضع لحقوق الطبع والنشر وجميع الحقوق تنتمي إلى "Ekol Global Markets Limited". يجب الموافقة على استخدام أي من محتويات هذا الموقع من قبل الممثل الرسمي لـ "Ekol Global Markets Limited" وأن يشمل اتصال الإنترنت ذي الصلة بالمصدر الأصلي. لا يحق لشركات الطرف الثالث التابعة لشركة üçüncü Online - الوساطة المالية أو Forex Online - Forex - استخدام المحتوى الموجود على هذا الموقع والمقالات المعدلة الخاصة بـ "Ekol Global Markets Limited". في حالة التعدي ، سيتم محاكمتهم بموجب قانون حماية الملكية الفكرية.
                            <br /><br />
                            Ekol Global Markets Limited - تحت إشراف IFMRRC  (رقم الترخيص  <a href="https://ifmrrc.com/index.php?page=ekol_global_markets_ltd" target="_blank"> TSRF RU 0395 AA V0136 </a> )
                            <br />
                        يتم توفير جميع أنشطة الوساطة على هذا الموقع من قبل Ekol Global Markets Limited. الخدمة غير متوفرة لسكان ألمانيا والولايات المتحدة الأمريكية.
                            @else
                            All materials and services provided on this site are subject to copyright and belong to "Ekol Global Markets Limited". Any use of materials of this website must be approved by an official representative of "Ekol Global Markets Limited", and contain a link to the original resource. Any third-party companies of "Online broker" or "Online trading" type, do not have the right to use materials of this website as well as any distorted writing of "Ekol Global Markets Limited". In case of violation, they will be prosecuted in accordance with legislation of the intellectual property protection.
                            <br /><br />
                            Ekol Global Markets Limited - تحت إشراف IFMRRC  (رقم الترخيص <a href="https://ifmrrc.com/index.php?page=ekol_global_markets_ltd" target="_blank"> TSRF RU 0395 AA V0136 </a> )
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
                <span class="title">Copyright 2019 - {{CoInfo('Name')}} فتح حساب فوركس تجريبي V1</span>
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

        $('.txtPhone').val('').trigger('change');

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