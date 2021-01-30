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
        @include('home.message')

        <div class="text-center">

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

            <td>
                <table>
                    @foreach($data->roles as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                <a href="{{route('admin_user_role_delete', ['userid' =>$data->id, 'roleid' =>$row->id])}}"> </a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </td>

            <th>Add Role</th>
            <td>
                <form role="form" action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <select name="roleid">
                        @foreach($datalist as $dl)
                            <option value="{{$dl->id}}">
                                {{$dl->name}}
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Update Role</button>
                        </div>
                    </div>
                </form>
            </td>



        </div>

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="login.html" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!---Container Fluid-->


@endsection
