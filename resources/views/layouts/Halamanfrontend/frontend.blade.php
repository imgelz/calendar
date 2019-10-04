<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MEET SCHEDULE | Home</title>
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
  <style>.footer-area .footer-bottom .footer-social a {color: #90c73e;}</style>
  <style>.footer-area .footer-bottom .footer-social a:hover {color: #d1fc97;}</style>
  <style>.footer-area .single-footer-widget h4 {color: #90c73e;}</style>
  <style>.hero-banner {background: url(/frontend/img/banner/achievement.jpg) left center no-repeat;}</style>
  <style>.hero-banner::after {opacity: .7;}</style>
  <style>.button:hover {background-color: #fff; border-color: #000000; color: #90c73e;}</style>
  <style>.card-pricing {background: #ededed; border-radius: 13px; border: 1px solid rgba(0,0,0,0.125);}</style>
  <style>.card-pricing:hover {transition: all ease-in .2s; transform: scale(1.05);}</style>
  <style>.card-pricing .button {color: #90c73e; border: 1px solid #90c73e;}</style>
  <style>.card-pricing:hover .button {background: linear-gradient(to right, #90c73e 0%, #90c73e 100%);}</style>
</head>
<body>

  <!--================ Header Menu Area start =================-->
    @include('layouts.Frontend.header')
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center">
    <div class="container">
      <p class="text-uppercase">Pertemuan Dengan Ruang Sempurna</p>
      <h1>meeting schedule</h1>
      <p class="hero-subtitle">Make a schedule for starting your activities with meetings, and make the meeting useful for you and the people around you</p>
      <a class="button button-outline" href="#">Get Started</a>
    </div>
  </section>
  <!--================ Banner Section end =================-->
  <!--================ Client logo section start =================-->
<div class="section-margin" style="background:#ededed">
    <div class="container">
      <div class="text-center">
        <h3 class="client-logo-title">THE TOOLS USED TO MAKE THIS WEBSITE MEETING SCHEDULE</h3>
      </div>
      <div class="owl-carousel owl-theme logo-carousel">
        <div class="logo-carousel-item">
          <img class="img-fluid" src="/frontend/img/home/laravel_logo.png" alt="">
        </div>
        <div class="logo-carousel-item">
          <img class="img-fluid" src="/frontend/img/home/php.png">
        </div>
        <div class="logo-carousel-item">
          <img class="img-fluid" src="/frontend/img/home/ajax_logo.png" alt="">
        </div>
        <div class="logo-carousel-item">
          <img class="img-fluid" src="/frontend/img/home/logo_bootstrap.png" alt="">
        </div>
        <div class="logo-carousel-item">
          <img class="img-fluid" src="/frontend/img/home/brand-logo5.png" alt="">
        </div>
      </div>
    </div>
</div>
  <!--================ Client logo section end =================-->


  <!--================ Feature section start =================-->
  @yield('content')
  <!--================ Feature section end =================-->


  <!--================ Price Table section start =================-->
  <section class="section-padding priceTable-bg">
    <div class="container">
      <div class="section-intro-white pb-85px text-center">
        <h2>Popular Pricing Package</h2>
        <div class="section-style"></div>
      </div>

      <div class="priceTable-relative">
        <div class="priceTable-wrapper">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card text-center card-pricing">
                <div class="card-pricing__header">
                  <h4>SUPERVISION</h4>
                  <p>Make your scheduling</p>
                    <img src="/frontend/img/home/png/supervision.png" width="150px" alt="">
                </div>
                <ul class="card-pricing__list">
                  <p style="color:black" class="text-center font-weight-normal">
                    You have access to our calendar. We can help you create a schedule of activities for socializing with organizations of all sizes including Large Companies
                </p>
                </ul>
                <div class="card-pricing__footer">
                  <button class="button">Select Plan</button>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card text-center card-pricing">
                <div class="card-pricing__header">
                  <h4>CATEGORY BASED</h4>
                  <p>Pay attention to your category</p>
                    <img src="/frontend/img/home/png/backend.png" width="150px" alt="">
                </div>
                <ul class="card-pricing__list">
                  <p style="color:black" class="text-center font-weight-normal">
                    We provide several categories that you can use when creating your activity schedule. Contact us if there is a discrepancy with the availability of categories
                </p>
                </ul>
                <div class="card-pricing__footer">
                  <button class="button">Select Plan</button>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card text-center card-pricing">
                <div class="card-pricing__header">
                  <h4>SCHEDULER</h4>
                  <p>Attend your scheduling</p>
                    <img src="/frontend/img/home/png/scheduler.png" width="150px" alt="">
                </div>
                <ul class="card-pricing__list">
                  <p style="color:black" class="text-center font-weight-normal">
                    Quickly transform a conference room into a collaboration center with web meeting schedules. Turn your online event into an exciting experience that you will look forward to.
                  </p>
                </ul>
                <div class="card-pricing__footer">
                  <button class="button">Select Plan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Price Table section end =================-->


  <!--================ Service section start =================-->
  <section class="section-margin mb-5 pt-xl-235">

  </section>
  <!--================ Service section end =================-->


  <!--================ Subscribe section start =================-->

  <!--================ Subscribe section end =================-->


  <!--================  Dedicated server section start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <h2 class="mb-4">Dedicated to introduction <br class="d-none d-xl-block">for website Meet Schedule.</h2>
          <p>Web Meetings gives you what you need for easy online meetings while avoiding all other clutter. Web meeting participants use integrated conference calling.
              Plans include unlimited toll access with dial-out, toll-free and international caller options too.
              All of our Customer Success team works in our offices and is an experienced Web Meeting user ready to help you.
              Unlike many of our competitors, you can only hold conference calls hammering websites. For times when only calls will be made and screen sharing is not needed.
              Never outsourced. Never hold times.</p>
        </div>
        <div class="col-lg-7">
          <div class="text-center">
            <img class="img-fluid" src="/frontend/img/home/server.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================  Dedicated server section end =================-->


  <!--================ Testimonial section start =================-->
  <section class="bg-gray section-padding">
    <div class="container">
            <section class="section-margin text-center">
                <h2 style="color:#90c73e">Happy Web Devlopment Says</h2>
                    <div class="section-style"></div>
                <div class="container">
                <div class="row">
                    <br><br>
                    <div class="col-md-8 col-lg-6">
                        <div class="card-feature text-center">
                            <div class="feature-icon">
                            <img src="/frontend/img/blog/author.png" alt="">
                            </div>
                            <h3 style="color:#3a6307">Robert Simoncelli</h3>
                            <p style="color:#90c73e">Let place fly together third creature night at called fowl fill upon the grass </p>
                            <br>
                            <h3 style="color:#be0027">Fullstack Web Devlopment</h3>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-6">
                        <div class="card-feature text-center">
                            <div class="feature-icon">
                            <img src="/frontend/img/blog/author.png" alt="">
                            </div>
                            <h3 style="color:#3a6307">Jason Downey</h3>
                            <p style="color:#90c73e">Let place fly together third creature night at called fowl fill upon the grass </p>
                            <br>
                            <h3 style="color:#be0027">Assist Support Web Devlopment</h3>
                        </div>
                    </div>

                </div>
                </div>
            </section>
        </div>
  </section>
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
