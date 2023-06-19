<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function loginPage() {
        return view('admin-pages.login');
    }

    public function loginMethod(Request $request) {
        $validateReq = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validateReq)) {
            return redirect()->route('adminDashboard');
        }

        return back()->withErrors([
            'login' => "Email atau password tidak cocok",
        ]);
    }

    public function logoutMethod() {
        Auth::logout();

        return redirect()->route('loginPage');
    }
}
