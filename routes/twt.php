<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'twt'], function () {
    Route::get('/login', [App\Http\Controllers\TWT\TWTController::class, 'twtLogin']);
    Route::post('/login', [App\Http\Controllers\TWT\TWTController::class, 'submitLogin']);

    Route::group(['middleware' => 'twt'], function () {
        Route::get('/dashboard', [App\Http\Controllers\TWT\TWTController::class, 'twtDashboard']);
        Route::get('/logout', [App\Http\Controllers\TWT\TWTController::class, 'adminLogout']);
        Route::group(['prefix' => 'about'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\AboutController::class, 'aboutCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\AboutController::class, 'aboutManage']);
        });
        Route::group(['prefix' => 'privacy/policy'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyManage']);
        });
        Route::group(['prefix' => 'terms/of/use'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsManage']);
        });
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\BlogController::class, 'BlogCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\BlogController::class, 'BlogManage']);
        });
        Route::group(['prefix' => 'membership'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\MembershipController::class, 'MembershipCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\MembershipController::class, 'MembershipManage']);
        });
        Route::group(['prefix' => 'courses'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\CoursesController::class, 'CoursesCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\CoursesController::class, 'CoursesManage']);
        });
    });
});
