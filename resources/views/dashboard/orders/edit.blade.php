@extends('dashboard.index')

@section('content')


@if (session('flashMessage'))
    <div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ __('ar/app.order') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.orders.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtitle">{{ __('ar/app.total') }}</label>
          <input type="text" class="form-control" name="total"  id="exampleInputtitle" placeholder="total" value="{{ $order->total}}">
        </div>
        @error('total')

        <p class="text-danger">{{ $message }}</p>
        @enderror


      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('ar/app.create order') }}</button>
      </div>
    </form>
  </div>


@endsection
