@extends('layouts.admin')

@section('title', 'My Profile')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow">

                <!-- Header -->
                <div class="card-header bg-primary">

                    <h3 class="card-title text-white mb-0">

                        My Profile

                    </h3>

                </div>

                <!-- Body -->
                <div class="card-body">

                    <!-- Success Message -->
                    @if(session('success'))

                        <div class="alert alert-success">

                            {{ session('success') }}

                        </div>

                    @endif

                    <!-- Form -->
                    <form method="POST"
                          action="/profile/update">

                        @csrf

                        <!-- Name -->
                        <div class="form-group">

                            <label>
                                Name
                            </label>

                            <input type="text"
                                   name="name"
                                   value="{{ session('user_name') }}"
                                   class="form-control">

                            @error('name')

                                <small class="text-danger">

                                    {{ $message }}

                                </small>

                            @enderror

                        </div>

                        <!-- Email -->
                        <div class="form-group">

                            <label>
                                Email
                            </label>

                            <input type="email"
                                   value="{{ session('user_email') }}"
                                   class="form-control"
                                   disabled>

                        </div>

                        <!-- New Password -->
                        <div class="form-group">

                            <label>
                                New Password
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Enter new password">

                            @error('password')

                                <small class="text-danger">

                                    {{ $message }}

                                </small>

                            @enderror

                        </div>

                        <!-- Button -->
                        <button type="submit"
                                class="btn btn-success">

                            <i class="fas fa-save"></i>

                            Update Profile

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection