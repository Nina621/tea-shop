<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect('auth.register')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function attemptRegister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('auth.login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}