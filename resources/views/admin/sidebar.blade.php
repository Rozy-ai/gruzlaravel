    <!-- Left side column. contains the sidebar -->
    <div class="sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <nav class="sidebar-nav overflow-hidden ps">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="nav">
          <!-- <li class="nav-title">ADMINISTRATION</li> -->
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->


<li class="nav-item open"><a class="nav-link" href="{{ url('/admin') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/categories') }}">
              <i class="fa fa-file"></i>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/items') }}">
              <i class="fa fa-file"></i>
              Items
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/trucks') }}">
              <i class="fa fa-truck"></i>
              Trucks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/orders') }}">
              <i class="fa fa-book"></i>
              {{__('Orders')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dropzone') }}">
              <i class="fa fa-image"></i>
              Media
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/contacts') }}">
              <i class="fa fa-phone"></i>
              {{__('Contact Us')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/info') }}">
              <i class="fa fa-info"></i>
              Umumy maglumatlar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/users') }}">
              <i class="fa fa-user"></i>
              Users
            </a>
          </li>
          <!-- ======================================= -->
          <!-- <li class="divider"></li> -->
          <!-- <li class="nav-title">Entries</li> -->
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></nav>
      <!-- /.sidebar -->
    </div>