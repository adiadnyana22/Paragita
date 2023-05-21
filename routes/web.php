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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/achievement', function () {
    return view('pages.achievement');
});

Route::get('/coach', function () {
    return view('pages.coach');
});

Route::get('/news', function () {
    return view('pages.news-list');
});

Route::get('/news/{id}', function () {
    return view('pages.news-detail');
});
