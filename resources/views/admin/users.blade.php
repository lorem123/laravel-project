@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-10">
              <h3 class="card-title">Users</h3>
            </div>
            <div class="col-2 align-items-end text-right">
              <h3 class="card-title"><a href="{{ route('admin.create') }}" class="nav-link">Add user</a></h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No.</th>
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
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
              <td>{{ $user->updated_at }}</td>
              <td>Edit</td>
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
