<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    BlogController,
    PageController,
    ContactController
};

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'home']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



Route::get('/{slug}', [PageController::class, 'show']);
