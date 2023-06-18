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

Route::get('/admin/home-banner', [\App\Http\Controllers\AdminHomeController::class, 'bannerListPage'])->name('adminHomeCarousel');

Route::get('/admin/home-banner/add', [\App\Http\Controllers\AdminHomeController::class, 'bannerAddPage'])->name('adminHomeCarouselAdd');

Route::post('/api/home-banner/add', [\App\Http\Controllers\AdminHomeController::class, 'bannerAddMethod'])->name('adminHomeCarouselAddMethod');

Route::get('/admin/home-banner/detail/{carousel}', [\App\Http\Controllers\AdminHomeController::class, 'bannerDetailPage'])->name('adminHomeCarouselDetail');

Route::delete('/api/home-banner/delete/{carousel}', [\App\Http\Controllers\AdminHomeController::class, 'bannerDeleteMethod'])->name('adminHomeCarouselDeleteMethod');

Route::get('/admin/about-about', [\App\Http\Controllers\AdminAboutController::class, 'aboutPage'])->name('adminAboutAbout');

Route::post('/api/about-about', [\App\Http\Controllers\AdminAboutController::class, 'aboutMethod'])->name('adminAboutAboutMethod');

Route::get('/admin/about-coach', [\App\Http\Controllers\AdminAboutController::class, 'coachListPage'])->name('adminAboutCoach');

Route::get('/admin/about-coach/detail/{coach}', [\App\Http\Controllers\AdminAboutController::class, 'coachDetailPage'])->name('adminAboutCoachDetail');

Route::get('/admin/about-coach/add', [\App\Http\Controllers\AdminAboutController::class, 'coachAddPage'])->name('adminAboutCoachAdd');

Route::post('/api/about-coach/add', [\App\Http\Controllers\AdminAboutController::class, 'coachAddMethod'])->name('adminAboutCoachAddMethod');

Route::get('/admin/about-coach/edit/{coach}', [\App\Http\Controllers\AdminAboutController::class, 'coachEditPage'])->name('adminAboutCoachEdit');

Route::put('/api/about-coach/edit/{coach}', [\App\Http\Controllers\AdminAboutController::class, 'coachEditMethod'])->name('adminAboutCoachEditMethod');

Route::delete('/api/about-coach/delete/{coach}', [\App\Http\Controllers\AdminAboutController::class, 'coachDeleteMethod'])->name('adminAboutCoachDeleteMethod');

Route::get('/admin/achievement-year', [\App\Http\Controllers\AdminAchievementController::class, 'yearListPage'])->name('adminAchievementYear');

Route::get('/admin/achievement-year/add', [\App\Http\Controllers\AdminAchievementController::class, 'yearAddPage'])->name('adminAchievementYearAdd');

Route::post('/api/achievement-year/add', [\App\Http\Controllers\AdminAchievementController::class, 'yearAddMethod'])->name('adminAchievementYearAddMethod');

Route::get('/admin/achievement-year/edit/{year}', [\App\Http\Controllers\AdminAchievementController::class, 'yearEditPage'])->name('adminAchievementYearEdit');

Route::put('/api/achievement-year/edit/{year}', [\App\Http\Controllers\AdminAchievementController::class, 'yearEditMethod'])->name('adminAchievementYearEditMethod');

Route::delete('/api/achievement-year/delete/{year}', [\App\Http\Controllers\AdminAchievementController::class, 'yearDeleteMethod'])->name('adminAchievementYearDeleteMethod');

Route::get('/admin/achievement-achievement', [\App\Http\Controllers\AdminAchievementController::class, 'achievementListPage'])->name('adminAchievementAchievement');

Route::get('/admin/achievement-achievement/detail/{achievement}', [\App\Http\Controllers\AdminAchievementController::class, 'achievementDetailPage'])->name('adminAchievementAchievementDetail');

Route::get('/admin/achievement-achievement/add', [\App\Http\Controllers\AdminAchievementController::class, 'achievementAddPage'])->name('adminAchievementAchievementAdd');

Route::post('/api/achievement-achievement/add', [\App\Http\Controllers\AdminAchievementController::class, 'achievementAddMethod'])->name('adminAchievementAchievementAddMethod');

Route::get('/admin/achievement-achievement/edit/{achievement}', [\App\Http\Controllers\AdminAchievementController::class, 'achievementEditPage'])->name('adminAchievementAchievementEdit');

Route::put('/api/achievement-achievement/edit/{achievement}', [\App\Http\Controllers\AdminAchievementController::class, 'achievementEditMethod'])->name('adminAchievementAchievementEditMethod');

Route::delete('/api/achievement-achievement/delete/{achievement}', [\App\Http\Controllers\AdminAchievementController::class, 'achievementDeleteMethod'])->name('adminAchievementAchievementDeleteMethod');

Route::get('/admin/gallery', [\App\Http\Controllers\AdminGalleryController::class, 'galleryListPage'])->name('adminGallery');

Route::get('/admin/gallery/add', [\App\Http\Controllers\AdminGalleryController::class, 'galleryAddPage'])->name('adminGalleryAdd');

Route::post('/api/gallery/add', [\App\Http\Controllers\AdminGalleryController::class, 'galleryAddMethod'])->name('adminGalleryAddMethod');

Route::get('/admin/gallery/detail/{gallery}', [\App\Http\Controllers\AdminGalleryController::class, 'galleryDetailPage'])->name('adminGalleryDetail');

Route::delete('/api/gallery/delete/{gallery}', [\App\Http\Controllers\AdminGalleryController::class, 'galleryDeleteMethod'])->name('adminGalleryDeleteMethod');

Route::get('/admin/news', [\App\Http\Controllers\AdminNewsController::class, 'newsListPage'])->name('adminNews');

Route::get('/admin/news/detail/{news}', [\App\Http\Controllers\AdminNewsController::class, 'newsDetailPage'])->name('adminNewsDetail');

Route::get('/admin/news/add', [\App\Http\Controllers\AdminNewsController::class, 'newsAddPage'])->name('adminNewsAdd');

Route::post('/api/news/add', [\App\Http\Controllers\AdminNewsController::class, 'newsAddMethod'])->name('adminNewsAddMethod');

Route::get('/admin/news/edit/{news}', [\App\Http\Controllers\AdminNewsController::class, 'newsEditPage'])->name('adminNewsEdit');

Route::put('/api/news/edit/{news}', [\App\Http\Controllers\AdminNewsController::class, 'newsEditMethod'])->name('adminNewsEditMethod');

Route::delete('/api/news/delete/{news}', [\App\Http\Controllers\AdminNewsController::class, 'newsDeleteMethod'])->name('adminNewsDeleteMethod');
