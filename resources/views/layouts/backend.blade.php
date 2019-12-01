<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dates_Ghaban | Dashboard')</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css') }}">
    <!-- Material Kit CSS -->
    <link href="{{ secure_asset('backend/css/material-dashboard.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}" integrity="sha384-R334r6kryDNB/GWs2kfB6blAOyWPCxjdHSww/mo7fel+o5TM/AOobJ0QpGRXSDh4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('backend/css/style.css') }}">

    <!-- Styles -->
    @stack('css')

</head>
<body class="">


  <!-- <div class="wrapper">

    @include('admin.backend.partials._sidebar')

    <div class="main-panel">

      @include('admin.backend.partials._navbar')

      <div class="content">
        <div class="container-fluid">

          @yield('content')

        </div>
      </div>

      @include('admin.backend.partials._footer')

    </div>
  </div> -->

    <!--   Core JS Files   -->
  <script src="{{ secure_asset('backend/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ secure_asset('backend/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ secure_asset('backend/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>

  <!-- Plugin for the Perfect Scrollbar -->
  <script src="{{ secure_asset('backend/js/plugins/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>

  <!-- Plugin for the momentJs  -->
  <script src="{{ secure_asset('backend/js/plugins/moment.min.js') }}" type="text/javascript"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="{{ secure_asset('backend/js/plugins/sweetalert2.js') }}" type="text/javascript"></script>

  <!-- Forms Validations Plugin -->
  <script src="{{ secure_asset('backend/js/plugins/jquery.validate.min.js') }}" type="text/javascript"></script>

  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ secure_asset('backend/js/plugins/jquery.bootstrap-wizard.js') }}" type="text/javascript"></script>

  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ secure_asset('backend/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ secure_asset('backend/js/plugins/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ secure_asset('backend/js/plugins/bootstrap-tagsinput.js') }}" type="text/javascript"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ secure_asset('backend/js/plugins/jasny-bootstrap.min.js') }}" type="text/javascript"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ secure_asset('backend/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}" integrity="sha384-Ltf3zlo018jgSFarBV4ZXF8GxwymfafIj3qWz3rrjhL8hTVd2XzglHH+BCuIKnbk" crossorigin="anonymous" type="text/javascript"></script>

  <!-- Library for adding dinamically elements -->
  <script src="{{ secure_asset('backend/js/plugins/arrive.min.js') }}" type="text/javascript"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ secure_asset('backend/js/material-dashboard.min.js') }}" type="text/javascript"></script>
  <script src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}" integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS" crossorigin="anonymous" type="text/javascript"></script>


  {!! Toastr::message() !!}
    <!-- Scripts -->
    @stack('js')

</body>
</html>
