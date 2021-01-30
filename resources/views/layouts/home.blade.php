<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <title>@yield('title')</title>

    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/assets/images/favicon.jpg"/>
    <!-- fontawesome css link -->

    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/bootstrap.min.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/lightcase.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/animate.css">
    <!-- nice select css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/nice-select.css">
    <!-- datepicker css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/datepicker.min.css">
    <!-- wickedpicker css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/wickedpicker.min.css">
    <!-- jquery ui css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/jquery-ui.min.css">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/owl.carousel.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/main.css">

    @yield('css')
    @yield('headerjs')
</head>
<body>
    @include('.home._header')

{{--    @include('.home._slider')--}}
{{--        @include('home.index')--}}





    @section('content')

    @show





    {{--En of content--}}



    @include('home._footer')
    @yield('footerjs')

</body>

</html>
