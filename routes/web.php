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

Route::get('/coach', [\App\Http\Controllers\CoachController::class, 'coach'])->name('coach');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'newsList'])->name('newsList');

Route::get('/news/{id}', function () {
    return view('pages.news-detail');
});

Route::get('/admin', function () {
    return view('admin-pages.dashboard');
});
