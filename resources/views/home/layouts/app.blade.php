<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('home/assets/images/favicon.png') }}" />
</head>

<body>
    @yield('content')
     <!-- plugins:js -->
     <script src="{{ asset('home/assets/vendors/js/vendor.bundle.base.js') }}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{{ asset('home/assets/vendors/chart.js/Chart.min.js') }}"></script>
     <script src="{{ asset('home/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
     <script src="{{ asset('home/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
     <script src="{{ asset('home/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
     <script src="{{ asset('home/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{{ asset('home/assets/js/off-canvas.js') }}"></script>
     <script src="{{ asset('home/assets/js/hoverable-collapse.js') }}"></script>
     <script src="{{ asset('home/assets/js/misc.js') }}"></script>
     <script src="{{ asset('home/assets/js/settings.js') }}"></script>
     <script src="{{ asset('home/assets/js/todolist.js') }}"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="{{ asset('home/assets/js/dashboard.js') }}"></script>
     <!-- End custom js for this page -->
</body>

</html>
