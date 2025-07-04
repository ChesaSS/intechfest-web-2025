<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.layout.head')
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="font-Montserrat dark:bg-gray-900 overflow-x-hidden">
    @yield('content')
    @include('landing.layout.footer')
    @yield('scripts')
    @include('landing.layout.scripts')
    @include('sweetalert::alert')
</body>

</html>