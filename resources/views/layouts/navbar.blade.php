<nav class = "main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class = "navbar-nav">
    <li class = "nav-item">
    <a  class = "nav-link" data-widget = "pushmenu" href = "#" role = "button"><i class = "fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class = "navbar-nav ml-auto">
        <!-- Navbar Search -->

        @auth
        <!-- Hanya tampilkan informasi pengguna jika sudah login -->
        <li   class = "nav-item dropdown user-menu">
        <a    href  = "#" class                                                 = "nav-link dropdown-toggle" data-toggle  = "dropdown">
        <img  src   = "{{ asset('backend/dist/img/user2-160x160.jpg') }}" class = "user-image img-circle elevation-2" alt = "User Image">
        <span class = "d-none d-md-inline">{{ auth()->user()->name }}</span>
            </a>
            <ul class = "dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li  class = "user-header bg-primary">
                <img src   = "{{ asset('backend/dist/img/user2-160x160.jpg') }}" class = "img-circle elevation-2" alt = "User Image">

                    <p>
                        {{ auth()->user()->name }}
                        <small>{{ auth()->user()->role }}</small>
                    </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class = "user-footer">
                <a  href  = "#" class = "btn btn-default btn-flat">Profile</a>
                </li>
            </ul>
        </li>
        @endauth

        @guest
                            @if (Route::has('login'))
                                <li class = "nav-item">
                                <a  class = "nav-link" href = "{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

        <!-- Messages Dropdown Menu -->

    </ul>
</nav>
