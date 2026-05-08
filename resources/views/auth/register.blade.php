<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Register</title>

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

<body class="hold-transition register-page">

<div class="register-box">

    <!-- Logo -->
    <div class="register-logo">

        <a href="#">

            <b>My</b>Admin

        </a>

    </div>

    <!-- Card -->
    <div class="card card-outline card-primary">

        <div class="card-body register-card-body">

            <p class="login-box-msg">

                Register a new membership

            </p>

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

            <!-- Form -->
            <form method="POST"
                  action="/register"
                  enctype="multipart/form-data">

                @csrf

                <!-- Name -->
                <div class="input-group mb-3">

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Full Name"
                           value="{{ old('name') }}">

                    <div class="input-group-append">

                        <div class="input-group-text">

                            <span class="fas fa-user"></span>

                        </div>

                    </div>

                </div>

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

                <!-- Profile Image -->
                <div class="input-group mb-3">

                    <input type="file"
                           name="profile_image"
                           class="form-control">

                    <div class="input-group-append">

                        <div class="input-group-text">

                            <span class="fas fa-image"></span>

                        </div>

                    </div>

                </div>

                <!-- Terms -->
                <div class="row">

                    <div class="col-8">

                        <div class="icheck-primary">

                            <input type="checkbox"
                                   id="agreeTerms">

                            <label for="agreeTerms">

                                I agree to the terms

                            </label>

                        </div>

                    </div>

                    <div class="col-4">

                        <button type="submit"
                                class="btn btn-primary btn-block">

                            Register

                        </button>

                    </div>

                </div>

            </form>

            <!-- Login Link -->
            <p class="mt-3 mb-0 text-center">

                <a href="/login">

                    I already have an account

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