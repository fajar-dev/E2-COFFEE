<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{Storage::url($data['web']->pavicon)}}">

  @yield('seo')

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('/theme') }}/css/justifiedGallery.min.css" />
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/nice-select.css">					
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/main.css">
  </head>
  <body>

      <header id="header" id="home">	
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex py-3">
            <div id="logo">
              <a href="index.html"><img src="{{Storage::url($data['web']->logo)}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#coffee">Coffee</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="#blog">Blog</a></li>
                <li class="menu-has-children"><a href="">Pages</a>
                  <ul>
                    <li><a href="generic.html">Generic</a></li>
                    <li><a href="elements.html">Elements</a></li>
                  </ul>
                </li>
              </ul>
            </nav>	    		
          </div>
        </div>
      </header>

    @yield('content')
    
    <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="single-footer-widget d-lg-flex justify-content-lg-between">
              <div>
                <img src="{{Storage::url($data['web']->logo)}}" class="pt-2 mb-3 mb-lg-0" alt="" title="" />
              </div>
              <div>
                <p class="pb-0 mb-0">
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{ $data['web']->company }} | All rights reserved
                </p>
                <p class="footer-text">
                  Powered by <a href="https://colorlib.com" target="_blank">Garis Kode</a>
                </p>	
              </div>							
            </div>		
          </div>					
        </div>
      </div>
    </footer>	

    <!-- End footer Area -->	

    <script src="{{ asset('/theme') }}/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('/theme') }}/js/vendor/bootstrap.min.js"></script>			
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('/theme') }}/js/easing.min.js"></script>			
    <script src="{{ asset('/theme') }}/js/hoverIntent.js"></script>
    <script src="{{ asset('/theme') }}/js/superfish.min.js"></script>	
    <script src="{{ asset('/theme') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('/theme') }}/js/jquery.magnific-popup.min.js"></script>	
    <script src="{{ asset('/theme') }}/js/owl.carousel.min.js"></script>			
    <script src="{{ asset('/theme') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('/theme') }}/js/jquery.nice-select.min.js"></script>			
    <script src="{{ asset('/theme') }}/js/parallax.min.js"></script>	
    <script src="{{ asset('/theme') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('/theme') }}/js/jquery.counterup.min.js"></script>					
    <script src="{{ asset('/theme') }}/js/mail-script.js"></script>	
    <script src="{{ asset('/theme') }}/js/main.js"></script>	
    <script src="{{ asset('/theme') }}/js/jquery.justifiedGallery.min.js"></script>
    <script>
      $("#mygallery").justifiedGallery({
    rowHeight : 350,
    lastRow : 'nojustify',
    margins : 10
    });
    </script>
  </body>
</html>



