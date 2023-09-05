<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Jobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="Version" content="v1.4.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />

</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
    <script src="{{asset('assets/js/easy_background.js') }}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{asset('assets/js/app.js') }}"></script>

    <script>
        easy_background("#home",
            {
                slide: ["{{asset('assets/images/bg/03.png')}}"],
                delay: [3000, 3000, 3000]
            }
        );
    </script>
</body>

</html>
