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

                    @include('profile.show')

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
                                <li><a href="{{route('myreviews')}}">Reviews</a></li>
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
