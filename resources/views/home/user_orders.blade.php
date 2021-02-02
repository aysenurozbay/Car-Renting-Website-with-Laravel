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
            @foreach($datalist as $dl)
            <div class="col-lg-12">
                <div class="post-item post-item--grid">

                    <div class="content">
                        <h5 class="post-title"><a href="#0">Elementum cutur. Velit sed. Congue</a></h5>
                        <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and overviews</p>
                        <a href="#0" class="text-btn">read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>



@endsection
