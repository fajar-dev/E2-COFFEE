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
        <h4 class="mb-1">Contact Information</h4>
        <p class="mb-0 fs-5 text-muted">Contact configuration settings </p>
      </div>
    </div>

    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('contact_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Email</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="email" class="form-control" required name="email" value="{{ $data['contact']->email }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Whatsapp</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="number" class="form-control" required name="wa" value="{{ $data['contact']->whatsapp }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Address</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <textarea class="form-control" name="address" placeholder="Add a content" rows="5" id="fullName" required>{{ $data['contact']->address }}</textarea>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Second Address</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <textarea class="form-control" name="second_address" placeholder="Add a content" rows="5" id="fullName" required>{{ $data['contact']->second_address }}</textarea>
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

  <div class="row mb-8">
    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
      <div class="mb-4 mb-lg-0">
        <h4 class="mb-1">Social Media</h4>
        <p class="mb-0 fs-5 text-muted">Social Media settings </p>
      </div>
    </div>
    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('sosmed_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Facebook</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="fb" value="{{ $data['contact']->facebook }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Instagram</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="ig" value="{{ $data['contact']->instagram }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Linkedin</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="in" value="{{ $data['contact']->linkedin }}">
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
  function showPreview(event){
  if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
</script>
@endsection