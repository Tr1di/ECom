<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('games', GameController::class);
Route::resource('products', ProductController::class);
