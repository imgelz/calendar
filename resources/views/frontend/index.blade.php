@extends('layouts.Halamanfrontend.frontend')

@section('content')
    <section class="hero-banner text-center">
    <div class="container">
      <p class="text-uppercase">Pertemuan Dengan Ruang Sempurna</p>
      <h1>meeting schedule</h1>
      <p class="hero-subtitle">Make a schedule for starting your activities with meetings, and make the meeting useful for you and the people around you</p>
      {{-- @if(Auth::check())
      @else
      <a class="button button-outline" href="/login">Sign In</a>
      <a class="button button-outline" href="/register">Sign Up</a>
      <p>____________________________________________</p>
      <p>Log In to see more !</p>
      @endif --}}
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
          <img class="img-fluid" src="/frontend/img/home/colorlib.png" alt="">
        </div>
      </div>
    </div>
</div>
  <!--================ Client logo section end =================-->


  <!--================ Feature section start =================-->
  <!--================ Feature section end =================-->


  <!--================ Price Table section start =================-->
  <section class="section-padding priceTable-bg">
    <div class="container">
      <div class="section-intro-white pb-85px text-center">
        <h2>Create Your Meeting To The Right Business</h2>
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
                  <button class="button">Feature List</button>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
              <div class="card text-center card-pricing">
                <div class="card-pricing__header">
                  <h4>GROUP FEATURES</h4>
                  <p>Pay attention to your group</p>
                    <img src="/frontend/img/home/png/group.png" width="150px" alt="">
                </div>
                <ul class="card-pricing__list">
                  <p style="color:black" class="text-center font-weight-normal">
                    We provide group features for where you participate with your friends, and the data displayed is data that your group added. and other people can't see your group data
                </p>
                </ul>
                <div class="card-pricing__footer">
                    <button class="button">Feature List</button>
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
                    Create a meeting schedule quickly this web is connected to the full calendar. Turn your online event into an exciting experience you've been waiting for.                </ul>
                <div class="card-pricing__footer">
                  <button class="button">Feature List</button>
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
                    <br>
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
@endsection
