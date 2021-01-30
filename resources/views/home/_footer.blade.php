@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


<!-- footer-section start -->
<footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8">
                    <div class="footer-widget widget-about">
                        <div class="widget-about-content">
                            <a href="{{route('home')}}" class="footer-logo"><img src="{{asset('assets')}}/assets/images/logo-footer.png" alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum n vehicula nulla mauris nulla ipsum neque sed. Gravida egestas fermentum urna, velit sed. </p>
                            <ul class="social-links">
                                @if($setting->facebook != null) <li><a href="{{$setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li> @endif
                                @if($setting->twitter != null) <li><a href="{{$setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li> @endif
                                @if($setting->instagram != null) <li><a href="{{$setting->instagram }}" target="_blank"><i class="fa fa-instagram "></i></a></li> @endif
                                @if($setting->youtube != null) <li><a href="{{$setting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li> @endif


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-widget widget-menu">
                        <h4 class="widget-title">our cars</h4>
                        <ul>
                            <li><a href="#0">mistubishi lancer</a></li>
                            <li><a href="#0">forester subar</a></li>
                            <li><a href="#0">mirage ange</a></li>
                            <li><a href="#0">pajero range</a></li>
                            <li><a href="#0">subaru liberty</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-widget widget-menu">
                        <h4 class="widget-title">useful link</h4>
                        <ul>
                            <li><a href="#0">about</a></li>
                            <li><a href="#0">reservation</a></li>
                            <li><a href="#0">faq</a></li>
                            <li><a href="#0">blog</a></li>
                            <li><a href="#0">car list</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <div class="footer-widget widget-address">
                        <h4 class="widget-title">contact with us</h4>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span> {{$setting->address}}</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>{{$setting->email}}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone-square"></i>
                                <span> {{$setting->email}}</span>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                <span>{{$setting->email}} </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6">

                    <p class="copy-right-text">{{$setting->company}}</p>

                </div>
                <div class="col-sm-6">
                    <ul class="payment-method d-flex justify-content-end">
                        <li>We accept</li>
                        <li><img src="{{asset('assets')}}/assets/images/money-method/1.png" alt="image"></li>
                        <li><img src="{{asset('assets')}}/assets/images/money-method/2.png" alt="image"></li>
                        <li><img src="{{asset('assets')}}/assets/images/money-method/3.png" alt="image"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-section end -->


<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<!-- jquery js link -->
<script src="{{asset('assets')}}/assets/js/jquery-3.3.1.min.js"></script>
<!-- jquery migrate js link -->
<script src="{{asset('assets')}}/assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js link -->
<script src="{{asset('assets')}}/assets/js/bootstrap.min.js"></script>
<!-- lightcase js link -->
<script src="{{asset('assets')}}/assets/js/lightcase.js"></script>
<!-- wow js link -->
<script src="{{asset('assets')}}/assets/js/wow.min.js"></script>
<!-- nice select js link -->
<script src="{{asset('assets')}}/assets/js/jquery.nice-select.min.js"></script>
<!-- datepicker js link -->
<script src="{{asset('assets')}}/assets/js/datepicker.min.js"></script>
<script src="{{asset('assets')}}/assets/js/datepicker.en.js"></script>
<!-- wickedpicker js link -->
<script src="{{asset('assets')}}/assets/js/wickedpicker.min.js"></script>
<!-- owl carousel js link -->
<script src="{{asset('assets')}}/assets/js/owl.carousel.min.js"></script>
<!-- jquery ui js link -->
<script src="{{asset('assets')}}/assets/js/jquery-ui.min.js"></script>
<!-- main js link -->
<script src="{{asset('assets')}}/assets/js/main.js"></script>
