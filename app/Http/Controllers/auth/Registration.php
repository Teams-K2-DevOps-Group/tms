<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Registration extends Controller
{

    public function create(){
        return view("auth.registration");
    }
    public function store(Request $request)
    {

        $request->validate([
            'fullname' =>   ['required','string','min:5','max:50'],
            'email' => ['required','string','email','max:60','unique:users'],
            'studentid' => ['required','string','max:7','unique:users'],
            'password' => ['required','min:8']
        ]);
        $validateUser = new User;
        $validateUser->name = $request->fullname;
        $validateUser->email = $request->email;
        $validateUser->studentId = $request->studentid;
        $validateUser->password = Hash::make($request->password);
        $result = $validateUser->save();
        if ($result) {
            Auth::login($validateUser);
            return redirect()->route('dashboard')->with("message","You have successfully register");
        } else {
            return back();
        }

    }
}
