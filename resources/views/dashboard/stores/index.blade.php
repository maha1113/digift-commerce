@extends('dashboard.index')

@section('content')



<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ __('ar/app.store') }}</h3>


        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">

            <a href="{{ route('admin.stores.create') }}" class="btn btn-info" role="button">{{ __('ar/app.create store') }}</a>
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
              {{-- <th>{{ __('ar/app.image') }}</th> --}}
              <th>{{ __('ar/app.name') }}</th>
              <th>{{ __('ar/app.status') }}</th>
              <th>{{ __('ar/app.action') }}</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($stores as $store)
            <tr>

                <td>{{ $store->id }}</td>
{{--
              <td><img width="100px" src= "{{ asset( 'storage/'. $store->image ) }}"  alt="image"></td> --}}
              <td>{{ $store->name }}</td>
              <td>{{ $store->status ? 'فعالة' : 'غير فعال' }}</td>
              <td style="display: flex; justify-content:space-evenly"><a href="{{ route('admin.stores.edit', $store->id) }} " class=" btn btn-primary btn-sm"><i class="fas fa-edit "></a></i>
                <form action="{{ route('admin.stores.destroy', $store->id) }}" method="post">
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
