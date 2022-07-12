@extends('app')

@section('header')

@endsection

@section('main')
<div class="fw pageHeaderAll cover wow fadeInUp" style="background-image:url(assets/images/page-bg.png)">
  <div class="container">
    <div class="fw pageHeader">
      <ul class="sul">
        <li class="icon"><span class="iconX"><i class="flaticon-conversation"></i></span></li>
        <li class="title"><h1 class="titleX">Sıkça Sorulanlar</h1></li>
        <li class="desc">Kullanıcılarımızın bizlere en çok yönelttiği soruları cevapladık.</li>
      </ul>
    </div><!--.pageHeader-->
  </div><!--.container-->
</div><!--.pageHeaderAll-->

<div class="container">
  <div class="fw pageAll">
    <div class="fw callMe wow fadeInUp">
      <div class="fw callMeBox">
        <div class="callMeRow">
          <div class="callMeCol first">
            <div class="fw callMeBox">
              <div class="fw callMeTitle">
                <ul class="sul">
                  <li class="icon"><i class="flaticon-headset"></i></li>
                  <li class="title">ARADIĞINIZ CEVABI BULAMADINIZ MI?</li>
                  <li class="desc">BİZ SİZİ ARAYALIM!</li>
                </ul>
              </div><!--.title-->
            </div><!--.callMeBox-->
          </div><!--.col-->
          <div class="callMeCol">
            <div class="fw callMeBox">
              <div class="fw homeContactInput smallX">
                <span class="icon"><i class="flaticon-telephone-1"></i></span>
                <input type="text" class="contactText" value="Adınız soyadınız" />
              </div><!--.input-->
            </div><!--.callMeBox-->
          </div><!--.col-->
          <div class="callMeCol">
            <div class="fw callMeBox">
              <div class="fw homeContactInput smallX">
                <span class="icon"><i class="flaticon-telephone-1"></i></span>
                <input type="text" class="contactText" value="Telefon numaranız" />
              </div><!--.input-->
            </div><!--.callMeBox-->
          </div><!--.col-->
          <div class="callMeCol">
            <div class="fw callMeBox">
              <div class="fw homeContactInput smallX">
                <span class="icon"><i class="flaticon-telephone-1"></i></span>
                <input type="text" class="contactText" value="E-posta adresiniz" />
              </div><!--.input-->
            </div><!--.callMeBox-->
          </div><!--.col-->
          <div class="callMeCol">
            <div class="fw callMeBox">
              <button type="submit" class="sidebarDemoSubmit smallX">BİZ SİZİ ARAYALIM</button>
            </div><!--.callMeBox-->
          </div><!--.col-->
        </div><!--.row-->
      </div><!--.callMeBox-->
    </div><!--.callMe-->
    <div class="fw page">
      <div class="pageLeft wow fadeInLeft">
        <div class="fw pageLeftBox">
          <div class="fw simpleContent">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
            <p><strong>Sorularınız için: info@ekolfx.com</strong></p>
          </div><!--.content-->
          <div class="fw faqList">
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">EkolFX’te Nasıl Gerçek Hesap Oluşturabilirim?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">EkolFX’te Nasıl Demo Hesap Oluşturabilirim?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Hesabımı EkolFX’e Taşımak İstiyorum. Nasıl Yapabilirim?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Nasıl Para Yatırma İşlemi Yapabilirim?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Para Çekme İşlemini Nasıl Yaparım?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Hangi Platformlar Üzerinde İşlem Yapabilirim?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Ne Tür Yatırım Araçları Mevcut?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
            <div class="fw faqListTab">
              <div class="fw faqListTabTitle">
                <span class="icon"><i class="flaticon-question"></i></span>
                <span class="title">Hesap Türleri Nedir?</span>
                <span class="arrow"><i class="flaticon-arrow-point-to-right"></i></span>
              </div><!--.faqListTabTitle-->
              <div class="fw faqListTabContent">
                <div class="fw simpleContent">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a felis ligula. Nulla tincidunt massa vel sem iaculis, eget tincidunt mi tempor. Etiam dignissim vitae quam id pellenteque. Sed venenatis augue id eleifend sagittis. Fusce feugiat auctor augue, et ultricies massa viverra et. Nulla ut mollis mi. Nunc luctus maximus vestibulum. Maecenas dictum, purus sit amet pretium mollis, sapien purus eleifend metus, molestie eleifend metus sapien eget mauris. Nam sed ipsum tempor, fringilla lacus quis, volutpat lorem.</p>
                </div><!--.content-->
              </div><!--.content-->
            </div><!--.tab-->
          </div><!--.faqList-->
        </div><!--.left-->
      </div><!--.pageLeft-->
      <div class="pageRight wow fadeInRight">
        <div class="fw pageRightBox">
          <div class="fw sidebarPromosyon">
            <a href="#" class="cover" style="background-image:url(assets/images/promosyon.png)">
              <ul class="sul">
                <li class="icon"><i class="flaticon-coin"></i></li>
                <li class="title">EKOLFX</li>
                <li class="desc">PROMOSYONLAR</li>
              </ul>
            </a>
          </div><!--.sidebarPromosyon-->
          <div class="fw sidebarLiveSupport">
            <a href="#" class="cover" style="background-image:url(assets/images/live-support.png)">
              <ul class="sul">
                <li class="icon"><i class="flaticon-headset"></i></li>
                <li class="title">7/24 CANLI DESTEK</li>
                <li class="desc">0 850 123 45 67</li>
              </ul>
            </a>
          </div><!--.sidebarLiveSupport-->
          <div class="fw sidebarDemo cover" style="background-image:url(assets/images/sidebar-demo.png)">
            <div class="fw sidebarDemoTitle">
              <span class="title">ÜCRETSİZ</span>
              <span class="desc">DENEME HESABI AÇIN</span>
            </div><!--.title-->
            <div class="fw sidebarDemoBox">
              <ul>
                <li>
                  <div class="fw homeContactInput smallX">
                    <span class="icon"><i class="flaticon-user-2"></i></span>
                    <input type="text" class="contactText" value="Adınız soyadınız" />
                  </div><!--.input-->
                </li>
                <li>
                  <div class="fw homeContactInput smallX">
                    <span class="icon"><i class="flaticon-telephone-1"></i></span>
                    <input type="text" class="contactText" value="Telefon numaranız" />
                  </div><!--.input-->
                </li>
                <li>
                  <div class="fw homeContactInput smallX">
                    <span class="icon"><i class="flaticon-arroba"></i></span>
                    <input type="text" class="contactText" value="E-posta adresiniz" />
                  </div><!--.input-->
                </li>
                <li><button type="submit" class="sidebarDemoSubmit smallX">DEMO HESAP AÇ</button></li>
              </ul>
            </div><!--.box-->
          </div><!--.sidebarDemo-->
          <div class="fw sidebarOtherMenu">
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-pulley-1"></i></span></li>
                <li class="title">Kaldıraç İşlemleri</li>
                <li class="more"><a href="#">DETAYLI BİLGİ AL</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-payment"></i></span></li>
                <li class="title">Zengin Hesap Çeşitleri</li>
                <li class="more"><a href="#">DETAYLI BİLGİ AL</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-open-book"></i></span></li>
                <li class="title">Ücretsiz Eğitimler</li>
                <li class="more"><a href="#">DETAYLI BİLGİ AL</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-analysis"></i></span></li>
                <li class="title">Uzman Analizleri</li>
                <li class="more"><a href="#">DETAYLI BİLGİ AL</a></li>
              </ul>
            </div><!--.tab-->
            <div class="fw sidebarOtherMenuTab">
              <ul class="sul">
                <li class="icon"><span class="iconX"><i class="flaticon-star"></i></span></li>
                <li class="title">Yüksek Bonuslar</li>
                <li class="more"><a href="#">DETAYLI BİLGİ AL</a></li>
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

@endsection

