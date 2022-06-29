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

Route::get('/post/{catid}/{postid}', function ($catid, $postid) {
    return $catid . ' - ' . $postid;
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return $surname . ' - ' . $name;
});
