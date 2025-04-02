<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
Route::view('login','login')->name('login');
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');