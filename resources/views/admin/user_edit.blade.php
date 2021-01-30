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
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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



                        <form role="form" action="{{route('admin_users_update',['id' => $data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}"  >

                                </div>

                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}"  >

                                </div><div class="form-group">
                                    <label >Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}"  >

                                </div><div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}"  >

                                </div>


                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" id="image" name="image"  >
                                    <br>
                                    <br>
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="120" alt="">

                                    @endif

                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Update User</button>
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
