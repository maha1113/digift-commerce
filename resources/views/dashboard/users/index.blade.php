@extends('dashboard.index')
@section('content')




<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ __('ar/app.users') }}</h3>


        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">

            <a href="{{ route('admin.users.create') }}" class="btn btn-info" role="button">{{ __('ar/app.create user') }}</a>
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
              <th>{{ __('ar/app.name') }}</th>
              <th>{{ __('ar/app.email') }}</th>
              <th>{{ __('ar/app.password') }}</th>
              <th>{{ __('ar/app.role') }}</th>
              <th>{{ __('ar/app.action') }}</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->password}}</td>
              <td>{{ $user->type}}</td>
              <td style="display: flex; justify-content:space-evenly"><a href="{{ route('admin.users.edit', $product->id) }} " class=" btn btn-primary btn-sm"><i class="fas fa-edit "></a></i>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button   class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                   </td>
                    </form>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>













@endsection
