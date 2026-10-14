@include('frontend.common.header')


@include('sweetalert2::index')
@yield('content')

@stack('scripts')
@include('frontend.common.footer')