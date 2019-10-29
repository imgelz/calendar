<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEET SCHEDULE | Meeting Schedule Sourcing</title>
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
  <style>.card-feature {border:1px solid rgba(0,0,0,0.125); border-radius: 15px;}</style>
  <style>.card-feature:hover {background: #ededed; box-shadow: 0px 15px 15px 0px rgba(144, 148, 139); border-radius: 15px;}</style>
  <style>.body {color:black;}</style>
  <style>.logo-carousel .owl-item img {width: 180px; height: 150px;}</style>
  <style>.footer-area .footer-bottom .footer-social a {color: #90c73e;}</style>
  <style>.footer-area .footer-bottom .footer-social a:hover {color: #d1fc97;}</style>
  <style>.footer-area .single-footer-widget h4 {color: #90c73e;}</style>
  <style>.hero-banner {background: url(/frontend/img/banner/meeting_banner.jpg) left center no-repeat;}</style>
  <style>.hero-banner::after {opacity: .7;}</style>
  <style>.button:hover {background-color: #fff; border-color: #000000; color: #90c73e;}</style>
  <style>.card-pricing {background: #ededed; border-radius: 13px; border: 1px solid rgba(0,0,0,0.125);}</style>
  <style>.card-pricing:hover {transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.card-pricing .button {color: #90c73e; border: 1px solid #90c73e;}</style>
  <style>.card-pricing:hover .button {background: linear-gradient(to right, #90c73e 0%, #90c73e 100%);}</style>
  <style>.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {background-color: #90c73e;}</style>
  <style>.hero-banner::after, .priceTable-bg::after {opacity: .7;}</style>
  <style>.priceTable-bg {background: url(/frontend/img/home/home_meeting.jpg) left center no-repeat;}</style>
</head>
<body>

  <!--================ Header Menu Area start =================-->
    @include('layouts.Frontend.header')
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  @yield('content')
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
