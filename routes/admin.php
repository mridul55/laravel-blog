<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;


//Admin Panel Route
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){ 
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
      Route::resource('category', CategoryController::class);
      //Route::resource('category', CategoryController::class)->middleware('cauth');
      Route::resource('tag', TagController::class);
      Route::resource('post', PostController::class);
      Route::resource('user', UserController::class);
      Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
      Route::post('/profile', [UserController::class, 'profile_update'])->name('user.profile.update');
      Route::resource('setting', SettingController::class);
      Route::resource('contact', ContactController::class);
   });