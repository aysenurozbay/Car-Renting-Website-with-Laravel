@extends('layouts.home')

@section('title', 'User Profile')

@section('content')


    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="{{asset('assets')}}/assets/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">PROFILE</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- blog-section start -->

    <section class="blog-section pt-120 pb-120">
        <div class="container">
            @include('home.message')
            <div class="row">

                <div class="col-lg-9">
                    <h4> Review List</h4><br>
                    <div class="row">

                        <div class="form-group col-md-3">
                            <label style="color: red;">Subject</label>

                        </div>
                        <div class="form-group col-md-5">
                            <label style="color: red;">Review</label>

                        </div>
                        <div class="form-group col-md-2">
                            <label style="color: red;">Date</label>

                        </div>
                        <div class="form-group col-md-1">
                            <label style="color: red;">Status</label>
                        </div>
                        <div class="form-group col-md-1">
{{--                            <label style="color: red;">Status</label>--}}
                        </div>


                    </div>


                    @foreach($datalist as $rs)

{{--                       <td>{{$rs->id}}</td>--}}
{{--                       <td>{{$rs->subject}}</td>--}}
{{--                       <td>{{$rs->review}}</td>--}}
{{--                       <td>{{$rs->status}}</td>--}}
{{--                       <td>{{$rs->created_a}}</td>--}}
{{--                       <td>--}}
{{--                           <a href="{{route('admin_review_delete',['id' => $rs->id]  )}}">  <i class="fad fa-trash-alt"></i></a>--}}
{{--                       </td>--}}
{{--                       <td>{{$rs->id}}</td>--}}
                        <div class="container">



                                @csrf
                                <div class="content-block">




                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <p>{{$rs->subject}}</p>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <p>{{$rs->review}}</p>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <p>{{$rs->created_at}}</p>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <p>{{$rs->status}}</p>

                                        </div>
                                        <div class="form-group col-md-1">
                                            <a href="{{route('user_review_delete', ['id' => $rs->id])}}" onclick="return confirm('You are deleting this. Are you sure?' )"onclick="return confirm('You are deleting this. Are you sure?' )" ><i class="fa fa-times"></i></a>

                                        </div>

                                    </div>
                                </div>

                            <br>

                        </div>





                    @endforeach

                </div>
                <div class="col-lg-3">
                    <aside class="sidebar">
                        @auth
                        <div class="widget widget-new-ctg">
                            <h4 class="widget-title">menu</h4>
                            <ul class="cars-list">
                                <li><a href="{{route('myprofile')}}">My Profile</a></li>
                                @php
                                    $userRoles=Auth::user()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                    <li><a  target="_blank" href="{{route('admin_home')}}">Admin Panel</a></li>
                                @endif

                                <li><a href="{{route('user_reservation')}}"> Reservations</a></li>
                                <li><a href="{route('reviews')}}">Reviews</a></li>
                                <li><a href="#0">...</a></li>
                                <li><a href="{{route('logout')}}">LogOut</a></li>
                            </ul>

                        </div><!-- widget end -->

                    </aside>
                </div>
            </div>
        </div>
        @endauth
    </section>
    <!-- blog-section end -->

    <div id="">

    </div>





@endsection
