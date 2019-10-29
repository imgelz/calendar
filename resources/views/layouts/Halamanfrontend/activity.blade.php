<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Group | Activity</title>
    <link rel="icon" href="/frontend/img/logomeets.png" type="image/png">

  <link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="/frontend/css/style.css">
  @yield('css')

    <style>.card-feature {background: #fff; border-radius: 15px; border: 2px solid rgba(0,0,0,0.125);}</style>
    <style>.card-feature:hover { box-shadow: 0px 0px 0px 0px rgba(144, 148, 139); transition: all ease-in .2s; transform: scale(1.05);}</style>
    <style>.header_area.navbar_fixed .main_menu .navbar {background: #90c73e;}</style>
    <style>.header_area .navbar {background: #3f3e3e;}</style>

</head>
<body>

  <!--================ Header Menu Area start =================-->
  @include('layouts.Frontend.headergroup')
  <!--================Header Menu Area =================-->


  <!--================ Banner SM Section start =================-->
  <!--================ Banner SM Section end =================-->
  <!--================ Feature section start =================-->
  @yield('content')
  <!--================ Feature section end =================-->


  <!--================ Testimonial section start =================-->

  <!--================ Testimonial section end =================-->



  <!-- ================ start footer Area ================= -->
  {{-- @include('layouts.Frontend.footer') --}}
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
