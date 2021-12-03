<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Apex Charts -->
    <link type="text/css" href="{{asset('admin/vendor/apexcharts/apexcharts.css')}}" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    
    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('admin/vendor/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    
    <!-- Notyf -->
    <link type="text/css" href="{{asset('admin/vendor/notyf/notyf.min.css')}}" rel="stylesheet">
    
    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('admin/css/volt.css')}}" rel="stylesheet">

    @livewireStyles

    @livewireScripts

    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Vendor JS -->
    <script src="{{asset('admin/js/on-screen.umd.min.js')}}"></script>

    <!-- Slider -->
    <script src="{{asset('admin/js/nouislider.min.js')}}"></script>

    <!-- Smooth scroll -->
    <script src="{{asset('admin/js/smooth-scroll.polyfills.min.js')}}"></script>

    <!-- Apex Charts -->
    <script src="{{asset('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Charts -->
    <script src="{{asset('admin/chartist.min.js')}}"></script>
    <script src="{{asset('admin/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{asset('admin/sweetalert2.all.min.js')}}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="{{asset('admin/vendor/notyf/notyf.min.js')}}"></script>

    <!-- Simplebar -->
    <script src="{{asset('admin/simplebar.min.js')}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    <!-- Volt JS -->
    <script src="{{asset('admin/volt.js')}}"></script>


</head>

<body>
    @yield('body')
</body>

</html>