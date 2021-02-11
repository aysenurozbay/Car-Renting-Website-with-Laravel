@php

    $parentCategories = \App\Http\Controllers\HomeController::categoryList()

@endphp


@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords',$data->keywords)
@section('content')
    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="{{asset('assets')}}/assets/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Details</h2>
                    <ol class="page-list">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li> Details</li>
                        <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>

                        <li> {{$data->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- features-section start -->
    <section class="reservation-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="reservation-details-area">
                        <div class="thumb">
                            <img src="{{Storage::url($data->image)}}" alt="images">
                        </div>
                        @foreach($datalist as $dl)
                            <div class="thumb">
                                <br>
                                <img src="{{Storage::url($dl->image)}}" alt="images" style="height: 100px;">
                            </div>
                        @endforeach
                        <div class="content">
                            <div class="content-block">
                                <h3 class="car-name">{{$data->title}}</h3>
                                <span class="price">Start form <b> {{$data->price}} </b>tl per day</span>
                                <p> {!! $data->detail!!}</p>
                            </div>
{{--                            @php--}}
{{--                            $avrate=\App\Http\Controllers\HomeController::avrateview($data->id);--}}
{{--                            $countreview=\App\Http\Controllers\HomeController::countreview($data->id);--}}
{{--                            @endphp--}}
{{--                            <div class="content-block">--}}
{{--                                <i class="fa fa-star @if ($avrate<1) -o empty @endif"></i>--}}
{{--                                <i class="fa fa-star @if ($avrate<2) -o empty @endif"></i>--}}
{{--                                <i class="fa fa-star @if ($avrate<3) -o empty @endif"></i>--}}
{{--                                <i class="fa fa-star @if ($avrate<4) -o empty @endif"></i>--}}
{{--                                <i class="fa fa-star @if ($avrate<5) -o empty @endif"></i>--}}


                            </div>
{{--                            <a href="#tab2"> {{$countreview}} Reviews {{$avrate}}</a>--}}

{{--                       <form action="{{route('user_register_add',['id'=>$data->id])}}" method="post">--}}
{{--                           @csrf--}}
{{--                           <input class="input" name="quantity" type="hidden" value="1" max="1" >--}}
{{--                           <button type="submit" class="cmn-btn">Rent this</button>--}}


{{--                       </form>--}}
                        <form class="reservation-form" action="{{route('user_reservation_add', ['id'=> $data->id])}}" method="post">
                            @csrf
                            <div class="content-block">
                                <h4> Reservation Form</h4><br>

                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label for="cars">Pickup Location</label>
                                        <select required>
                                            <option value="1" >Head Office</option>
                                            <option value="2">Ginza Office</option>
                                            <option value="3">Car type Two</option>
                                            <option value="4">Car type Three</option>
                                            <option value="5">Car type Four</option>
                                            <option value="6">Car type Five</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-lg-12 form-group">
                                        <label for="cars">Pickup Location</label>
                                        <select required>
                                            <option value="2">Head Office</option>
                                            <option value="3">Ginza Office</option>
                                            <option value="4">Car type Three</option>
                                            <option value="5">Car type Four</option>
                                            <option value="6">Car type Five</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <input type="date" name="rez_date" required>
{{--                                        <input type="date" data-language='en' placeholder="Pickup Date" name="rez_date" >--}}
                                    </div>
                                    <div class="form-group col-md-6">
{{--                                        <i class="fa fa-clock-o"></i>--}}
                                        <input type="time"  placeholder="Pickup Time" name="rez_time" required>
                                    </div>
                                    <div class="form-group col-md-6">
{{--                                        <i class="fa fa-calendar"></i>--}}
                                        <input type="date" name="return_date">
                                    </div>
                                    <div class="form-group col-md-6">
{{--                                        <i class="fa fa-clock-o"></i>--}}
                                        <input type="time"placeholder="Drop Off Time" name="return_time" required>
                                    </div>
                                </div>
                            </div>
                            <input value="False" name="status" type="hidden">

                            <div class="content-block">
                                <br>
                                <div class="row">

                                    <div class="col-lg-12">


                                        <button type="submit" class="cmn-btn">reservation</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
{{--                <div class="col-lg-4">--}}
{{--                    <aside class="sidebar">--}}
{{--                        <div class="widget widget-all-cars">--}}
{{--                            <h4 class="widget-title">our all cars</h4>--}}
{{--                            <ul class="cars-list">--}}
{{--                                @foreach($parentCategories  as $dl)--}}
{{--                                    <li >--}}

{{--                                        <a href="#" >{{$dl->title}}  </a>--}}

{{--                                        @if(count($dl->children))--}}
{{--                                            @include('home.categorytree',['children' => $dl->children])--}}
{{--                                        @endif--}}

{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="widget widget-testimonial">--}}
{{--                            <h4 class="widget-title">testimonial ( {{$countreview}})</h4>--}}
{{--                            <div class="widget-body">--}}
{{--                                <div class="testimonial-slider owl-carousel">--}}
{{--                                    <div class="testimonial-item">--}}
{{--                                        @foreach($reviews as $dl)--}}
{{--                                        <div class="testimonial-item--header">--}}

{{--                                            <div class="content">--}}
{{--                                                <h6 class="name"> {{$dl->user->name}}</h6>--}}
{{--                                                <span class="designation">{{$dl->created_at}}</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="content">--}}
{{--                                                <i class="fa fa-star @if ($dl->rate<1) -o empty @endif"></i>--}}
{{--                                                <i class="fa fa-star @if ($dl->rate<2) -o empty @endif"></i>--}}
{{--                                                <i class="fa fa-star @if ($dl->rate<3) -o empty @endif"></i>--}}
{{--                                                <i class="fa fa-star @if ($dl->rate<4) -o empty @endif"></i>--}}
{{--                                                <i class="fa fa-star @if ($dl->rate<5) -o empty @endif"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-item--body">--}}
{{--                                            <span class="designation">{{$dl->subject}}</span>--}}
{{--                                            <p> {{$dl->review}}</p>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- widget end -->--}}

{{--                        <div class="widget widget-testimonial">--}}
{{--                            <h4 class="widget-title"> Tell us your Review</h4>--}}
{{--                            <br>--}}



{{--                            @livewire('review',['id' => $data->id])--}}


{{--                        </div>--}}
{{--            <!-- widget end -->--}}
{{--                    </aside>--}}
{{--                </div>--}}
            </div>
        </div>

    </section>
    <!-- reservation-section end -->



@endsection
