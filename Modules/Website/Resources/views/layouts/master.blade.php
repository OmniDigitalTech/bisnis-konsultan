<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="title" content="Snapbiz Consulting">
    <meta name="description" content="
        Dengan pengalaman luas dalam analisis data, strategi pemasaran, dan manajemen operasional.
        Kami adalah mitra terpercaya untuk membantu pertumbuhan bisnis Anda.">
    <meta name="keywords" content="
        bisnis, konsultan, konsultasi, akuntansi, audit, laporan keuangan, business, consultant,
         consulting, accounting, audit, financial reports">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow" />
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Omni Digital Technology">

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset("build/images/favicons/apple-touch-icon-57x57.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset("build/images/favicons/apple-touch-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset("build/images/favicons/apple-touch-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset("build/images/favicons/apple-touch-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset("build/images/favicons/apple-touch-icon-114x114.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset("build/images/favicons/apple-touch-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset("build/images/favicons/apple-touch-icon-144x144.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset("build/images/favicons/apple-touch-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset("build/images/favicons/apple-touch-icon-180x180.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset("build/images/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset("build/images/favicons/android-chrome-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset("build/images/favicons/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ URL::asset("build/images/favicons/site.webmanifest") }}">
    <link rel="mask-icon" href="{{ URL::asset("build/images/favicons/safari-pinned-tab.svg") }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ URL::asset("build/images/favicons/favicon.ico") }}">
    <meta name="apple-mobile-web-app-title" content="Snapbiz Consulting">
    <meta name="application-name" content="Snapbiz Consulting">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-TileImage" content="{{ URL::asset("build/images/favicons/mstile-144x144.png") }}">
    <meta name="msapplication-config" content="{{ URL::asset("build/images/favicons/browserconfig.xml") }}">
    <meta name="theme-color" content="#ffffff">

    @include('website::layouts.head-css')
</head>

@yield('body')

@yield('content')

@include('website::layouts.vendor-scripts')
</body>
</html>
