@extends('layouts.admin')

@section('title','Add Image Gallery')



@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection



@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid " id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Car</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Car: {{$data->title}}</li>
            </ol>
        </div>

        <div class="container" >

          <div class="card-body">

            <div class="row" >
                <div class="col-lg-12">
                    <!-- Select2 -->
                    <div class="card mb-4">
                        {{--                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
                        {{--                                <h6 class="m-0 font-weight-bold text-primary">Select2</h6>--}}
                        {{--                        </div>--}}



                        <form role="form" action="{{route('admin_image_store',['car_id'=>$data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>


                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  >

                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" id="image" name="image"  >

                                </div>
                                 <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Add Image</button>
                                    </div>
                                </div>


                            </div>

                        </form>


                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Car List</h6>
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
                                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTableHover"></label></div></div></div><div class="row"><div class="col-sm-12">
                                                    <table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">



                                                        <tr>
                                                            <th rowspan="1" colspan="1">Id</th>

                                                            <th rowspan="1" colspan="1">Title</th>

                                                            <th rowspan="1" colspan="1">Image</th>

                                                            <th rowspan="1" colspan="2">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Id</th>

                                                            <th rowspan="1" colspan="1">Title</th>

                                                            <th rowspan="1" colspan="1">Image</th>

                                                            <th rowspan="1" colspan="1">Actions</th>
                                                        </tr>
                                                        </tfoot>

                                                        <tbody>

                                                        @foreach ($image as $dl)
                                                            <p></p>
                                                            <tr>
                                                                <td>{{ $dl->id}}</td>

                                                                <td>{{ $dl->title }}</td>

                                                                <td>
                                                                    @if($dl ->image)
                                                                        <img src="{{Storage::url($dl->image)}}" height="30" alt="">

                                                                    @endif
                                                                </td>

                                                                <td><a href="{{route('admin_image_delete', ['id' => $dl->id,'car_id'=>$data->id])}}" onclick="return confirm('You are deleting this. Are you sure?' )">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        @endforeach




                                                        </tbody>


                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            {{--            @foreach ($datalist as $dl)--}}
                            {{--                <p>{{ $dl->title }}</p>--}}
                            {{--            @endforeach--}}

                        </div>




                    </div>



                </div>


            </div>
          </div>

        </div>

        <!---Container Fluid-->


@endsection
