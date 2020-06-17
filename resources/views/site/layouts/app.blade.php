<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/png" alt="ehsan ghaffarii web developer icon" >
    <title>Ehsanghaffarii Blog</title>
    <meta name="description" content="Ehsan Ghaffarii Web Developer Personal Blog, Developed By PHP Language and Laravel Framework">
    <!-- Seo Meta Tags (og) -->
    <meta property="og:type" content="Personal blog" />
    <meta property="og:title" content="Ehsan Ghaffarii Personal Blog" />
    {{-- <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" /> --}}
    <!-- seo meta tags (twitter) -->
    <meta name="twitter:title" content="Ehsan Ghaffarii Web Developer Personal Blog">
    {{-- <meta name="twitter:description" content="">
    <meta name="twitter:image" content=""> --}}
    <meta name="twitter:site" content="@ehsanghaffarii">
    <meta name="twitter:creator" content="@ehsanghaffarii">
    <link rel="canonical" href="{{ route('homePage') }}">
    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/neumorphism/neumorphism.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    @yield('styles')
</head>

<body>
@include('site.layouts.header')

@yield('content')

@include('site.layouts.footer')

<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js')}}"></script>

@yield('scripts')
</body>

</html>
