@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="row">
    <div class="col-12">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-10">
              <h3 class="card-title">Products</h3>
            </div>
            <div class="col-2 align-items-end text-right">
              <h3 class="card-title"><a href="{{ route('admin.product.create') }}" class="nav-link btn btn-info">Add Product</a></h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>status</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($products as $product)
                    
            <tr>
               <td>{{ $loop->iteration }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->is_active }}</td>
              <td>{{ $product->vendor }}</td>
              <td>{{ $product->updated_at }}</td>
              <td><a class="btn btn-primary btn-sm" href="{{ route('admin.profile',$product->id) }}"><i class="fas fa-folder"></i></a> <a href="{{ route('admin.edit',$product->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt mr-1"></i></a> <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
