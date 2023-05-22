@extends('layout/admin')
@section('content')
<div class="container-fluid p-6">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
   
        <div class="border-bottom pb-4 mb-4">              
            <h3 class="mb-0 fw-bold">{{ $data['page'] }}</h3>             
          
        </div>
     
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
      <div class="mb-4 mb-lg-0">
        <h4 class="mb-1">Profile</h4>
        <p class="mb-0 fs-5 text-muted">Account settings </p>
      </div>

    </div>

    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('account_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Name</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="name" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Email</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="email" class="form-control" required name="email" value="{{ Auth::user()->email }}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-md-3 col-md-8 mt-8">
                <button type="submit" class="btn btn-primary"> Save
                    Changes
                </button>
              </div>
            </div>
          </form>
          <h4 class="mb-5">Password Change</h4>
          <form action="{{ route('password_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Old Password</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="password" class="form-control" required name="old">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">New Password</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" required name="pw">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Repeat Password</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="password" class="form-control" id="confirm_password" onchange="check()" required name="pw2">
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-md-3 col-md-8 mt-8">
                <button type="submit" class="btn btn-primary"> Save
                    Changes
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('script')
<script>
function check() {
    if(document.getElementById('password').value ===
            document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = "match";
    } else {
        document.getElementById('message').innerHTML = "no match";
    }
}
</script>
@endsection