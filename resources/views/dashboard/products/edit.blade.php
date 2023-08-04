@extends('dashboard.index')
@section('content')


@if (session('flashMessage'))
    <div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ __('ar/app.product') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtitle">{{ __('ar/app.name_product') }}</label>
          <input type="text" class="form-control" name="name_product"  id="exampleInputtitle" placeholder="name_product" value="{{ $product->name_product }}">
        </div>
        @error('name_product')

        <p class="text-danger">{{ $message }}</p>
        @enderror




            <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputtitle">{{ __('ar/app.desc') }}</label>
                  <input type="text" class="form-control" name="desc"  id="exampleInputtitle" placeholder="desc" value="{{ $product->desc }}">
                </div>
                @error('desc')

                <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputtitle">{{ __('ar/app.quantity') }}</label>
                      <input type="text" class="form-control" name="quantity"  id="exampleInputtitle" placeholder="quantity" value="{{ $product->quantity }}">
                    </div>
                    @error('quantity')

                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <div class="form-group">
                          <label for="exampleInputtitle">{{ __('ar/app.price') }}</label>
                          <input type="text" class="form-control" name="price"  id="exampleInputtitle" placeholder="price" value="{{ $product->price }}">
                        </div>
                        @error('sale_price')

                        <p class="text-danger">{{ $message }}</p>
                        @enderror


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
        </div>


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('ar/app.create product') }}</button>
      </div>
    </form>
  </div>






























@endsection
