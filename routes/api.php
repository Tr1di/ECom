<?php

use App\Http\Controllers\ProductController;

Route::prefix('products')->group(function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('{product}', [ProductController::class, 'get']);
});
