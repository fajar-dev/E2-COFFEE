<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{Storage::url($data['web']->pavicon)}}">
<!-- Libs CSS -->
<link href="{{ asset('/admin') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('/admin') }}/assets/libs/dropzone/dist/dropzone.css"  rel="stylesheet">
<link href="{{ asset('/admin') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="{{ asset('/admin') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('/admin') }}/assets/css/theme.min.css">
    <title>{{ $data['page'] }} | {{ $data['web']->company }}</title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
         <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('/admin') }}/assets/images/brand/logo/logo.svg" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow  active " href="index.html">
                            <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Main Menu</div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                          <i class="bi bi-info-circle-fill nav-icon icon-xs me-2"></i> About
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                          <i class="bi bi-bag nav-icon icon-xs me-2"></i> Product
                        </a>
                        <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="pages/profile.html">Add Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="pages/profile.html">List Product</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                          <i class="bi bi-image nav-icon icon-xs me-2"></i> Gallery
                        </a>
                    </li>

                     <!-- Nav item -->
                     <li class="nav-item">
                      <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages1" aria-expanded="false" aria-controls="navPages">
                        <i class="bi bi-telephone nav-icon icon-xs me-2"></i> Contact
                      </a>
                      <div id="navPages1" class="collapse " data-bs-parent="#sideNavbar">
                          <ul class="nav flex-column">
                              <li class="nav-item">
                                  <a class="nav-link " href="pages/profile.html">Inbox</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link " href="pages/profile.html">Information</a>
                              </li>
                          </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " href="pages/layout.html">
                      <i class="bi bi-gear nav-icon icon-xs me-2"></i> Setting
                    </a>
                  </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="user" class="nav-icon icon-xs me-2" ></i> Admin
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="power" class="nav-icon icon-xs me-2" ></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
            <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                    <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset('/admin') }}/assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> John E. Grainger</h5>
                                        <span class="text-inherit fs-6">admin</span>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="index.html">
                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                            data-feather="power"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
                <!-- Container fluid -->
                <div class="bg-primary pt-10 pb-21"></div>

                @yield('content')
              
            </div>
        </div>

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