<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AUS Baba</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 @include('includes.styles')
</head>
<body>
<!--Header Start-->
  @include('includes.header')
<!--Header End--> 


@if(Route::is('pages.index') )
<!--Banner Start-->
<div class="store-banner">
<img src="images/store-banner_1920x678.jpg" alt=""> </div>
<!--Banner End-->
@endif
<main class="main-container">
    @yield('content')
</main>


<!--Footer Start-->
@include('includes.footer')
<!--Footer End--> 
<!--============JSFILE==============--> 
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/viewportchecker.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
