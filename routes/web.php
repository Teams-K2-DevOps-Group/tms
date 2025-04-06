<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
<<<<<<< HEAD
Route::view('registration', 'registration')->name('registration');
Route::view('dashboard', 'dashboard')->name('dashboard');
=======

Route::view('auth/registration', 'auth/registration')->name('registration');

Route::view('auth/login','auth/login')->name('login');
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');

>>>>>>> 991223b510d6c6512ace4f353b2f89313ad111b3
