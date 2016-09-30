<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    {{--custom css--}}
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    {{--admin dashbord--}}
    <link rel="stylesheet" type="text/css" href="/libs/bootstrap/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="/libs/bootstrap/dist/css/bootstrap.css" >

    <link rel="stylesheet" type="text/css" href="/libs/metisMenu/dist/metisMenu.min.css">

    <link rel="stylesheet" type="text/css" href="/css/sb-admin-2.css" >

    <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css" >

</head>
<body>

@include('backend.navbar')

    @yield('content')
 <!-- /container -->


<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>

{{--<!-- jQuery -->--}}
{{--<script src="/libs/jquery/dist/jquery.min.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>--}}

<!-- Metis Menu Plugin JavaScript -->
<script src="/libs/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/sb-admin-2.js"></script>

</body>
</html>