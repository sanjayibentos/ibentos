<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="hold-transition layout-top-nav">

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- AdminLTE JS -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>