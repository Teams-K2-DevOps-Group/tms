<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

      public function login(Request $request)
    {
        $userValidate = $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $credentials = Auth::attempt($request->only('email', 'password'));
        if ($credentials) {
            return redirect()->route('dashboard')->with("message","You have Successfully logged in");
        } else {
            return redirect("auth/login")->with("error",'Oppes! You have entered invalid credentials');
        }

    }
}
