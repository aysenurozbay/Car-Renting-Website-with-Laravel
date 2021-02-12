@extends('layouts.admin')

@section('title','Message Edit')


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
                <li class="breadcrumb-item active" aria-current="page">Message Detail</li>
            </ol>
        </div>

        <div class="container" >

            <div class="card-body">

                <div class="row" >
                    <div class="col-lg-12">
                    <!-- Select2 -->
                    <div class="card mb-4">

                        <form role="form" action="{{route('admin_review_update',['id' => $data->id])}}"  method="post" enctype="multipart/form-data">

                            @include('home.message')
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>

                                <div class="form-group" align="left">
                                    <label >Name : </label>
                                    <label style="color: red" >{{$data->user->name}}</label>
                                </div>

                                <div class="form-group"align="left" >
                                    <label >Email : </label>
                                    <label style="color: red" >{{$data->email}}</label>

                                </div>

                                <div class="form-group"align="left">
                                    <label >Phone : </label>
                                    <label style="color: red">{{$data->phone}}</label>

                                </div>


                                <div class="form-group"align="left">
                                    <label >Subject : </label>
                                    <label style="color: red">{{$data->subject}}</label>
                                </div>

                                <div class="form-group"align="left">
                                    <label >Message : </label>
                                    <label style="color: red" >{{$data->review}}</label>
                                </div>


                                <div class="form-group"align="left">
                                    <label >Status:</label>

                                    <select class="form-control col-lg-4" name="status">
                                        <option value="{{$data->status}}">{{$data->status}}</option>
                                        <option value="True">TRUE</option>
                                        <option value="False">FALSE</option>

                                    </select>

                                </div>



                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Update Review</button>
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
