@extends('layout/app')
@section('content')

<section class="banner-area" id="home">	
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center text-center">
      <div class="banner-content col-lg-7">
        <h1>
          PT. Green Coffee			
        </h1>
        <h6 class="text-white text-uppercase mb-5">"Now you can feel the Energy"</h6>
        <a href="#about" class="primary-btn text-uppercase">See More</a>
      </div>											
    </div>
  </div>
</section>

<section class="video-sec-area pb-100 pt-40  mt-lg-5" id="about">
  <div class="container">
    <div class="row justify-content-start align-items-center">
      <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
        <img class="img-fluid rounded primary-border" src="img/profile.jpg" alt="">
      </div>						
      <div class="col-lg-6 video-left">
        <h6>Profile</h6>
        <h1>About Us</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa reiciendis explicabo placeat! Nesciunt explicabo et quod voluptas, deserunt blanditiis quibusdam autem cum fugiat amet architecto animi corrupti eos eligendi expedita?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ducimus modi illum quaerat, ipsa eveniet omnis ad? Velit voluptates, aspernatur dolore molestiae quam cupiditate, amet neque maiores esse itaque exercitationem!
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
      <div class="col-lg-4">
        <div class="single-menu text-center">
          <div class="title-div mb-0 pb-2">
            <img class="img-fluid rounded primary-border mb-3" src="img/product.png" alt="">
            <h4 class="mb-2">Cappuccino</h4>
            <span class="price">IDR. 30,000</span>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>	
          <a href="#">Buy Now</a>	
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-menu text-center">
          <div class="title-div mb-0 pb-2">
            <img class="img-fluid rounded primary-border mb-3" src="img/product.png" alt="">
            <h4 class="mb-2">Cappuccino</h4>
            <span class="price">IDR. 30,000</span>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>	
          <a href="#">Buy Now</a>	
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-menu text-center">
          <div class="title-div mb-0 pb-2">
            <img class="img-fluid rounded primary-border mb-3" src="img/product.png" alt="">
            <h4 class="mb-2">Cappuccino</h4>
            <span class="price">IDR. 30,000</span>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>	
          <a href="#">Buy Now</a>	
        </div>
      </div>															
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
      <div class="col-lg-4">
        <a href="img/g1.jpg" class="img-pop-home">
          <img class="img-fluid" src="img/g1.jpg" alt="">
        </a>	
        <a href="img/g2.jpg" class="img-pop-home">
          <img class="img-fluid" src="img/g2.jpg" alt="">
        </a>	
      </div>
      <div class="col-lg-8">
        <a href="img/g3.jpg" class="img-pop-home">
          <img class="img-fluid" src="img/g3.jpg" alt="">
        </a>	
        <div class="row">
          <div class="col-lg-6">
            <a href="img/g4.jpg" class="img-pop-home">
              <img class="img-fluid" src="img/g4.jpg" alt="">
            </a>	
          </div>
          <div class="col-lg-6">
            <a href="img/g5.jpg" class="img-pop-home">
              <img class="img-fluid" src="img/g5.jpg" alt="">
            </a>	
          </div>
        </div>
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
          <form action="#">
            <h4 class="text-dark mb-4">Send a Message</h4>
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
              <textarea class="single-textarea rounded" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
            </div>
            <a href="#" class="genric-btn primary-border radius" style="text-decoration: none;">Send Message <span class="lnr lnr-arrow-right"></span></a>
          </form>
        </div>
      </div>	
      <div class="col-lg-6 col-md-6 single-review pl-lg-5">
        <h4 class="mb-2">Email : </h4>
        <p class="pl-2">
          Info@greencoffee.com
        </p>
        <h4 class="mb-2">Phone Number : </h4>
        <p class="pl-2">
          +62895611024559
        </p>
        <h4 class="mb-2">Addreas : </h4>
        <p class="pl-2">
          Jalan Mangga Besar III No. 17, RT 06 RW 07, Kelurahan Bedali, Kecamatan Lawang, Kab. Malang, Jawa Timur, 60256
        </p>
        <p class="pl-2">
          Jalan Mangga Besar III No. 17, RT 06 RW 07, Kelurahan Bedali, Kecamatan Lawang, Kab. Malang, Jawa Timur, 60256
        </p>
        <h4 class="mb-2 pt-4">Follow Us</h4>
        <p>Let us be social</p>
        <div class="footer-social d-flex align-items-center pt-2">
          <a href="#"><img src="img/fb.svg" width="40" alt=""></a>
          <a href="#"><img src="img/ig.svg" width="40" alt=""></a>
          <a href="#"><img src="img/linkedin.svg" width="40" alt=""></a>
        </div>
      </div>	
    </div>
  </div>	
</section>

@endsection