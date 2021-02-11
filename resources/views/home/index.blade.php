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

    <!-- banner-section start  -->
    <section class="banner-section bg_img" data-background="{{asset('assets')}}/assets/images/elements/background.jpg" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="banner-content" style="margin-top:270px; margin-bottom: 190px;">
                        <h1 class="title">find your own car</h1>
                        <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla.</p>
                        <a href="#0" class="cmn-btn">see all vehicles</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-img">
                        {{--                    <img src="{{asset('assets')}}/assets/images/elements/h_full_809.png" alt="image">--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end  -->

{{--    START OF  CONTENT--}}


<!-- features-section start -->
<section class="features-section pb-120">

    <div class="container">
        <br><br>
        <form action="{{route('getcar')}}" method="post">
            @csrf

            <div class="col-lg-10 col-md-5 col-sm-4 d-flex">
                @livewire('search')
{{--                <input type="text" name="car_search" id="car_search" placeholder="Search what you want........">--}}
                <button class="search-submit-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
        @livewireScripts
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <br>
                    <br>
                    <h2 class="section-title">our awsome features</h2>
                    <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
                </div>
            </div>
        </div>
        <div class="row mb-none-30">
            <div class="col-lg-4 col-sm-6">
                <div class="icon-item text-center">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="content">
                        <h4 class="title">expert drivers</h4>
                        <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                    </div>
                </div>
            </div><!-- icon-item end -->
            <div class="col-lg-4 col-sm-6">
                <div class="icon-item text-center">
                    <div class="icon"><i class="fa fa-rocket"></i></div>
                    <div class="content">
                        <h4 class="title">fast services</h4>
                        <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                    </div>
                </div>
            </div><!-- icon-item end -->
            <div class="col-lg-4 col-sm-6">
                <div class="icon-item text-center">
                    <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
                    <div class="content">
                        <h4 class="title">customer support</h4>
                        <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                    </div>
                </div>
            </div><!-- icon-item end -->
        </div>
    </div>
</section>
<!-- features-section end -->

<!-- rent-step-section start -->
<section class="rent-step-section pb-120">
    <div class="element-one"><img src="{{asset('assets')}}/assets/images/elements/car.png" alt="image"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="block-area">
                    <div class="block-header">
                        <h2 class="title">Well Come to Renten For Rent </h2>
                        <p>Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat rutrum purus, augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique tempor scelerisque dictum dui donec urna, consequat scelerisque eu ut, ornare ut. Rutrum eget</p>
                    </div>
                    <div class="block-body">
                        <ul class="num-list">
                            <li><span class="num">01</span>Download Car rent app</li>
                            <li><span class="num">02</span>choose the car you like</li>
                            <li><span class="num">03</span>car reservation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rent-step-section end -->

<!-- choose-car-section start -->
<section class="choose-car-section pt-120 pb-120 section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">choose awsome rental car</h2>
                    <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
                </div>
            </div>
        </div>

        @include('home._slider2')
    </div>
</section>
<!-- choose-car-section end -->

<!-- overview-section start -->
<section class="overview-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="block-area">
                    <div class="block-header">
                        <h2 class="title">We provided all Kind of Rental Services</h2>
                        <p>Feugiat tortor mauris, vitae magna parturient nec, velit bibensectetuer eros urna nunc suspendisse. Elit odio lobortis adipiscing tristiqucursus eu, hendrerit nulla voluptatem wisi Lorem ipsum dolor sit amet, velum magna, fusce ut dolor sit sed et habitant. Sociis tincidunt velit. Collis dictum fames mauris magna, nulla nunc amet, in magna. Amet nmmy eget et, orci nunc nam, condimentum donec tortor et magna </p>
                    </div>
                    <div class="block-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="counter-item">
                                    <span class="title">total car</span>
                                    <span>3497</span>
                                </div>
                            </div><!-- counter-item end -->
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="counter-item">
                                    <span class="title">car rent</span>
                                    <span>4574</span>
                                </div>
                            </div><!-- counter-item end -->
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="counter-item">
                                    <span class="title">experience</span>
                                    <span>25</span><span class="counter-text">Y</span>
                                </div>
                            </div><!-- counter-item end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-img">
                    <div class="img-container"><img src="{{asset('assets')}}/assets/images/overview/2.jpg" alt="image"></div>
                    <div class="img-container"><img src="{{asset('assets')}}/assets/images/overview/1.jpg" alt="image"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- overview-section end -->

<!-- team-section start -->
<section class="team-section pb-120 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">Today's Choice</h2>
                    <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
                </div>
            </div>
        </div>
        <div class="row mb-none-30">
            @foreach($daily as $dl)
            <div class="col-lg-4 col-sm-6">
                <div class="team-item">
                    <div class="thumb">
                        <img src="{{Storage::url($dl->image)}}" style="width: 500px; height: 300px;"  alt="image">
                        <div class="content">
                            <h3 class="name">{{$dl->title}}</h3>
                            <span class="designation">
                                <a href="{{route('car',['id'=> $dl->id, 'slug' => $dl->slug ])}}" class="cmn-btn">rent car</a>
                            </span>
                            <ul class="social-list d-flex justify-content-center">

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--team-item end -->

            @endforeach

        </div>
    </div>
</section>
<!-- team-section end -->

<!-- testimonial-section start -->
<section class="testimonial-section overlay-black pt-120 pb-120 bg_img" data-background="{{asset('assets')}}/assets/images/testimonial-bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item--header">
                            <div class="thumb"><img src="{{asset('assets')}}/assets/images/testimonial/1.jpg" alt="image"></div>
                            <h3 class="name">martin hook</h3>
                            <span class="designation">business man</span>
                        </div>
                        <div class="testimonial-item--body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="testimonial-item--ratings">
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div><!-- testimonial-item end -->
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item--header">
                            <div class="thumb"><img src="{{asset('assets')}}/assets/images/testimonial/1.jpg" alt="image"></div>
                            <h3 class="name">martin hook</h3>
                            <span class="designation">business man</span>
                        </div>
                        <div class="testimonial-item--body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="testimonial-item--ratings">
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div><!-- testimonial-item end -->
                    <div class="testimonial-item text-center">
                        <div class="testimonial-item--header">
                            <div class="thumb"><img src="{{asset('assets')}}/assets/images/testimonial/1.jpg" alt="image"></div>
                            <h3 class="name">martin hook</h3>
                            <span class="designation">business man</span>
                        </div>
                        <div class="testimonial-item--body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="testimonial-item--ratings">
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star"></i></a>
                            <a href="#0"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div><!-- testimonial-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!-- blog-section start -->
<section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">latest news & updates</h2>
                    <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
                </div>
            </div>
        </div>
        <div class="row mb-none-30">
            @foreach($last as $dl)
            <div class="col-lg-6">
                <div class="post-item post-item--grid">
                    <div class="thumb bg_img" data-background="{{Storage::url($dl->image)}}">
                        <ul class="post-meta d-flex">
                            <li><a href="#0"> Star from {{$dl->price}} per a day</a></li>

                        </ul>
                    </div>
                    <div class="content">
                        <h5 class="post-title"><a href="#0">{{$dl->title}}</a></h5>
                        <p>{{$dl->description}}</p>
                        <a href="{{route('car',['id'=> $dl->id, 'slug' => $dl->slug ])}}" class="text-btn">See more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- blog-section end  -->

<!-- subscribe-section start -->
<section class="subscribe-section overlay-main bg_img pt-120 pb-120" data-background="{{asset('assets')}}/assets/images/bg1.jpg">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe-content-area text-center">
                    <h2 class="title text-white">Write Your Review </h2>
                        @livewire('review')

                </div>
            </div>
        </div>

    </div>
</section>
{{--<!-- subscribe-section end -->--}}

{{--<!-- consulting-section start -->--}}



{{--En of content--}}


<!-- consulting-section end -->

@endsection


