<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[\App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('post',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');
Route::get('about',[\App\Http\Controllers\PostController::class,'about'])->name('posts.about');
Route::get('contact',[\App\Http\Controllers\PostController::class,'contact'])->name('posts.contact');
