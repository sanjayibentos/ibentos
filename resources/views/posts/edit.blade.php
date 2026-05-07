@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <!-- Header -->
                <div class="card-header bg-warning">

                    <h3 class="card-title text-dark mb-0">
                        Edit Post
                    </h3>

                </div>

                <!-- Body -->
                <div class="card-body">

                    <form method="POST"
                          action="/posts/update/{{ $post->id }}">

                        @csrf

                        <!-- Title -->
                        <div class="form-group">

                            <label>
                                Post Title
                            </label>

                            <input type="text"
                                   name="title"
                                   value="{{ $post->title }}"
                                   class="form-control"
                                   placeholder="Enter title">

                            @error('title')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>

                        <!-- Description -->
                        <div class="form-group">

                            <label>
                                Description
                            </label>

                            <textarea name="description"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Enter description">{{ $post->description }}</textarea>

                            @error('description')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>

                        <!-- Buttons -->
                        <div class="mt-3">

                            <button type="submit"
                                    class="btn btn-warning">

                                <i class="fas fa-edit"></i>
                                Update Post

                            </button>

                            <a href="/posts"
                               class="btn btn-secondary">

                                Back

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection