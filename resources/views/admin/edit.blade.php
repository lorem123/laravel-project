@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="row">
    <div class="col-12">
    <div class="card card-primary">
<!--       <div class="card-header">
        <h3 class="card-title">User Create</h3>
      </div> -->
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      @if ($errors->any())
          <div class="alert alert-danger"><br/>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{route('admin.edit',[$user->id])}}" method="post" enctype="multipart/form-data">
       @csrf 
        <div class="card-body">
           <div class="form-group">
                <label><a class="btn btn-block bg-gradient-warning" href="{{ route('admin.users') }}">Back to user list</a></label>
            </div>          
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" id="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{old('name',$user->name)}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  id="email" name="email" placeholder="Enter email" value="{{old('email',$user->email)}}">
          </div>
<!--           <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div> -->
          <div class="input-group col-6">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="imagename" name="imagename">
            <label class="custom-file-label" for="exampleInputFile">Profile image</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection
