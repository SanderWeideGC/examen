@include('frontend.header')
    @section('header')
    <div class=innerbannerwrap>
        <div class=innerbanner><h2 class=bannerHeadline>about <span>us</span></h2></div>
    </div>
    @endsection
    @yield('header')
@yield('content')
@include('frontend.footer')