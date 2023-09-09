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
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23396cf0%22></rect><path d=%22M55.34 20.11L55.34 20.11Q55.83 19.91 56.86 19.67Q57.89 19.42 58.97 19.42L58.97 19.42Q63.28 19.42 63.28 23.05L63.28 23.05L63.28 64.99Q63.28 69.40 62.00 72.39Q60.73 75.38 58.53 77.20Q56.32 79.01 53.43 79.79Q50.54 80.58 47.40 80.58L47.40 80.58Q41.82 80.58 39.27 79.25Q36.72 77.93 36.72 75.77L36.72 75.77Q36.72 74.40 37.31 73.42Q37.90 72.44 38.39 71.95L38.39 71.95Q39.86 72.64 41.91 73.23Q43.97 73.81 46.23 73.81L46.23 73.81Q50.64 73.81 52.99 71.71Q55.34 69.60 55.34 64.60L55.34 64.60L55.34 20.11Z%22 fill=%22%23ffffff%22></path></svg>" />

    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    @notifyCss
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" type="text/css" />


</head>

<body>
    @php
    $header = isset($header) ? $header : true;
    $footer = isset($footer) ? $footer : true;
    @endphp

    @if ($header)
    @include('layouts.header')
    @endif

    @yield('content')

    @if ($footer)
    @include('layouts.footer')
    @endif

    <script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
    <script src="{{asset('assets/js/easy_background.js') }}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{asset('assets/js/app.js') }}"></script>


    <script src="{{asset('assets/libs/js-datepicker/datepicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <x-notify::notify />
    @notifyJs
    <script>
        if (document.getElementById('home')){
            easy_background("#home",
                {
                    slide: ["{{asset('assets/images/bg/03.png')}}"],
                    delay: [3000, 3000, 3000]
                }
            );

        }
    </script>
</body>

</html>
