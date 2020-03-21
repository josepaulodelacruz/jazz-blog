<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Jazz</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('icon-fonts/web-design/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/pink.css') }}">


</head>
<body>
<div id="app">

</div>

<script src="{{ mix('js/app.js') }}"></script>

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easytabs.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- for color alternatives -->
<script src="{{ asset('js/jquery.cookie-1.4.1.min.js') }}"></script>
<script src="{{ asset('js/Demo.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/Demo.min.css') }}" />





</body>
</html>
