<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="{{url('/group')}}"><img src="/frontend/img/meetschedule.png" width="230px" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                    <li class="nav-item {{ Request::segment(1) == '/group/calendar'? 'active':''}}"><a class="nav-link" href="{{url('/group/calendar')}}">Calendar</a>
                    <li class="nav-item {{ Request::segment(1) == '/group/display'? 'active':''}}"><a class="nav-link" href="{{url('/group/display')}}">Schedule</a>
                    <li class="nav-item {{ Request::segment(1) == '/group/activity'? 'active':''}}"><a class="nav-link" href="{{url('/group/activity')}}">Activity</a>
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
                </ul>
            </div>
        </div>
      </nav>
    </div>
  </header>
