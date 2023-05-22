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
  <div class="row my-3">
    <div class="col-lg-4">
      <div class="card mt-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Product</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
              <i class="bi bi-briefcase fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">{{ $data['product'] }}</h1>
            <p class="mb-0"><span class="text-dark me-2">Items</span></p>
          </div>
        </div>
      </div>
      <div class="card mt-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Gallery</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
              <i class="bi bi-bullseye fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">{{ $data['gallery'] }}</h1>
            <p class="mb-0"><span class="text-dark me-2">photo</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card">
        <!-- card header  -->
        <div class="card-header bg-white  py-4">
          <h4 class="mb-0">New Message</h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table text-nowrap mb-0">
            <thead class="table-light">
              <tr>
                <th>Subject</th>
                <th>Sender</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['inbox'] as $row)
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4
                        rounded-1">
                        <img src="{{ asset('/admin') }}/assets/images/mail.png" width="20" alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class=" mb-1">{{ $row->subject }}
                      </h5>
                      <small>{{ $row->created_at }}</small>
                    </div>
                  </div></td>
                <td class="align-middle">{{ $row->name }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card footer  -->
        <div class="card-footer bg-white text-center">
          <a href="{{route('inbox')}}" class="link-primary">View All</a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection