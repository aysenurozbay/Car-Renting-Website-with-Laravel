<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>Admin Panel</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <link href="{{asset('assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
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


</body>

</html>
