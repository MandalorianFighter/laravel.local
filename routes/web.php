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
    return 'main web-site page';
});

Route::get('/post/{id}', function ($id) {
    return 'Post id is ' . $id;
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return 'User id is ' . $id;
})->where('id', '[0-9]+');
