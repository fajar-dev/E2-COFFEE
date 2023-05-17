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
        <h4 class="mb-1">General</h4>
        <p class="mb-0 fs-5 text-muted">General settings </p>
      </div>
    </div>

    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('general_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-9 offset-md-3">
                <div class="d-flex align-items-center">
                  <div class="me-3">
                    <img src="{{Storage::url($data['web']->logo)}}" id="preview" class="img-fluid mb-8"alt="">
                  </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Logo</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <div>
                    <div class="input-group">
                      <input type="file" class="form-control" onchange="showPreview(event);" accept="image/*" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Company Name</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="company" value="{{ $data['web']->company }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Motto</h5>
              </div>
              <div class="col-md-9">
                  <div class="d-flex align-items-center">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control w-100" required name="motto" value="{{ $data['web']->motto }}">
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="offset-md-3 col-md-8">
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
        <h4 class="mb-1">SEO</h4>
        <p class="mb-0 fs-5 text-muted">Search Engine Optimizer</p>
      </div>
    </div>
    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('seo_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center mb-8">
              <div class="col-md-9 offset-md-3">
                <div class="d-flex align-items-center">
                  <div class="me-3">
                    <img src="{{Storage::url($data['web']->meta_image)}}" id="preview1" class="img-fluid mb-8"alt="">
                  </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Metta Image</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <div>
                    <div class="input-group">
                      <input type="file" class="form-control" onchange="showPreview1(event);" accept="image/*" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Metta Tittle</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <div>
                    <div class="input-group">
                      <input type="text" class="form-control" required name="tittle" value="{{ $data['web']->meta_tittle }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Metta Description</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <textarea class="form-control" name="desk" placeholder="Add a content" rows="3" id="fullName" required>{{ $data['web']->meta_description }}</textarea>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Meta Tags</h5>
              </div>
              <div class="col-md-9">
                <div class="d-flex align-items-center">
                  <textarea class="form-control" name="tags" placeholder="Add a content" rows="3" id="fullName" required>{{ $data['web']->meta_tags }}</textarea>
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
  function showPreview1(event){
  if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("preview1");
      preview.src = src;
      preview.style.display = "block";
    }
  }
</script>
@endsection