<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
Route::view('dashboard', 'dashboard')->name('dashboard');

Route::view('auth/registration', 'auth/registration')->name('registration');

Route::view('auth/login','auth/login')->name('login');
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');


