<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png" type="image/png">
        <title>Personal Portfolio</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/linericon/style.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    </head>
    <body>

        @include('frontend.layouts.header')

        @yield('content')


        @include('frontend.layouts.footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('frontend') }}/js/popper.js"></script>
        <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/js/stellar.js"></script>
        <script src="{{ asset('frontend') }}/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="{{ asset('frontend') }}/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="{{ asset('frontend') }}/js/mail-script.js"></script>
        <script src="{{ asset('frontend') }}/js/theme.js"></script>
    </body>
</html>
