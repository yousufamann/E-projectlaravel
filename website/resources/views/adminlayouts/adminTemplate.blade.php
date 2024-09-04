<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('adminAssets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('adminAssets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="{{asset('adminAssets/text/css" href="js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('adminAssets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('adminAssets/images/favicon.png')}}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="/dashboard"><img src="{{asset('adminAssets/images/logo.svg')}}" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('adminAssets/images/logo-mini.svg')}}" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            {{-- <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="icon-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul> --}}
            <ul class="navbar-nav navbar-nav-right">
              <p class="nav-item mt-2">{{Auth::user()->name}}</p>
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{asset('adminAssets/images/faces/face28.jpg')}}" alt="profile"/>
                  </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="ti-settings text-primary"></i>
                    Settings
                  </a>
                  <a class="dropdown-item">
                    <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-outline-info form-control">logout</button>
                  </form>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_settings-panel.html -->
          <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
              <i class="settings-close ti-close"></i>
              <p class="settings-heading">Admin</p>
              <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
              <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
              <p class="settings-heading mt-2">HEADER SKINS</p>
              <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
              </div>
            </div>
          </div>
          <!-- partial -->
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/product">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Product Management</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addproduct">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Add products</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addtestingtypes">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Add TestingTypes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/testing">
                  <i class="icon-bar-graph menu-icon"></i>
                  <span class="menu-title">Testing Management</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <i class="icon-grid-2 menu-icon"></i>
                  <span class="menu-title">Tables</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <i class="icon-contract menu-icon"></i>
                  <span class="menu-title">Icons</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              @yield('admincontent')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
              </div>
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('adminAssets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('adminAssets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('adminAssets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminAssets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('adminAssets/js/dataTables.select.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('adminAssets/js/off-canvas.js')}}"></script>
<script src="{{asset('adminAssets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('adminAssets/js/template.js')}}"></script>
<script src="{{asset('adminAssets/js/settings.js')}}"></script>
<script src="{{asset('adminAssets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('adminAssets/js/dashboard.js')}}"></script>
<script src="{{asset('adminAssets/js/Chart.roundedBarCharts.js')}}"></script>
<!-- End custom js for this page-->
</body>
</html>
