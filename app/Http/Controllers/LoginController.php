<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('blogs')
                ->withSuccess('Signed in');
        }
        
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout() 
    {
        Session::flush();
        Auth::logout();

        return redirect('blogs');  
    }
}
