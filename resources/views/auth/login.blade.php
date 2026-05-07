<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- icheck bootstrap -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition login-page">

<div class="login-box">

    <!-- Logo -->
    <div class="login-logo">

        <a href="#">

            <b>My</b>Admin

        </a>

    </div>

    <!-- Card -->
    <div class="card card-outline card-primary">

        <div class="card-body login-card-body">

            <p class="login-box-msg">

                Sign in to start your session

            </p>

            <!-- Success Message -->
            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <!-- Error Message -->
            @if(session('error'))

                <div class="alert alert-danger">

                    {{ session('error') }}

                </div>

            @endif

            <!-- Validation Errors -->
            @if($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <!-- Login Form -->
            <form method="POST"
                  action="/login">

                @csrf

                <!-- Email -->
                <div class="input-group mb-3">

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Email"
                           value="{{ old('email') }}">

                    <div class="input-group-append">

                        <div class="input-group-text">

                            <span class="fas fa-envelope"></span>

                        </div>

                    </div>

                </div>

                <!-- Password -->
                <div class="input-group mb-3">

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Password">

                    <div class="input-group-append">

                        <div class="input-group-text">

                            <span class="fas fa-lock"></span>

                        </div>

                    </div>

                </div>

                <!-- Row -->
                <div class="row">

                    <div class="col-8">

                        <div class="icheck-primary">

                            <input type="checkbox"
                                   id="remember">

                            <label for="remember">

                                Remember Me

                            </label>

                        </div>

                    </div>

                    <div class="col-4">

                        <button type="submit"
                                class="btn btn-primary btn-block">

                            Sign In

                        </button>

                    </div>

                </div>

            </form>

            <!-- Register -->
            <p class="mb-0 mt-3 text-center">

                <a href="/register">

                    Register a new membership

                </a>

            </p>

        </div>

    </div>

</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>