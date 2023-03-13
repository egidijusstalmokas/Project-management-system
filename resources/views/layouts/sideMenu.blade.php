<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('logo/logo.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">PM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('default/user.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-header">
            PERSONAL
        </li>
        <li class="nav-item">
          <a href="{{ !empty(Auth::user()->profile) ? route('profile.index') : route('profile.create') }}" class="nav-link {{ request()->routeIs('profile.index', 'profile.create', 'profile.edit') ? 'active' : '' }}">
          <i class="nav-icon fa-solid fa-id-card"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-header">
            ADMIN
        </li>
        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.index', 'users.create', 'users.edit') ? 'active' : '' }}">
          <i class="nav-icon fa-solid fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

