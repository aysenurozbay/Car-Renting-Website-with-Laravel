@extends('layouts.admin')

@section('title','Edit Category')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid " id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
        </div>

        <div class="text-center">


            <div class="row">
                <div class="col-lg-8">
                    <!-- Select2 -->
                    <div class="card mb-4">
                        {{--                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
                        {{--                                <h6 class="m-0 font-weight-bold text-primary">Select2</h6>--}}
                        {{--                        </div>--}}



                        <form role="form" action="{{route('admin_category_update', ['id' => $data->id])}}" method="post">
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>
                                <div class="form-group">
                                    <label for="select2Single">Parent</label>
                                    <select class="select2-single form-control" name="parent_id" id="parent_id">


                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id)  selected="selected" @endif>
                                             {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" >

                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" id="keyboards" name="keyboards" value="{{$data->keyboards}}"  >

                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" class="form-control" id="description" name="description"  value="{{$data->description}}" >

                                </div>


                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{$data->slug}}">

                                </div>


                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="select2-single form-control"   name="status" id="status">

                                        <option selected>{{$data->status}}</option>
                                        <option >False</option>
                                        <option >True</option>

                                    </select>
                                </div>











                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Add Category</button>
                                    </div>
                                </div>


                            </div>

                        </form>




                    </div>



                </div>


            </div>

        </div>

        <!---Container Fluid-->


@endsection
