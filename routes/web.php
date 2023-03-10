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


Route::get('/', function () {
    dd(app());
    return view('welcome');
});

Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //font end route
    Route::get('/', [FrontEndController::class, 'home'])->name('website');
    Route::get('/about', [FrontEndController::class, 'about'])->name('website.about');
    Route::get('/category/{slug}', [FrontEndController::class, 'category'])->name('website.category');
    Route::get('/tag/{slug}', [FrontEndController::class, 'tag'])->name('website.tag');
    Route::get('/contact', [FrontEndController::class, 'contact'])->name('website.contact');
    Route::get('/post/{slug}', [FrontEndController::class, 'post'])->name('website.post');
    //Route::get('/contactMessage',[FrontEndController::class,'contactMessage'])->name('website.contactMessage');
    Route::post('/contactMessageStore',[FrontEndController::class,'contactMessageStore'])->name('website.contactMessageStore');
 