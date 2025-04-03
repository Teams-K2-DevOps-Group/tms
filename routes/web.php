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