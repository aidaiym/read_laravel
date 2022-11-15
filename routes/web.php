<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { // get type of request. Arguments of get: 1. url 2. some action(function)
    return  view('home.home');
});
Route::get('/about', function () { // get type of request. Arguments of get: 1. url 2. some action(function)
    return  view('about.about');
});
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book.index'); 
Route::get('/book/create', [App\Http\Controllers\BookController::class, 'create']);  // action is index function in post controller
Route::post('/book/store', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');  
Route::get('/generate_pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);