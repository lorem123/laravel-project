@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
      </div>
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  id="emailAddress" name="emailAddress"placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
