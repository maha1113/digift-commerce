@extends('dashboard.index')

@section('content')


@if (session('flashMessage'))
    <div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ __('ar/app.store') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.stores.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtitle">{{ __('ar/app.name') }}</label>
          <input type="text" class="form-control" name="name"  id="exampleInputtitle" placeholder="name" value="{{ old('name') }}">
        </div>
        @error('name')

        <p class="text-danger">{{ $message }}</p>
        @enderror


      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('ar/app.create store') }}</button>
      </div>
    </form>
  </div>



















@endsection
