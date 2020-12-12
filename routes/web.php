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
Route::get('home', [BasicControllers::class, 'home'])->name('home');
Route::get('/about', [BasicControllers::class, 'about'])->name('about');
Route::get('articles', [BasicControllers::class, 'articles'])->name('articles');