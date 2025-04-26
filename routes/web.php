<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Registration;
use App\Http\Controllers\auth\Login;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/','index')->name('index');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth') ->name('dashboard');
Route::get('/managingproject', [DashboardController::class, 'creatProject'])->middleware('auth')->name('managingproject');
Route::get('/managingtask/{project:slug}', [ProjectController::class, 'creatTask'])->middleware('auth')->name('managingtask');

Route::get('/viewproject', [ProjectController::class, 'viewProject'])->middleware('auth')->name('viewproject');
Route::post('/storeProject', [ProjectController::class, 'saveProject'])->middleware('auth')->name('storeProject');

Route::post('/storeTask', [TaskController::class, 'saveTask'])->middleware('auth')->name('storeTask');
Route::get('/view_task', [TaskController::class, 'viewTask'])->name('view_task');



// Route::post('registration',[Registration::class,'store']);
Route::post('auth/registration',[Registration::class,'store']);

Route::get('auth/registration',[Registration::class,'create'])->name('registration');

Route::get('auth/login',[Login::class,'create'])->name('login');
Route::post('auth/login',[Login::class,'login']);
Route::view('forgotenpassword','forgotenpassword')->name('forgotenpassword');


Route::get('/logout',[Login::class,'logout']);
