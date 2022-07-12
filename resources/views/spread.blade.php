@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
<style>
.platformTop>ul>li {
    width: 14.26%;
}


.homeStatsTableTop.spreadTable ul li a {
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 13px;
    color: #fff;
    background: #303547;
    font-weight: 500;
}
.homeStatsTableTop>ul>li:nth-of-type(2n)>a {
    background: #323748;
}

.platformTop>ul>li:nth-of-type(1)>a {
    background: none;
}
.platformTop>ul>li:nth-of-type(2)>a {
    background: none;
}
.platformTop>ul>li.active>a {
    background: #fff!important;
    color: #67708f!important;
}
.simpleStatsTableDiv>ul.top {
    padding: 16px 0px;
}

.homeStatsTableTop>ul>li.active>a {
    background: #67708f!important;
    color: #fff!important;;
}
.firstRowBot {
    background: #67708f!important;
}
</style>

@endsection

@section('main')

<div class="fw pageHeaderAll cover  wow fadeInUp" style="background-image:url({{asset('assets/images/page-bg.png')}})">
  <div class="container">
    <div class="fw otherPageHeader">
      <div class="otherPageHeaderLeft">
        <div class="fw pageHeader">
          <ul class="sul">
            <li class="icon"><span class="iconX"><i class="flaticon-profit"></i></span></li>
            <li class="title">
              <h1 class="titleX">{{LangValue('subpage_spread_h1')}}</h1>

            </li>
            <li class="desc">{{LangValue('subpage_spread_h2')}}</li>
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
    <div class="fw pageAll">

    <div class="fw platformTop">
        <ul role="tablist">
          <li role="presentation" class="active"><a  href="#Standart"  onclick="UpdateSpreadData(1)"  role="tab" data-toggle="tab">Standart</a></li>
          <li role="presentation" ><a href="#Silver"  onclick="UpdateSpreadData(2)" role="tab" data-toggle="tab">Silver</a></li>
          <li role="presentation" ><a href="#Gold"  onclick="UpdateSpreadData(3)" role="tab" data-toggle="tab">Gold</a></li>
          <li role="presentation" ><a href="#Platinium" onclick="UpdateSpreadData(4)" role="tab" data-toggle="tab">Platinium</a></li>
          <li role="presentation" ><a href="#VIP" onclick="UpdateSpreadData(5)" role="tab" data-toggle="tab">VIP</a></li>
          <li role="presentation" ><a href="#ECN"  onclick="UpdateSpreadData(6)" role="tab" data-toggle="tab">ECN</a></li>
          <li role="presentation" ><a href="#Small" onclick="UpdateSpreadData(7)" role="tab" data-toggle="tab">Small</a></li>
        </ul>
      </div><!--.top-->

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
                  <ul class="top firstRowBot" >
                    @if($data['agent']->isMobile())
                    <li style='width:10%'><span class="title">{{LangValue('swap_table_Symbol')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('spread_rawPoint')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('spread_rawPips')}}</span></li>
                    <li style="width:10%"><span class="title">{{LangValue('spread_commission')}}</span></li>
                    <li style='width:15%' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>


                    @else


                    <li style='width:15%' ><span class="title">{{LangValue('swap_table_Symbol')}}</span></li>
                    <li style='width:25%' class="alignLeft"><span class="title">{{LangValue('swap_table_Description')}}</span></li>
                    <li style="width:20%"><span class="title">{{LangValue('spread_rawPoint')}}</span></li>
                    <li style="width:20%"><span class="title">{{LangValue('spread_rawPips')}}</span></li>
                    <li style="width:20%"><span class="title">{{LangValue('spread_commission')}}</span></li>
    


                    @endif






                  </ul>
                  @foreach($rows['SwapData'] as $subindex => $row)
              

                  <ul class="bot">

                    @if($data['agent']->isMobile())
                    <li class="currency" style='width:10%'><span class="title" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
                    <li style="width:10%"><span class="title" id="LiSpan_RawPoints_{{$row['Symbol']}}">-</span></li>
                    <li style="width:10%"><span class="title" id="LiSpan_RawPips_{{$row['Symbol']}}">-</span></li>
                    <li style="width:10%"><span class="title" id="LiSpan_Commission_{{$row['Symbol']}}">-</span></li>

                    <li style='width:15%' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>

 

                    @else
                    <li class="currency" style='width:15%'><span class="title" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
                    <li style='width:25%' class="alignLeft"><span class="title">{{$row['Value']}}</span></li>

                    <li style="width:20%"><span class="title" id="LiSpan_RawPoints_{{$row['Symbol']}}">-</span></li>
                    <li style="width:20%"><span class="title" id="LiSpan_RawPips_{{$row['Symbol']}}">-</span></li>
                    <li style="width:20%"><span class="title" id="LiSpan_Commission_{{$row['Symbol']}}">-</span></li>



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
</div>
<!--.container-->
<div class="fw homePlatformAll" style="padding-bottom:0px;">
  <div class="container">
  <div class="fw" style="margin-top:5px">     
        <li class="button">
          <a href="{{LaravelLocalization::localizeURL('/live') }}" style="margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('livefeed_title')}}</strong><i class="flaticon-left-arrow"></i></a>
          <a href="{{LaravelLocalization::localizeURL('/instruments') }}" style="margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('menu_swap_orani')}}</strong><i class="flaticon-left-arrow"></i></a>
          <a href="{{LaravelLocalization::localizeURL('/spread') }}" style="margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('usertransfer_sub5_2')}}</strong><i class="flaticon-left-arrow"></i></a>
          <a href="{{LaravelLocalization::localizeURL('/accounts') }}" style="margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('menu_hesap_turu')}}</strong><i class="flaticon-left-arrow"></i></a>
          <a href="{{LaravelLocalization::localizeURL('/hours') }}" style="margin: 10px;" class="simpleButton blueX rotate180"><strong>{{LangValue('hours_h1')}}</strong><i class="flaticon-left-arrow"></i></a>
       
         
        </li>      
  </div>
  </div>
</div>



@endsection



@section('footer')

<script>
  function UpdateSpreadData(groupID) {

    axios({
        method: 'get',
        url: '/spreadgroupData/'+groupID
      })
      .then(function(response) {

        $lines = "";
        for (i = 0; i < response.data.length; i++) {
          $row = response.data[i];
       
          var newsymbol = $row['Symbol'].replace('&', '');
     
          $("#LiSpan_RawPoints_" + newsymbol).html($row['RawPoints']);
          $("#LiSpan_RawPips_" + newsymbol).html($row['RawPips']);
          $("#LiSpan_Commission_" + newsymbol).html($row['Commission']);
   

        }

       
      })
      .catch(function(error) {
        console.log('e:', error)

      })

  }
 
  $(document).ready(function() {

    UpdateSpreadData(1);

  });
</script>
@endsection