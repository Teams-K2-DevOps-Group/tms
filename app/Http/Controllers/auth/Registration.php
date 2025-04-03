<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Registration extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' =>   ['required','string','min:5','max:50'],
            'email' => ['required','string','email','max:60','unique:users'],
            'studentId' => ['required','string','max:60','unique:users'],
            'password' => ['required','min:8']
        ]);
        $validateUser = new User;
        $validateUser->name = $request->name;
        $validateUser->email = $request->email;
        $validateUser->studentId = $request->studentId;
        $validateUser->password = Hash::make($request->password);
        $result = $validateUser->save();
        if ($result) {
            Auth::login($validateUser);
            return redirect()->route('index')->with("message","You have successfully register");
        } else {
            return back();
        }

    }
}
