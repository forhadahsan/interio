<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [Homecontroller::class, 'index'])->name('frontend.home');
Route::get('/about', [Homecontroller::class, 'about'])->name('frontend.about');
Route::get('/services', [Homecontroller::class, 'service'])->name('frontend.services');
Route::get('/contacts', [Homecontroller::class, 'contact'])->name('frontend.contacts');

Route::get('/team', [Homecontroller::class, 'team'])->name('frontend.teams');
Route::get('/testimonial', [Homecontroller::class, 'testimonial'])->name('frontend.testimonials');
Route::get('/portfolio', [Homecontroller::class, 'portfolio'])->name('frontend.portfolios');
Route::get('/faqs', [Homecontroller::class, 'faq'])->name('frontend.faqs');
Route::get('/coming-soon', [Homecontroller::class, 'comingSoon'])->name('frontend.comingsoon');
Route::get('/blogs', [Homecontroller::class, 'blog'])->name('frontend.blogs');
Route::get('/blog-single', [Homecontroller::class, 'blog1'])->name('frontend.blogs1');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
