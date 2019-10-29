<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Group | Home</title>
    <link rel="icon" href="/frontend/img/logomeets.png" type="image/png">

  <link rel="stylesheet" href="/frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="/frontend/css/style.css">
  <style>.header_area.navbar_fixed .main_menu .navbar {background: #90c73e;}</style>
      <style>.header_area .navbar {background: #3f3e3e;}</style>

    <style>
        .table td{
            color: black;
        }
        .col-md-12 {
            border: 1px solid #000000;
        }
        /* tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        } */
        /* .table-bordered>tbody>tr>td{
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
        } */
        /* table {
            border-spacing: 0;
            border-collapse: collapse;
        } */
        /* table .dataTable tbody td {
            padding-top: 1.1rem;
            padding-bottom: 1rem;
        } */
    </style>
      @yield('css')

</head>
<body>

  <!--================ Header Menu Area start =================-->
  @include('layouts.Frontend.headergroup')
  <!--================Header Menu Area =================-->



  <!--================ Banner SM Section start =================-->
  <!--================ Banner SM Section end =================-->


  <!--================ Service section start =================-->
  <br><br><br>
  @yield('content')
  <!--================ Service section end =================-->

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
