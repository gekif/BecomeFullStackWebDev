<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @yield('styles')
</head>
<body>

    @include('layouts.nav')
    <hr>

    <div class="container">
        @yield('content')
    </div>

    <footer>Footer</footer>

@yield('scripts')

</body>
</html>