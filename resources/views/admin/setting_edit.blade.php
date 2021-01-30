@extends('layouts.admin')

@section('title','Settings')


@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        $(function ()
        $('#myTab a:last').tab('show')
        )
    </script>

@endsection

@section('content')


    <!-- Container Fluid-->
    <div class="container-fluid " id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Settings</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Settings</li>
            </ol>
        </div>
        <div class="container">


                <div class="text-center">
                    <div class="row" id="">

                        <div class="col-lg-12">
                            <!-- Select2 -->
                            <div class="card mb-12">
                                <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                <div class="card-body col-lg-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#generalsettings" role="tab" aria-controls="generalsettings">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp">SMTP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#social" role="tab" aria-controls="social">Social Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#about_us" role="tab" aria-controls="aboutus">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#references_tab" role="tab" aria-controls="references_tab">References</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contact_tab" role="tab" aria-controls="contact">Contact Page</a>
                                        </li>

                                    </ul>
                                    <br>
                                    <br>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="generalsettings" role="tabpanel">
                                            <label>ID</label>
                                            <input type="text" class="form-control" id="id" name="id" value="{{$data->id}}">

                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                       value="{{$data->title}}">

                                            </div>

                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" class="form-control" id="keywords" name="keywords"
                                                       value="{{$data->keywords}}">

                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" id="description" name="description"
                                                       value="{{$data->description}}">

                                            </div>


                                            <div class="form-group">
                                                <label>company</label>
                                                <input type="text" class="form-control" id="company" name="company"
                                                       value="{{$data->company}}">

                                            </div>

                                            <div class="form-group">
                                                <label>address</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                       value="{{$data->address}}">

                                            </div>

                                            <div class="form-group">
                                                <label>phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                       value="{{$data->phone}}">

                                            </div>
                                            <div class="form-group">
                                                <label>fax</label>
                                                <input type="text" class="form-control" id="fax" name="fax"
                                                       value="{{$data->fax}}">

                                            </div>
                                            <div class="form-group">
                                                <label>email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                       value="{{$data->email}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="select2-single form-control" name="status" id="status">
                                                    <option value="{{$data->status}}" selected></option>
                                                    <option value="True">True</option>
                                                    <option value="False">False</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="smtp" role="tabpanel">
                                            <div class="form-group">
                                                <label>smtpserver</label>
                                                <input type="text" class="form-control" id="smtpserver" name="smtpserver"
                                                       value="{{$data->smtpserver}}">

                                            </div>
                                            <div class="form-group">
                                                <label>smtpemail</label>
                                                <input type="text" class="form-control" id="smtpemail" name="smtpemail"
                                                       value="{{$data->smtpemail}}">

                                            </div>
                                            <div class="form-group">
                                                <label>smtppassword</label>
                                                <input type="text" class="form-control" id="smtppassword" name="smtppassword"
                                                       value="{{$data->smtppassword}}">

                                            </div>
                                            <div class="form-group">
                                                <label>smtpport</label>
                                                <input type="number" class="form-control" id="smtpport" name="smtpport"
                                                       value="{{$data->smtpport}}">

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="social" role="tabpanel">
                                            <div class="form-group">
                                                <label>facebook</label>
                                                <input type="text" class="form-control" id="facebook" name="facebook"
                                                       value="{{$data->facebook}}">

                                            </div>
                                            <div class="form-group">
                                                <label>instagram</label>
                                                <input type="text" class="form-control" id="instagram" name="instagram"
                                                       value="{{$data->instagram}}">

                                            </div>
                                            <div class="form-group">
                                                <label>twitter</label>
                                                <input type="text" class="form-control" id="twitter" name="twitter"
                                                       value="{{$data->twitter}}">

                                            </div>
                                            <div class="form-group">
                                                <label>youtube</label>
                                                <input type="text" class="form-control" id="youtube" name="youtube"
                                                       value="{{$data->youtube}}">

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="about_us" role="tabpanel">
                                            <div class="form-group">
                                                <label>aboutus</label>

                                                <textarea id="aboutus" name="aboutus"
                                                          class="form-control">{{$data->aboutus}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('aboutus');

                                                </script>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="references_tab" role="tabpanel">
                                            <div class="form-group">
                                                <label>References</label>

                                                <textarea id="references" name="references"
                                                          class="form-control">{{$data->references}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('references');
                                                </script>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact_tab" role="tabpanel">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea id="contact_tab" name="contact"
                                                          class="form-control">{{$data->contact}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('contact');
                                                </script>

                                            </div>
                                        </div>
                                    </div>















                                    <br>
                                    <br>

                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <button type="submit" name="setting_updatebtn" class="btn btn-primary">
                                                Update Setting
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>




        <!---Container Fluid-->
</div>
@endsection
