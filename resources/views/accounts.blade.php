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
                            <h1 class="titleX">{{LangValue('accounts_h1')}}</h1>
                        </li>
                        <li class="desc">{{LangValue('accounts_h2')}}</li>
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
                                                <li style='width:12%'><span class="title">*</span></li>
                                                @foreach($data['instrumentGroups'] as $index => $rows)
                                                @if(!($rows['Id'] > 8 && $rows['Id'] < 11 )) <li style="width:10%"><span class="title">
                                                        {!!preg_replace('/ /', "<br />", $rows['Title'], 1)!!}
                                                    </span></li>
                                                    @endif

                                                    @endforeach
                                                    <li style="width:10%"><span class="title">                                                    
                                                    {{LangValue('accounts_header_others')}}
                                                        </span></li>
                                                        <li style="width:8%"><span class="title">                                                        
                                                        {!!preg_replace('/ /', "<br />", LangValue('accounts_spread_type'), 1)!!}                                                        
</span>
                                                        <li>

                                            </ul>

                                            <ul class="bot firstRowBot" >
                                            <li style='width:12%'><span class="title"> {{Str::upper(LangValue('accounts_workinghours'))}} </span></li>
                                            <li style='width:10%'><span class="title">00:00- 23:59</span></li>
                                            <li style='width:10%'><span class="title">01:00-23.58</span></li>
                                                <li style='width:10%' ><span class="title">7/24</span></li>
                                                <li style='width:10%'><span class="title">16:30-22:59</span></li>
                                                <li style='width:10%' ><span class="title">10:00-18:29</span></li>
                                                <li style='width:10%'><span class="title">04:30-10:59</span></li>
                                                <li style='width:10%' ><span class="title">10:00-18:29</span></li>
                                                <li style='width:10%' ><span class="title">01:05-23:55 *</span></li>                                           
                                                <li style='width:8%' ><span class="title">-</span></li>                                           
                                             </ul>  

                                            <ul class="bot">
                                                <li style='width:12%' ><span class="title"> <div class="accountsTableBorder standart"> STANDART</div> STANDART {{Str::upper(LangValue('accounts_non_swap'))}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>
                                            </ul>

                                            <ul class="bot">
                                                <li style='width:12%'><span class="title"><div class="accountsTableBorder">  SILVER </div> SILVER {{Str::upper(LangValue('accounts_non_swap'))}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">8 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>
                                           </ul>


                                            <ul class="bot">
                                                <li style='width:12%'><span class="title">  <div class="accountsTableBorder yellow">GOLD </div> GOLD {{Str::upper(LangValue('accounts_non_swap'))}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">6 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>
                                            </ul>

                                            <ul class="bot">
                                            <li style='width:12%'><span class="title">  <div class="accountsTableBorder" platinium>  PLATINIUM </div>  PLATINIUM {{Str::upper(LangValue('accounts_non_swap'))}} </span></li>
                                            <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">4 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>                                           
                                             </ul>     

                                             <ul class="bot">
                                            <li style='width:12%'><span class="title">  <div class="accountsTableBorder green">  VIP </div>  VIP {{Str::upper(LangValue('accounts_non_swap'))}} </span></li>
                                            <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">2 $ {{LangValue('accounts_commission')}}</span></li>    
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>                                       
                                             </ul>   
                                             

                                             <ul class="bot">
                                            <li style='width:12%'><span class="title">  <div class="accountsTableBorder">  ECN </div>  </span></li>
                                            <li style='width:10%' ><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' ><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' ><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%'><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' ><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' ><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%'><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%'><span class="title">1 $ {{LangValue('accounts_commission')}}</span></li>                                           
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">3-4</span></li>
                                            </ul>   
                                             

                                             <ul class="bot">
                                            <li style='width:12%'><span class="title">  
                                                <div class="accountsTableBorder small">  SMALL </div>  SMALL {{Str::upper(LangValue('accounts_non_swap'))}} </span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">{{LangValue('accounts_no_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">{{LangValue('accounts_no_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>
                                                <li style='width:10%' class="accountsTabletitle"><span class="title">10 $ {{LangValue('accounts_commission')}}</span></li>                                           
                                                <li style='width:8%' class="accountsTabletitle"><span class="title">1.2</span></li>
                                            </ul>                                                


                                             <ul class="bot">


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