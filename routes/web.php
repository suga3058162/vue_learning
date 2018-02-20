<?php

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

Route::get('/hellovue', function () {
    return view('hellovue');
});

Route::get('/counter', function () {
    return view('counter');
});

Route::get('/template', function () {
    return ('template');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/test4', function () {
    return view('test4');
});

Route::get('/test5', function () {
    return view('test5');
});

Route::get('/test6', function () {
    return view('test6');
});

Route::get('/test7', function () {
    return view('test7');
});