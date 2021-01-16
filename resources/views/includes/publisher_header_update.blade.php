<nav class="navbar navbar-custom navbar-expand-lg static-top box-effect1">
      <a class="navbar-brand ml-4" href="index.php"> <img src="../../images/afrihow.png" alt="" class=" img-fluid"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff !important;">
            <i style="color: #fff !important;" class="icon-grid"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
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
              <a class="nav-link n dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <i data-feather="bell"></i>
              </a>
              <div class="notif_row dropdown-menu  dropdown-menu-right dropdown-arrow dropdown-lg">
                  <!-- item-->
                  <div class="dropdown-item noti-title">
                      <h5><small><span class="label label-danger pull-xs-right">5</span>Alerts</small></h5>
                  </div>

                  <!-- item-->
                  <a href="#" class="dropdown-item notify-item">
                      <div class="notify-icon bg-faded">
                          <img src="../../images/avatar/avatar3.png" alt="Profile Picture" class="rounded-circle img-fluid">
                      </div>
                      <p class="notify-details">
                          <b>John Doe</b>
                          <span>User registration</span>
                          <small class="text-muted">3 minutes ago</small>
                      </p>
                  </a>

                  <!-- item-->
                  <a href="#" class="dropdown-item notify-item">
                      <div class="notify-icon bg-faded">
                          <img src="../images/avatar/avatar3.png" alt="img" class="rounded-circle img-fluid">
                      </div>
                      <p class="notify-details">
                          <b>Michael Cox</b>
                          <span>Task 2 completed</span>
                          <small class="text-muted">12 minutes ago</small>
                      </p>
                  </a>

                  <!-- item-->
                  <a href="#" class="dropdown-item notify-item">
                      <div class="notify-icon bg-faded">
                          <img src="../images/avatar/avatar3.png" alt="img" class="rounded-circle img-fluid">
                      </div>
                      <p class="notify-details">
                          <b>Michelle Dolores</b>
                          <span>New job completed</span>
                          <small class="text-muted">35 minutes ago</small>
                      </p>
                  </a>

                  <!-- All-->
                  <a href="#" class="dropdown-item notify-item notify-all">
                      View All Allerts
                  </a>
              </div>
            </li>
            <li class="list-inline-item dropdown notif">
              <a class="nav-link dropdown-toggle n nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <div><h6><img src="../../images/avatar/admin2.png" alt="Profile image" class="avatar-rounded">&nbsp;  </h6></div>
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