<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{url('/calendar')}}" style="color:#abdb5a" class="navbar-brand"><b>MEET SCHEDULE</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            {{-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> --}}
            @if(Auth::check())
                @role('admin')
                    <li><a href="{{url('/admin/display')}}">Display Table</a></li>
                    <li><a href="{{url('/admin/kategori')}}">Kategori</a></li>
                    <li><a href="{{url('/admin/logActivity')}}">Log Activity</a></li>
                @endrole
            @else

            @endif

            {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> --}}
          </ul>
          {{-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> --}}
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account Menu -->
            @if(Auth::check())
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header" style="background:#d9fca4">
                        <img src="/adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">

                        <p style="color:#477008">
                        {{ Auth::user()->name }}
                        <small>{{ Auth::user()->email }}</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer" style="background:#477008">
                        <div class="pull-left">
                        </div>
                        <div class="pull-right">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-outline btn-flat">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </ul>
                </li>
            @else

                <a href="/login" class="btn btn-primary-outline btn-lg" style="color:#abdb5a"> <b>MASUK</b></a>
                <a href="/register" class="btn btn-primary-outline btn-lg" style="color:#abdb5a"><b>DAFTAR</b><a>
            @endif
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
