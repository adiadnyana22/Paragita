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
Route::get('/merchandise', [\App\Http\Controllers\MerchandiseController::class, 'merchandise'])->name('merchandise');
Route::get('/api/merchandise', [\App\Http\Controllers\MerchandiseController::class, 'merchandiseAPI'])->name('merchandiseAPI');

Route::middleware(['isUser'])->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginPage'])->name('loginPage');
    Route::post('/api/login', [\App\Http\Controllers\AuthController::class, 'loginMethod'])->name('loginMethod');
});

Route::middleware(['isAdmin'])->group(function () {
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

    Route::get('/admin/event', [\App\Http\Controllers\AdminEventController::class, 'eventListPage'])->name('adminEvent');
    Route::get('/admin/event/detail/{event}', [\App\Http\Controllers\AdminEventController::class, 'eventDetailPage'])->name('adminEventDetail');
    Route::get('/admin/event/add', [\App\Http\Controllers\AdminEventController::class, 'eventAddPage'])->name('adminEventAdd');
    Route::post('/api/event/add', [\App\Http\Controllers\AdminEventController::class, 'eventAddMethod'])->name('adminEventAddMethod');
    Route::get('/admin/event/edit/{event}', [\App\Http\Controllers\AdminEventController::class, 'eventEditPage'])->name('adminEventEdit');
    Route::put('/api/event/edit/{event}', [\App\Http\Controllers\AdminEventController::class, 'eventEditMethod'])->name('adminEventEditMethod');
    Route::delete('/api/event/delete/{event}', [\App\Http\Controllers\AdminEventController::class, 'eventDeleteMethod'])->name('adminEventDeleteMethod');

    Route::get('/admin/merch-infor', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchInfoPage'])->name('adminMerchInfo');
    Route::post('/api/merch-info', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchInfoMethod'])->name('adminMerchInfoMethod');
    Route::get('/admin/merch-label', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelListPage'])->name('adminMerchLabel');
    Route::get('/admin/merch-label/add', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelAddPage'])->name('adminMerchLabelAdd');
    Route::post('/api/merch-label/add', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelAddMethod'])->name('adminMerchLabelAddMethod');
    Route::get('/admin/merch-label/edit/{label}', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelEditPage'])->name('adminMerchLabelEdit');
    Route::put('/api/merch-label/edit/{label}', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelEditMethod'])->name('adminMerchLabelEditMethod');
    Route::delete('/api/merch-label/delete/{label}', [\App\Http\Controllers\AdminMerchandiseController::class, 'labelDeleteMethod'])->name('adminMerchLabelDeleteMethod');
    Route::get('/admin/merch-product', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseListPage'])->name('adminMerchProduct');
    Route::get('/admin/merch-product/detail/{merchandise}', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseDetailPage'])->name('adminMerchProductDetail');
    Route::get('/admin/merch-product/add', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseAddPage'])->name('adminMerchProductAdd');
    Route::post('/api/merch-product/add', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseAddMethod'])->name('adminMerchProductAddMethod');
    Route::get('/admin/merch-product/edit/{merchandise}', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseEditPage'])->name('adminMerchProductEdit');
    Route::put('/api/merch-product/edit/{merchandise}', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseEditMethod'])->name('adminMerchProductEditMethod');
    Route::delete('/api/merch-product/delete/{merchandise}', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseDeleteMethod'])->name('adminMerchProductDeleteMethod');
    Route::post('/api/merch-product/toggle', [\App\Http\Controllers\AdminMerchandiseController::class, 'merchandiseToggleAPI'])->name('merchToggleAPI');

    Route::post('/api/logout', [\App\Http\Controllers\AuthController::class, 'logoutMethod'])->name('logoutMethod');
});
