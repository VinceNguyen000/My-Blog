<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [PostController::class, 'index'])->name('home');
//Posts
Route::get('posts/{post:slug}', [PostController::class, 'show']);
//Comment
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
//Register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest'); //kernel.php routeMiddleWare
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
//Sessions
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

