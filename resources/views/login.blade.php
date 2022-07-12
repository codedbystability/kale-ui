@extends('app')

@section('header')
<title>{{$data['SefContent']['SeoTitle']}} {{CoInfo('SeosubFix')}}</title>
<meta name="description" content="{{$data['SefContent']['SeoDesc']}}" />
@endsection

@section('main')

<div class="container">
    <div class="loginBox wow fadeInUp" style="    margin-top: 80px;">
      <div class="fw loginBoxDiv">
        <div class="fw loginBoxForm">
          <div class="fw loginPageTitle">
            <ul class="sul">
              <li class="img"><img src="{{asset('assets/images/login-img.png')}}" /></li>
              <li class="title">{{LangValue('login-h1')}}</li>
            </ul>
          </div><!--.loginPageTitle-->
          <form id="loginForm" method="POST" action="https://cp.frxcrm.com/api/login">
          <div class="fw loginPageForm">
            <div class="fw loginPageFormTab">
              <div class="fw loginPageFormTabBox BoxTop10">
                <span class="icon"><i class="flaticon-arroba"></i></span>
                <span class="title">{{LangValue('login-input1-t')}}</span>
                <input name="username" type="text" class="loginFormText" placeholder="{{LangValue('login-input1-v')}}" />
              </div><!--.tabBox-->
            </div><!--.tab-->
            <div class="fw loginPageFormTab">
              <div class="fw loginPageFormTabBox BoxTop10">
                <span class="icon"><i class="flaticon-key"></i></span>
                <span class="title">{{LangValue('login-input2-t')}}</span>
                <input name="password" type="password" class="loginFormText" placeholder="{{LangValue('login-input2-v')}}" />
              </div><!--.tabBox-->
            </div><!--.tab-->
            <div class="fw loginPageFormTab">
              <div class="fw loginPageCheckbox">
                <ul>
                  <li><span class="checkbox-icon"><input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
                    <label for="checkboxG1" class="css-label"></label></span>
                    <span class="title">{{LangValue('login-remember')}}</span>
                    <a href="https://cp.frxcrm.com/lostpassword" class="forget">{{LangValue('login-forgot')}} </a></li>
                </ul>
              </div><!--.checkbox-->
            </div><!--.tab-->
            <div class="fw loginPageFormTab">
              <div class="fw loginPageFormSubmit">
              <button type="submit" class="simpleButton xLargeX">{{LangValue('login-btn')}} <i class="flaticon-arrow-pointing-to-right"></i></a>
              </div><!--.submit-->
            </div><!--.tab-->
            <div class="fw loginPageFormTab">
              <div class="fw loginPageFormSubmit">
                <a href="{{LaravelLocalization::localizeURL('/register') }}" class="simpleButton orangeX smallX">{{LangValue('hesap_ac')}} <i class="flaticon-arrow-pointing-to-right"></i></a>
              </div><!--.submit-->
            </div><!--.tab-->
          </div><!--.loginPageForm-->
          </form>
        </div><!--.form-->
        <div class="fw loginBoxSocial">
          <ul>
            <li class="facebook"><a href="{{CoInfo('Facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
            <li class="instagram"><a href="{{CoInfo('Instagram')}}"><i class="fab fa-instagram"></i></a></li>
            <li class="twitter"><a href="{{CoInfo('Twitter')}}"><i class="fab fa-twitter"></i></a></li>
            <li class="youtube"><a href="{{CoInfo('Youtube')}}"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div><!--.social-->
      </div><!--.loginBoxDiv-->
    </div><!--.loginBox-->
  </div><!--.container-->
  
@endsection



@section('footer')

@endsection

