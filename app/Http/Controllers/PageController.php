<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;   

class PageController extends Controller
{
    public function home() {
        $posts = Post::all();   
        return view('pages.home', compact('posts'));
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}