<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEET SCHEDULE | Calendar</title>
    <link rel="icon" href="/frontend/img/logomeets.png" type="image/png">

  <link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="/frontend/css/style.css">
  <style>.header_area.navbar_fixed .main_menu .navbar {background: #90c73e;}</style>
    <style>.button {background-color: #fff; border-color: #000000; color: #90c73e; }</style>
  <style>.button:hover {background-color: #fff; border-color: #000000; color: #90c73e; transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.card-feature {background: #ededed; border-radius: 15px;}</style>
  <style>.card-service {border: 1px solid #ededed; border-radius: 15px;}</style>
  <style>.card-service:hover {background: #ededed; transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.fc .fc-toolbar>*>:first-child {color:#90c73e}</style>
  <style>.fc-day-grid-event>.fc-content {color:#fff;}</style>
    <style>.header_area .navbar {background: #3f3e3e;}</style>

  @yield('css')
</head>
<body>

  <!--================ Header Menu Area start =================-->
  @include('layouts.Frontend.headergroup')
  <!--================Header Menu Area =================-->


  <!--================ Banner SM Section start =================-->
  {{-- <section class="hero-banner hero-banner-sm text-center">
    <div class="container">
      <h1>Display Calendar</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Calendar</li>
        </ol>
      </nav>
    </div>
  </section> --}}
  <!--================ Banner SM Section end =================-->

  <!-- ================ contact section start ================= -->
<br><br><br>
  @yield('content')
  <br>
	<!-- ================ contact section end ================= -->

  <!-- ================ start footer Area ================= -->
  {{-- @include('layouts.Frontend.footer') --}}
  <!-- ================ End footer Area ================= -->

  <script src="/frontend/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="/frontend/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/frontend/js/jquery.form.js"></script>
  <script src="/frontend/js/jquery.validate.min.js"></script>
  <script src="/frontend/js/contact.js"></script>
  <script src="/frontend/js/jquery.ajaxchimp.min.js"></script>
  <script src="/frontend/js/mail-script.js"></script>
  <script src="/frontend/js/main.js"></script>
  @yield('js')
</body>
</html>
