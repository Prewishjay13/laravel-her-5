<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
//Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [BaseController::class, 'home'])->name('home');
Route::get('/about', [BaseController::class, 'about'])->name('about');
Route::get('/posts', [PostController::class, 'index'])->name('view_post');
Route::get('/create_post_page', [BaseController::class, 'create_post'])->name('create_post_page');
Route::get('/create_post', [PostController::class, 'create'])->name('create_post'); //->middelware('auth');
Route::post('/store_post', [PostController::class, 'store'])->name('store_post');
Route::get('/post/{id}', [PostController::class, 'show'])->name('show_post');



