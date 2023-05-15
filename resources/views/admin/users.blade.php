@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
              <h3 class="card-title">Users</h3>
            </div>
            <div class="col-2 align-items-end text-right">
              <h3 class="card-title"><a href="{{ route('admin.create') }}" class="nav-link btn btn-info">Add user</a></h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($users as $user)
                    
            <tr>
               <td>{{ $loop->iteration }}</td>
              <td><ul class="list-inline"><li class="list-inline-item">
                @if ($user->imagename)
                  <img src="{{ asset('images/' . $user->imagename) }}" class="img-circle" width="50" height="50">
                  @else 
                  <img src="{{ asset('images/profile.png') }}" class="img-circle" width="50" height="50">
                  @endif                
              </li></td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
              <td>{{ $user->updated_at }}</td>
              <td><a class="btn btn-primary btn-sm" href="{{ route('admin.profile',$user->id) }}"><i class="fas fa-folder"></i></a> <a href="{{ route('admin.edit',$user->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt mr-1"></i></a> <a class="btn btn-danger btn-sm" href="{{route('admin.user.destroy', $user->id)}}"><i class="fas fa-trash"></i></a><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button></td>
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

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  
@endsection
