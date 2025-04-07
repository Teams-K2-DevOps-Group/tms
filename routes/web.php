<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Registration;

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

Route::view('auth/login','auth/login')->name('login');
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');


