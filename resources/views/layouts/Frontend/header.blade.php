<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="/frontend/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item {{ Request::segment(1) == ''? 'active':''}} "><a class="nav-link" href="{{url('/')}}">Home</a></li>
              <li class="nav-item {{ Request::segment(1) == 'categories'? 'active':''}} "><a class="nav-link" href="{{url('/categories')}}">Category</a></li>
              <li class="nav-item {{ Request::segment(1) == 'display'? 'active':''}}"><a class="nav-link" href="{{url('/display')}}">Display</a>
                @if(Auth::check())
              <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Single Blog</a>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
            @else
            <ul>
                <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                    <br>
                    <a class="button button-outline button-large" href="/login">Masuk</a>
                    <a class="button button-outline button-large" href="/register">Daftar</a>
                </div>
            </ul>
          </div>
          @endif
        </div>
      </nav>
    </div>
  </header>
