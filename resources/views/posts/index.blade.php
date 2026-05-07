@extends('layouts.admin')

@section('title', 'All Posts')

@section('content')

<div class="container-fluid">

    <div class="card shadow">

        <!-- Header -->
        <div class="card-header bg-dark d-flex justify-content-between align-items-center">

            <h3 class="card-title text-white mb-0">
                All Posts
            </h3>

            <a href="/posts/create"
               class="btn btn-primary btn-sm">

                <i class="fas fa-plus"></i>
                Add Post

            </a>

        </div>

        <!-- Body -->
        <div class="card-body">

            <!-- Success Message -->
            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif

            <!-- Table -->
            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($posts as $post)

                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>

                                <td class="d-flex">

                                    <!-- Edit -->
                                    <a href="/posts/edit/{{ $post->id }}"
                                       class="btn btn-warning btn-sm mr-2">

                                        <i class="fas fa-edit"></i>
                                        Edit

                                    </a>

                                    <!-- Delete -->
                                    <form method="POST"
                                          action="/posts/{{ $post->id }}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">

                                            <i class="fas fa-trash"></i>
                                            Delete

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4"
                                    class="text-center text-muted">
                                    No Posts Found
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <!-- 🔥 Pagination -->
            <div class="mt-3">
                {{ $posts->links() }}
            </div>

        </div>

    </div>

</div>

@endsection