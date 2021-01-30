<div class="header-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="site-logo site-title" href="{{route('home')}}"><img src="{{asset('assets')}}/assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu mr-auto">
                    <li><a href="{{route('home')}}">Home</a>

                    @include('home._category')

                    <li><a href="{{route('aboutus')}}">About Us</a>
                    <li><a href="{{route('references')}}">References</a>
                    <li><a href="{{route('faqs')}}">FAQ</a>
                    <li><a href="{{route('contact')}}">Contact</a>




                    </li>
{{--                    <li class="menu_has_children"><a href="#0">blog</a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li><a href="blog.html">blog page</a></li>--}}
{{--                            <li><a href="blog-details.html">blog details</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a href="about.html">About</a>--}}
{{--                    <li><a href="contact.html">contact us</a></li>--}}
                </ul>
            </div>
        </nav>
    </div>
</div><!-- header-bottom end -->
