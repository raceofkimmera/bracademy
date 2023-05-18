<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li>
  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Course Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/batches" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Batch List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/batches/create" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Batch</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                   Employee Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/employee" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Employee List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/employee/create" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Employee</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Student Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/student" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/student/create" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Student</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Batch Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/enrollment" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Enrollement List</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/enrollment/create" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Enrollement</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="/logout" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
