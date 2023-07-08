<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function dashboard()
    {
        return view('console.dashboard');
    }

    public function loginForm()
    {
        return view('console.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/console/dashboard');
        }

        return back()
            ->withInput()
            ->withErrors([
                'email' => 'The provided email do not match our records.',
                'password' => 'The provided password do not match our records.'
            ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}