<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title & Description -->
    <meta name="description" content="">
    <title>{{ config('app.name', 'Evart Network') }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicon64.png" sizes="64x64" type="image/png">
    <link rel="icon" href="favicon96.png" sizes="96x96" type="image/png">
    <link rel="icon" href="favicon128.png" sizes="128x128" type="image/png">
    <link rel="icon" href="favicon512.png" sizes="512x512" type="image/png">

    <!-- Main -->
    <link rel="stylesheet" href="assets_front/css/main.css" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body class="@yield('body-class')">

@include('public.shared.navigation')

<main>
    @yield('content')
</main>

@yield('after-main')

@include('public.shared.footer')

<!-- Application -->
<script src="assets_front/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>