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
            <h3 class="car-name" style="color: red;">{{$data->title}}</h3>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="reservation-details-area">
                        <div class="thumb">
                            <img src="{{Storage::url($data->image)}}" alt="images">
                        </div>
                        <br>
                        <div class="choose-car-slider owl-carousel">

                            @foreach($datalist as $dl)
                                <div class="car-item">
                                    <div class="thumb">
                                        <img src="{{Storage::url($dl->image)}}" alt="image">
                                    </div>
                                </div><!-- car-item end -->


                            @endforeach


                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="content">
                        <div class="content-block">
                            <br>

                            <span class="price">Start form <b> {{$data->price}} </b>tl per day</span>
                            <br><br><br>

                            <h2> {!! $data->detail!!}</h2>
                        </div>

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
            <div class="col-lg-10">
                <form class="reservation-form" action="{{route('user_reservation_add', ['id'=> $data->id])}}" method="post">
                    @csrf
                    <div class="content-block">
                        <br>
                        <h4 style="color: red;"> Reservation Form</h4> <hr>
                        <br>

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <label for="rez_place">Pickup Location</label>
                                <select required name="rez_place">
                                    <option value="Head Office" >Head Office</option>
                                    <option value="Ginza Yurakucho Branch ">Ginza Yurakucho Branch </option>
                                    <option value="Osaka Branch">Osaka Branch</option>
                                    <option value="Hatchobori Branch">Hatchobori Branch</option>

                                </select>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-lg-12 form-group">
                                <label for="return_place">Pickup Location</label>
                                <select required name="return_place">
                                    <option value="Head Office" >Head Office</option>
                                    <option value="Ginza Yurakucho Branch ">Ginza Yurakucho Branch </option>
                                    <option value="Osaka Branch">Osaka Branch</option>
                                    <option value="Hatchobori Branch">Hatchobori Branch</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-xl-6">
                                <label style="float:left;">Pickup Date</label>
                            </div>
                            <div class="form-group col-xl-6">
                                <label style="float:left;">Pickup Time</label>
                            </div>

                        </div>
{{--                            <div class="return_place" >--}}
{{--                                <div class="form-group col-md-6" >--}}
{{--                                    <label for="rez_date">Pickup Date</label>--}}

{{--                                </div>--}}
{{--                                <div class="form-group col-md-6" >--}}
{{--                                    <label for="rez_time">Pickup Time</label>--}}

{{--                                </div>--}}

{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="rez_time">Pickup Time</label>--}}
{{--                                    <input type="time"  placeholder="Pickup Time" name="rez_time" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="return_date">Drop Off Date</label>--}}
{{--                                    <input type="date" name="return_date">--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="return_time">Drop Off Time</label>--}}
{{--                                    <input type="time"placeholder="Drop Off Time" name="return_time" required>--}}
{{--                                </div>--}}
                        </div>
                        <div class="row ">

                                <div class="form-group col-md-6" >

                                    <input type="date" name="rez_date" required>

                                </div>
                                <div class="form-group col-md-6">

                                    <input type="time"  placeholder="Pickup Time" name="rez_time" required>
                                </div>


                        </div>
                        <div class="row">

                            <div class="form-group col-xl-6">
                                <label style="float:left;">Pickup Date</label>
                            </div>
                            <div class="form-group col-xl-6">
                                <label style="float:left;">Pickup Time</label>
                            </div>

                        </div>
                        <div class="row ">

                            <div class="form-group col-md-6" >

                                <input type="date" name="return_date" required>

                            </div>
                            <div class="form-group col-md-6">

                                <input type="time"  placeholder="Pickup Time" name="return_time" required>
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
        </div>


    </section>
    <!-- reservation-section end -->



@endsection
