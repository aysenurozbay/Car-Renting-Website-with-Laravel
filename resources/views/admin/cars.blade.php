@extends('layouts.admin')

@section('title','Car List')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Car List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
            </ol>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h4> <a href="{{route('admin_cars_add')}}"></a>
            </h4>

            <a href="{{route('admin_cars_add')}}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                <span class="text">Add Car</span>
            </a>
        </div>


        <div class="text-center">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Car List</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row"><div class="col-sm-12 col-md-6">

                                </div>
                                <div class="col-sm-12 col-md-6">

                                </div></div><div class="row"><div class="col-sm-12"><table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">
                                        <thead class="thead-light">

                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1">Category </th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Keywords</th>
                                            <th rowspan="1" colspan="1">Description</th>

                                            <th rowspan="1" colspan="1">Image</th>

                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="3">Actions</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1">Category </th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Keywords</th>
                                            <th rowspan="1" colspan="1">Description</th>


                                            <th rowspan="1" colspan="1">Image</th>

                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="3">Actions</th>

                                        </tr>
                                        </tfoot>

                                        <tbody>

                                        @foreach ($datalist as $dl)
                                            <p></p>
                                            <tr>
                                                <td>{{ $dl->id}}</td>
                                                <td>
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($dl->category, $dl->category->title) }}
                                                </td>
                                                <td>{{ $dl->title }}</td>
                                                <td>{{ $dl->keywords }}</td>
                                                <td>{{ $dl->description }}</td>
                                                <td>
                                                    @if($dl ->image)
                                                        <img src="{{Storage::url($dl->image)}}" height="30" alt="">

                                                    @endif
                                                </td>
                                                <td>
                                                    @if($dl ->status == 'True')
                                                    <h3 class="badge badge-success">{{ $dl->status }}</h3>

                                                    @elseif($dl ->status == 'False')
                                                         <span class="badge badge-danger">{{ $dl->status }}</span>
                                                    @endif
                                                </td>

                                                <td><a href="{{route('admin_image_add', ['car_id'=> $dl->id])}}"> <i class="fas fa-images"></i> </a></td>
                                                <td><a href="{{route('admin_cars_edit', ['id' => $dl->id])}}"> <i class="fas fa-edit"> </i></a></td>
                                                <td><a href="{{route('admin_cars_delete', ['id' => $dl->id])}}" onclick="return confirm('You are deleting this. Are you sure?' )"> <i class="fas fa-trash-alt"></i></a></td>
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
