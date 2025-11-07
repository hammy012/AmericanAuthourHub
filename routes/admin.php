<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // BUSINESS SETTING
    Route::get('business-setting', [HomeController::class, 'business_setting'])->name('business-setting');
    Route::post('business-setting-store', [HomeController::class, 'business_setting_store'])->name('business-setting-store');


    // PROFILE
    Route::get('profile-view', [HomeController::class, 'profile_view'])->name('profile-view');
    Route::post('profile-update/{id}', [HomeController::class, 'profile_update'])->name('profile-update');

});
