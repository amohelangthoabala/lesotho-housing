<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lesotho Housing</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('status/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('status/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('status/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('status/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('status/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('status/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('status/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('status/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('status/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>




  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Application Status</h2>
          <p>A short summary of my profession and my expriences in different life endeavours</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
            @foreach($status as $stat)
                @if($stat->name == Auth::user()->name)

              <h4>Application Successfully created</h4>
              <p><em>
                    Here are your details
              </em></p>
              <ul>
                <li>Name: {{ $stat->name }}</li>
                <li>Email: {{ $stat->email }}</li>
                <li>Phone: {{$stat->mobile}}</li>
                <li>DOB: {{$stat->birth_date}}</li>
                <li>Gender: @if($stat->gender == 'on')Male @else Female @endif</li>
              </ul>
            </div>


          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">More Details</h3>
            <div class="resume-item">
              <h4></h4>
              <h5> Created: {{ $stat->created_at }}</h5>
              <p><em>Application number #{{ $stat->id }}</em></p>
              <ul>
                <li>You applied to {{$stat->state}}</li>
                <li>Nationality: {{$stat->nationality}}</li>
                <li>Address: {{$stat->address}}</li>
              </ul>
            </div>
        </div>
        @endif
        @endforeach
        <a href="{{route('appform')}}" class="btn btn-primary">Go back</a>
        <a href="{{route('home')}}" class="btn btn-success ml-2">Continue</a>
        <a href="{{route('home')}}" class="btn btn-info ml-2">View All applications</a>
      </div>
    </section><!-- End Resume Section -->


  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="{{asset('status/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('status/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('status/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('status/assets/js/main.js')}}"></script>

</body>

</html>

