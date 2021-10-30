<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @yield('extra_css')
</head>
<body>

<main>
    @yield('content')
</main>


    @yield('scripts')

</body>
</html>
