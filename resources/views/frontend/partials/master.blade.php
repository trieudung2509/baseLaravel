<!DOCTYPE html>
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <title>Thương Gia 24h</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <!-- link(rel="icon", href="favicon-32x32.png", type="image/x-icon", sizes="32x32")-->

    <!-- WEB FONTS-->

    <!-- STYLESHEETS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
    <!-- link(rel="stylesheet", href="temp/slick.min.css")-->
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>

<body>
<div class="wrapper">
    @include('frontend.partials.header')
    <!-- /.main-header-->
    @yield('content')
    @include('frontend.partials.footer')
</div>

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
