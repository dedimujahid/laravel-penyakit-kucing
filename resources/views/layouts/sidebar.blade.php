<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FORM A LHP</span>
    </a>

    <!-- Sidebar -->
    <div class = "sidebar">
    @auth
      <!-- Sidebar user panel (optional) -->
      <div class = "user-panel mt-3 pb-3 mb-3 d-flex">
      <div class = "image">
      <img src   = "{{asset('backend/dist/img/user2-160x160.jpg')}}" class = "img-circle elevation-2" alt = "User Image">
        </div>
        <div class = "info">
        <a   href  = "#" class = "d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      @endauth

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item menu-open">
            <ul class="nav nav-treeview nav-item">
                <li class="nav-item"><!-- INI ADALAH MENU 3-->
                    <a href="{{ route('home') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
              <li class="nav-item"><!-- INI ADALAH MENU 2-->
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan FORM A</p>
                </a>
              </li>

              <li class="nav-item"><!-- INI ADALAH MENU 3-->
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Pengguna</p>
                </a>
              </li>
            </ul>
        </li>


          {{-- <li class="nav-item">
            <a href  = "#" class = "nav-link">
            <i class = "nav-icon fas fa-circle"></i>
              <p>
                KECAMATAN A
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    KELURAHAN A
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    KELURAHAN A
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                KECAMATAN A
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    KELURAHAN A
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    KELURAHAN A
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
            </ul>
          </li> --}}
          @auth
          <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
            </form>
          </li>
          @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
