<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Registration;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');

// Route::post('registration',[Registration::class,'store']);
Route::post('registration',[Registration::class,'store']);

Route::view('auth/registration', 'auth/registration')->name('registration');

Route::view('auth/login','auth/login')->name('login');
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');


