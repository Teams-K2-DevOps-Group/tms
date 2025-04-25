<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Registration;
use App\Http\Controllers\auth\Login;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');


Route::view('dashboard', 'dashboard')->name('dashboard');


// Route::post('registration',[Registration::class,'store']);
Route::post('auth/registration',[Registration::class,'store']);

Route::get('auth/registration',[Registration::class,'create'])->name('registration');

Route::get('auth/login',[Login::class,'create'])->name('login');
Route::post('auth/login',[Login::class,'login']);
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');

