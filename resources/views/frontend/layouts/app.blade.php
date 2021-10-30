<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
    <div id="app">



        <main class="py-4">
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>

        </main>

        <div class="bottom-menu ">
            <div class="d-flex justify-content-center">
                <span style="font-size: 14px !important;">
                     Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  {{ date('Y') }} by Tarot-Tob
                </span>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            @if (session('order-send'))
                Toast.fire({
                icon: 'success',
                title: "{{ session('order-send') }}"
                })

            @endif

        });
    </script>

    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    @yield('scripts')
</body>

</html>
