<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Create session token
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'login' => 'Invalid credentials. Contact your administrator.',
        ]);
    }

    public function testing() {
        return view('halaman');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Destroy session token
        return redirect('/login');
    }
}