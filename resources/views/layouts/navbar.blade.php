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

        <!-- Messages Dropdown Menu -->

    </ul>
</nav>
