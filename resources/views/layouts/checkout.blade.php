<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
    @stack('prepend-style')
    @stack('addon-style')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar-alternate')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-script')
</body>

</html>