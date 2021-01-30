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

        <div class="text-center">


            <div class="row">
                <div class="col-lg-8">
                    <!-- Select2 -->
                    <div class="card mb-4">

                        <form role="form" action="{{route('admin_message_update',['id' => $data->id])}}"  method="post" enctype="multipart/form-data">

                            @include('home.message')
                            @csrf
                            {{--                                {{route('admin.category_create')}}--}}
                            <div class="card-body">
                                <p></p>

                                <div class="form-group" align="left">
                                    <label >Name : </label>
                                    <label style="color: red" >{{$data->name}}</label>
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
                                    <label style="color: red" >{{$data->message}}</label>
                                </div>


                                <div class="form-group"align="left">
                                    <label>Admin Note</label>

                                    <textarea name="note" class="form-control">{{$data->note}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'note');
                                    </script>

                                </div>



                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Update Message</button>
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
