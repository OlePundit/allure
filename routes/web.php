<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\HomeController::class, 'book'])->name('book');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blogs',[App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/services',[App\Http\Controllers\HomeController::class, 'services'])->name('services');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
