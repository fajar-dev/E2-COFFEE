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
        <h4 class="mb-1">Product</h4>
        <p class="mb-0 fs-5 text-muted">{{ $data['page'] }}</p>
      </div>

    </div>

    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
      <!-- card -->
      <div class="card">
        <!-- card body -->
        <div class="card-body">
          <form action="{{ route('product_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data['product']->id }}" > 
            <div class="row align-items-center mb-8">
              <div class="col-md-9 offset-md-3">
                <div class="">
                  <div class="me-3">
                    <img src="{{Storage::url($data['product']->photo)}}" id="preview" class="img-fluid mb-8"alt="">
                  </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Image</h5>
              </div>
              <div class="col-md-9">
                <div class="">
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
                <h5 class="mb-0">Tittle</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="text" placeholder="Tittle Product" id="title" value="{{ $data['product']->tittle }}" name="tittle" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-8">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Price</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <div>
                    <div class="input-group">
                      <input type="number" class="form-control" value="{{ $data['product']->price }}" name="price" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-0">
              <div class="col-md-3 mb-3 mb-md-0">
                <h5 class="mb-0">Description</h5>
              </div>
              <div class="col-md-9">
                <div class="">
                  <textarea class="form-control" name="desk" placeholder="Add a content" rows="10" id="fullName" required>{{ $data['product']->description }}</textarea>
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