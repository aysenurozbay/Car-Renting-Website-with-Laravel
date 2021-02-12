@extends('layouts.home')

@section('title',  $data->title . "Car List")

@section('description')
    {{$data->description}}
@endsection

@section('keywords',$data->keywords)
@section('content')
    <section class="inner-page-banner bg_img overlay-3" data-background="{{asset('assets')}}/assets/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Cars</h2>
                    <ol class="page-list">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li>{{$data->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">

            <div class="row mt-120">
                <div class="col-lg-12">
                    <div class="car-search-result-area grid--view row mb-none-30">

                        @foreach($datalist as $dl)
                        <div class="col-md-4 col-12">
                            <div class="car-item">
                                <div class="thumb bg_img" data-background="{{Storage::url($dl->image)}}"></div>
                                <div class="car-item-body">
                                    <div class="content">
                                        <h4 class="title">{{$dl->title}}</h4>
                                        <span class="price">start form {{$dl->price}} per day</span>
                                        <p>{{$dl->description}}</p>
                                        <a href="{{route('car',['id'=> $dl->id, 'slug' => $dl->slug ])}}" class="cmn-btn">See More</a>
                                    </div>
                                    <div class="car-item-meta">
                                        <ul class="details-list">
                                            <li><i class="fa fa-car"></i>model {{$dl->model}}</li>
{{--                                            <li><i class="fa fa-tachometer"></i>32000 KM</li>--}}
                                            <li><i class="fa fa-sliders"></i>{{$dl->gear_type}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- car-item end -->

                        @endforeach

                    </div>
                    <nav class="d-pagination" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                        </ul>
                    </nav>
                </div>

            </div>




        </div>
    </section>






@endsection
