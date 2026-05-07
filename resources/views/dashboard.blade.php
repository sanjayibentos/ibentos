@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- Welcome Row -->
    <div class="row mb-4">

        <div class="col-md-12">

            <div class="card shadow border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <h2 class="mb-1 font-weight-bold">
                        @if(session()->has('user_id'))

                         Welcome {{ session('user_name') }} 👋

                        @endif
                        </h2>

                        <p class="text-muted mb-0">
                            Laravel Admin Dashboard Panel
                        </p>

                    </div>

                    <div>
                        <i class="fas fa-user-shield fa-4x text-primary"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Small Boxes -->
    <div class="row">

        <!-- Total Posts -->
        <div class="col-lg-3 col-6">

            <div class="small-box bg-primary shadow">

                <div class="inner">

                    <h3>{{ $totalPosts }}</h3>

                    <p>Total Posts</p>

                </div>

                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>

                <a href="/posts" class="small-box-footer">

                    More info
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>

        <!-- Total Users -->
        <div class="col-lg-3 col-6">

            <div class="small-box bg-success shadow">

                <div class="inner">

                    <h3>{{ $totalUsers }}</h3>

                    <p>Total Users</p>

                </div>

                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>

                <a href="#" class="small-box-footer">

                    More info
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>

        <!-- Analytics -->
        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning shadow">

                <div class="inner">

                    <h3>75%</h3>

                    <p>Growth Rate</p>

                </div>

                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <a href="#" class="small-box-footer">

                    More info
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>

        <!-- Visitors -->
        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger shadow">

                <div class="inner">

                    <h3>120</h3>

                    <p>Visitors</p>

                </div>

                <div class="icon">
                    <i class="fas fa-eye"></i>
                </div>

                <a href="#" class="small-box-footer">

                    More info
                    <i class="fas fa-arrow-circle-right"></i>

                </a>

            </div>

        </div>

    </div>

    <!-- Analytics + Recent Posts -->
    <div class="row">

        <!-- Chart -->
        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">

                    <h3 class="card-title">
                        Dashboard Analytics
                    </h3>

                </div>

                <div class="card-body">

                    <canvas id="dashboardChart"
                            height="120"></canvas>

                </div>

            </div>

        </div>

        <!-- Recent Posts -->
        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h3 class="card-title">
                        Recent Posts
                    </h3>

                </div>

                <div class="card-body p-0">

                    <ul class="list-group list-group-flush">

                        @foreach(App\Models\Post::latest()->take(5)->get() as $post)

                            <li class="list-group-item d-flex justify-content-between">

                                <span>
                                    {{ $post->title }}
                                </span>

                                <small class="text-muted">
                                    {{ $post->created_at->format('d M') }}
                                </small>

                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- Table -->
    <div class="card shadow mt-4">

        <div class="card-header bg-secondary text-white">

            <h3 class="card-title">
                Latest Posts Table
            </h3>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="bg-light">

                    <tr>

                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach(App\Models\Post::latest()->take(5)->get() as $post)

                        <tr>

                            <td>{{ $post->id }}</td>

                            <td>{{ $post->title }}</td>

                            <td>{{ $post->description }}</td>

                            <td>
                                {{ $post->created_at->format('d M Y') }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('dashboardChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],

        datasets: [

            {
                label: 'Posts',
                data: [12, 19, 10, 25, 22, 30],
                borderWidth: 3,
                tension: 0.4
            },

            {
                label: 'Users',
                data: [5, 15, 8, 18, 28, 35],
                borderWidth: 3,
                tension: 0.4
            }

        ]

    }

});

</script>

@endsection