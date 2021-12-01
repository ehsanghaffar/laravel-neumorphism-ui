<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/png" alt="ehsan ghaffarii web developer icon" >
    <meta property="og:type" content="Personal blog" />
    <meta property="og:title" content="Ehsan Ghaffarii Personal Blog" />
    {{-- <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" /> --}}
    <meta name="twitter:title" content="Ehsan Ghaffarii Web Developer Personal Blog">
    {{-- <meta name="twitter:description" content="">
    <meta name="twitter:image" content=""> --}}
    <meta name="twitter:site" content="@ehsanghaffarii">
    <meta name="twitter:creator" content="@ehsanghaffarii">
    <link rel="stylesheet" href="{{ asset('css/neumorphism/neumorphism.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    @yield('styles')
</head>

<body>
@include('site.layouts.header')

@yield('content')

@include('site.layouts.footer')
<script src="{{ asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
@yield('scripts')
</body>

</html>
