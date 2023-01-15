<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//font end route
Route::get('/', [FrontEndController::class, 'home'])->name('website');
Route::get('/about', [FrontEndController::class, 'about'])->name('website.about');
Route::get('/category/{slug}', [FrontEndController::class, 'category'])->name('website.category');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('website.contact');
Route::get('/post/{slug}', [FrontEndController::class, 'post'])->name('website.post');


//Admin Panel Route
 Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){ 
    Route::get('/dashboard',function(){
        return view('admin.dashboard.index');
    });
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'profile_update'])->name('user.profile.update');
    Route::get('setting', [SettingController::class, 'edit'])->name('setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('setting.update');

    //Route::resource('setting', SettingController::class);
 });