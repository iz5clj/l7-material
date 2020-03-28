<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.aside')

    <div class="main-panel">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    @include('partials.javascript')

</body>

</html>
