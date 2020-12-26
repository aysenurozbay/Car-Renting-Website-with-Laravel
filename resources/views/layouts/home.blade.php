<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renten - Car Rental Service HTML Template</title>
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




    @yield('headercss')
    @yield('headerjs')


</head>

<body>

<!--header -->

<div class="header-bottom">
    <div class="container">
        @include('home._header')

    </div>
    @include('home._slider')
</div>

<!-- header-bottom end -->

{{--İNDEX --}}


@include('home.index')

<!--footer -->
@include('home._footer')



@yield('footerjs')




</body>


<!-- jquery js link -->
<script src="{{asset('assets')}}/assets/js/jquery-3.3.1.min.js"></script>
<!-- jquery migrate js link -->
<script src="{{asset('assets')}}/assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js link -->
<script src="{{asset('assets')}}/assets/js/bootstrap.min.js"></script>
<!-- lightcase js link -->
<script src="{{asset('assets')}}/assets/js/lightcase.js"></script>
<!-- wow js link -->
<script src="{{asset('assets')}}/assets/js/wow.min.js"></script>
<!-- nice select js link -->
<script src="{{asset('assets')}}/assets/js/jquery.nice-select.min.js"></script>
<!-- datepicker js link -->
<script src="{{asset('assets')}}/assets/js/datepicker.min.js"></script>
<script src="{{asset('assets')}}/assets/js/datepicker.en.js"></script>
<!-- wickedpicker js link -->
<script src="{{asset('assets')}}/assets/js/wickedpicker.min.js"></script>
<!-- owl carousel js link -->
<script src="{{asset('assets')}}/assets/js/owl.carousel.min.js"></script>
<!-- jquery ui js link -->
<script src="{{asset('assets')}}/assets/js/jquery-ui.min.js"></script>
<!-- main js link -->
<script src="{{asset('assets')}}/assets/js/main.js"></script>

</html>



