<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reservation System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/feather/feather.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/select2/select2.min.css">
  <link rel="stylesheet" href="{{asset('starAdmin/vendors')}}/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('starAdmin/css')}}/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="stylesheet" href="{{asset('starAdmin/css')}}/common.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold">{{auth()->user()->firstName." ".auth()->user()->lastName}}</span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li><a href="{{route('logout')}}">logout</a></li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      

      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservations')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">My Reservations</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservationForm')}}">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Create reservation</span>
              <i class="menu-arrow"></i>
            </a>
          </li>


  

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

        @yield('body')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Bus reservation system.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Reserve your seat today</span>
          </div>
        </footer>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('starAdmin/vendors')}}/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('starAdmin/vendors')}}/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="{{asset('starAdmin/vendors')}}/select2/select2.min.js"></script>
  <script src="{{asset('starAdmin/vendors')}}/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('starAdmin/js')}}/off-canvas.js"></script>
  <script src="{{asset('starAdmin/js')}}/hoverable-collapse.js"></script>
  <script src="{{asset('starAdmin/js')}}/template.js"></script>
  <script src="{{asset('starAdmin/js')}}/settings.js"></script>
  <script src="{{asset('starAdmin/js')}}/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('starAdmin/js')}}/file-upload.js"></script>
  <script src="{{asset('starAdmin/js')}}/typeahead.js"></script>
  <script src="{{asset('starAdmin/js')}}/select2.js"></script>
  <!-- End custom js for this page-->
  @yield('scripts')
</body>

</html>
