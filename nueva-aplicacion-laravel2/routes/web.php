<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AnimalController;

use Illuminate\Support\Facades\Route;

$posts = [
    ['title' => 'First post'],
    ['title' => 'Second post'],
    ['title' => 'Thrid post'],
    ['title' => 'FOurth post'],

];

Route::get('/', function () {
    return view('home');

})->name('home');
// Route::get('blog', funciton(){
//     $posts = [
//         ['title' => 'First post'],
//         ['title' => 'Second post'],
//         ['title' => 'Thrid post'],
//         ['title' => 'FOurth post'],
    
//     ];
//     return view('blog', ['posts' => $posts]);
// }
// )->name('blog');

//Route::view('/blog', 'blog')->name('blog');
Route::get('blog', [PostController::class, 'index'])->name('blog.index');
Route::get('blog/create', [PostController::class,'create'])->name('blog.create');
Route::get('blog/{post}/edit', [PostController::class,'edit'])->name('blog.edit');
Route::patch('blog/{post}', [PostController::class,'update'])->name('blog.update');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::get('animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('animals/create', [AnimalController::class,'create'])->name('animals.create');
Route::get('animals/{animal}/edit', [AnimalController::class,'edit'])->name('animals.edit');
Route::put('animals/{animal}', [AnimalController::class,'update'])->name('animals.update');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::post('blog', [@PostController::class, 'store'])->name('blog.store');
Route::post('animals', [@AnimalController::class, 'store'])->name('animals.store');


