{{--
  Template Name: Index Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="index-hero-section" style="background-image: url(@asset('images/hero_background.jpg'))">
      <div class="index-hero-slider-container">
        <div class="index-hero-slide-1">123</div>
        <div class="index-hero-slide-2">123</div>
        <div class="index-hero-slide-3">123</div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
