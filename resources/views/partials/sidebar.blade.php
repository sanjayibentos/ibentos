<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="/dashboard"
       class="brand-link d-flex align-items-center justify-content-center">

        <!-- Logo -->
        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mr-2"
             style="width:40px; height:40px;">

            <i class="fas fa-shield-alt text-white"></i>

        </div>

        <!-- Text -->
        <span class="brand-text font-weight-bold text-white">

            My Admin

        </span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <!-- User Image -->
            <div class="image">

                <img src="{{ session('user_image') 
                        ? asset('uploads/' . session('user_image')) 
                        : asset('image/user.png') }}"

                     class="img-circle elevation-2"
                     alt="User Image"
                     style="width:35px; height:35px; object-fit:cover;">

            </div>

            <!-- User Name -->
            <div class="info">

                <a href="#"
                   class="d-block">

                    @if(session()->has('user_id'))

                        {{ session('user_name') }}

                    @else

                        Guest User

                    @endif

                </a>

            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">

                    <a href="/dashboard"
                       class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <!-- Posts -->
                <li class="nav-item">

                    <a href="/posts"
                       class="nav-link {{ request()->is('posts') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-list"></i>

                        <p>All Posts</p>

                    </a>

                </li>

                <!-- Add Post -->
                <li class="nav-item">

                    <a href="/posts/create"
                       class="nav-link {{ request()->is('posts/create') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-plus-circle"></i>

                        <p>Add Post</p>

                    </a>

                </li>

                <!-- Profile -->
                <li class="nav-item">

                    <a href="/profile"
                       class="nav-link {{ request()->is('profile') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-user"></i>

                        <p>My Profile</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>