<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('client/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.navbar')

    @include('components.sliders.slideshow')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')


    <script src="{{ asset('client/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('client/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/js/aos.js') }}"></script>
    <script src="{{ asset('client/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('client/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('client/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('client/js/google-map.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>
