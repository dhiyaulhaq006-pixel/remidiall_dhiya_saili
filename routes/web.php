<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/about', [AboutController::class, 'index'])->name('about');
