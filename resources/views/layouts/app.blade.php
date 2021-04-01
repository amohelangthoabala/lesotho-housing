<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('assets/img/favicon.png')}} " rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/line-awesome/css/line-awesome.min.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}} " rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}} " rel="stylesheet">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="row pt-4">
    <div class="col-12">


<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">LHLDC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="index.html">Home</a></li>


          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>

        @if (Route::currentRouteName() == 'login')
            <li class="get-started"><a href="{{ route('register') }}"> Register Here</a></li>

        @else
           <li class="get-started"><a href="{{ route('login') }}">Login here</a></li>
        @endif


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
</div>
<div class="col-12">
    <div id="app" class="mt-5" >
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</div>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>
</html>
