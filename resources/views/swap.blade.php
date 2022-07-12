@extends('app')



@section('header')

<title>{{$data['SefContent']['SeoTitle']}}  {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />

@endsection



@section('main')



<div class="fw pageHeaderAll cover  smallX wow fadeInUp" style="background-image:url({{asset('assets/images/page-bg.png')}})">

  <div class="container">

    <div class="fw otherPageHeader">

      <div class="otherPageHeaderLeft">

        <div class="fw pageHeader">

          <ul class="sul">

            <li class="icon"><span class="iconX"><i class="flaticon-profit"></i></span></li>

            <li class="title">

              <h1 class="titleX">{{LangValue('subpage_swap_h1')}}</h1>



            </li>

            <li class="desc">{{LangValue('subpage_swap_h2')}}</li>

          </ul>

        </div>

        <!--.pageHeader-->

      </div>

      <!--.left-->

      <div class="otherPageHeaderRight">

        <div class="fw sidebarCallMe cover headerSidebarCallMe" style="background-image:url(assets/images/sidebar-callme.png)">

          <ul class="sul">

            <li class="title">{{Str::upper(LangValue('swap_call_me_l1'))}}</li>

            <li class="bigTitle">{{Str::upper(LangValue('swap_call_me_l2'))}}</li>

            <li class="lastTitle">{{Str::upper(LangValue('swap_call_me_l3'))}}</li>

            <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="simpleButton darkBlue"><strong>{{Str::upper(LangValue('swap_call_me_btn'))}}</strong> <i class="flaticon-call-center-worker-with-headset"></i></a></li>

          </ul>

        </div>

        <!--.callMe-->

      </div>

      <!--.right-->

    </div>

    <!--.otherPageHeader-->

  </div>

  <!--.container-->

</div>

<!--.pageHeaderAll-->



<div class="container">

  <div class="fw spreadOranlari bigSpreadOranlari">

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

                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapShort1'))}}</small>{{LangValue('swap_table_SwapShort2')}}</span></li>

                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapLong1'))}}</small>{{LangValue('swap_table_SwapLong2')}}</span></li>
                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_Swap3day1'))}}</small>{{LangValue('swap_table_Swap3day2')}}</span></li>
                    @endif

                    <li style='width:@if($rows["CID"] == 11) 30% @else 18% @endif' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>

                    <li style="width:8%"><span class="title">{{LangValue('swap_table_Contract')}}</span></li>

                    <li style="width:7%"><span class="title">{{LangValue('swap_table_Tick')}}</span></li>

                    <li style="width:7%"><span class="title">{{LangValue('swap_table_Margin')}}</span></li>

                    @if($rows["CID"] > 11)

                    <li style="width:7%" ><span class="title">{{LangValue('swap_table_Currency')}}</span></li>

                    <li style="width:7%"><span class="title">{{LangValue('swap_table_Exchange')}}</span></li>

                    

                    @endif



                    @if($rows["CID"] < 11) 

                    <li style="width:6%"  class="hasSmall"><span class="title"><small>{{LangValue('swap_table_Sunday1')}}</small>{{LangValue('swap_table_Sunday2')}}</span></li>

                    @endif

             

                    <li style="width:12%"><span class="title">{{LangValue('swap_table_Tradingtime')}}</span></li>


                    @if($rows["CID"] < 11) 

                    <li style="width:6%"  class="hasSmall" ><span class="title"><small>{{LangValue('swap_table_Friday1')}}</small>{{LangValue('swap_table_Friday2')}}</span></li>

                    @endif


                    @if(!$data['agent']->isMobile())

                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapShort1'))}}</small>{{LangValue('swap_table_SwapShort2')}}</span></li>

                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_SwapLong1'))}}</small>{{LangValue('swap_table_SwapLong2')}}</span></li>
                    <li style="width:8%" class="hasSmall"><span class="title"><small>{{Str::upper(LangValue('swap_table_Swap3day1'))}}</small>{{LangValue('swap_table_Swap3day2')}}</span></li>


                    @endif





                  </ul>

                  @foreach($rows['SwapData'] as $subindex => $row)

     
                  <ul class="bot">

                    <li style='width:@if($rows["CID"] == 11) 10% @else 8% @endif'><span class="title green">{{$row['Symbol']}}</span></li>

                    @if($data['agent']->isMobile())

                    <li style="width:8%"><span class="title">{{$row['SwapShort']}}</span></li>

                    <li style="width:8%"><span class="title">{{$row['SwapLong']}}</span></li>

                    <li style="width:8%"><span class="title">{{LangValue('swap_table_Friday2')}}</span></li>
                    @endif



                    <li style='width:@if($rows["CID"] == 11) 30% @else 18% @endif' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>

                    <li style="width:8%"><span class="title">{{$row['ContractSize']}}</span></li>

                    <li style="width:7%"><span class="title">{{$row['TickSize']}}</span></li>

                    <li style="width:7%"><span class="title">{{$row['Margin']}}</span></li>



                    @if($rows["CID"] > 11)

                    <li style="width:7%"><span class="title">{{$row['Currency']}}</span></li>

                    <li style="width:7%"><span class="title">{{$row['Exchange']}}</span></li>                    

                    @endif


                    @if($rows["CID"] < 11) 

                    <li style="width:6%"><span class="title">{{$row['Sunday']}}</span></li>

                    @endif

                    <li style="width:12%"><span class="title">{{$row['Open']}} @if($rows["CID"] == 11) / @else - @endif {{$row['Close']}} </span></li>

                  


                    @if($rows["CID"] < 11) 

                    <li style="width:6%"><span class="title">{{$row['Friday']}}</span></li>

                    @endif



                   

                    @if(!$data['agent']->isMobile())

                    <li style="width:8%"><span class="title">{{$row['SwapShort']}}</span></li>

                    <li style="width:8%"><span class="title">{{$row['SwapLong']}}</span></li>
                    <li style="width:8%"><span class="title">{{LangValue('swap_table_Friday2')}}</span></li>
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

    </div>

    <!--.homeSpreadbox-->

  </div>

  <!--.spreadOranlari-->

</div>

<!--.container-->

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

@endsection







@section('footer')



@endsection