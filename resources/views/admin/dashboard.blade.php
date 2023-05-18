@extends('layout/admin')
@section('content')

<div class="container-fluid mt-n22 px-6">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
     
        <div class="border-bottom border-white pb-4 mb-4 ">
         
            <h3 class="mb-0 fw-bold text-white">{{ $data['page'] }}</h3>
        
     
      </div>
    </div>
  </div>
  <div class="row align-items-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Bg -->
        <div class="pt-20 rounded-top" style="background:
            url({{ asset('/theme') }}/img/header-bg.jpg) no-repeat;
            background-size: cover;">
        </div>
        <div class="bg-white rounded-bottom smooth-shadow-sm ">
          <div class="d-flex align-items-center justify-content-between
              pt-4 pb-6 px-4">
            <div class="d-flex align-items-center">
              <!-- avatar -->
              <div class="avatar-xxl avatar-indicators avatar-online me-2
                  position-relative d-flex justify-content-end
                  align-items-end mt-n10">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&background=random&color=ffff" class="avatar-xxl
                    rounded-circle border border-4 border-white-color-40" alt="">

              </div>
              <!-- text -->
              <div class="lh-1">
                <h2 class="mb-0">{{Auth::user()->name}}
                  <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Beginner">

                  </a>
                </h2>
                <p class="mb-0 d-block">Administrator</p>
              </div>
            </div>
            <div>
              <a href="#" class="btn btn-outline-primary
                  d-none d-md-block">Edit Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection