<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FaqController;
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

    // Services CRUD
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // FAQ routes (names chosen to match your previous blade usage)
    Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
    Route::get('faqs/add', [FaqController::class, 'create'])->name('add-new-faq');         
    Route::post('faqs', [FaqController::class, 'store'])->name('faq-store');
    Route::get('faqs/{id}/edit', [FaqController::class, 'edit'])->name('faq-edit');       
    Route::post('faqs/{id}/update', [FaqController::class, 'update'])->name('faq-update');
    Route::delete('faqs/{id}', [FaqController::class, 'destroy'])->name('faq-delete');   

    // Blogs CRUD
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');



    // BUSINESS SETTING
    Route::get('business-setting', [HomeController::class, 'business_setting'])->name('business-setting');
    Route::post('business-setting-store', [HomeController::class, 'business_setting_store'])->name('business-setting-store');


    // PROFILE
    Route::get('profile-view', [HomeController::class, 'profile_view'])->name('profile-view');
    Route::post('profile-update/{id}', [HomeController::class, 'profile_update'])->name('profile-update');
    
    Route::get('contact-list', [HomeController::class, 'contact_list'])->name('contact-list');
    Route::get('contact-view/{id}', [HomeController::class, 'contact_view'])->name('contact-view');
    
    // optional: delete contact
    Route::delete('contact-delete/{id}', [HomeController::class, 'contact_delete'])->name('contact-delete');

});
