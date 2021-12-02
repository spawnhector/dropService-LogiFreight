<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@themesberg">
    <meta name="twitter:title" content="Neumorphism UI by Themesberg">
    <meta name="twitter:description"
        content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">
    <meta name="twitter:creator" content="@themesberg">
    <meta name="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="{{ asset('css/neumorphism.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/drag.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    @livewireScripts
    @livewireStyles
    <!-- Core -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/headroom.js/dist/headroom.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('vendor/nouislider/distribute/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/prismjs/prism.js') }}"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Neumorphism JS -->
    <script src="{{ asset('js/neumorphism.js') }}"></script>
    <script src="{{ asset('js/drag.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    
    <script>
        Livewire.on('refreshField', postId => {
            $('.close').click()
        })
    </script>

    <style>
        .main-arrow-left{
            position: fixed;
            top: 18%;
            left: 2%;
        }
        .main-arrow-right{
            position: fixed;
            top: 18%;
            right: 2%;
        }
    </style>
</head>

<body>
    <header class="header-global">
        @include('layout.member.nav')
    </header>
    <main>
        @yield('body')
    </main>

    {{-- <a id="producthunt-badge"
        href="https://www.producthunt.com/posts/neumorphism-ui?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-neumorphism-ui"
        target="_blank"><img
            src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=200908&theme=dark"
            alt="Neumorphism UI - Neumorphism inspired UI web components, sections and pages | Product Hunt Embed"
            style="width: 250px; height: 54px;" width="250px" height="54px" /></a> --}}

    {{-- @include('layout.index.footer') --}}

    
</body>

</html>