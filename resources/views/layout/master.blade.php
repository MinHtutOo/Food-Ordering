<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.softtechitltd.com/khadyo/khadyo/homepage2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 05:02:06 GMT -->
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title> @yield('title')</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{!!asset('/css/animate.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/meanmenu.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/fontawesome.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/magnific-popup.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/slick.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/jquery-ui.css')!!}">
    <link rel="stylesheet" href="{!!asset('/css/style.css')!!}">
</head>

<body>
  
@include('layout.header')

@yield('content')

@include('layout.footer')

<!-- Javascript Files -->
<script src="{!!asset('/js/vendor/jquery-2.2.4.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/bootstrap.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/jquery.meanmenu.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/jquery.magnific-popup.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/slick.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/counterup.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/countdown.js')!!}"></script>
<script src="{!!asset('/js/vendor/waypoints.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/jquery-ui.js')!!}"></script>
<script src="{!!asset('/js/vendor/isotope.pkgd.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/easing.min.js')!!}"></script>
<script src="{!!asset('/js/vendor/wow.min.js')!!}"></script>
<script src="{!!asset('/js/main.js')!!}"></script>

</body>


<!-- Mirrored from html.softtechitltd.com/khadyo/khadyo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 05:02:54 GMT -->
</html>