@include('frontend.includes.header')
    @section('header')
    <div class=innerbannerwrap>
        <div class=innerbanner><h2 class=bannerHeadline>@yield('header-title')</h2></div>
    </div>
    @endsection
    @yield('header')
@yield('content')
@include('frontend.includes.footer')
