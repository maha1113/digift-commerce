@extends('dashboard.index')
@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ __('ar/app.wallet') }}</h3>


        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">

            <a href="{{ route('admin.wallet.create') }}" class="btn btn-info" role="button">{{ __('ar/app.create wallet') }}</a>
            <div class="input-group-append">

            </div>
          </div>
        </div>
      </div>

       @if (session('flashMessage'))

         <div class="alert alert-success">{{ session('flashMessage') }}</div>
       @endif

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>{{ __('ar/app. user name') }}</th>
              <th>{{ __('ar/app.total') }}</th>
              {{-- <th>{{ __('ar/app.action') }}</th> --}}

            </tr>
          </thead>
          <tbody>

            <tr>

                <td>{{ $wallet->id }}</td>


              <td>{{ $wallet->user->name }}</td>
              {{-- <td style="display: flex; justify-content:space-evenly"><a href="{{ route('admin.orders.edit', $order->id) }} " class=" btn btn-primary btn-sm"><i class="fas fa-edit "></a></i>
                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button   class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                   </td> --}}
                    </form>
              </tr>




          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
















@endsection
