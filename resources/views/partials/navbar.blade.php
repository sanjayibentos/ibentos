<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar -->
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

        <!-- Home -->
        <li class="nav-item d-none d-sm-inline-block">

            <a href="/dashboard"
               class="nav-link">

                Home

            </a>

        </li>

        <!-- Contact -->
        <li class="nav-item d-none d-sm-inline-block">

            <a href="/contact"
               class="nav-link">

                Contact

            </a>

        </li>

    </ul>

    <!-- Right navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Search -->
        <li class="nav-item">

            <a class="nav-link"
               href="#">

                <i class="fas fa-search"></i>

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

        <!-- Notifications -->
        <li class="nav-item dropdown">

            <a class="nav-link"
               href="#">

                <i class="far fa-bell"></i>

                <span class="badge badge-warning navbar-badge">
                    15
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

                <img src="{{ asset('image/user.png') }}"
                    class="user-image img-circle elevation-2"
                    alt="User Image">

                <span class="d-none d-md-inline">

                    @if(session()->has('user_id'))
                        {{ session('user_name') }}
                    @endif

                </span>

            </a>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <!-- User Header -->
                <li class="user-header bg-primary">

                    <img src="https://i.pravatar.cc/150"
                         class="img-circle elevation-2"
                         alt="User Image">

                    <p>

                        @if(session()->has('user_id'))
                            {{ session('user_name') }}
                        @endif

                        <small>
                            Laravel Admin User
                        </small>

                    </p>

                </li>

                <!-- Footer -->
                <li class="user-footer">

                    <a href="/profile"
                       class="btn btn-default btn-flat">

                        Profile

                    </a>

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