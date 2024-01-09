<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <!-- <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form> -->
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              {{ __('Stats') }}
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              {{ __('Some Actions') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <!-- <a class="dropdown-item" href="#">{{ __('Profile') }}</a>
            <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar Dark -->
<!-- <nav
  class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand text-white" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Soft UI Dashboard
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <div class="row">
          <div class="col-auto m-auto">
            <a class="text-white cursor-pointer">
              <i class="fa fa-cog fixed-plugin-button-nav"></i>
            </a>
          </div>
          <div class="col-auto m-auto">
            <div class="dropdown">
              <a class="text-white cursor-pointer" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                ...
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="bg-white border-radius-lg d-flex me-2">
              <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
              <button class="btn bg-gradient-primary my-1 me-1">Search</button>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav> -->
<!-- End Navbar -->