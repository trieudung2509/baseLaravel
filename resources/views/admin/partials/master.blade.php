<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="d0Y26SsmlnNHefVVylr1b8e4PEVVonZ7zThX7LHE" />
    <title>
        @yield('title')
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/adminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('sitemapstyler/sitemapstyler.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('admin.partials.header')
<!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
@include('admin.partials.sidebar')
<!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
        @yield('content')
    <!-- /.content-wrapper -->
    @include('admin.partials.footer')
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.0 -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/app.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('sitemapstyler/sitemapstyler.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@yield('script')
</body>
</html>
