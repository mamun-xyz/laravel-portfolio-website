<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>My Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('frontend/img/mamun.jpg')}}" rel="icon">
  <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href="{{('/')}}"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="{{('/')}}">Home</a></li>

          <li><a class="nav-link scrollto {{ request()->is('experience') ? 'active' : '' }}" href="{{URL::to('/experience')}}">Experience</a></li>

          <li><a class="nav-link scrollto {{ request()->is('project') ? 'active' : '' }}" href="{{('/project')}}">Project</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  