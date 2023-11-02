<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="AMP Contracts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMP Contacts</title>
    <link rel="icon" href="{{ asset('assets/images/amp-favicon.svg') }}" type="image/png">


    <!-- Bootstrap  CDN -->
    {{-- index --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- !index --}}

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl/owl.theme.default.min.css') }}">

</head>

<body>
    @include('frontEnd.layouts.includes.header')

    @yield('content')

    @include('frontEnd.layouts.includes.footer')

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    <script src="{{ asset('assets/script/owl/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/script/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/script/header.js') }}"></script>
    <script src="{{ asset('assets/script/clientSlider.js') }}"></script>
    <script src="{{ asset('assets/script/mainSlider.js') }}"></script>


</body>

</html>
