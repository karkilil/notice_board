<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    {{--font-awesome--}}
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
    {{--materialize--}}
    {{--<link rel="stylesheet" href="/materialize/css/materialize.min.css">--}}
</head>
<body>
<img class="img" src="img/4.png" alt="rect">

<div class="container">

    @yield('content')<!-- /container -->

</div>

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
{{--materialize--}}
{{--<script src="/materialize/js/materialize.min.js"></script>--}}

</body>
</html>