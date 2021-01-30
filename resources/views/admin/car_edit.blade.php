@extends('layouts.admin')

@section('title','Edit Car')


@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid " id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Car</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Car</li>
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



                        <form role="form" action="{{route('admin_cars_update',['id' => $data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>
                                <div class="form-group">
                                    <label for="select2Single">Parent</label>
                                    <select name="category_id"
                                            class="select2 form-control custom-select select2-hidden-accessible"
                                            style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
{{--                                        <option value="{{$data->parent_id}}" data-select2-id="3"></option>--}}
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id)  selected="selected" @endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}"  >

                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" value="{{$data->keywords}}"  >

                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}" >

                                </div>
                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{$data->slug}}" >

                                </div>


                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}"  >

                                </div>

                                <div class="form-group">
                                    <label >Brand</label>
                                    <input type="text" class="form-control" id="brand" name="brand" value="{{$data->brand}}" >

                                </div>

                                <div class="form-group">
                                    <label >Model</label>
                                    <input type="text" class="form-control" id="model" name="model" value="{{$data->model}}"  >

                                </div>
                                <div class="form-group">
                                    <label >Type</label>
                                    <input type="text" class="form-control" id="type" name="type" value="{{$data->type}}"  >

                                </div>

                                <div class="form-group">
                                    <label>Details</label>

                                    <textarea name="detail" class="form-control">{{$data->detail}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail');
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label >Year</label>
                                    <input type="number" class="form-control" id="year" name="year"  value="{{$data->year}}" >

                                </div>
                                <div class="form-group">
                                    <label >Gear type</label>
                                    <input type="text" class="form-control" id="gear_type" name="gear_type" value="{{$data->gear_type}}" >

                                </div>
                                <div class="form-group">
                                    <label >NumberPlate</label>
                                    <input type="text" class="form-control" id="numberplate" name="numberplate" value="{{$data->numberplate}}" >

                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" id="image" name="image"  >
                                    <br>
                                    <br>
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="120" alt="">

                                    @endif

                                </div>

                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="select2-single form-control"   name="status" id="status">
                                        <option value="{{$data->status}}" selected></option>
                                        <option value="True">True</option>
                                        <option value="False">False</option>

                                    </select>

                                </div>



                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Update Car</button>
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
