@extends('layouts.master')
@section('content')  
  <section class="vh-100 gradient-custom">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="" method="post">
               @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="firstName">Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-6">
                    <label class="form-label" for="Password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection