<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
Route::view('login','login')->name('login');
Route::view('forgottenpassword','forgottenpassword')->name('forgottenpassword');
Route::view('settings','settings')->name('settings');
Route::view('admindashboard','admindashboard')->name('admindashboard');
Route::view('manageproject','manageproject')->name('manageproject');
Route::view('manageadmin','manageadmin')->name('manageadmin');
Route::view('manageteam','manageteam')->name('manageteam');
Route::view('comment','comment')->name('comment');