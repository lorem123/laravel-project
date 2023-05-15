@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  @if ($user->imagename)
                  <img src="{{ asset('images/' . $user->imagename) }}" class="img-thumbnail profile-user-img img-fluid img-circle" width="208" height="208">
                  @else 
                  <img src="{{ asset('images/profile.png') }}" class="img-thumbnail" width="208" height="208">
                  @endif
                </div>
                @if (isset($user->profile) && $user->profile->fname  &&  $user->profile->lname)
                <h3 class="profile-username text-center">{{ $user->profile->fname . ' ' . $user->profile->lname }}</h3>
                @endif

                <p class="text-muted text-center">Software Engineer</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>
                 @if (isset($user->profile) && $user->profile->skill)
                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  {{$user->profile->skill}}
                </p>
                @endif

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="{{ route('admin.users') }}">Back</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    @if ($errors->any())
                        <div class="alert alert-danger"><br/>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif                   
                    <form class="form-horizontal" method="post">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" id="fname" name="fname" class="form-control" id="fname" placeholder="Enter name" value="{{old('fname',$user->profile->fname  ?? '')}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" id="name" name="lname" class="form-control" id="lname" placeholder="Enter name" value="{{old('lname',$user->profile->lname  ?? '')}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" {{ isset($user->profile) && $user->profile->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ isset($user->profile) &&  $user->profile->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ isset($user->profile) &&  $user->profile->gender == 'other' ? 'selected' : '' }}>Other</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Date of Birth:</label>
                      <div class="input-group date col-sm-10" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="dob" id="dob">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>                     
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" name="skill" id="skill" value="{{old('lname',$user->profile->skill  ?? '' )}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection
