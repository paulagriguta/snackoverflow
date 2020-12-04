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

Route::get('posts', 'App\Http\Controllers\PostsController@showAll');
Route::get('posts/{post}', 'App\Http\Controllers\PostsController@show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/new-post', 'App\Http\Controllers\PostsController@show_categories')->name('new-post');
Route::middleware(['auth:sanctum', 'verified'])->post('/new-post', 'App\Http\Controllers\PostsController@create')->name('create-post');