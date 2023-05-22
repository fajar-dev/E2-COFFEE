@section('seo')
  <title>{{ $data['web']->meta_tittle }}</title>
  <meta name="author" content="{{ $data['web']->company }}">
  <meta name="description" content="{{ $data['web']->meta_description }}">
  <meta name="keywords" content="{{ $data['web']->meta_tags }}">
  <meta property="og:url" content="{{ url()->full(); }}" />
  <meta property="og:type" content="article">
  <meta property="og:title" content="{{ $data['product']->tittle }}" />
  <meta property="og:image" content="{{Storage::url($data['product']->photo)}}" />
  <meta property="og:description" content="{{ $data['web']->meta_description }}" />
@endsection

@extends('layout/app')
@section('content')

    <section class="banner-area-product" id="home">	
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center text-center">										
        </div>
      </div>
    </section>

    <section class="video-sec-area pt-40 pt-lg-5 mt-md-5 mt-lg-5" id="about">
      <div class="container">
        <div class="row justify-content-start align-items-center">
          <div class="col-lg-7 video-right justify-content-center align-items-center d-flex">
            <img class="img-fluid rounded primary-border" src="{{Storage::url($data['product']->photo)}}" alt="">
          </div>						
          <div class="col-lg-5 video-left">
            <h1>{{ $data['product']->tittle }}</h1>
            <span class="ml-2">IDR. {{ number_format($data['product']->price,2,',','.') }}</span>
            <div>
              <a href="https://wa.me/{{ $data['contact']->whatsapp }}" class="btn btn-outline-success mt-5 btn-block"><i class="fa fa-whatsapp"></i> order via whatsapp</a>
            </div>
          </div>
        </div>
      </div>	
    </section>
    
    <section class="about-generic-area section-gap">
      <div class="container border-top-generic">
        <h3 class="about-title mb-30">Description</h3>
        <div class="row">
          <div class="col-lg-12">
            <?= $data['product']->description ?>
          </div>
        </div>
      </div>
    </section>

@endsection