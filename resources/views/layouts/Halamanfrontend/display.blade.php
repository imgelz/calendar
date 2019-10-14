<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MEET SCHEDULE | Display</title>
    <link rel="icon" href="/frontend/img/logomeets.png" type="image/png">

  <link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="/frontend/css/style.css">

  <style>.hero-banner::after, .priceTable-bg::after {background: linear-gradient(to right, #000000 0%, #000000 100%);}</style>
  <style>.header_area.navbar_fixed .main_menu .navbar {background: #90c73e;}</style>
  <style>.card-feature:hover {background: #d8f5ae; box-shadow: 0px 20px 20px 0px rgba(144, 148, 139);}</style>
  <style>.body {color:black;}</style>
  <style>.footer-area .footer-bottom .footer-social a {color: #90c73e;}</style>
  <style>.footer-area .footer-bottom .footer-social a:hover {color: #d1fc97;}</style>
  <style>.footer-area .single-footer-widget h4 {color: #90c73e;}</style>
  <style>.hero-banner {background: url(/frontend/img/banner/display.png) left center no-repeat;}</style>
  <style>.hero-banner::after {opacity: .7;}</style>
    <style>.button {background-color: #fff; border: 2px solid #ededed; color: #90c73e; }</style>
  <style>.button:hover {background-color: #fff; border-color: #000000; color: #90c73e; transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.card-feature {background: #ededed; border-radius: 15px;}</style>
  <style>.card-service {border: 2px solid #ededed; border-radius: 15px;}</style>
  <style>.card-service:hover {background: #ededed; transition: all ease-in .2s; transform: scale(1.05); box-shadow:0px 0px 0px 0px rgba(40,25,114,0.1);}</style>
  <style>.pagination {margin-left: 40em;}</style>
  <style>.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {background-color: #90c73e;}</style>
</head>
<body>

  <!--================ Header Menu Area start =================-->
  @include('layouts.Frontend.header')
  <!--================Header Menu Area =================-->



  <!--================ Banner SM Section start =================-->
  <section class="hero-banner hero-banner-sm text-center">
    <div class="container">
      <h1>Display Schedule</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Display</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Banner SM Section end =================-->


  <!--================ Service section start =================-->
  @yield('content')
  <!--================ Service section end =================-->

  <!--================ Testimonial section start =================-->

  <!--================ Testimonial section end =================-->
  <!-- ================ start footer Area ================= -->
  @include('layouts.Frontend.footer')
  <!-- ================ End footer Area ================= -->




  <script src="/frontend/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="/frontend/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/frontend/js/jquery.ajaxchimp.min.js"></script>
  <script src="/frontend/js/mail-script.js"></script>
  <script src="/frontend/js/main.js"></script>
  @yield('js')
</body>
</html>
