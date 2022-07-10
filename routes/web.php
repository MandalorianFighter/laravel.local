<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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
