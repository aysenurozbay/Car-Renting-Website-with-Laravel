<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
    @yield('javascript')
</head>

<body id="page-top">

    <div id="wrapper">
        @include('admin._slider')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin._header')
                @yield('content')
            </div>
        @include('admin._footer')
        @yield('footer')
        </div>

    </div> {{--wrapper--}}






    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{asset('assets')}}/admin/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/ruang-admin.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/demo/chart-area-demo.js"></script>
</body>

</html>
