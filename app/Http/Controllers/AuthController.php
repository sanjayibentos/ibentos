<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Post;

class AuthController extends Controller
{
    // Show Register Page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Register Logic
    public function register(Request $req)
    {
        $req->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6'

        ]);

        User::create([

            'name' => $req->name,

            'email' => $req->email,

            'password' => Hash::make(
                $req->password
            )

        ]);

        return redirect('/login')
            ->with(
                'success',
                'Registration Successful'
            );
    }

    // Show Login Page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Login Logic
    public function login(Request $req)
    {
        $req->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);

        // Find user
        $user = User::where(
            'email',
            $req->email
        )->first();

        // Check user exists
        if ($user) {

            // Verify password
            if (Hash::check(
                $req->password,
                $user->password
            )) {

                // Create session
                Session::put(
                    'user_id',
                    $user->id
                );

                Session::put(
                    'user_name',
                    $user->name
                );

                return redirect('/dashboard');

            }

        }

        return back()->with(
            'error',
            'Invalid Credentials'
        );
    }

    // Dashboard Page
    public function dashboard()
    {
        $totalPosts = Post::count();

        $totalUsers = User::count();

        return view(
            'dashboard',
            compact(
                'totalPosts',
                'totalUsers'
            )
        );
    }

    // Logout
    public function logout()
    {
        Session::flush();

        return redirect('/login');
    }
}