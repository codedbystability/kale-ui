@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
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
                            <h1 class="titleX">{{LangValue('hours_h1')}}</h1>
                        </li>
                        <li class="desc">{{LangValue('hours_h2')}}</li>
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
                                                <li style='width:10%'><span class="title">{{LangValue('hours_table_group')}}</span></li>
                                                <li style="width:25%"><span class="title">{{LangValue('hours_table_symbol')}}</span></li>
                                                <li style="width:11%"><span class="title">{{LangValue('hours_table_tr_open')}}</span><li>
                                                <li style="width:11%"><span class="title">{{LangValue('hours_table_tr_hours')}}</span></li>
                                                <li style="width:11%"><span class="title">{{LangValue('hours_table_tr_close')}}</span><li>
                                                <li style="width:11%"><span class="title">{{LangValue('hours_table_en_hours')}} </span><li>
                                                <li style="width:11%"><span class="title">{{LangValue('hours_table_en_open')}}</span></li>
                                                <li style="width:10%"><span class="title">{{LangValue('hours_table_en_close')}} </span><li>
                                            </ul>

                                            <ul class="bot firstRowBot" style="padding: 10px 0px;" >
                                            <li style='width:32%'><span class="title">-</span></li>
                                            <li style='width: 36%; border-right: 1px solid #67708f;'><span class="title">{{LangValue('hours_gmt3')}}</span></li>
                                            <li style='width:31%'><span class="title">{{LangValue('hours_gmt0')}}</span></li>                                       
                                             </ul>  

                                            <ul class="bot">
                                            <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][0]['Title'] }} </span></li>
                                                <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">{{LangValue('hours_tableAll')}}</span></li>
                                                <li style="width:11%"><span class="title">00:00</span><li>
                                                <li style="width:11%"><span class="title">00:00-23:59</span></li>
                                                <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:59 </span><li>
                                                <li style="width:11%"><span class="title">21:00</span><li>
                                                <li style="width:11%"><span class="title">21:00-20:59</span></li>
                                                <li style="width:10%"><span class="title">20:59</span><li>
                                            </ul>

                                            <ul class="bot">
                                                    <li class="accountsTabletitle" style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][1]['Title'] }}</span></li>
                                                    <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">XAGAUD,XAGEUR, XAGUSD, XAUAUD, XAUCHF, XPTUSD, XAUEUR, XAUGBP, XAUUSD</span></li>
                                                    <li class="accountsTabletitle" style="width:11%"><span class="title">01:00</span><li>
                                                    <li class="accountsTabletitle" style="width:11%"><span class="title">02:00-00:59</span></li>
                                                    <li class="accountsTabletitle" style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:59 </span><li>
                                                    <li class="accountsTabletitle" style="width:11%"><span class="title">22:00</span><li>
                                                    <li class="accountsTabletitle" style="width:11%"><span class="title">22:00-20:59</span></li>
                                                    <li class="accountsTabletitle" style="width:10%"><span class="title">20:59</span><li>
                                           </ul>


                                           <ul class="bot">
                                                <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][1]['Title'] }} </span></li>
                                                <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">XAGCHF,XAGGBP,XPDUSD</span></li>
                                                <li style="width:11%"><span class="title">01:05</span><li>
                                                <li style="width:11%"><span class="title">02:05-00:55</span></li>
                                                <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:55 </span><li>
                                                <li style="width:11%"><span class="title">22:00</span><li>
                                                <li style="width:11%"><span class="title">22:00-20:55</span></li>
                                                <li style="width:10%"><span class="title">20:55</span><li>
                                       </ul>

                                       <ul class="bot">
                                            <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][2]['Title'] }} </span></li>
                                            <li style="width:25% ; border-right: 1px solid #67708f;"><span class="title">F40EUR,SMICHF,ESXEUR</span></li>
                                            <li style="width:11%"><span class="title">10:02</span><li>
                                            <li style="width:11%"><span class="title">10:02-23:55</span></li>
                                            <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:55 </span><li>
                                            <li style="width:11%"><span class="title">07:02</span><li>
                                            <li style="width:11%"><span class="title">07:02-20:55</span></li>
                                            <li style="width:10%"><span class="title">20:55</span><li>
                                   </ul>

                                   <ul class="bot">
                                        <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][2]['Title'] }} </span></li>
                                        <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">IBXEUR</span></li>
                                        <li style="width:11%"><span class="title">11:02</span><li>
                                        <li style="width:11%"><span class="title">11:02-21:55</span></li>
                                        <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 21:55 </span><li>
                                        <li style="width:11%"><span class="title">08:02</span><li>
                                        <li style="width:11%"><span class="title">08:00-18:55</span></li>
                                        <li style="width:10%"><span class="title">18:55</span><li>
                               </ul>

                                     
                                   <ul class="bot">
                                        <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][2]['Title'] }} </span></li>
                                        <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">DJIUSD, NDXUSD, SPXUSD</span></li>
                                        <li style="width:11%"><span class="title">01:00</span><li>
                                        <li style="width:11%"><span class="title">01:00-23:15<br>23:30-23:55</span></li>
                                        <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 00:55 </span><li>
                                        <li style="width:11%"><span class="title">22:00</span><li>
                                        <li style="width:11%"><span class="title">22:05-20:15<br>20:30-20:59</span></li>
                                        <li style="width:10%"><span class="title">20:59</span><li>
                               </ul>    
                                     
                               <ul class="bot">
                                    <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][2]['Title'] }}</span></li>
                                    <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">NIKJPY</span></li>
                                    <li style="width:11%"><span class="title">01:00</span><li>
                                    <li style="width:11%"><span class="title">01:00-23:59</span></li>
                                    <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:59 </span><li>
                                    <li style="width:11%"><span class="title">22:00</span><li>
                                    <li style="width:11%"><span class="title">22:00-20:59</span></li>
                                    <li style="width:10%"><span class="title">20:59</span><li>
                           </ul> 

                           <ul class="bot">
                                    <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][2]['Title'] }}</span></li>
                                    <li style="width:25%;  border-right: 1px solid #67708f;"><span class="title">DAXEUR,FTSGBP</span></li>
                                    <li style="width:11%"><span class="title">01:05</span><li>
                                    <li style="width:11%"><span class="title">02:02-00:15<br> 00:30-00:59</span></li>
                                    <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:59 </span><li>
                                    <li style="width:11%"><span class="title">22:05</span><li>
                                    <li style="width:11%"><span class="title">22:02-20:15<br> 20:30-20:59</span></li>
                                    <li style="width:10%"><span class="title">20:59</span><li>
                           </ul> 
                           



                           <ul class="bot">
                                <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][3]['Title'] }} </span></li>
                                <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">CUCUSD, NGCUSD, WTIUSD</span></li>
                                <li style="width:11%"><span class="title">01:05</span><li>
                                <li style="width:11%"><span class="title">01:05-23:55</span></li>
                                <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 23:55 </span><li>
                                <li style="width:11%"><span class="title">22:05</span><li>
                                <li style="width:11%"><span class="title">22:05-20:55</span></li>
                                <li style="width:10%"><span class="title">20:55</span><li>
                       </ul> 
                       
                       <ul class="bot">
                            <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][3]['Title'] }} </span></li>
                            <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">BRNUSD</span></li>
                            <li style="width:11%"><span class="title">02:05</span><li>
                            <li style="width:11%"><span class="title">03:05-00:55</span></li>
                            <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 00:55 </span><li>
                            <li style="width:11%"><span class="title">02:05</span><li>
                            <li style="width:11%"><span class="title">00:00-21:55</span></li>
                            <li style="width:10%"><span class="title">21:55</span><li>
                   </ul> 

                   <ul class="bot">
                        <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][5]['Title'] }} </span></li>
                        <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">{{LangValue('hours_tableAll')}}</span></li>
                        <li style="width:11%"><span class="title">16:30</span><li>
                        <li style="width:11%"><span class="title">16:30-22:59</span></li>
                        <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 22:59 </span><li>
                        <li style="width:11%"><span class="title">13:30</span><li>
                        <li style="width:11%"><span class="title">13:30-19:59</span></li>
                        <li style="width:10%"><span class="title">19:59</span><li>
               </ul> 

               <ul class="bot">
                    <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][6]['Title'] }} </span></li>
                    <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">{{LangValue('hours_tableAll')}}</span></li>
                    <li style="width:11%"><span class="title">11:00</span><li>
                    <li style="width:11%"><span class="title">11:00-19:29</span></li>
                    <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 19:29 </span><li>
                    <li style="width:11%"><span class="title">08:00</span><li>
                    <li style="width:11%"><span class="title">08:00-16:29</span></li>
                    <li style="width:10%"><span class="title">16:29</span><li>
           </ul> 

           <ul class="bot">
                <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][8]['Title'] }} </span></li>
                <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">{{LangValue('hours_tableAll')}}</span></li>
                <li style="width:11%"><span class="title">10:00</span><li>
                <li style="width:11%"><span class="title">10:00-18:29</span></li>
                <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 18:29 </span><li>
                <li style="width:11%"><span class="title">07:00</span><li>
                <li style="width:11%"><span class="title">07:00-15:29</span></li>
                <li style="width:10%"><span class="title">15:29</span><li>
       </ul> 
       <ul class="bot">
            <li class="accountsTabletitle" style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][7]['Title'] }} </span></li>
            <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">AIA, CHINAMOB, CITIC, CKHUTCHI, CNOOC, HENDERSEN, HKBANKCH, HSBC, LENOVA, PICC, SHENENRG, SHK, TENCENT</span></li>
            <li class="accountsTabletitle" style="width:11%"><span class="title">04:02</span><li>
            <li class="accountsTabletitle" style="width:11%"><span class="title">04:02-10:59</span></li>
            <li class="accountsTabletitle" style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 10:59 </span><li>
            <li class="accountsTabletitle" style="width:11%"><span class="title">01:30</span><li>
            <li class="accountsTabletitle" style="width:11%"><span class="title">01:30-07:59</span></li>
            <li class="accountsTabletitle" style="width:10%"><span class="title">07:59</span><li>
   </ul> 

   <ul class="bot">
        <li class="accountsTabletitle" style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][7]['Title'] }} </span></li>
        <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">CANON, HONDA, JPNTBCO, KDDI, KEYENCE, MAKİTA, MİTSUBIS, MITSUİ, MIZUHO, NISSAN, SEVEN, SOFTBANK, SONY, SUMITOMO, TOSHİBA, TOYOTA</span></li>
        <li class="accountsTabletitle" style="width:11%"><span class="title">03:30</span><li>
        <li class="accountsTabletitle" style="width:11%"><span class="title">03:30-05:59 <br> 06:30-08:59  </span></li>
        <li class="accountsTabletitle" style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 08:59 </span><li>
        <li class="accountsTabletitle" style="width:11%"><span class="title">00:00</span><li>
        <li class="accountsTabletitle" style="width:11%"><span class="title">00:00-02:30 <br>03:30-05:59  </span></li>
        <li class="accountsTabletitle" style="width:10%"><span class="title">05:59</span><li>
</ul> 

<ul class="bot">
        <li style='width:10%' ><span class="title">  {{ $data['instrumentsFull'][4]['Title'] }} </span></li>
        <li style="width:25%; border-right: 1px solid #67708f;"><span class="title">{{LangValue('hours_tableAll')}}</span></li>
        <li style="width:11%"><span class="title">7/24</span><li>
        <li style="width:11%"><span class="title">7/24</span></li>
        <li style="width:11%; border-right: 1px solid #67708f;"><span class="title"> 7/24 </span><li>
        <li style="width:11%"><span class="title">7/24</span><li>
        <li style="width:11%"><span class="title">7/24</span></li>
        <li style="width:10%"><span class="title">7/24</span><li>
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

</div>

<div class="fw homePlatformAll" style="padding-bottom:0px;">
    <div class="container">
    <div class="fw" style="margin-top:5px">     
          <li class="button">
            <a href="{{LaravelLocalization::localizeURL('/live') }}" style="width: 18%;margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('livefeed_title')}}</strong><i class="flaticon-left-arrow"></i></a>
            <a href="{{LaravelLocalization::localizeURL('/instruments') }}" style="width: 18%;margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('menu_swap_orani')}}</strong><i class="flaticon-left-arrow"></i></a>
            <a href="{{LaravelLocalization::localizeURL('/spread') }}" style="width: 18%;margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('usertransfer_sub5_2')}}</strong><i class="flaticon-left-arrow"></i></a>
            <a href="{{LaravelLocalization::localizeURL('/accounts') }}" style="width: 18%;margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('menu_hesap_turu')}}</strong><i class="flaticon-left-arrow"></i></a>
            <a href="{{LaravelLocalization::localizeURL('/hours') }}" style="width: 18%;margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('hours_h1')}}</strong><i class="flaticon-left-arrow"></i></a>
         
           
          </li>      
    </div>
    </div>
  </div>
<!--.container-->



@endsection







@section('footer')



@endsection