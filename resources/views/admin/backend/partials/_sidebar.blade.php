<!-- Sidebar -->
<div class="sidebar" data-color="azure" data-background-color="black">
      <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">
          DB
        </a>
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal text-uppercase">
          dashboard
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img alt="" src="{{ secure_asset('backend/img/faces/avatar.png') }}" class="w-100 h-100" title="avatar"/>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username" title="{{ Auth::user()->name }}">
              <span class="text-capitalize">
                {{ Auth::user()->name }}
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a title="logout" class="nav-link" href="{{ route('logout') }}">
                    <span class="sidebar-mini"> SD </span>
                    <span class="sidebar-normal">logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          @if(Request::is('admin*'))
            <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/categories*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.categories.index') }}">
                <i class="material-icons">apps</i>
                <p>Categories</p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/products*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.products.index') }}">
                <i class="material-icons">apps</i>
                <p>Products</p>
              </a>
            </li>
            @endif

        </ul>
      </div>
  </div>
<!-- End sidebar -->
