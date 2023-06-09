<?php

use Illuminate\Support\Facades\Route;

//Config cache clear
Route::get('clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('key:generate');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('optimize');
    dd("All clear!");
});

Route::get('/', function () {
    return view('frontend.home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-janine', [App\Http\Controllers\Frontend\FrontendController::class, 'aboutJanine']);
Route::get('/blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'blog']);
Route::get('/blog-details', [App\Http\Controllers\Frontend\FrontendController::class, 'blogDetails']);
Route::get('/memberships', [App\Http\Controllers\Frontend\FrontendController::class, 'memberships']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacyPolicy']);
Route::get('/terms-of-condition', [App\Http\Controllers\Frontend\FrontendController::class, 'termsOfCondition']);
Route::get('/courses', [App\Http\Controllers\Frontend\FrontendController::class, 'allCourses']);
Route::get('/course-details/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'courseDetails']);
///user mange route
Route::get('/dashboard', [App\Http\Controllers\Frontend\FrontendController::class, 'userDashboard']);
Route::get('/profile', [App\Http\Controllers\Frontend\FrontendController::class, 'userProfile']);
Route::get('/enrolled-courses', [App\Http\Controllers\Frontend\FrontendController::class, 'enrolledCourses']);
Route::get('/wishlist', [App\Http\Controllers\Frontend\FrontendController::class, 'wishlist']);
Route::get('/reviews', [App\Http\Controllers\Frontend\FrontendController::class, 'reviews']);
Route::get('/order-history', [App\Http\Controllers\Frontend\FrontendController::class, 'orderHistory']);
Route::get('/settings', [App\Http\Controllers\Frontend\FrontendController::class, 'settings']);
