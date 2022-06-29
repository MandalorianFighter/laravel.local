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

Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'Page number ' . $page;
});

Route::get('/users/city/{city?}', function ($city = 'London') {
    return 'Something about ' . $city;
});
