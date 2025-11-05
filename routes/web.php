<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('about-us', [WebController::class, 'about_us'])->name('about-us');
Route::get('book-promotions', [WebController::class, 'book_promotions'])->name('book-promotions');
Route::get('blogs', [WebController::class, 'blogs'])->name('blogs');
Route::get('faqs', [WebController::class, 'faqs'])->name('faqs');
Route::get('contact-us', [WebController::class, 'contact_us'])->name('contact-us');
Route::get('book-video-trailer', [WebController::class, 'book_video_trailer'])->name('book-video-trailer');
Route::get('terms-conditions', [WebController::class, 'term_condition'])->name('terms-conditions');
Route::get('privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy-policy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
