<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes.head')
<body>

@include('includes.header')
<div class="container">
    @yield('content')
    @include('includes.footer')
</div>

</body>
</html>
