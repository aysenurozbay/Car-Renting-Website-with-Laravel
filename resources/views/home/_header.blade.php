@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<!--  header-section start  -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <ul class="social-links">
                        @if($setting->facebook != null) <li><a href="{{$setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li> @endif
                        @if($setting->twitter != null) <li><a href="{{$setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li> @endif
                        @if($setting->instagram != null) <li><a href="{{$setting->instagram }}" target="_blank"><i class="fa fa-instagram "></i></a></li> @endif
                        @if($setting->youtube != null) <li><a href="{{$setting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li> @endif
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="header-info d-flex justify-content-center">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>Medino, NY 10012, USA Mitro Road</p>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <p>Sat - Fri Day 08:00 am - 5.00 pm Sunday Holyday</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="header-action d-flex align-items-center justify-content-end">
                        <div class="lag-select-area">


                        </div>

                        @auth
                            <div class="col-lg-10">

                                <ul class="header-info d-flex justify-content-end" >

                                    <li>
                                        <i class="fa fa-user-circle-o"></i>
                                        <p> <a href="{{route('myprofile')}}"> {{Auth::user()->name}} </a> </p>

                                        <a href="{{route('logout')}}">Çıkış Yap</a>



                                    </li>
{{--                                    <li>--}}

{{--                                        <a href="{{route('logout')}}">Çıkış Yap</a>--}}
{{--                                    </li>--}}



                                </ul>

                            </div>
                        @endauth
                        @guest

                            <div class="login-reg" style="width: max-content">
{{--                                <a href="{{route('adminlogin')}}">Sign Up</a>--}}
                                <a href="/login">Sign Up</a>
                                <a href="/register">Sign in</a>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home._menu')

    @section('footerjs')
{{--        @livewireScripts--}}
    @endsection

</header>
<!--  header-section end  -->
