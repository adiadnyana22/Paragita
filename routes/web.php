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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/achievement', [\App\Http\Controllers\AchievementController::class, 'achievements'])->name('achievement');

Route::get('/coach', [\App\Http\Controllers\CoachController::class, 'coach'])->name('coach');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'newsList'])->name('newsList');

Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'newsDetail'])->name('newsDetail');

Route::get('/admin', function () {
    return view('admin-pages.dashboard');
});
