<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-theme-mode="light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @hasSection('title')

        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="web development agency">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Style CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js',  'resources/js/theme/layout.js', 'resources/js/theme/main.js'])

    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-body-light dark:bg-dark-body">
<div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
    <img src="/assets/images/dot-loader.gif" alt="loader">
</div>

@include('layouts.tenant._partials.impersonate')

<div class="main-content m-4">
    @yield('base-body')
</div>
<!-- End Main Content -->

<script src="/assets/js/vendor/jquery.min.js"></script>
<script src="/assets/js/vendor/flowbite.min.js"></script>
<script src="/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
<script src="/assets/js/component/app-menu-bar.js"></script>
</body>
</html>
