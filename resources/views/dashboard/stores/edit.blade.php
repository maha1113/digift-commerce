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
          <input type="text" class="form-control" name="name"  id="exampleInputtitle" placeholder="name" value="{{ $store->name }}">
        </div>
        @error('name')

        <p class="text-danger">{{ $message }}</p>
        @enderror

{{--
        <div class="form-group">
          <label for="exampleInputimage">{{ __('ar/app.image') }}</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

              <label class="custom-file-label" for="exampleInputFile">{{ __('ar/app.choose image') }}</label>
            </div>
           @if ($errors->has('image'))

           <p class="text-danger">{{ $errors->first('image') }}</p>
           @endif

            <div class="input-group-append">
              <span class="input-group-text">{{ __('ar/app.upload') }}</span>
            </div>
          </div>
        </div> --}}


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('ar/app.create store') }}</button>
      </div>
    </form>
  </div>




@endsection
