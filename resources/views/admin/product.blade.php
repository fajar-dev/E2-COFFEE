@extends('layout/admin')
@section('content')

<div class="container-fluid p-6">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
      <div  class="border-bottom pb-4 mb-4">
        <div class="d-flex justify-content-between align-items-center">
          <div class="mb-2 mb-lg-0">
            <h3 class="mb-0">{{ $data['page'] }}</h3>
          </div>
          <div>
            <a href="{{ route('product_add') }}" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Add Product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-md-12 col-12">
      <!-- card  -->
      <div class="card">
        <!-- card header  -->
        <div class="card-header bg-white  py-4">
          <h4 class="mb-0">Product  List</h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>Image</th>
                <th>Tittle</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['product'] as $row)
              <tr>
                <td class="align-middle">
                  <img src="{{Storage::url($row->photo)}}" width="100" alt="">
                </td>
                <td class="align-middle">
                  <div class="lh-1">
                    <h5 class=" mb-1">
                      {{ $row->tittle }}
                    </h5>
                  </div>
                </td>
                <td class="align-middle">
                      {{ $row->price }}
                </td>
                <td class="align-middle">
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="/product/{{ $row->slug }}" target="_blank" class="btn btn-light"><i class="bi bi-eye"></i></a>
                    <a href="/product_edit/{{ $row->id }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                    <button type="button" id="/product_delete/{{ $row->id }}" class="btn btn-danger btn-del"><i class="bi bi-trash"></i></button>
                  </div>
                </td>    
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection