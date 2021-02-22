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
    @include('partials.content-page')
  @endwhile
@endsection
