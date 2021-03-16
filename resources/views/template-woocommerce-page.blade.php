{{--
  Template Name: WooCommerce Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="woocommerce-page-hero-section">
    {!! the_post_thumbnail('full')  !!}
    <div class="woocommerce-page-hero-section-content">
      <div class="container">
        @include('partials.page-header')
      </div>
    </div>
  </section>

  <div class="container">
    @include('partials.content-page')
  </div>
  @endwhile
@endsection
