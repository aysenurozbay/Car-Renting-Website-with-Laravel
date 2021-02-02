@extends('layouts.admin')

@section('title','Admin Panel')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blank Page</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">User Roles</li>
            </ol>
        </div>


        <div class="row">
            <div class="col-lg-12 mb-4">
            @include('home.message')
                <!-- Simple Tables -->
                <title> </title>
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{$data->name}}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Add Role</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>
                                    <div class="form-group" align="left">
                                        {{$data->id}}
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group" align="left">
                                        {{$data->name}}
                                    </div>
                                </td>
                                <td>
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius:5px">
                                    @endif
                                </td>
                                <td>
                                    <div class="form-group" align="left">
                                        {{$data->email}}
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group" align="left">
                                        <table>
                                            @foreach($data->roles as $row)
                                                <tr>
                                                    <td class="badge badge-danger" style="text-transform: uppercase;">{{$row->name}}</td>
                                                    <td>
                                                        <a href="{{route('admin_user_role_delete', ['userid' =>$data->id, 'roleid' =>$row->id])}}">
                                                            <i class="fas fa-user-times"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                                </td><td>
                                    <div class="form-group" align="left">
                                        <form role="form" action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <select name="roleid">
                                                @foreach($datalist as $dl)
                                                    <option value="{{$dl->id}}">
                                                        {{$dl->name}}
                                                    </option>
                                                @endforeach
                                            </select>

                                    </div>
                                </td>
                                <td>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Update Role</button>
                                        </div>
                                    </div>
                                    </form>
                                </td>

                            </tr>


                            </tbody>

                        </table>

                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->


@endsection
