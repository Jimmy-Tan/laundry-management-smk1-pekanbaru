@extends('app')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets2/img/favicon.png" rel="icon">
  <link href="../assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-5">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Laundry SMKN 1  </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="../assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Beranda</a></li>
          @if(!empty(Auth::user()))<li><a class="nav-link scrollto" href="{{ url('/') }}">Tentang</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ url('/Customer') }}">Tentang</a></li>
          @endif
     
          @if(!empty(Auth::user()))<li class="dropdown"><a href="#"><span>Servis</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('pelanggan.status') }}">Check Status</a></li>
              <li><a href="{{ route('Customer.listHarga') }}">List Harga</a></li>
            </ul>
          </li>
          @else
          <li><a href="{{ route('Customer.listHarga') }}">List Harga</a></li>
          @endif
          
          @if(!empty(Auth::user()))<li><a class="nav-link scrollto" href="{{ url('/Customer') }}">Kontak</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ url('/Customer.home') }}">Kontak</a></li>
          @endif
          @if(!empty(Auth::user()))<li><a class="nav-link scrollto" href="{{ route('logout') }}"> Logout </a></li> @endif
          <li><a class="getstarted dropdown" href="{{ route('login') }}"> @if(!empty(Auth::user())) <b>{{ Auth::user()->name }}</b> @else Login @endif </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" class="mt-5">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>List Harga Pencucian</h2>
        </div>

        <div class="row content">
          <div class="row">
            <div class="col-md-12">
              <div class="table-wrap">
                <table class="table">
                  <thead class="thead-primary">
                    <tr>
                      <th>Deskripsi Cucian</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $list_harga)
                    <tr>
                      <td>{{ $list_harga->jenis_cucian }}</td>
                      <td>Rp. {{ $list_harga->harga }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets2/vendor/aos/aos.js"></script>
  <script src="../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets2/js/main.js"></script>

</body>

</html>