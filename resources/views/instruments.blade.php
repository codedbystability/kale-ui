@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
<style>
.basicTable>ul>li.title {
    width: 40%;
}
.basicTable>ul>li.val {
    width: 20%;
}
</style>
@endsection

@section('main')

<div class="fw pageHeaderAll cover wow fadeInUp" style="background-image:url({{asset('assets/images/page-bg.png')}})">
  <div class="container">
    <div class="fw otherPageHeader">
      <div class="otherPageHeaderLeft">
        <div class="fw pageHeader">
          <ul class="sul">
            <li class="icon"><span class="iconX"><i class="flaticon-investment"></i></span></li>
            <li class="title"><h1 class="titleX">{{$data['SefContent']['Title']}}</h1></li>
            <li class="desc">{{$data['SefContent']['Title2']}}</li>
          </ul>
        </div><!--.pageHeader-->
      </div><!--.left-->
      <div class="otherPageHeaderRight">
        <div class="pageHeaderCallMe">
          <a href="{{LaravelLocalization::localizeURL('/callme') }}">
            <span class="title">{{Str::upper(LangValue('subpage_topright_call1'))}}</span>
            <span class="desc">{{Str::upper(LangValue('subpage_topright_call2'))}}</span>
            <img src="{{asset('assets/images/header-callme.png')}}" />
          </a>
        </div><!--.callme-->
      </div><!--.right-->
    </div><!--.otherPageHeader-->
  </div><!--.container-->
</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw pageAll">

    <div class="fw page">
      <div class="pageLeft wow fadeInLeft">
        <div class="fw pageLeftBox">

        {!!$data['SefContent']['ShortDesc']!!}


        <div class="fw simpleContentTitle">
            <h2 class="title">{{LangValue('livefeed_title')}}</h2>
          </div><!--.title-->
          <div class="fw basicTableFirst">
            <div class="fw basicTable">
              <ul class="top">
              @if($data['agent']->isMobile())
              <li class="title"><span class="titleX">{{LangValue('swap_table_Symbol')}}</span></li>
              @else
              <li class="title"><span class="titleX">{{LangValue('swap_table_Description')}}</span></li>
              <li class="val"><span class="titleX">{{LangValue('swap_table_Symbol')}}</span></li>
              @endif
                               
                <li class="val"><span class="titleX">{{LangValue('index_c3_1_tablehead2')}}</span></li>
                <li class="val"><span class="titleX">{{LangValue('index_c3_1_tablehead3')}}</span></li>                
         
      
              </ul>
              <div  class="fw basicTable" style="max-height: 750px;    overflow-y: auto;">
              @foreach($data['subData'] as $subindex => $row)
                  
              <ul class="bot">
              @if($data['agent']->isMobile())
              <li class="title"><span class="titleX liveCurrency" id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Symbol']}}</span></li>
              @else
              <li class="title"><span class="titleX liveCurrency"  id="LiSpan_Icon_{{$row['Symbol']}}">{{$row['Value']}}</span></li>               
              <li class="val"><span class="titleX">{{$row['Symbol']}}</span></li>
              @endif

                <li class="val"><span class="titleX" id="LiSpan_BID_{{$row['Symbol']}}" >-</span></li>                
                <li class="val"><span class="titleX" id="LiSpan_ASK_{{$row['Symbol']}}" >-</span></li>
           
              </ul>
              @endforeach

              </div>
              
            </div><!--.basicTable-->
          </div><!--.overflowFirst-->
          <div class="fw simpleContentTitle">
            <h2 class="title">{{LangValue('instrument_commision_h1')}}</h2>
          </div><!--.title-->
          <div class="fw simpleKomisyon">
            <div class="simpleKomisyonRow">
              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox standart">
                  <ul class="sul">
                    <li class="title">Standart</li>
                    <li class="count">$ 10.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->
              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox ">
                  <ul class="sul">
                    <li class="title">Silver</li>
                    <li class="count">$ 8.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->
              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox yellow">
                  <ul class="sul">
                    <li class="title">Gold</li>
                    <li class="count">$ 6.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->
              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox platinium">
                  <ul class="sul">
                    <li class="title">Platinium</li>
                    <li class="count">$ 4.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->

              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox green">
                  <ul class="sul">
                    <li class="title">VIP</li>
                    <li class="count">$ 2.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->

              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox blue">
                  <ul class="sul">
                    <li class="title">ECN</li>
                    <li class="count">$ 1.00</li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->
              

              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox small">
                  <ul class="sul">
                    <li class="title">Small</li>
                    <li class="count">
                      @if($data['SefContent']['Id'] ==  7)
                      $ 0.00
                      @else
                      $ 10.00
                      @endif
                    </li>
                  </ul>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->              

                            
              <div class="simpleKomisyonCol">
                <div class="fw simpleKomisyonBox time">
                  <a href="{{LaravelLocalization::localizeURL('/accounts') }}">
                  <ul class="sul">
                    <li class="title">{{LangValue('instrument_all_accountsbtn')}}</li>
                    <li class="count">{{LangValue('instrument_all_accountsbtn2')}}</li>
                  </ul>
                  </a>
                </div><!--.simpleKomisyonBox-->
              </div><!--.col-->  
            </div><!--.row-->
          </div><!--.komisyonOranlari-->

        </div><!--.left-->
      </div><!--.pageLeft-->
      <div class="pageRight wow fadeInRight">
        <div class="fw pageRightBox">
          <div class="fw simpleContentTitle">
            <h3 class="title">{{LangValue('rightmenu_title')}}</h3>
          </div><!--.title-->
          <div class="fw sidebarMenu">
            <nav>
              <ul>
               @foreach($data['instrumentsList'] as $row) 
                <li><a href="{{LaravelLocalization::localizeURL($row['SeoTags']) }}">{{$row['Title']}}</a></li>
                @endforeach                                 
              </ul>
            </nav>
          </div><!--.sidebarMenu-->
          <div class="fw sidebarDemo cover" style="background-image:url({{asset('assets/images/sidebar-demo.png')}})">
            <div class="fw sidebarDemoTitle">
              <span class="title">{{Str::upper(LangValue('subpage_right_form_l1'))}}</span>
              <span class="desc">{{Str::upper(LangValue('register_tab1_h1'))}}</span>
            </div><!--.title-->
            <form id="registerFormDemo" method="POST" action="#">
            <div class="fw sidebarDemoBox">
              <ul>
                <li>
                  <div class="fw homeContactInput smallX BoxTop10">
                    <span class="icon"><i class="flaticon-user-2"></i></span>
                    <input name="name" type="text" class="contactText" placeholder="{{LangValue('slider_form_name')}}" />
                  </div><!--.input-->
                </li>
                <li>
                  <div class="fw homeContactInput smallX BoxTop10  js-mask-tel">
                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                    <input  id="txtPhone1"   name="phone" type="text" class="contactText txtPhone" placeholder="{{LangValue('slider_form_phone')}}" />
                  </div><!--.input-->
                </li>
                <li>
                  <div class="fw homeContactInput smallX BoxTop10">
                    <span class="icon"><i class="flaticon-arroba"></i></span>
                    <input name="email" type="text" class="contactText" placeholder="{{LangValue('slider_form_email')}}" />
                    <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                  </div><!--.input-->
                </li>
                <li><button id="registerFormDemoBtn" type="submit" class="sidebarDemoSubmit smallX">{{Str::upper(LangValue('register_tab1_btn'))}}</button></li>
              </ul>
            </div><!--.box-->
            </form>
          </div><!--.sidebarDemo-->
          <div class="fw sidebarPromosyon">
            <a href="{{LaravelLocalization::localizeURL('/promotions') }}" class="cover" style="background-image:url({{asset('assets/images/promosyon.png')}})">
              <ul class="sul">
                <li class="icon"><i class="flaticon-coin"></i></li>
                <li class="title">EKOLFX</li>
                <li class="desc">{{Str::upper(LangValue('rightmenu_promotions'))}}</li>
              </ul>
            </a>
          </div><!--.sidebarPromosyon-->
          <div class="fw sidebarOtherMenu">
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-pulley-1"></i></span></li>
                <li class="title">{{LangValue('index_c8_sub2_t')}}</li>
                <li class="more"><a href="{{LaravelLocalization::localizeURL('/callme') }}">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>
                <li class="title">{{LangValue('index_c8_sub3_t')}}</li>
                <li class="more"><a href="{{LaravelLocalization::localizeURL('/callme') }}">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>
                <li class="title">{{LangValue('index_c8_sub4_t')}}</li>
                <li class="more"><a href="{{LaravelLocalization::localizeURL('/callme') }}">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>
                <li class="title">{{LangValue('index_c8_sub5_t')}}</li>
                <li class="more"><a href="{{LaravelLocalization::localizeURL('/callme') }}">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
                <li class="title">{{LangValue('index_c8_sub6_t')}}</li>
                <li class="more"><a href="{{LaravelLocalization::localizeURL('/callme') }}">{{Str::upper(LangValue('rightmenu_moreinfo'))}}</a></li>
              </ul>
            </div><!--.tab-->
          </div><!--.sidebarOtherMenu-->
        </div><!--.pageRight-->
      </div><!--.pageRight-->
    </div><!--.page-->


  </div><!--.pageAll-->
</div><!--.container-->
@endsection



@section('footer')

<script>
function UpdateSpreadData() {

axios({ method: 'get', url: '/spreadData'})
      .then(function (response) {
      
        $lines = "";
        for (i = 0; i < response.data.length; i++) { 
          $row = response.data[i];         
          $class = "down" ;
          $class2 = "red" ;

          if($row['DIRECTION'] == 1)
          {
          $class = "up" ;
          $class2 = "green";
          } 
          var newsymbol = $row['SYMBOL'].replace('&','');
          //TopbarUpdate

          try {
            
          $("#LiSpan_BID_"+newsymbol).html($row['BID'] );
          $("#LiSpan_ASK_"+newsymbol).html($row['ASK'] );
          $("#LiSpan_LOW_"+newsymbol).html($row['LOW'] );
          $("#LiSpan_HIGH_"+newsymbol).html($row['HIGH'] );
          
          
          if ($row['SPREAD'] == 0) {
            var bid = parseFloat($row['BID'].replace(".","").replace(",","."));
            var ask = parseFloat($row['ASK'].replace(".","").replace(",","."));
            var spread =(ask-bid).toFixed(6);
            $("#LiSpan_SPREAD_" + newsymbol).html(spread);
          } else {
            $("#LiSpan_SPREAD_" + newsymbol).html($row['SPREAD']);
          }

          $("#LiSpan_MODIFY_TIME_"+newsymbol).html($row['MODIFY_TIME'] );


          $("#LiSpan_Icon_"+newsymbol).removeClass('up');
          $("#LiSpan_Icon_"+newsymbol).removeClass('down');
          $("#LiSpan_Icon_"+newsymbol).addClass($class);


          $("#LiSpan_BID_"+newsymbol).removeClass('red');
          $("#LiSpan_BID_"+newsymbol).removeClass('green');
          $("#LiSpan_BID_"+newsymbol).addClass($class2);

          $("#LiSpan_ASK_"+newsymbol).removeClass('red');
          $("#LiSpan_ASK_"+newsymbol).removeClass('green');
          $("#LiSpan_ASK_"+newsymbol).addClass($class2);
          } catch (error) {
            
          } 



        }
      })
      .catch(function (error) {
        console.log('e:', error)

      })
  
}
UpdateSpreadData();
$(document).ready(function(){
  setInterval(() => {
    UpdateSpreadData();
				}, 30000);
});

</script>

<script src="{{asset('assets/js/jquery.inputmask.js')}}"></script>
 <script src="{{asset('assets/js/jquery.inputmask-multi.js')}}"></script>

<script src="{{asset('assets/js/mask-tel.js')}}"></script>

@endsection