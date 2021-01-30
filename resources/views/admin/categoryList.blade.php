@extends('layouts.admin')

@section('title','Category List')


@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
            </ol>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h4> <a href="{{route('admin_category_add')}}"></a>
            </h4>

            <a href="{{route('admin_category_add')}}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                <span class="text">Add Category</span>
            </a>
        </div>


        <div class="text-center">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row"><div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTableHover_length">
                                        <label>Show
                                            <select name="dataTableHover_length" aria-controls="dataTableHover" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option><option value="25">25</option>
                                                <option value="50">50</option><option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6"><div id="dataTableHover_filter" class="dataTables_filter"><label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTableHover"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">
                                        <thead class="thead-light">
                                        <tr role="row">
                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1">Parent Id</th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Keywords</th>
                                            <th rowspan="1" colspan="1">Description</th>
                                            <th rowspan="1" colspan="1">Slug</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="2">Actions</th>
                                        </tr>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Id</th>
                                            <th rowspan="1" colspan="1">Parent Id</th>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Keywords</th>
                                            <th rowspan="1" colspan="1">Description</th>
                                            <th rowspan="1" colspan="1">Slug</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="2">Actions</th>
                                        </tr>
                                        </tfoot>

                                        <tbody>

                                        @foreach ($datalist as $dl)
                                            <p></p>
                                            <tr>
                                                <td>{{ $dl->id }}</td>
                                                <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($dl, $dl->title) }}</td>
                                                <td>{{ $dl->title }}</td>
                                                <td>{{ $dl->keyboards }}</td>
                                                <td>{{ $dl->description }}</td>
                                                <td>{{ $dl->slug }}</td>
                                                <td>{{ $dl->status }}</td>
                                                <td><a href="{{route('admin_category_edit', ['id' => $dl->id])}}"> EDİT</a></td>
                                                <td><a href="{{route('admin_category_delete', ['id' => $dl->id])}}" onclick="return confirm('You are deleting this. Are you sure?' )"> DELETE</a></td>
                                            </tr>

                                        @endforeach




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">

                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTableHover_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="dataTableHover_previous">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li><li class="paginate_button page-item active">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="1" tabindex="0" class="page-link">1</a>

                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="dataTableHover_next">
                                                <a href="#" aria-controls="dataTableHover" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
