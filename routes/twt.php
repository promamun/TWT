<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'twt'], function () {
    Route::get('/login', [App\Http\Controllers\TWT\TWTController::class, 'twtLogin']);
    Route::post('/login', [App\Http\Controllers\TWT\TWTController::class, 'submitLogin']);

    Route::group(['middleware' => 'twt'], function () {
        Route::get('/dashboard', [App\Http\Controllers\TWT\TWTController::class, 'twtDashboard']);
        Route::get('/logout', [App\Http\Controllers\TWT\TWTController::class, 'adminLogout']);
    });
});
