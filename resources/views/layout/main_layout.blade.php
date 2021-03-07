<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>{{ env('APP_NAME', null) }}</title>

    <!-- font -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- css styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.css') }}">

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/r8.js') }} "></script>

    {{-- custom r8 --}}
    <script src="{{asset('assets/js/slmunicipality.js')}}"></script>

    {{-- custom js --}}
    <script src="{{asset('assets/js/dashboardjs.js')}}" defer></script>
    <script src="{{asset('assets/js/main.js')}}" type="module" defer></script>

    <!-- js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

    <!-- script functions and animations -->
    <script src="{{ asset('assets/js/custom_script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
    <script src="{{asset('assets/js/scanner-script.js')}}" defer></script>
    <script src="{{asset('assets/js/asyncFunc.js') }}"defer></script>


    <!-- <script src="https://trace.southernleyte.org.ph/assets/js/r8.js"></script> -->


</head>
<body>

    @yield('registration_content')
    @yield('scan_content')
    @yield('content')


</body>
</html>
