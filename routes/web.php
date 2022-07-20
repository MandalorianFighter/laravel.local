<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/posts/set', [PostController::class, 'set']);

Route::get('/posts/get', [PostController::class, 'get']);

Route::resource('posts', PostController::class);

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/auth-users/{id}', [AuthUserController::class, 'show']);

Route::get('/thumbnails/{id}', [ThumbnailController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::match(['get', 'post'], '/form', [PostController::class, 'form']);
