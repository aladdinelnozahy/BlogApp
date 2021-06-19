<?php

use App\Http\Controllers\PagesContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsContoller;

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

Route::get('/', [PagesContoller::class, 'index']);

// Auth::routes();

Route::resource('/blog', PostsContoller::class);
