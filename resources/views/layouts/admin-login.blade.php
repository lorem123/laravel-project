<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.admin.head')
</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div>
      @yield('content')
    </div>
   @include('includes.admin.scripts')
  </body>
</html>