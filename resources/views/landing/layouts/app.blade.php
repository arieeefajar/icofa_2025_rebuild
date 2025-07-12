<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $config['conference']->name }}</title>
    <meta name="description" content="{{ $config['conference']->name }}">
    <meta name="keywords" content="{{ Str::slug(strip_tags($config['conference']->alias)) }}">
    <meta name="theme-color" content="{{ $config['conference']->theme_color }}">
    @if (request()->input('page') == '')
        <meta property="og:title" content="{{ strip_tags($config['conference']->alias) }}">
        <meta property="og:description" content="{{ $config['conference']->name }}">
        <meta property="og:image" content="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}">
        <meta property="og:url" content="{{ url('/') }}">
    @else
        <meta property="og:title" content="{{ strip_tags($page['title']) }}">
        <meta property="og:description" content="This is content of Page Entitle {{ $page['title'] }}">
        <meta property="og:image" content="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
    @endif

    <!-- Favicons -->
    <link href="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}" rel="icon">
    <link href="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url(asset('assets/vendor/bootstrap/css/bootstrap.min.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('assets/vendor/aos/aos.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('assets/vendor/glightbox/css/glightbox.min.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('assets/vendor/swiper/swiper-bundle.min.css')) }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ url(asset('assets/css/main.css')) }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Strategy
  * Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('landing.partials.header')

    <main class="main">

        @yield('content')

    </main>

    @include('landing.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ url(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/php-email-form/validate.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/aos/aos.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/glightbox/js/glightbox.min.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/swiper/swiper-bundle.min.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')) }}"></script>
    <script src="{{ url(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')) }}"></script>

    <!-- Main JS File -->
    <script src="{{ url(asset('assets/js/main.js')) }}"></script>

</body>

</html>
