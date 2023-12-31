<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-normal">SE Assignment</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
          <i class="fas fa-building"></i>
            <p>
              Companies Database
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('suppliers.index') }}" class="nav-link">
                <i class="fas fa-parachute-box nav-icon"></i>
                <p>Companies</p>
              </a>
            </li>
          </ul>
        </li>
       
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-briefcase"></i>
            <p>
              Employee Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('employees.index') }}" class="nav-link">
                <i class="fas fa-user-circle nav-icon"></i>
                <p>Employees</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-user"></i>
            <p>
              User Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i>
                <p>Add User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="fas fa-user-tag  nav-icon"></i>
                <p>Roles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('permissions.index') }}" class="nav-link">
                <i class="fas fa-parking  nav-icon"></i>
                <p>Permissions</p>
              </a>
            </li> -->

          </ul>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>