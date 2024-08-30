<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function Mabaindex()
    {
        return view('loginMaba');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'nullable|string',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        // Determine if the login is an email or NIM
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $credentials = ['email' => $login, 'password' => $password];
        } else {
            $credentials = ['nim' => $login, 'password' => $password];
        }

        if (Auth::attempt($credentials)) {

            if (Auth::user()->isAdmin == 1) {
                return redirect()->intended('dashboard');
            } 

            return redirect('index');
        }

        return redirect()->back()->with('error', 'NIM or Email is incorrect.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/index');
    }
}
