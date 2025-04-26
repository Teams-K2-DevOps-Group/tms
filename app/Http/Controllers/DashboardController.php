<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }


    public function creatProject(){
        return view('managingproject');
        // $project = Project::where('user_id', Auth::id())->first();
    }

    public function creatTask(){
        return view('managingtask');
    }
}
