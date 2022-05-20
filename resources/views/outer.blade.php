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
  <link rel="stylesheet" href="{{asset('starAdmin/css')}}/common.css">
  <!-- endinject -->

</head>

<body>
  <div class="container-scroller" style="background: #F4F5F7;">
    <!-- partial:../../partials/_navbar.html -->
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      

      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="width: 36%;">
        
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
                  @yield('body')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
