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
          <h4 class="mb-0">Inbox Contact</h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['inbox'] as $row)
              <tr>
                <td class="align-middle">
                  {{ $row->name }}
                </td>
                <td class="align-middle">
                  {{ $row->email }}
                </td>
                <td class="align-middle">
                  <div class="lh-1">
                    <h5 class=" mb-1">
                      {{ $row->subject }}
                    </h5>
                  </div>
                </td>
                <td class="align-middle">
                  {{ $row->message }}
                </td>
                <td class="align-middle">
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" id="/inbox_delete/{{ $row->id }}" class="btn btn-danger btn-del"><i class="bi bi-trash"></i></button>
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