<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    {{-- <!-- Google Font: Source Sans Pro --> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- <!-- Font Awesome --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    {{-- <!-- Ionicons --> --}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    {{-- <!-- Tempusdominus Bootstrap 4 --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    {{-- <!-- iCheck --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    {{-- <!-- JQVMap --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/jqvmap/jqvmap.min.css">
    {{-- <!-- Theme style --> --}}
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    {{-- <!-- overlayScrollbars --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    {{-- <!-- Daterange picker --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
    {{-- <!-- summernote --> --}}
    <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">
    @yield('link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>

        @extends('admin.layout.sidebar')

        <div class="content-wrapper">
            @yield('path')

            <section class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="https://ride.dasayarenterprise.com">RIDE</a>.</strong>
            All rights reserved.
            {{-- <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div> --}}
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    {{-- <!-- jQuery --> --}}
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    {{-- <!-- jQuery UI 1.11.4 --> --}}
    <script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
    <script src="/adminlte/plugins/sparklines/sparkline.js"></script>
    <script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.js"></script>

    <script src="/adminlte/dist/js/pages/dashboard.js"></script>
    @yield('js')
</body>

</html>
