@extends('layouts.admin')

@section('title','User List')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">User List</li>
            </ol>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h4> <a href="{{route('admin_cars_add')}}"></a>
            </h4>

{{--            <a href="{{route('admin_cars_add')}}" class="btn btn-secondary btn-icon-split">--}}
{{--                    <span class="icon text-white-50">--}}
{{--                      <i class="fas fa-arrow-right"></i>--}}
{{--                    </span>--}}
{{--                <span class="text">Add User</span>--}}
{{--            </a>--}}
        </div>


        <div class="text-center">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row"><div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTableHover_length">
                                        @include('home.message')
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6"><div id="dataTableHover_filter" class="dataTables_filter"><label>
                                            </label></div></div></div><div class="row"><div class="col-sm-12"><table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">
                                        <thead class="thead-light">

                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1"></th>
                                            <th rowspan="1" colspan="1">Name </th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Phone</th>
                                            <th rowspan="1" colspan="1">Address</th>
                                            <th rowspan="1" colspan="2">Actions</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1"></th>
                                            <th rowspan="1" colspan="1">Name </th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Phone</th>
                                            <th rowspan="1" colspan="1">Address</th>
                                            <th rowspan="1" colspan="2">Actions</th>

                                        </tr>
                                        </tfoot>

                                        <tbody>

                                        @foreach ($datalist as $dl)
                                            <p></p>
                                            <tr>
                                                <td>{{ $dl->id}}</td>
                                                <td>
                                                    @if($dl->profile_photo_path)
                                                        <img src="{{Storage::url($dl->profile_photo_path)}}" height="50" style="border-radius:5px">
                                                    @endif
                                                </td>
                                                <td>{{ $dl->name }}</td>
                                                <td>{{ $dl->phone }}</td>
                                                <td>{{ $dl->address }}</td>
                                                <td>
                                                    @foreach($dl->roles as $row)
                                                        {{$row->name}} ,
                                                    @endforeach
                                                    <a href="{{route('admin_user_roles',['id' => $dl->id])}}"  target="_blank">
{{--                                                        onclick="return !window.open(this.href, '','top=50 left=100 width=800, height=600')" --> yeni sayfada açmak için--}}
                                                        <i class="fas fa-plus-square"></i>
                                                    </a>
                                                </td>
                                                <td><a href="{{route('admin_users_edit', ['id' => $dl->id])}}"> <i class="fas fa-edit"> </i></a></td>
                                                <td><a href="{{route('admin_users_delete', ['id' => $dl->id])}}" onclick="return confirm('You are deleting this. Are you sure?')"> <i class="fas fa-trash-alt"></i></a></td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">

                                </div>
{{----}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--            @foreach ($datalist as $dl)--}}
            {{--                <p>{{ $dl->title }}</p>--}}
            {{--            @endforeach--}}

        </div>

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="login.html" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!---Container Fluid-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



@endsection

@section('footer')





{{--    <link href="{{asset('assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
{{--    <script src="{{asset('assets')}}/admin/vendor/jquery/jquery.min.js"></script>--}}
{{--    <script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="{{asset('assets')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>--}}
{{--    <script src="{{asset('assets')}}/admin/js/ruang-admin.min.js"></script>--}}
{{--    <!-- Page level plugins -->--}}
{{--    <script src="{{asset('assets')}}/admin/vendor/datatables/jquery.dataTables.min.js"></script>--}}
{{--    <script src="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>--}}

    <!-- Page level custom scripts -->

    <script>
        $(document).ready(function () {

            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

@endsection
