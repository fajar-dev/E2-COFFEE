@section('seo')
  <title>{{ $data['web']->meta_tittle }}</title>
  <meta name="author" content="{{ $data['web']->company }}">
  <meta name="description" content="{{ $data['web']->meta_description }}">
  <meta name="keywords" content="{{ $data['web']->meta_tags }}">
  <meta property="og:url" content="{{ url()->full(); }}" />
  <meta property="og:type" content="article">
  <meta property="og:title" content="{{ $data['web']->meta_tittle }}" />
  <meta property="og:image" content="{{Storage::url($data['web']->meta_image)}}" />
  <meta property="og:description" content="{{ $data['web']->meta_description }}" />
@endsection

@extends('layout/app')
@section('content')

<section class="banner-area" id="home">	
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center text-center">
      <div class="banner-content col-lg-7">
        <h1>
          {{ $data['web']->company }}		
        </h1>
        <h6 class="text-white text-uppercase mb-5">"{{ $data['web']->motto }}"</h6>
        <a href="#about" class="primary-btn text-uppercase">See More</a>
      </div>											
    </div>
  </div>
</section>

<section class="video-sec-area pb-100 pt-40  mt-lg-5" id="about">
  <div class="container">
    <div class="row justify-content-start align-items-center">
      <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
        <img class="img-fluid rounded primary-border" src="{{Storage::url($data['about']->photo)}}" alt="">
      </div>						
      <div class="col-lg-6 video-left">
        <h6>Profile</h6>
        <h1>About Us</h1>
        <p>
          {{ $data['about']->text }}
         </p>
      </div>
    </div>
  </div>	
</section>

<section class="menu-area section-gap" id="coffee">
  <div class="container">
    <div class="row">
      <div class="menu-content pb-60 col-lg-10">
        <div class="title text-left">
          <h1 class="mb-10 text-white">Our Product</h1>
          <p>find our best products here</p>
        </div>
      </div>
    </div>						
    <div class="row">

      @foreach ($data['product'] as $row)
      <div class="col-lg-4">
        <div class="single-menu text-center">
          <div class="title-div mb-0 pb-2">
            <img class="img-fluid rounded primary-border mb-3" src="{{Storage::url($row->photo)}}" alt="">
            <h4 class="mb-2">{{ $row->tittle }}</h4>
            <span class="price">IDR. {{ $row->price }}</span>
          </div>
          <?= substr($row->description, 0, 66); ?>...	
          <a href="{{ route('product', ['slug' => $row->slug]) }}">More Info</a>	
        </div>
      </div>		
      @endforeach
												
    </div>
  </div>	
</section>

<section class="gallery-area section-gap" id="gallery">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-60 col-lg-10">
        <div class="title text-center">
          <h1 class="mb-10">Gallery</h1>
          <p>Who are in extremely love with eco friendly system.</p>
        </div>
      </div>
    </div>						
    <div class="row">
      <div id="mygallery" >

        @foreach ($data['gallery'] as $row)
          <a href="{{Storage::url($row->photo)}}" class="img-pop-home">
              <img alt="{{ $row->tittle }}" src="{{Storage::url($row->photo)}}"/>
          </a>
        @endforeach

      </div>
    </div>
  </div>	
</section>

<section class="review-area section-gap" id="review">
  <div class="container">
    <div class="row">
      <div class="menu-content pb-60 col-lg-12">
        <div class="title text-center">
          <h1 class="mb-10">Contact Us</h1>
          <p>please contact us for more information</p>
        </div>
      </div>
    </div>						
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 col-md-6 single-review">
        <div class="single-menu p-lg-5">
          <form action="{{ route('send_message') }}" method="POST">
            @csrf
            <h4 class="text-dark mb-4">Send a Message</h4>
              @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
            <div class="mt-10 mb-4">
              <input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="" class="single-input-primary rounded" fdprocessedid="x5s79">
            </div>
            <div class="mt-10 mb-4">
              <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input-primary rounded" fdprocessedid="x5s79">
            </div>
            <div class="mt-10 mb-4">
              <input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required="" class="single-input-primary rounded" fdprocessedid="x5s79">
            </div>
            <div class="mt-10 mb-4">
              <textarea class="single-textarea rounded" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
            </div>
            <button type="submit" class="genric-btn primary-border radius" style="text-decoration: none;">Send Message <span class="lnr lnr-arrow-right"></span></button>
          </form>
        </div>
      </div>	
      <div class="col-lg-6 col-md-6 single-review pl-lg-5">
        <h4 class="mb-2">Email : </h4>
        <p class="pl-2">
          {{ $data['contact']->email }}
        </p>
        <h4 class="mb-2">Phone Number : </h4>
        <p class="pl-2">
          +{{ $data['contact']->whatsapp }}
        </p>
        <h4 class="mb-2">Addreas : </h4>
        <p class="pl-2">
          {{ $data['contact']->address }}
        </p>
        <p class="pl-2">
          {{ $data['contact']->second_address }}
        </p>
        <h4 class="mb-2 pt-4">Follow Us</h4>
        <p>Let us be social</p>
        <div class="footer-social d-flex align-items-center pt-2">
          <a href="{{ $data['contact']->facebook }}"><img src="{{ asset('/theme') }}/img/fb.svg" width="40" alt=""></a>
          <a href="{{ $data['contact']->instagram }}"><img src="{{ asset('/theme') }}/img/ig.svg" width="40" alt=""></a>
          <a href="{{ $data['contact']->linkedin }}"><img src="{{ asset('/theme') }}/img/linkedin.svg" width="40" alt=""></a>
        </div>
      </div>	
    </div>
  </div>	
</section>

@endsection