@extends('app')



@section('header')

<title>Christmas Tatil Duyurusu {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />

@endsection



@section('main')



<div class="fw pageHeaderAll cover wow fadeInUp" style="background-image:url({{asset('assets/images/page-bg.png')}})">
    <div class="container">
        <div class="fw otherPageHeader">
            <div class="otherPageHeaderLeft">
                <div class="fw pageHeader">
                    <ul class="sul">
                        <li class="icon"><span class="iconX"><i class="flaticon-investment"></i></span></li>
                        <li class="title">
                            <h1 class="titleX">Christmas Tatil Duyurusu </h1>
                        </li>
                        <li class="desc">
                        Chistmas tatili dolayısı ile  24 Aralık - 2 Ocak Tarihleri arasında enstrumanların işlem saatleri aşagıdaki gibidir. 
                  

                        </li>
                    </ul>
                </div>
                <!--.pageHeader-->
            </div>
            <!--.left-->
            <div class="otherPageHeaderRight">
                <div class="pageHeaderCallMe">
                    <a href="{{LaravelLocalization::localizeURL('/callme') }}">
                        <span class="title">{{Str::upper(LangValue('subpage_topright_call1'))}}</span>
                        <span class="desc">{{Str::upper(LangValue('subpage_topright_call2'))}}</span>
                        <img src="{{asset('assets/images/header-callme.png')}}" />
                    </a>
                </div>
                <!--.callme-->
            </div>
            <!--.right-->
        </div>
        <!--.otherPageHeader-->
    </div>
    <!--.container-->
</div>
<!--.pageHeaderAll-->


<!--.pageHeaderAll-->



<div class="container">
    <div class="fw pageAll">

        <div class="fw page full" style="border-radius: 12px 12px 0px 0px;">

            <div class="fw spreadOranlari bigSpreadOranlari">

                <div class="fw homeSpreadBox wow fadeInUp">

                    <div class="fw homeStatsTable">


                        <div class="tab-content">

                            <div role="tabpanel" class='tab-pane fade in active'>

                                <div class="fw homeStatsTableBot">

                                    <div class="fw simpleStatsTable overflowFirst">

                                        <div class="fw simpleStatsTableDiv overflowDiv">
                                            <ul class="top" style="border-radius: 10px 10px 0px 0px;">
                                               
                                                    <li style="width:14%"><span class="title">Ürünler</span></li>
                                                    <li style="width:11%"><span class="title">24 Aralık</span><li>
                                                    <li style="width:11%"><span class="title">25 Aralık</span><li>
                                                    <li style="width:11%"><span class="title">26 Aralık</span><li>
                                                    <li style="width:11%"><span class="title">27 Aralık</span><li>
                                                    <li style="width:11%"><span class="title">31 Aralık</span><li>
                                                    <li style="width:11%"><span class="title">01 Ocak</span><li>
                                                    <li style="width:11%"><span class="title">02 Ocak</span><li>


                                            </ul>

                                            <ul class="bot firstRowBot" >
                                            <li style='width:100%'><span class="title"> GMT +3</span></li>
                                            
                                             </ul>  

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">Forex</span></li>
                                            <li style="width:11%"><span class="title">Normal Kapanış</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 01:00</span><li>
                                            </ul>

                                          
                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">Metal</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:45</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 02:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 02:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">DAXEUR</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:16 - Erken Kapanış 24:00</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 02:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">F40EUR</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 16:05</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 16:05</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">FTSGBP</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 15:50</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:00</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 15:50</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">ESXEUR</span></li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">IBXEUR</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 16:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 16:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">NDXUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:15</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">DJIUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:15</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">SPXUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:15</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            </ul>


                                     

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">HSIHKD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 07:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title"> Açılış 04:15</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 07:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:15</span><li>
                                            </ul>


                                          			

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">NIKJPY</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:15</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 09:00</span><li>
                                            </ul>




                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">BRNUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 22:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:05</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış  23:00	</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 04:05</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">WTIUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:45</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde	</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">CUCUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:45</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde	</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">NGCUSD</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:45</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde	</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 01:00</span><li>
                                            <li style="width:11%"><span class="title">Açılış 08:00</span><li>
                                            </ul>


                                             <ul class="bot">
                                            <li style="width:14%"><span class="title">NYSE Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde	</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">Nasdaq Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken kapanış 21:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>




                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">Nasdaq Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 21:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken kapanış 21:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> SIX Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            </ul>

                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> BM Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 16:00</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>



                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> EURONEXT Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Açılış 12:45 - Erken Kapanış 16:05</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Açılış 12:45 - Erken Kapanış 16:05</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> LSE Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 15:35</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 15:35</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> XETRA Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>



                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> MICEX Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title"> HKEX Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 08:55</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Erken Kapanış 08:55</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            </ul>


                                            <ul class="bot">
                                            <li style="width:14%"><span class="title">TSE Hisseleri</span></li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Normal Saatinde</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            <li style="width:11%"><span class="title">Kapalı</span><li>
                                            </ul>

                                        </div>

                                        <!--.div-->

                                    </div>

                                    <!--.table-->

                                </div>

                                <!--.bot-->

                            </div>





                        </div>

                        <!--.tab-content-->

                    </div>

                    <!--.table-->

                </div>

                <!--.homeSpreadbox-->

            </div>

            <!--.spreadOranlari-->
        </div>
    </div>


    <div class="fw homePreviewBot blueX" style="margin-top:20px">
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
  </div>
</div>


<!--.container-->



@endsection







@section('footer')



@endsection