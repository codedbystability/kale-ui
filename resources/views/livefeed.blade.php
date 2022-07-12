@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
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
              <h1 class="titleX">{{LangValue('livefeed_h1')}}</h1>

            </li>
            <li class="desc">{{LangValue('livefeed_h2')}}</li>
          </ul>
        </div>
        <!--.pageHeader-->
      </div>
      <!--.left-->
      <div class="otherPageHeaderRight">
        <div class="fw sidebarCallMe cover headerSidebarCallMe" style="background-image:url({{asset('assets/images/sidebar-callme.png')}})">
          <ul class="sul">
            <li class="title">{{Str::upper(LangValue('spread_call_me_l1'))}}</li>
            <li class="bigTitle">{{Str::upper(LangValue('spread_call_me_l2'))}}</li>
            <li class="lastTitle">{{Str::upper(LangValue('spread_call_me_l3'))}}</li>
            <li class="link"><a href="{{LaravelLocalization::localizeURL('/callme') }}" class="simpleButton darkBlueX"><strong>{{Str::upper(LangValue('spread_call_me_btn'))}}</strong> <i class="flaticon-call-center-worker-with-headset"></i></a></li>
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
                  @foreach($rows['SwapData'] as $subindex => $row)

                  
              

                  <ul class="bot">

                    @if($data['agent']->isMobile())
                    <li class="currency" style='width:10%'><span class="title liveCurrency" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
                    <li style="width:10%"><span class="title" id="LiSpan_BID_{{$row['Symbol']}}">-</span></li>
                    <li style="width:10%"><span class="title" id="LiSpan_SPREAD_{{$row['Symbol']}}">-</span></li>

                    <li style='width:15%' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>
                    <li style="width:7%"><span class="title" id="LiSpan_ASK_{{$row['Symbol']}}">-</span></li>
                    <li style="width:7%"><span class="title" id="LiSpan_LOW_{{$row['Symbol']}}">-</span></li>
                    <li style="width:7%"><span class="title" id="LiSpan_HIGH_{{$row['Symbol']}}">-</span></li>
                    <li style="width:12%"><span class="title" id="LiSpan_MODIFY_TIME_{{$row['Symbol']}}">- </span></li>

                    @else
                    <li class="currency" style='width:15%'><span class="title liveCurrency" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
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

<script>
  function UpdateSpreadData() {

    axios({
        method: 'get',
        url: '/spreadData'
      })
      .then(function(response) {

        $lines = "";
        for (i = 0; i < response.data.length; i++) {
          $row = response.data[i];
          $class = "down";
          $class2 = "red";

          if ($row['DIRECTION'] == 1) {
            $class = "up";
            $class2 = "green";
          }
          var newsymbol = $row['SYMBOL'].replace('&', '');
          //TopbarUpdate
          $("#LiSpan_BID_" + newsymbol).html($row['BID']);
          $("#LiSpan_ASK_" + newsymbol).html($row['ASK']);
          $("#LiSpan_LOW_" + newsymbol).html($row['LOW']);
          $("#LiSpan_HIGH_" + newsymbol).html($row['HIGH']);

          if ($row['SPREAD'] == 0) {
            var bid = parseFloat($row['BID'].replace(".","").replace(",","."));
            var ask = parseFloat($row['ASK'].replace(".","").replace(",","."));
            var spread =(ask-bid).toFixed(6);
            $("#LiSpan_SPREAD_" + newsymbol).html(spread);
          } else {
            $("#LiSpan_SPREAD_" + newsymbol).html($row['SPREAD']);
          }
          

          $("#LiSpan_MODIFY_TIME_" + newsymbol).html($row['MODIFY_TIME']);


          $("#LiSpan_Icon_" + newsymbol).removeClass('up');
          $("#LiSpan_Icon_" + newsymbol).removeClass('down');
          $("#LiSpan_Icon_" + newsymbol).addClass($class);


          $("#LiSpan_BID_" + newsymbol).removeClass('red');
          $("#LiSpan_BID_" + newsymbol).removeClass('green');
          $("#LiSpan_BID_" + newsymbol).addClass($class2);

          $("#LiSpan_ASK_" + newsymbol).removeClass('red');
          $("#LiSpan_ASK_" + newsymbol).removeClass('green');
          $("#LiSpan_ASK_" + newsymbol).addClass($class2);


        }
      })
      .catch(function(error) {
        console.log('e:', error)

      })

  }
  UpdateSpreadData();
  $(document).ready(function() {
    setInterval(() => {
      UpdateSpreadData();
    }, 30000);
  });
</script>
@endsection