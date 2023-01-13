<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('template/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- navbar -->
    @include('partials._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      @include('partials._settings-panel')
      <!-- partials/settings-panel -->

      <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebar')
      <!-- partial:partials/_sidebar.html end -->
      
      <!-- main-panel ends -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('template/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('template/js/template.js')}}"></script>
    <script src="{{asset('template/js/settings.js')}}"></script>
    <script src="{{asset('template/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('template/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/js/dashboard.js')}}"></script>
    <script src="{{asset('template/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>

