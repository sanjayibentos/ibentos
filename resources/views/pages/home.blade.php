@extends('layouts.app')

@section('content')
@php use Illuminate\Support\Str; @endphp

<div class="hero">
    <h1>Build, Manage & Explore Posts</h1>
    <p>Create and manage your content easily with Laravel</p>

    <a href="/posts/create" class="btn">+ Add Post</a>
</div>

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

@if($posts->isEmpty())
    <div class="empty-state">
        <p>No posts yet 🚀</p>
        <a href="/posts/create" class="btn">Create First Post</a>
    </div>
@endif

<div class="cards">
    @foreach($posts as $post)
        <div class="card">
            <h3>{{ Str::limit($post->title, 50) }}</h3>
            <p>{{ $post->description }}</p>

            <div class="card-actions">
                <a href="/posts/edit/{{ $post->id }}" class="edit-btn">Edit</a>

                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="delete-btn" onclick="return confirm('Delete this post?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

@endsection