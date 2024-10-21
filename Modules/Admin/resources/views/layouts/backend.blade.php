<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

    @yield('js')
</head>

<body>
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        @include('admin::layouts.aside')
        <!-- END Side Overlay -->

        @include('admin::layouts.sidebar')

        <!-- END Sidebar -->


        @include('admin::layouts.header')


        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        @include('admin::layouts.footer')
    </div>
    <!-- END Page Container -->
</body>

</html>
