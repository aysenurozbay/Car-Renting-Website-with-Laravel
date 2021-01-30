
@extends('layouts.home')

@section('title', 'Contact-'.$setting->title)

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
                    <h2 class="page-title">Contact</h2>
                    <ol class="page-list">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">

            {!! $setting->contact !!}

            <section class="consulting-section pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row mb-none-30">
                                <div class="col-sm-6">
                                    <div class="brand-item">
                                        <div class="brand-item--inner">
                                            <img src="{{asset('assets')}}/assets/images/brand-logo/1.png" alt="image">
                                        </div>
                                    </div>
                                </div><!-- brand-item end -->
                                <div class="col-sm-6">
                                    <div class="brand-item">
                                        <div class="brand-item--inner">
                                            <img src="{{asset('assets')}}/assets/images/brand-logo/2.png" alt="image">
                                        </div>
                                    </div>
                                </div><!-- brand-item end -->
                                <div class="col-sm-6">
                                    <div class="brand-item">
                                        <div class="brand-item--inner">
                                            <img src="{{asset('assets')}}/assets/images/brand-logo/3.png" alt="image">
                                        </div>
                                    </div>
                                </div><!-- brand-item end -->
                                <div class="col-sm-6">
                                    <div class="brand-item">
                                        <div class="brand-item--inner">
                                            <img src="{{asset('assets')}}/assets/images/brand-logo/4.png" alt="image">
                                        </div>
                                    </div>
                                </div><!-- brand-item end -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="consulting-from-area">
                                <h2 class="title">Request</h2>
                                <form class="consulting-form" method="post" name="RequestForm"  action="{{route('sendmessage')}}">
                                    @include('home.message')
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="name" id="name" placeholder="Name">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="email" name="email" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="tel" name="phone" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="subject" id="subject" placeholder="Subject">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </div>
                                    <button type="submit" name="request_btn" class="cmn-btn">submit now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- features-section end -->











@endsection
