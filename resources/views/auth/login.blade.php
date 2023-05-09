@extends('layout/auth')
@section('content')

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('error') }}
</div>
@endif

<form action="{{ route('submit') }}" method="POST">
  @csrf
  <!-- Username -->
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" class="form-control" name="email" placeholder="Email..." required="">
  </div>
  <!-- Password -->
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
  </div>
  <!-- Checkbox -->
  <div class="d-lg-flex justify-content-between align-items-center
      mb-4">
    <div class="form-check custom-checkbox">
      <input type="checkbox" class="form-check-input" id="rememberme">
      <label class="form-check-label" for="rememberme">Remember
          me</label>
    </div>

  </div>
  <div>
    <!-- Button -->
    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Sign
        in</button>
    </div>
  </div>


</form>
@endsection