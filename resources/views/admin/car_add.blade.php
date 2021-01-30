@extends('layouts.admin')

@section('title','Add Car')



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
                <li class="breadcrumb-item active" aria-current="page">Add Car</li>
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



                        <form role="form" action="{{route('admin_cars_store')}}"  method="post" enctype="multipart/form-data">
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
                                        <option value="0" data-select2-id="3">Select Category</option>
                                        @foreach ($datalist as $rs)
                                            <option value="{{ $rs->id }}" data-select2-id="17">
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  >

                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords"  >

                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" class="form-control" id="description" name="description"  >

                                </div>
                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" >

                                </div>


                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" class="form-control" id="price" name="price"  >

                                </div>

                                <div class="form-group">
                                    <label >Brand</label>
                                    <input type="text" class="form-control" id="brand" name="brand"  >

                                </div>

                                <div class="form-group">
                                    <label >Model</label>
                                    <input type="text" class="form-control" id="model" name="model"  >

                                </div>
                                <div class="form-group">
                                    <label >Type</label>
                                    <input type="text" class="form-control" id="type" name="type"  >

                                </div>
                                <div class="form-group">
                                    <label>Details</label>

                                    <textarea name="detail" class="form-control"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label >Year</label>
                                    <input type="number" class="form-control" id="year" name="year"  >

                                </div>
                                <div class="form-group">
                                    <label >Gear type</label>
                                    <input type="text" class="form-control" id="gear_type" name="gear_type"  >

                                </div>
                                <div class="form-group">
                                    <label >NumberPlate</label>
                                    <input type="text" class="form-control" id="numberplate" name="numberplate"  >

                                </div>

                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" id="image" name="image"  >

                                </div>



                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="select2-single form-control"   name="status" id="status">
                                        <option value="0">Select</option>
                                        <option value="True">True</option>
                                        <option value="False">False</option>

                                    </select>
                                </div>

                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Add Car</button>
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
