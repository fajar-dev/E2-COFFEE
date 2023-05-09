<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="{{Storage::url($data['web']->pavicon)}}">

<!-- Libs CSS -->
<link href="{{ asset('/admin') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('/admin') }}/assets/libs/dropzone/dist/dropzone.css"  rel="stylesheet">
<link href="{{ asset('/admin') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="{{ asset('/admin') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('/admin') }}/assets/css/theme.min.css">
  <title>Sign In | {{ $data['web']->company }}</title>
</head>

<body class="bg-dark">
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4 text-center">
              <a href="index.html"><img src="{{Storage::url($data['web']->logo)}}" class="mb-2" alt=""></a>
              <p class="mb-6">
                <span class=" fw-bold">{{ $data['web']->company }}</span>
              <br>
              <span>{{ $data['web']->motto }}</span>
              </p>
            </div>
            <!-- Form -->

            @yield('content')

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <!-- Libs JS -->
<script src="{{ asset('/admin') }}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/prismjs/prism.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="{{ asset('/admin') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




<!-- Theme JS -->
<script src="{{ asset('/admin') }}/assets/js/theme.min.js"></script>
</body>

</html>