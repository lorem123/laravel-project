@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <form method="post" enctype="multipart/form-data">
         @csrf
        <div class="row">
           <div class="form-group">
                <label><a class="btn btn-block bg-gradient-warning" href="{{ route('admin.products') }}">Back to product list</a></label>
            </div>
        </div>
        <div class="row">
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
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Product Name</label>
                  <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Description</label>
                  <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group increment">
                  <label for="inputDescription">Media</label>
                  <input type="file" name="filename[]" multiple>
                  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
                <div class="clone d-none">
                  <div class="form-group">
                    <label for="inputDescription">Media</label>
                    <input type="file" name="filename[]" multiple>
                      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputProjectLeader">Price</label>
                  <input type="text" id="inputProjectLeader" class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-4">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Product organization</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputEstimatedBudget">Vendor</label>
                  <input type="number" id="inputEstimatedBudget" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option selected disabled>Select status</option>
                    <option>Active</option>
                    <option>Draft</option>
                  </select>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Submit" class="btn btn-success float-right">
                </div>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </form>

@endsection
