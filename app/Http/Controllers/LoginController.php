<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

   
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard'); 
        }

       
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

  
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
