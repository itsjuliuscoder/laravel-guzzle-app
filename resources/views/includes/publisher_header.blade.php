<nav class="navbar navbar-custom navbar-expand-lg static-top box-effect1">
      <a class="navbar-brand ml-4" href="index.php"> <img src="../images/afrihow.png" alt="" class=" img-fluid"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i style="color: #fff;" data-feather="menu" data-toggle="tooltip" data-placement="bottom" title="Click to toggle"></i>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="btn btn-link mt-1 btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <span class="fas fa-bars" data-toggle="tooltip" data-placement="bottom" title="Click to shrink Side Navigation Bar"></span>
          </button>
          <!-- Navbar Search -->
          <div class="nav_search mr-auto">
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search Here...">
            </div>
          </div>

          <!-- Navbar -->
          <ul class="navbar-nav d-inline" id="mainNavbarCollapse">             
            <li class="list-inline-item dropdown notif">
              <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <div><h6>
                        @if($_COOKIE['profile_img'] == "upload an image")
                              <img src="../images/avatar/admin2.png" alt="Default Profile Image" class="img-thumbnail">
                          @else
                              <img src="{{$_COOKIE['profile_img']}}" alt="{{$_COOKIE['fullname']}} . Profile Picture">
                          @endif
                   </h6></div>
              </a>
              <div class="notif_row dropdown-menu  dropdown-menu-right profile-dropdown ">
                  <!-- item-->
                  <div class="dropdown-item noti-title">
                    <h5 class="text-overflow"><small>Hello, <b>{{$_COOKIE['fullname']}}</b></small> </h5>
                  </div>

                  <!-- item-->
                  <a href="/publisher/profile" class="dropdown-item notify-item">
                    <i data-feather="user"></i> <span>Profile</span>
                  </a>

                  <!-- item-->
                  <a href="/logout" class="dropdown-item notify-item">
                    <i data-feather="power"></i> <span>Logout</span>
                  </a>

              </div>
            </li>
          </ul>
        </div>
    </nav>