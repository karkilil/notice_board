<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <link href="/css/app.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="dist/css/bootstrap-material-design.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="dist/css/ripples.min.css" type="text/css" rel="stylesheet" media="screen" />
    {{--font-awesome--}}
    {{--<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">--}}
    {{--materialize--}}


    @yield('styles')
</head>
<body>
{{--<img class="img" src="img/noticeBoard.png" alt="rect">--}}
        <!-- our markup -->


<!-- an image for demonstration purposes -->
{{--
<img src="img/noticeBoard.png" width="782" height="100" alt="Big Image"/>
--}}

@include('frontend.header');
<div class="container">


        @yield('content')<!-- /container -->

</div>


@include('frontend.footer')
<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap -->
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="dist/js/material.min.js" />
<script type="text/javascript" src="dist/js/ripples.min.js" />
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
@yield('script')
{{--<script type="text/javascript">
    $.material.init()
</script>--}}
</body>
</html>