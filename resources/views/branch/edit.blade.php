@extends('layout.dashboard')

@section('page')
<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 mr-3 text-gray-800">Edit Branch Page</h1>
  <a type="button" class="btn btn-primary" href="/branch/aindex">
    <div class="wrapper">
      <i class="fa-solid fa-caret-left"></i>
    </div>
  </a>
</div>
<div class="row">
  <div class="col-6">
    <form action="/branch/update/{{ $branch->id }}" method="POST" >
      @csrf
      <div class="form-group mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $branch->name }}">
        @error('name')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Total Member</label>
        <input type="text" class="form-control" name="total_member" value="{{ $branch->total_member }}">
        @error('total_member')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Outstanding</label>
        <input type="text" class="form-control" name="outstanding" value="{{ $branch->outstanding }}">
        @error('outstanding')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">PAR (%)</label>
        <input type="text" class="form-control" name="par" value="{{ $branch->par }}">
        @error('par')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection