<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('games', GameController::class);
Route::resource('products', ProductController::class);

Route::get('games', [GameController::class, 'index'])->name('games.index');
Route::post('games', [GameController::class, 'store'])->name('games.store');
Route::get('games/create', [GameController::class, 'create'])->name('games.create');
Route::get('games/{game}', [GameController::class, 'show'])->name('games.show');
Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
Route::put('games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');