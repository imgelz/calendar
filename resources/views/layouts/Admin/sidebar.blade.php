<aside class="main-sidebar">
    <style>.skin-green-light .main-sidebar {border-right: 1px solid #b1f547;}</style>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a><i class="fa fa-circle" style="color:#07f527"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

        @guest
        @else
      <ul class="sidebar-menu">
        <li class="header" style="background:#90c73e; color:#477008">MAIN NAVIGATION</li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> --}}
        <li {{ Request::segment(1) == 'calendar'? 'active':''}}>
          <a href="{{url('/calendar')}}">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>

        <li {{ Request::segment(1) == 'admin/display'? 'active':''}}>
          <a href="{{url('/admin/display')}}">
            <i class="fa fa-table"></i> <span>Display Tables</span>
          </a>
        </li>

        <li {{ Request::segment(1) == 'admin/kategori'? 'active':''}}>
          <a href="{{url('admin/kategori')}}">
            <i class="fa fa-th-large"></i> <span>Kategori</span>
          </a>
        </li>

        <li {{ Request::segment(1) == 'admin/group'? 'active':''}}>
          <a href="{{url('admin/group')}}">
            <i class="fa fa-group"></i> <span>Group</span>
          </a>
        </li>

        <li {{ Request::segment(1) == 'admin/contact'? 'active':''}}>
          <a href="{{url('admin/contact')}}">
            <i class="fa fa-envelope"></i> <span>Message</span>
          </a>
        </li>

        <li {{ Request::segment(1) == 'admin/logActivity'? 'active':''}}>
          <a href="{{url('admin/logActivity')}}">
            <i class="fa fa-server"></i> <span>Log Activity</span>
          </a>
        </li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> --}}
        {{-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> --}}
        <li class="header" style="background:#90c73e; color:#477008"></li>
        {{-- <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
      </ul>
        @endguest
    </section>
    <!-- /.sidebar -->
  </aside>
