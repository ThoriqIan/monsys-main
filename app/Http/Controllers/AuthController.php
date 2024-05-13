<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('Pages.Auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect('/dashboard');
        }

        // Jika autentikasi gagal
        return redirect()->back()->withErrors(['message' => 'Email atau password salah']);
    }

    // Menampilkan form register
    public function showRegistrationForm()
    {
        return view('Pages.Auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman setelah register
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login.');
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
