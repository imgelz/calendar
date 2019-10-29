<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEET SCHEDULE | Service</title>
    <link rel="icon" href="/frontend/img/logomeets.png" type="image/png">

  <link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="/frontend/css/style.css">
  @yield('css')

  <style>.hero-banner::after, .priceTable-bg::after {background: linear-gradient(to right, #000000 0%, #000000 100%);}</style>
  <style>.header_area.navbar_fixed .main_menu .navbar {background: #90c73e;}</style>
  <style>.button:hover {background-color: #90c73e; border-color: #000000; color: #fff;}</style>
  <style>.card-feature:hover {background: #ededed; box-shadow: 0px 0px 0px 0px rgba(144, 148, 139); transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.body {color:black;}</style>
  {{-- <style>.header_area .navbar {background: #3f3e3e;}</style> --}}
  <style>.footer-area .footer-bottom .footer-social a {color: #90c73e;}</style>
  <style>.footer-area .footer-bottom .footer-social a:hover {color: #d1fc97;}</style>
  <style>.footer-area .single-footer-widget h4 {color: #90c73e;}</style>
  <style>.hero-banner {background: url(/frontend/img/banner/categories.jpg) left center no-repeat;}</style>
  <style>.hero-banner::after {opacity: .7;}</style>
  <style>.button:hover {background-color: #fff; border-color: #000000; color: #90c73e;}</style>
  {{-- <style>*, ::after, ::before {box-sizing: border-box; border-radius: 15px;}</style> --}}
  <style>.card-feature {background: #fff; border-radius: 15px; border: 2px solid #ededed;}</style>
    <style>.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {background-color: #90c73e;}</style>

</head>
<body>

  <!--================ Header Menu Area start =================-->
  @include('layouts.Frontend.header')
  <!--================Header Menu Area =================-->


  <!--================ Banner SM Section start =================-->
  <section class="hero-banner hero-banner-sm text-center">
    <div class="container">
      <h1>Service Categories</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Service</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Banner SM Section end =================-->

  <!--================ Feature section start =================-->
    <br><br>
  <section class="text-center">
      <br><br>
        <h2 style="color:#90c73e">Service</h2>
        <div class="section-style"></div>
        @yield('content')
  </section>
  <!--================ Feature section end =================-->


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
