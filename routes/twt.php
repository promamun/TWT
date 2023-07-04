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
            Route::get('/edit/{id}', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyEdit']);
            Route::post('/store', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyStore']);
            Route::post('/update/{id}', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyUpdate']);
            Route::get('/manage', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyManage']);
            Route::get('/delete/{id}', [App\Http\Controllers\TWT\PrivacyPolicyController::class, 'PrivacyPolicyDestroy']);
        });
        Route::group(['prefix' => 'terms/of/use'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsCreate']);
            Route::get('/edit/{id}', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsEdit']);
            Route::post('/store', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsStore']);
            Route::post('/update/{id}', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsUpdate']);
            Route::get('/delete/{id}', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsDestroy']);
            Route::get('/manage', [App\Http\Controllers\TWT\JanineTermsController::class, 'termsManage']);
        });
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\BlogController::class, 'BlogCreate']);
            Route::get('/edit/{id}', [App\Http\Controllers\TWT\BlogController::class, 'BlogEdit']);
            Route::post('/store', [App\Http\Controllers\TWT\BlogController::class, 'BlogStore']);
            Route::post('/update/{id}', [App\Http\Controllers\TWT\BlogController::class, 'BlogUpdate']);
            Route::get('/manage', [App\Http\Controllers\TWT\BlogController::class, 'BlogManage']);
        });
        Route::group(['prefix' => 'membership'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\MembershipController::class, 'MembershipCreate']);
            Route::get('/manage', [App\Http\Controllers\TWT\MembershipController::class, 'MembershipManage']);
        });
        Route::group(['prefix' => 'course'], function () {
            Route::get('/create', [App\Http\Controllers\TWT\CoursesController::class, 'CourseCreate']);
            Route::get('/edit/{id}', [App\Http\Controllers\TWT\CoursesController::class, 'CourseEdit']);
            Route::post('/update/{id}', [App\Http\Controllers\TWT\CoursesController::class, 'CourseUpdate']);
            Route::get('/manage', [App\Http\Controllers\TWT\CoursesController::class, 'CourseManage']);
            Route::post('/store', [App\Http\Controllers\TWT\CoursesController::class, 'CourseStore']);
            Route::get('/delete/{id}', [App\Http\Controllers\TWT\CoursesController::class, 'CourseDelete']);
        });
    });
});
