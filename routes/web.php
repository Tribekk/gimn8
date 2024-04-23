<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function (){
    return view('pages.about');
})->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class , 'index'])->name('contact');
Route::get('/informations' , [\App\Http\Controllers\InfrmationController::class, 'index'])->name('informations');
Route::get('/information/{id}' , [\App\Http\Controllers\InfrmationController::class, 'show']);
Route::get('/news' , [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/new/{id}' , [\App\Http\Controllers\NewsController::class, 'show']);
