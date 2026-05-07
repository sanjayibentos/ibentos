<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class ProfileController extends Controller
{
    // Show Profile Page
    public function index()
    {
        return view('profile');
    }

    // Update Profile
    public function update(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'password' => 'nullable|min:6'

        ]);

        // Find logged-in user
        $user = User::find(
            session('user_id')
        );

        // Update Name
        $user->name = $request->name;

        // Update Password
        if ($request->password) {

            $user->password = Hash::make(
                $request->password
            );

        }

        $user->save();

        // Update Session Name
        session([
            'user_name' => $user->name
        ]);

        return back()->with(
            'success',
            'Profile Updated Successfully'
        );
    }
}