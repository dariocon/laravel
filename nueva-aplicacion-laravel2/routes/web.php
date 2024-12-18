<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

})->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
