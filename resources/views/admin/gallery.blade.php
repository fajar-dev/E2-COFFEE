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
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_photo"><i class="bi bi-plus-circle-fill"></i> Add Photo</a>
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
          <h4 class="mb-0">Active Projects</h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>Image</th>
                <th>Tittle</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['gallery'] as $row)
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
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#edit_photo{{ $row->id }}" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
                    <button type="button" id="/gallery_delete/{{ $row->id }}" class="btn btn-danger btn-del"><i class="bi bi-trash"></i></button>
                  </div>
                </td>    
              </tr>
              <div class="modal fade" id="edit_photo{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                          <div class="d-flex align-content-between justify-content-between">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Photo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form  action="{{ route('gallery_update') }}" method="post" enctype="multipart/form-data" class="mt-5">
                            @csrf
                            <input type="hidden" name="id" value="{{ $row->id }}"  required>
                            <div class="mb-3">
                              <label class="form-label" for="textInput">Tittle</label>
                              <input type="text" name="tittle" value="{{ $row->tittle }}" id="textInput" class="form-control" placeholder="Tittle Photo" required>
                            </div>
                            <div class="pt-3 text-end">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="add_photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <div class="d-flex align-content-between justify-content-between">
              <h5 class="modal-title" id="exampleModalLabel">Add Photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  action="{{ route('gallery_add') }}" method="post" enctype="multipart/form-data" class="mt-5">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="textInput">Tittle</label>
                <input type="text" name="tittle" id="textInput" class="form-control" placeholder="Tittle Photo" required>
              </div>
              <div class="mb-3">
                <label class="form-label" for="textInput">Photo</label>
                <input type="file" name="image" id="textInput" class="form-control" placeholder="Input Text" required>
              </div>
              <div class="pt-3 text-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</div>

@endsection