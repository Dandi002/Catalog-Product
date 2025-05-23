<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset ('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset ('admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset ('admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset ('admin/images/favicon.png')}}" />
    @stack('style')
</head>

<body>
<div class="container-scroller">
    @yield('content')
    <!-- page-body-wrapper ends -->
  </div>
     
    
    
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset ('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset ('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset ('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset ('admin/js/template.js')}}"></script>
  <script src="{{asset ('admin/js/settings.js')}}"></script>
  <script src="{{asset ('admin/js/todolist.js')}}"></script>
  @stack('scripts')
  <!-- endinject -->
</body>

</html>
