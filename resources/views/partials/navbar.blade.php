
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left Navbar -->
    <ul class="navbar-nav">

        <!-- Sidebar Toggle -->
        <li class="nav-item">

            <a class="nav-link"
               data-widget="pushmenu"
               href="#"
               role="button">

                <i class="fas fa-bars"></i>

            </a>

        </li>

        <!-- Search Bar -->
        <li class="nav-item ml-3">

            <form class="form-inline">

                <div class="input-group input-group-sm">

                    <input class="form-control form-control-navbar"
                           type="search"
                           placeholder="Search here...">

                    <div class="input-group-append">

                        <button class="btn btn-navbar"
                                type="submit">

                            <i class="fas fa-search"></i>

                        </button>

                    </div>

                </div>

            </form>

        </li>

    </ul>

    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications -->
        <li class="nav-item dropdown">

            <a class="nav-link"
               href="#">

                <i class="far fa-bell"></i>

                <span class="badge badge-warning navbar-badge">

                    5

                </span>

            </a>

        </li>

        <!-- Messages -->
        <li class="nav-item dropdown">

            <a class="nav-link"
               href="#">

                <i class="far fa-comments"></i>

                <span class="badge badge-danger navbar-badge">

                    3

                </span>

            </a>

        </li>

        <!-- Fullscreen -->
        <li class="nav-item">

            <a class="nav-link"
               data-widget="fullscreen"
               href="#"
               role="button">

                <i class="fas fa-expand-arrows-alt"></i>

            </a>

        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown user-menu">

            <a href="#"
               class="nav-link dropdown-toggle"
               data-toggle="dropdown">

                <!-- User Image -->
                <img src="{{ session('user_image')
                        ? asset('uploads/' . session('user_image'))
                        : asset('image/user.png') }}"

                     class="user-image img-circle elevation-2"
                     alt="User Image">

                <!-- Username -->
                <span class="d-none d-md-inline">

                    @if(session()->has('user_id'))

                        {{ session('user_name') }}

                    @else

                        Guest User

                    @endif

                </span>

            </a>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <!-- User Header -->
                <li class="user-header bg-primary">

                    <!-- Profile Image -->
                    <img src="{{ session('user_image')
                            ? asset('uploads/' . session('user_image'))
                            : asset('image/user.png') }}"

                         class="img-circle elevation-2"
                         alt="User Image">

                    <!-- User Info -->
                    <p>

                        @if(session()->has('user_id'))

                            {{ session('user_name') }}

                        @else

                            Guest User

                        @endif

                        <small>

                            Laravel Admin

                        </small>

                    </p>

                </li>

                <!-- Menu Footer -->
                <li class="user-footer">

                    <!-- Profile Button -->
                    <a href="/profile"
                       class="btn btn-default btn-flat">

                        Profile

                    </a>

                    <!-- Logout -->
                    <form method="POST"
                          action="/logout"
                          style="display:inline; float:right;">

                        @csrf

                        <button type="submit"
                                class="btn btn-danger btn-flat">

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </li>

    </ul>

</nav>