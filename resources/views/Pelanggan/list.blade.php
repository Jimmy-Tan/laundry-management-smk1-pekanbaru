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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Laundry SMKN 1</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="../assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>

          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
          </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">List Harga Pencucian</h2>
          </div>
        </div>
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
                  <tr>
                    <td>CURTAIN /GORDEN  TANPA RING</td>
                    <td>Rp 15.000</td>
                  </tr>
                  <tr>
                    <td>CURTAIN/GORDEN DENGAN RING</td>
                    <td>Rp 25.000</td>
                  </tr>
                  <tr>
                    <td>BED COVER SINGLE</td>
                    <td>Rp 35.000</td>
                  </tr>
                  <tr>
                    <td>BED COVER DOUBLE</td>
                    <td>Rp 50.000</td>
                  </tr>
                  <tr>
                    <td>TOWEL/HANDUK BIASA</td>
                    <td>Rp 10.000</td>
                  </tr>
                  <tr>
                    <td>TOWEL/HANDUK UKURAN JUMBO</td>
                    <td>Rp 15.000</td>
                  </tr>
                  <tr>
                    <td>BLANKET/SELIMUT SINGLE</td>
                    <td>Rp 10.000</td>
                  </tr>
                  <tr>
                    <td>BLANKET/SELIMUT DOUBLE</td>
                    <td>Rp 15.000</td>
                  </tr>
                  <tr>
                    <td>TABLE CLOTH/ALAS MEJA KECIL</td>
                    <td>Rp 5.000</td>
                  </tr>
                  <tr>
                    <td>TABLE CLOTH/ALAS MEJA BESAR</td>
                    <td>Rp 15.000</td>
                  </tr>
                  <tr>
                    <td>SHEET/ALAS KASUR (SINGLE)</td>
                    <td>Rp 7.000</td>
                  </tr>
                  <tr>
                    <td>SHEET / ALAS KASUR RIMPLE</td>
                    <td>Rp 20.000</td>
                  </tr>
                  <tr>
                    <td>SHEET / ALAS KASUR (DOUBLE)</td>
                    <td>Rp 10.000</td>
                  </tr>
                  <tr>
                    <td>PILLOW CASE</td>
                    <td>Rp 2.000</td>
                  </tr>    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </header><!-- End Header -->

  
  <section id="hero" class="d-flex align-items-center">

  
<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>Selamat Datang</h1>
      <h2>di Website Laundry SMK Negeri 1 Pekanbaru</h2>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/rzVtbnu7KVw?si=ermVOUZ5t1rEj6wM" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="../assets2/img/23926522-2105-i203-007-f-m004-c9-1.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        
    </div>
  </section><!-- End Hero -->

</body>

</html>