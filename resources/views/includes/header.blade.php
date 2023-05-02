<header class="header">
  <div class="top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="top-welcome">Welcome to ecommerce, let's subscribe our newsletter to GET special promotion 50% OFF all items</div>
        </div>
        <div class="col-lg-6">
          <div class="top-head-col">
            <div class="track-order"> <i class="fas fa-truck"></i>
              <p>Track Your Order </p>
            </div>
            <div class="hotline"> <i class="fas fa-phone-alt"></i>
              <p>Hotline (+123)4 567 890</p>
            </div>
            <div class="currency-dropdown">
              <select name="" class="form-control">
                <option>$ US Dollor</option>
                <option>&pound;GBP Dollor</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container relative">
    <div class="d-flex flex-wrap">
      <div class="d-flex flex-wrap mr-auto align-items-center"> <a href="#" class="logo"><img src="images/logo.png" alt="" ></a>
        <div class="search-btn-mobile d-lg-none"><i class="fas fa-search"></i></div>
        <div class="search-field">
          <div class="input-group">
            <div class="category-select">
              <select name="" class="form-control">
                <option>All Category</option>
              </select>
            </div>
            <input type="text" class="form-control" placeholder="Search ">
            <div class="input-group-append">
              <button class="btn search-btn " type="button"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="header-top-right d-flex flex-wrap ml-auto">
        <ul class="d-flex">
          <li class="d-flex align-items-center"> <a href="#"> <i class="fas fa-shopping-cart"></i> My Cart - 0 item(s) </a> </li>
          <li class="d-flex align-items-center"> <a href="#"> <i class="fas fa-user"></i> Login / Register </a> </li>
        </ul>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-cllapse" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
      <div class="collapse navbar-collapse" id="nav-cllapse">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link " href="{{ route('pages.index') }}" >Home</a> </li>
          <li class="nav-item active"> <a class="nav-link" href="{{ route('pages.about') }}">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('user.register') }}">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
