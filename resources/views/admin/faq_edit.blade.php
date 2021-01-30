@extends('layouts.admin')

@section('title','Edit Faq')


@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid " id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Faq</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Faq</li>
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



                        <form role="form" action="{{route('admin_faq_update',['id' => $data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <p></p>
                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" class="form-control" id="question" name="question" value="{{$data->question}}" >

                                </div>

                                <div class="form-group">
                                    <label>Answer</label>

                                    <textarea name="answer" class="form-control" >{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>

                                </div>

                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="select2-single form-control"   name="status" id="status">
                                        <option value="{{$data->status}}"  selected>{{$data->status}}</option>
                                        <option value="True">True</option>
                                        <option value="False">False</option>

                                    </select>
                                </div>

                                <br>
                                <br>

                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Edit Faq</button>
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
