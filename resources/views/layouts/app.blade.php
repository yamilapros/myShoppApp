<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'myShopApp') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('shop/img/favicon.ico') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('shop/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('shop/lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('shop/css/style.css') }}" rel="stylesheet">
        @yield('style')
    </head>

    <body>
        @include('partials.nav')
        
        @yield('content')
        
        @include('partials.footer')
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('shop/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('shop/lib/slick/slick.min.js') }}"></script>
        
        <!-- Template Javascript -->
        <script src="{{ asset('shop/js/main.js') }}"></script>
    </body>
</html>
