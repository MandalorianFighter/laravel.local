<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\CategoryController;


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
    return 'main web-site page';
});

Route::get('/post/{id}', [PostController::class, 'show']);

//Route::get('/user/{name}', [UserController::class, 'userCity']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/user/all', [UserController::class, 'all']);

Route::get('/auth-users/{id}', [AuthUserController::class, 'show']);

Route::get('/thumbnails/{id}', [ThumbnailController::class, 'show']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);
