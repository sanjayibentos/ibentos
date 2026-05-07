<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">

<div class="wrapper">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header -->
        <section class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0">
                            @yield('title')
                        </h1>

                    </div>

                </div>

            </div>

        </section>

        <!-- Main content -->
        <section class="content pt-3">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    <!-- Footer -->
    @include('partials.footer')

</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@yield('scripts')

</body>
</html>