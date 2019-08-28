<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
	<title>Vedevi | @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="libs/WOW-master/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/khuyenmai.css')}}">
    <link rel="stylesheet" href="{{asset('css/chude-sk.css')}}">
    <!-- @yield('css') -->
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')

	
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/40e36cd30a.js"></script>
    <script type="text/javascript" src="libs/OwlCarousel2/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="libs/WOW-master/js/wow.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/style.js"></script>
    @yield('js')
</html>