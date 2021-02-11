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
            <div class="row">
                <div class="col-lg-9">

                    @foreach($datalist as $dl)

                            <div class="post-item post-item--grid">
                                <div class="thumb bg_img" data-background="{{$dl->car->image}}">
                                    <img src="{{Storage::url($dl->car->image)}}">
                                    <ul class="post-meta d-flex">
                                        <li><a href="#0">{{$dl->created_at}}</a></li>
                                        {{--                            <li><a href="#0">03 Comments</a></li>--}}
                                    </ul>
                                </div>

                                <div class="content">

                                    <h5 class="post-title" style="text-transform: capitalize"><span style="color: red"> </span> {{$dl->car->title}} </h5>

                                    <p class="post-title"><span style="color: red"> Start: </span> {{$dl->rez_date}} - {{$dl->rez_time}} </p>
                                    <p class="post-title"><span style="color: red"> End: </span>{{$dl->return_date}} - {{$dl->return_time}} </p>
                                    <p><span style="color: red"> Driver Licence Number: </span>  {{$dl->dlicenceno}}</p>
                                    <p><span style="color: red"> Flight Number: </span> {{$dl->flight_number}}</p>
                                    <p> <span style="color: red"> Amount: </span> {{$dl->price}}<b> * </b> {{$dl->days}} = {{$dl->total}}
                                        <i class="fa fa-yen"></i> </p>
                                    <p></p>
                                    <a href="{{route('user_reservation_delete',['id' => $dl->id, 'car_id'=>$dl->car_id])}}" class="text-btn">Cancel The Reservation</a>
                                </div>
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

                                    <li><a href="{{route('user_reservation')}}">My Reservations</a></li>
                                    <li><a href="#0">...</a></li>
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





































@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)
@section('content')
    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="{{asset('assets')}}/assets/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">My Reservations</h2>
                    <ol class="page-list">
                        <li><a href="{{route('myprofile')}}"><i class="fa fa-home"></i> Profile</a></li>
                        <li>Reservations</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">


        </div>
    </section>



@endsection
