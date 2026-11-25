<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
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
Route::get('/blogs', [WebController::class, 'blogss'])->name('blogs');
Route::get('/our-blogs', [WebController::class, 'blogss'])->name('blogss');
Route::get('blog/{slug}', [WebController::class, 'blog'])->name('blog');
Route::get('faqs', [WebController::class, 'faqs'])->name('faqs');

Route::get('contact-us', [WebController::class, 'contact_us'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact/quick', [ContactController::class, 'quickStore'])->name('contact.quick');

Route::get('our-work', [WebController::class, 'book_video_trailer'])->name('our-work');
Route::get('book-video-trailer', [WebController::class, 'book_video_trailer'])->name('book-video-trailer');
Route::get('terms-conditions', [WebController::class, 'term_condition'])->name('terms-conditions');
Route::get('terms-of-service', fn () => redirect()->route('terms-conditions', [], 301));
Route::get('chat', function (\Illuminate\Http\Request $request) {
    $target = route('contact-us');
    $qs = $request->getQueryString();
    return redirect()->to($qs ? $target . '?' . $qs : $target, 301);
})->name('chat.redirect');
Route::get('privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('sitemap.xml', [WebController::class, 'sitemap'])->name('sitemap');

// Stripe Payment Routes
Route::get('payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment/{slug}', [PaymentController::class, 'checkout'])->name('payment.checkout');
Route::post('payment/process', [PaymentController::class, 'process'])->name('payment.process');


