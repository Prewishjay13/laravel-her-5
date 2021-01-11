<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
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
Route::get('/home', [BaseController::class, 'home'])->name('home');
Route::get('/about', [BaseController::class, 'about'])->name('about');
Route::get('/create_post', [BaseController::class, 'create_post'])->name('create_post');
//Route::get('/articles', [BaseController::class, 'articles'])->name('articles');