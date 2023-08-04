<!doctype html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset = "utf-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name = "csrf-token" content = "{{ csrf_token() }}">

    <title>{{ ('Deteksi Penyakit Kucing') }}</title>

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel = "stylesheet" href = "{{asset('backend/plugins/fontawesome-free/cs/all.min.css') }}">
  <link rel = "stylesheet" href = "{{asset('backend/plugins/overlayScrollbars/cs/OverlayScrollbars.min.css') }}">
  <link rel = "stylesheet" href = "{{asset('backend/dist/css/adminlte.min.css')}}"> --}}
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

</head>
<body class = "hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div  class = "wrapper">

  <!-- Preloader -->
  <!-- <div class = "preloader flex-column justify-content-center align-items-center">
  <img class = "animation__wobble" src = "{{asset('backend/dist/img/AdminLTELogo.png')}}" alt = "AdminLTELogo" height = "60" width = "60">
  </div> -->
<!-- Navbar -->

        @auth
            @if (auth()->user()->role === 'Admin')
                <!-- Navbar and Sidebar for Admin -->
                @include('layouts.navbar')
                @include('layouts.sidebar')
               
            @else
                <!-- Navbar and Sidebar for User -->
                @include('layouts.navbar')
                @include('layouts.sidebar')
                
            @endif
        @endauth

        <div class="content-wrapper">
            @yield('content')
        </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer           class                    = "main-footer">
  <strong>Copyright &copy; 2022-2023 <a href = "https://kucingbegal.com">KucingBegal.com</a>.</strong>
    All rights reserved.
    <div class = "float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

{{-- <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<script src = "{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src = "{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src = "{{asset('backend/dist/js/adminlte.js')}}"></script>
<script src = "{{asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src = "{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>
<script src = "{{asset('backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src = "{{asset('backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src = "{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<script src = "{{asset('backend/dist/js/demo.js')}}"></script>
<script src = "{{asset('backend/dist/js/pages/dashboard2.js')}}"></script> --}}
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons"   : ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging"      : true,
        "lengthChange": false,
        "searching"   : false,
        "ordering"    : true,
        "info"        : true,
        "autoWidth"   : false,
        "responsive"  : true,
      });
    });
  </script>
  <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
</body>
</html>