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

Route::get('/post/{slug}/{id}', function ($slug, $id) {
    return 'Post id is ' . $id . ', and Post slug is ' . $slug;
})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'User id is ' . $id . ', and User name is ' . $name;
})->where('id', '[0-9]+')->where('name', '[a-z_-]{3,}');


Route::get('/posts/{date}', function ($date) {
    return 'Post date is ' . $date;
})->where('date', '[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}');

Route::get('/user/{order}', function ($order) {
    return 'User order is ' . $order;
})->whereIn('order',['name', 'surname', 'age']);
