<!doctype html>
<html class="fixed">
<head>
    @include('includes.head')
    @yield('style')
</head>
<body>
<section class="body">
    @include('includes.header')
    <div class="inner-wrapper">
        @include('includes.aside')
        @yield('content')
    </div>
</section>
@yield('script')
@include('includes.scripts')
</body>
</html>