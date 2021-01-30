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
                    <h2 class="page-title">FAQ</h2>
                    <ol class="page-list">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li>FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">

            @foreach($datalist as $dl)
            <blockquote>
                <h4> {{$dl->question}}</h4>
                <br>
                <p>{!!  $dl->answer!!}</p>
            </blockquote>
            @endforeach

        </div>
    </section>



@endsection
