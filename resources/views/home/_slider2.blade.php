<div class="choose-car-slider owl-carousel">

    @foreach($slider as $dl)
    <div class="car-item">
        <div class="thumb">
            <img src="{{Storage::url($dl->image)}}" alt="image">
        </div>
        <div class="car-item-body">
            <div class="content">
                <h4 class="title">{{$dl->title}}</h4>
                <span class="price">start form {{$dl->price}} per day</span>
                <p>{{$dl->description}}</p>
{{--                @php--}}
{{--                    $avrate=\App\Http\Controllers\HomeController::avrateview($data->id);--}}
{{--                    $contreview=\App\Http\Controllers\HomeController::countreview($data->id);--}}

{{--                @endphp--}}
{{--                <span class="price">--}}
{{--                    <i class="fa fa-star @if ($avrate<1) -o empty @endif"></i>--}}
{{--                    <i class="fa fa-star @if ($avrate<2) -o empty @endif"></i>--}}
{{--                    <i class="fa fa-star @if ($avrate<3) -o empty @endif"></i>--}}
{{--                    <i class="fa fa-star @if ($avrate<4) -o empty @endif"></i>--}}
{{--                    <i class="fa fa-star @if ($avrate<5) -o empty @endif"></i>--}}
{{--                    <i> ({{$countreview}})</i>--}}
{{--                </span>--}}
                <a href="{{route('car',['id'=> $dl->id, 'slug' => $dl->slug ])}}" class="cmn-btn">rent car</a>
            </div>
            <div class="car-item-meta">
                <ul class="details-list">
                    <li><i class="fa fa-car"></i>model: {{$dl->model}}</li>
{{--                    <li><i class="fa fa-tachometer"></i>32000 KM</li>--}}
                    <li><i class="fa fa-sliders"></i>{{$dl->gear_type}}</li>
                </ul>
            </div>
        </div>
    </div><!-- car-item end -->


    @endforeach


</div>
</div>
<div class="col-lg-4">

</div>
</div>
