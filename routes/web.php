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

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'gallery'])->name('gallery');

Route::get('/admin/dashboard', [\App\Http\Controllers\AdminDashbordController::class, 'dashboard'])->name('adminDashboard');

Route::get('/admin/home-about', [\App\Http\Controllers\AdminHomeController::class, 'aboutPage'])->name('adminHomeAbout');

Route::post('/api/home-about', [\App\Http\Controllers\AdminHomeController::class, 'aboutMethod'])->name('adminHomeAboutMethod');

Route::get('/admin/home-achievement', [\App\Http\Controllers\AdminHomeController::class, 'achievementPage'])->name('adminHomeAchievement');

Route::post('/api/home-achievement', [\App\Http\Controllers\AdminHomeController::class, 'achievementMethod'])->name('adminHomeAchievementMethod');

Route::get('/admin/about-about', [\App\Http\Controllers\AdminAboutController::class, 'aboutPage'])->name('adminAboutAbout');

Route::post('/api/about-about', [\App\Http\Controllers\AdminAboutController::class, 'aboutMethod'])->name('adminAboutAboutMethod');

Route::get('/admin/about-coach', [\App\Http\Controllers\AdminAboutController::class, 'coachListPage'])->name('adminAboutCoach');
