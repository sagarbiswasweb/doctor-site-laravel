@include('backend.common.header')

@include('backend.common.sidebar')

    @include('sweetalert2::index')
    @yield('content')
        
@include('backend.common.footer')