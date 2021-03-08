{{--
  Template Name: Index Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="index-hero-section" style="background-image: url(@asset('images/hero_background.jpg'))">
      <div class="container h-100 d-flex justify-content-center">
        <div class="index-hero-slider-container">
          <div class="index-hero-slide index-hero-slide-1">
            <div class="index-hero-slide-content">
              <h2>旅遊巴士、中港過境平治及豪華七人車租借</h2>
              <p>成立超過二十年，一直以來誠意為客戶提供旅遊巴服務，信譽良好，提供時租、日租、月租及包車服務</p>
              <p>電話：2330 2990</p>
              <p>地址：九龍紅磡馬頭圍道37號紅磡商業中心B座5樓508室</p>
            </div>
          </div>
          <div class="index-hero-slide index-hero-slide-2">123</div>
          <div class="index-hero-slide index-hero-slide-3">123</div>
        </div>

        <div class="index-hero-image-slider-container d-none d-md-block">
          <div class="index-hero-image-slide index-hero-image-slide-1">
            <img src="@asset('images/hero_slide-1.jpg')">
          </div>
        </div>
      </div>
    </section>

    <section class="index-intro-section">
      <div class="module-text">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-8 module-text-content">
              <label class="brand-primary">我們的願景</label>
              <h2>讓客戶於這繁忙的都市中能享受舒適的旅程</h2>
              <p>我們重視客戶的感受，誠意為客戶提供體貼的旅遊巴服務。不論是24座、28座、45座及60座旅遊巴士還是7人車，我們均能提供清潔寬敞的車廂環境，設有空調設備之餘同時符合綠色環境標準，並設有多元化的租車服務以配合客戶所需。我們聘請的司機皆具豐富駕駛經驗，能了解顧客需求及應付突發事件，而且能操流利廣東話、英語及普通話。</p>
              <a class="btn-primary" href="#">查詢或報價</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="index-services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php
                  $services = get_field('services');

                  foreach ($services as $service) {
                    ?>
                      <div class="swiper-slide" data-paginationname="<?php echo $service['title']; ?>">
                        <div class="slide-container d-flex flex-column flex-lg-row">
                          <div class="slide-image">
                            <img src="@asset('images/hero_slide-1.jpg')">
                          </div>
                          <div class="slide-content">
                            <h3><?php echo $service['title']; ?></h3>
                            <?php if ($service['price']) {
                              echo "<p class='brand-primary'>". $service['price'] ."</p>";
                            } ?>
                            <p><?php echo $service['description']; ?></p>
                          </div>
                        </div>
                      </div>
                    <?php
                  }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="index-wills-section">
      <div class="container">
        <div class="row justify-content-center service">
          <div class="col-sm-5 col-md-4 service-icon-container">
            <img class="service-icon" src="@asset('images/service-icon-repair.png')">
          </div>
          <div class="col-sm-7 col-md-5">
            <h3>定期維修保養</h3>
            <p>為保障客戶安全，減低意外風險，定期檢查是最基本的要求。巴士通旗下所有商用車輛均會接受登記前檢驗，以及最少每年為所有車輛進行定期檢查，並購買保險，以確保車輛安全並適合在路上行駛。</p>
          </div>
        </div>

        <div class="row justify-content-center service">
          <div class="col-sm-5 col-md-4 service-icon-container">
            <img class="service-icon" src="@asset('images/service-icon-cs.png')">
          </div>

          <div class="col-sm-7 col-md-5">
            <h3>24小時客戶服務熱線</h3>
            <p>閣下可透過電郵、傳真或電話聯繫我們。巴士通的客戶電話提供全天候24小時的諮詢熱線服務。無論您是想查詢我們的巴士服務，還是想了解更多報價資料，歡迎您隨時聯絡我們，我們將竭力為您提供即時、到位的解答。</p>
          </div>
        </div>

        <div class="row justify-content-center service">
          <div class="col-sm-5 col-md-4 service-icon-container">
            <img class="service-icon" src="@asset('images/service-icon-money.png')">
          </div>

          <div class="col-sm-7 col-md-5">
            <h3>零手續費及沒有隱藏收費</h3>
            <p>巴士通向來以卓越服務在業界贏得良好信譽。為提供更方便貼心的顧客體驗，閣下在租車期間無需繳付任何手續費和預訂費，流程簡單。如需取消預約只需提前3日通知，本公司將不會收取任何行政費用。</p>
          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection
