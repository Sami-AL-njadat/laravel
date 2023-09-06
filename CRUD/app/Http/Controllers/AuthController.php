<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->where('password', $password)->first();

        if ($user) {
            // User found, show popup and redirect to homepage
            return redirect()->route('home')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }
}
