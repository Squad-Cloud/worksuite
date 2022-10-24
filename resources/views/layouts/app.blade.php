<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Client | JurisLPM</title>
        <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <!-- Bootstrap Dropify CSS -->
        <link href="{{asset('assets/vendors/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- select2 CSS -->
        <link href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    
        <!-- CSS -->
        <link href="{{asset('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
<body>
    <div id="app">
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        
        @include('layouts.navtop')
        @include('layouts.nav')
    <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- /Wrapper -->

    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/feather.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    <script src="{{asset('assets/vendors/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/select2-data.js')}}"></script>
    <script src="{{asset('assets/vendors/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/dropify-data.js')}}"></script>
    <script src="{{asset('assets/dist/js/init.js')}}"></script>
    <script src="{{asset('assets/dist/js/contact-data.js')}}"></script>
    <script src="{{asset('assets/dist/js/chips-init.js')}}"></script>
    <!-- Tinymce JS -->
    <script src="{{asset('assets/vendors/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/tinymce-data.js')}}"></script>
    <script>
        $(function() {
          $('.singledate').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
          });
        });
        </script>
    @stack('scripts')
</body>
</html>
