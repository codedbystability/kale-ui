@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
@endsection

@section('main')


<div class="fw pageHeaderAll cover wow fadeInUp smallX" style="background-image:url({{asset('assets/images/page-bg.png')}})">
  <div class="container">
    <div class="fw pageHeader">
      <ul class="sul">
        <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
        <li class="title"><h1 class="titleX">{{LangValue('subpage_promotion_h1')}} </h1></li>
            <li class="desc">{{LangValue('subpage_promotion_h2')}}</li>

          <li class="button">
          <a href="{{LaravelLocalization::localizeURL('/demo') }}" class="simpleButton orangeX"> {{Str::upper(LangValue('register_tab1'))}}<i class="flaticon-window"></i></a>
          <a href="{{LaravelLocalization::localizeURL('/register') }}" class="simpleButton"> {{Str::upper(LangValue('register_tab2'))}}<i class="flaticon-add"></i></a>
          </li>
        </li>
      </ul>
    </div><!--.pageHeader-->
  </div><!--.container-->
</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw promotion">
    <div class="promotionRow">

    @foreach($data['promotionList'] as $row) 
             
    <div class="promotionCol">
        <div class="fw promotionBox wow zoomIn">
          <a href="JavaScript:Void(0);" onclick="openModelPopup('pnlPop{{$row['Id']}}')" class="cover" style="background-image:url({{asset('assets/images/p1.png')}})">
            <ul class="sul">
              <li class="discount">{{Str::upper($row['SeoTitle'])}}</li>
              <li class="title"><strong>{{Str::upper($row['SeoDesc'])}}</strong>{{Str::upper($row['SeoTags'])}}</li>
              <li class="more"><span class="moreX">{{Str::upper(LangValue('subpage_instrument_details'))}}</span></li>
            </ul>
          </a>
        </div><!--.box-->
      </div><!--.col-->

    @endforeach 


     

    </div><!--.row-->
  </div><!--.promotion-->
</div><!--.container-->


@foreach($data['promotionList'] as $row) 
          
<div class="modal fade" id="pnlPop{{$row['Id']}}" style="display:none" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog big-modal-dialog" role="document">
    <div class="fw bigModal">
      <span class="bigModalClose" data-dismiss="modal"><i class="flaticon-cancel"></i></span>
      <div class="fw bigModalBox">
        <div class="fw simpleTitle bigModalBoxTitle">
          <ul class="sul">
            <li class="title" id="pnlPopUpContent">  {{$row['Title']}}</li>            
          </ul>
        </div><!--.title-->
        <div class="fw bigModalContent" id="pnlPopUpContent">
        {!!$row['ShortDesc']!!}
      </div><!--.content-->
      </div><!--.bigModalBox-->
    </div><!--.bigModal-->
  </div><!--.modal-dialog-->
</div><!--.modal-->
@endforeach 

@endsection



@section('footer')

<script>
  function openModelPopup(ModelNo) {


    $('#'+ModelNo).modal('show');

  }
  </script>
@endsection

