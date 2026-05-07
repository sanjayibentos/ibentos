<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::query()

            ->when($search, function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('description', 'LIKE', "%{$search}%");

                });

            })

            ->latest()

            ->paginate(5)

            ->withQueryString();

        return view('posts.index', compact('posts', 'search'));
    }

    // Show Create Form
    public function create()
    {
        return view('posts.create');
    }

    // Store Post
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',

        ]);

        Post::create(

            $request->only('title', 'description')

        );

        return redirect('/posts')

            ->with('success', 'Post created successfully');
    }

    // Show Edit Form
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update Post
    public function update(Request $request, Post $post)
    {
        $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',

        ]);

        $post->update(

            $request->only('title', 'description')

        );

        return redirect('/posts')

            ->with('success', 'Post updated successfully');
    }

    // Delete Post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')

            ->with('success', 'Post deleted successfully');
    }
}