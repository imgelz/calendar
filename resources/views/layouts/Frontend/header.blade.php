<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="/frontend/img/meetschedule.png" width="230px" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                    {{-- <li class="nav-item {{ Request::segment(1) == ''? 'active':''}} "><a class="nav-link" href="{{url('/')}}">Home</a></li> --}}
                    <li class="nav-item {{ Request::segment(1) == 'categories'? 'active':''}} "><a class="nav-link" href="{{url('/categories')}}">Category</a></li>
                    <li class="nav-item {{ Request::segment(1) == 'calendar'? 'active':''}}"><a class="nav-link" href="{{url('calendar')}}">Calendar</a>
                    @if(Auth::check())
                    <li class="nav-item {{ Request::segment(1) == 'display'? 'active':''}}"><a class="nav-link" href="{{url('/display')}}">Schedule</a>
                    <li class="nav-item {{ Request::segment(1) == 'activity'? 'active':''}}"><a class="nav-link" href="{{url('/activity')}}">Activity</a>
                    <li class="nav-item {{ Request::segment(1) == 'contact'? 'active':''}}"><a class="nav-link" href="{{url('/contact')}}">Contact</a>
                    <li class="nav-item submenu dropdown">
                        <a style="color:#ededed" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><img src="/frontend/img/home/png/user.png" width="20px"> {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item {{ Request::segment(1) == 'contact'? 'active':''}}"><a class="nav-link" href="{{url('/contact')}}">Contact</a>
                    <li class="nav-item">
                        <br>
                        <a class="button button-outline button-small" href="/login">Sign In</a>
                        <a class="button button-outline button-small" href="/register">Sign Up</a>\
                    </li>
                </ul>
            </div>
          @endif
        </div>
      </nav>
    </div>
  </header>
