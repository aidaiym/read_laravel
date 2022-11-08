<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { // get type of request. Arguments of get: 1. url 2. some action(function)
    return 'view';
});

Route::get('/home', function () {
    return 'Home';
});

Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);  // action is index function in post controller
