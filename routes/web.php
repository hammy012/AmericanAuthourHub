<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
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
Route::get('service/{slug}', [WebController::class, 'service'])->name('service');
Route::get('/blogs', [WebController::class, 'blogs'])->name('blogs');
Route::get('/our-blogs', [WebController::class, 'blogss'])->name('blogss');
Route::get('blog/{slug}', [WebController::class, 'blog'])->name('blog');
Route::get('faqs', [WebController::class, 'faqs'])->name('faqs');

Route::get('contact-us', [WebController::class, 'contact_us'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact/quick', [ContactController::class, 'quickStore'])->name('contact.quick');

Route::get('book-video-trailer', [WebController::class, 'book_video_trailer'])->name('book-video-trailer');
Route::get('terms-conditions', [WebController::class, 'term_condition'])->name('terms-conditions');
Route::get('privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy-policy');
