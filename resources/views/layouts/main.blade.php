<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PBL Career</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('royalui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('royalui/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('royalui/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('royalui/images/logo-mini.png') }}" />
</head>

<body>

    <div class="container-scroller">
        
        @yield('header')

        <div class="container-fluid page-body-wrapper">

            @yield('sidebar')

            <div class="main-panel">

                @yield('content')

                @yield('footer')
                
            </div>

        </div>
    </div>
    <!-- jquery -->
    <script src="{{ asset('royalui/js/jquery.min.js') }}"></script>

    <!-- tinymce -->
    <script src="{{ asset('royalui/vendors/tinymce/tinymce.min.js') }}"></script>

    <!-- plugins:js -->
    <script src="{{ asset('royalui/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('royalui/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('royalui/js/off-canvas.js') }}"></script>
    <script src="{{ asset('royalui/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('royalui/js/template.js') }}"></script>
    <script src="{{ asset('royalui/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('royalui/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>

@yield('script')